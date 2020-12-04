<?php


namespace App\Models;

use CodeIgniter\Model;

class Badge_model extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }


    public function get_challenges($userId)
    {
        $query_text = "SELECT a20ux1.BadgeUser.badgeIdFk FROM a20ux1.BadgeUser WHERE a20ux1.BadgeUser.completed = 0 AND a20ux1.BadgeUser.userIdFk = '{$userId}';";
        $query = $this->db->query($query_text);
        $challenges = $query->getResult();


        foreach ($challenges as $ch) {
            echo $ch->badgeIdFk . "<br>";

            if ($ch->badgeIdFk === '1' || $ch->badgeIdFk === '2') {
                $this->newcomer($userId, $ch->badgeIdFk);
            } elseif ($ch->badgeIdFk === '3' || $ch->badgeIdFk === '4' || $ch->badgeIdFk === '5' || $ch->badgeIdFk === '6') {
                $this->explorer($userId, $ch->badgeIdFk);
            } elseif ($ch->badgeIdFk === '7' || $ch->badgeIdFk === '8' || $ch->badgeIdFk === '9' || $ch->badgeIdFk === '10') {
                $this->explorer($userId, $ch->badgeIdFk);
            }
        }
        // Check if challenges are completed
        $query_text = "SELECT DISTINCT a20ux1.BadgeUser.badgeIdFk AS isCompleted FROM a20ux1.BadgeUser, a20ux1.BadgeBasicTable WHERE a20ux1.BadgeUser.completed = 0 AND a20ux1.BadgeUser.currentPoints >= a20ux1.BadgeBasicTable.reqPoints AND a20ux1.BadgeUser.userIdFk = '{$userId}';";
        $query = $this->db->query($query_text);
        $isCompleted = $query->getResult();

        // Update 'isCompleted' in the database
        foreach ($isCompleted as $comp) {
            $query_text = "UPDATE `a20ux1`.`BadgeUser` SET `completed` = 1 WHERE (`badgeIdFk` = '{$comp->isCompleted}') AND (`userIdFk` = '{$userId}');";
            $this->db->query($query_text);
        }
    }

    public function newcomer($userId, $badgeId)
    {
        $query_text_1 = "SELECT SQL_CALC_FOUND_ROWS count(*) FROM a20ux1.DiscoveryTable WHERE takenDate BETWEEN SUBDATE(NOW(),3) AND NOW() AND userIdFk = '{$userId}' GROUP BY DATE(takenDate);";
        $query_1 = $this->db->query($query_text_1);
        $count = count($query_1->getResult());

        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    public function explorer($userId, $badgeId)
    {
        $query_text_1 = "SELECT count(DISTINCT title) FROM a20ux1.DiscoveryTable WHERE userIdFk = '{$userId}';";
        $query_1 = $this->db->query($query_text_1);
        $count = $query_1->getResult();

        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    public function team_player($userId, $badgeId)
    {
        $query_text_1 = "SELECT count(*) AS Count FROM a20ux1.DiscoveryTable JOIN a20ux1.TaggedTable ON a20ux1.DiscoveryTable.discoveryId = a20ux1.TaggedTable.discoveryIdFk WHERE a20ux1.DiscoveryTable.userIdFk = '{$userId}' GROUP BY a20ux1.DiscoveryTable.discoveryId ORDER BY Count DESC LIMIT 1;";
        $query_1 = $this->db->query($query_text_1);
        $count = $query_1->getResult();

        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    public function tenacious($userId, $badgeId)
    {
        $query_text_1 = "SELECT count(*) FROM a20ux1.ReminderTable INNER JOIN a20ux1.DiscoveryTable ON a20ux1.ReminderTable.userIdFk = a20ux1.DiscoveryTable.userIdFk WHERE a20ux1.ReminderTable.day = (WEEKDAY(takenDate)+1) AND a20ux1.DiscoveryTable.userIdFk = '{$userId}';";
        $query_1 = $this->db->query($query_text_1);
        $count = $query_1->getResult();

        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$count}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    public function seniority($userId, $badgeId)
    {
        $query_text_1 = "SELECT timestampdiff(DAY, creationDate, now()) FROM a20ux1.UserTable WHERE userId = '{$userId}';";
        $query_1 = $this->db->query($query_text_1);
        $timestampdiff = $query_1->getResult();

        $query_text_2 = "UPDATE `a20ux1`.`BadgeUser` SET `currentPoints` = '{$timestampdiff}' WHERE (`badgeIdFk` = '{$badgeId}') AND (`userIdFk` = '{$userId}');";
        $this->db->query($query_text_2);
    }

    public function show_badges($userId)
    {
        $query_text = "SELECT a20ux1.BadgeBasicTable.title, a20ux1.BadgeBasicTable.description, a20ux1.BadgeUser.currentPoints, a20ux1.BadgeBasicTable.reqPoints FROM a20ux1.BadgeUser INNER JOIN a20ux1.BadgeBasicTable ON a20ux1.BadgeUser.badgeIdFk = a20ux1.BadgeBasicTable.badgeBasicId WHERE a20ux1.BadgeUser.completed = 1 AND a20ux1.BadgeUser.userIdFk = '{$userId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}