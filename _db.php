<?php
    $db = new PDO("sqlite:reservations.sqlite");
    
    // RETURN ALL ROOMS
    if($_POST["action"] == "all") {
        $stmt = $db->prepare("SELECT * FROM rooms");
        $stmt->execute();
        $roomsData = $stmt->fetchAll();
        
        class Room {}

        $result = array();

        foreach($roomsData as $room) {
          $r = new Room();
          $r->id = $room['id'];
          $r->name = $room['name'];
          $r->capacity = $room['capacity'];
          $r->status = $room['status'];
          $result[] = $r;

        }

        header('Content-Type: application/json');
        echo json_encode($result);
    }
        

      
?>