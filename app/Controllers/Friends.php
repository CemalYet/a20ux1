<?php


namespace App\Controllers;


use App\Models\Friends_model;

class Friends extends BaseController
{
    public function getFriends()
    {
        $session = session();
        $model = new Friends_model();

        $userId = $session->get('userId');
        $data = $model->get_friends($userId);

        echo json_encode($data);
    }

    public function search()
    {
        $session = session();

        $userId = $session->get('userId');

        // gets the search string from frontend
        $_POST = json_decode($_POST['data'], true);
        $search_string = $_POST['search_string'];

        $model = new Friends_model();
        $data = $model->search($userId, $search_string);

        echo json_encode($data);
    }

    public function addFriend()
    {
        $session = session();

        $userId_1 = $session->get('userId');

        // gets the userId of the person the user clicked to befriend in the frontend
        $_POST = json_decode($_POST['data'], true);
        $userId_2 = $_POST['userId_2'];

        $state = 'pending';
        // Possible states are:
        // pending: awaiting userId_2's' confirmation (this function is always triggered by userId_1)
        // friends: mutual friendship between both users

        $model = new Friends_model();
        $model->add_friend($userId_1, $userId_2, $state);

        return "Friend request sent.";
    }

    public function acceptFriendRequest()
    {
        $session = session();

        // userId who received the friend request (userId_2)
        $userId_2 = $session->get('userId');

        // gets the userId of the person who sent the friend request (userId_1)
        $_POST = json_decode($_POST['data'], true);
        $userId_1 = $_POST['userId_1'];

        $state = 'friends';
        // Possible states are:
        // pending: awaiting userId_2's' confirmation (this function is always triggered by userId_1)
        // friends: mutual friendship between both users

        $model = new Friends_model();
        $model->accept_friend_request($userId_1, $userId_2, $state);

        return "Friend request accepted.";
    }

    public function unfriend()
    {
        $session = session();

        // user who want to unfriend somebody
        $userA = $session->get('userId');

        // gets the userId of the person to be unfriended
        $_POST = json_decode($_POST['data'], true);
        $userB = $_POST['userId'];

        $model = new Friends_model();
        $model->unfriend($userA, $userB);

        return "Unfriending was successful.";
    }
}
