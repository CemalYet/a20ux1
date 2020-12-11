<?php


namespace App\Models;

use CodeIgniter\Model;

class Badge_model extends Model
{
    private $badge_id_newcomer = [1, 2];
    private $badge_id_explorer = [3, 4, 5, 6];
    private $badge_id_team_player = [11, 12, 13];
    private $badge_id_tenacious = [14, 15, 16];
    private $badge_id_seniority = [17, 18, 19];


    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function get_challenges($userId)
    {
        // Get all the challenges the user is participating in
        $query_text = "SELECT a20ux1.BadgeUser.badgeIdFk FROM a20ux1.BadgeUser WHERE a20ux1.BadgeUser.completed = 0 AND a20ux1.BadgeUser.userIdFk = '{$userId}';";
        $query = $this->db->query($query_text);
        $challenges = $query->getResult();


        foreach ($challenges as $ch) {
            // Print all the challenges the user is participating in
            echo $ch->badgeIdFk . "<br>";

            // Check which type of challenge it is
            if (in_array((int)$ch->badgeIdFk, $this->badge_id_newcomer)) {
                $this->newcomer($userId, $ch->badgeIdFk);
            } elseif (in_array((int)$ch->badgeIdFk, $this->badge_id_explorer)) {
                $this->explorer($userId, $ch->badgeIdFk);
            } elseif (in_array((int)$ch->badgeIdFk, $this->badge_id_team_player)) {
                $this->team_player($userId, $ch->badgeIdFk);
            } elseif (in_array((int)$ch->badgeIdFk, $this->badge_id_tenacious)) {
                $this->tenacious($userId, $ch->badgeIdFk);
            } elseif (in_array((int)$ch->badgeIdFk, $this->badge_id_seniority)) {
                $this->seniority($userId, $ch->badgeIdFk);
            }
        }

        // Check if challenges are completed
        $query_text = "SELECT DISTINCT a20ux1.BadgeUser.badgeIdFk AS isCompleted FROM a20ux1.BadgeUser INNER JOIN a20ux1.BadgeBasicTable ON a20ux1.BadgeUser.badgeIdFk = a20ux1.BadgeBasicTable.badgeBasicId WHERE a20ux1.BadgeUser.completed = 0 AND a20ux1.BadgeUser.currentPoints >= a20ux1.BadgeBasicTable.reqPoints AND a20ux1.BadgeUser.userIdFk = '{$userId}';";
        $query = $this->db->query($query_text);
        $isCompleted = $query->getResult();

        // Print the completed challenges
        print_r($isCompleted);
        echo "<br>";

        // Update 'isCompleted' in the database
        foreach ($isCompleted as $comp) {
            $query_text = "UPDATE `a20ux1`.`BadgeUser` SET `completed` = 1 WHERE (`badgeIdFk` = '{$comp->isCompleted}') AND (`userIdFk` = '{$userId}');";
            $this->db->query($query_text);

            // Enrol in the next challenge
            if (in_array((int)$comp->isCompleted, $this->badge_id_newcomer)) {
                $position = array_search((int)$comp->isCompleted, $this->badge_id_newcomer);
                $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_newcomer[$position+1]}', '{$userId}', '0', 0);";
                $this->db->query($query_text);
                $this->get_challenges($userId);
            } elseif (in_array((int)$comp->isCompleted, $this->badge_id_explorer)) {
                $position = array_search((int)$comp->isCompleted, $this->badge_id_explorer);
                $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_explorer[$position+1]}', '{$userId}', '0', 0);";
                $this->db->query($query_text);
                $this->get_challenges($userId);
            } elseif (in_array((int)$comp->isCompleted, $this->badge_id_team_player)) {
                $position = array_search((int)$comp->isCompleted, $this->badge_id_team_player);
                $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_team_player[$position+1]}', '{$userId}', '0', 0);";
                $this->db->query($query_text);
                $this->get_challenges($userId);
            } elseif (in_array((int)$comp->isCompleted, $this->badge_id_tenacious)) {
                $position = array_search((int)$comp->isCompleted, $this->badge_id_tenacious);
                $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_tenacious[$position+1]}', '{$userId}', '0', 0);";
                $this->db->query($query_text);
                $this->get_challenges($userId);
            } elseif (in_array((int)$comp->isCompleted, $this->badge_id_seniority)) {
                $position = array_search((int)$comp->isCompleted, $this->badge_id_seniority);
                $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_seniority[$position+1]}', '{$userId}', '0', 0);";
                $this->db->query($query_text);
                $this->get_challenges($userId);
            }
        }
    }

    // NEWCOMER CATEGORY
    public function newcomer($userId, $badgeId)
    {
        $query_text_1 = "SELECT SQL_CALC_FOUND_ROWS count(*) FROM a20ux1.DiscoveryTable WHERE takenDate BETWEEN SUBDATE(NOW(),3) AND NOW() AND userIdFk = '{$userId}' GROUP BY DATE(takenDate);";
        $query_1 = $this->db->query($query_text_1);
        $count = count($query_1->getResult());

        // Update 'currentPoints' in the database
        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    // EXPLORER CATEGORY
    public function explorer($userId, $badgeId)
    {
        $query_text_1 = "SELECT count(DISTINCT title) AS Count FROM a20ux1.DiscoveryTable WHERE userIdFk = '{$userId}';";
        $query_1 = $this->db->query($query_text_1);
        $count = $query_1->getResult();

        // Update 'currentPoints' in the database
        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count[0]->Count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    // TEAM PLAYER CATEGORY
    public function team_player($userId, $badgeId)
    {
        $query_text_1 = "SELECT count(*) AS Count FROM a20ux1.DiscoveryTable JOIN a20ux1.TaggedTable ON a20ux1.DiscoveryTable.discoveryId = a20ux1.TaggedTable.discoveryIdFk WHERE a20ux1.DiscoveryTable.userIdFk = '{$userId}' GROUP BY a20ux1.DiscoveryTable.discoveryId ORDER BY Count DESC LIMIT 1;";
        $query_1 = $this->db->query($query_text_1);
        $count = $query_1->getResult();

        // Update 'currentPoints' in the database
        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count[0]->Count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    // TENACIOUS CATEGORY
    public function tenacious($userId, $badgeId)
    {
        $query_text_1 = "SELECT count(*) AS Count FROM a20ux1.ReminderTable INNER JOIN a20ux1.DiscoveryTable ON a20ux1.ReminderTable.userIdFk = a20ux1.DiscoveryTable.userIdFk WHERE a20ux1.ReminderTable.day = (WEEKDAY(takenDate)+1) AND a20ux1.DiscoveryTable.userIdFk = '{$userId}';";
        $query_1 = $this->db->query($query_text_1);
        $count = $query_1->getResult();

        // Update 'currentPoints' in the database
        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count[0]->Count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    // SENIORITY CATEGORY
    public function seniority($userId, $badgeId)
    {
        $query_text_1 = "SELECT timestampdiff(MONTH , creationDate, now()) AS TimeDiff FROM a20ux1.UserTable WHERE userId = '{$userId}';";
        $query_1 = $this->db->query($query_text_1);
        $time_diff = $query_1->getResult();

        // Update 'currentPoints' in the database
        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$time_diff[0]->TimeDiff}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    // Return all the badges the user successfully achieved
    public function show_badges($userId)
    {
        $query_text = "SELECT a20ux1.BadgeBasicTable.title, a20ux1.BadgeBasicTable.description, a20ux1.BadgeUser.currentPoints, a20ux1.BadgeBasicTable.reqPoints FROM a20ux1.BadgeUser INNER JOIN a20ux1.BadgeBasicTable ON a20ux1.BadgeUser.badgeIdFk = a20ux1.BadgeBasicTable.badgeBasicId WHERE a20ux1.BadgeUser.completed = 1 AND a20ux1.BadgeUser.userIdFk = '{$userId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    // Return all the badges
    public function show_all_badges($userId)
    {
        $query_text = "SELECT a20ux1.BadgeBasicTable.badgeBasicId,a20ux1.BadgeBasicTable.title, a20ux1.BadgeBasicTable.description, a20ux1.BadgeUser.currentPoints, a20ux1.BadgeBasicTable.reqPoints, a20ux1.BadgeUser.completed FROM a20ux1.BadgeUser INNER JOIN a20ux1.BadgeBasicTable ON a20ux1.BadgeUser.badgeIdFk = a20ux1.BadgeBasicTable.badgeBasicId AND a20ux1.BadgeUser.userIdFk = '{$userId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    // Enroll user into challenges
    public function enroll($userId) {
        $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_newcomer[0]}', '{$userId}', '0', 0);";
        $this->db->query($query_text);
        $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_explorer[0]}', '{$userId}', '0', 0);";
        $this->db->query($query_text);
        $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_team_player[0]}', '{$userId}', '0', 0);";
        $this->db->query($query_text);
        $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_tenacious[0]}', '{$userId}', '0', 0);";
        $this->db->query($query_text);
        $query_text = "INSERT INTO `a20ux1`.`BadgeUser` (`badgeIdFk`, `userIdFk`, `currentPoints`, `completed`) VALUES ('{$this->badge_id_seniority[0]}', '{$userId}', '0', 0);";
        $this->db->query($query_text);
        echo "Enrolled userId: " . $userId . "<br>";
        return true;
    }
}