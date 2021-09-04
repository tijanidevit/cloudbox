<?php
    include_once 'db.class.php';

    class chats extends DB{

        function add_chat($user_id,$image_id){
            return DB::execute("INSERT INTO chats(user_id,image_id) VALUES(?,?)", [$user_id,$image_id]);
        }
        function fetch_user_chats($user_id){
            return DB::fetchAll("SELECT * FROM chats WHERE user_id = ? ORDER BY id ",[$user_id]);
        }

        function fetch_chat($id){
            return DB::fetch("SELECT * FROM chats WHERE id = ? ",[$id] );
        }
        
        function delete_chat($id){
            return DB::execute("DELETE FROM chats WHERE id = ? ",[$id] );
        }
        function update_chat($chat,$id){
            return DB::execute("UPDATE chats SET chat = ?  WHERE id = ? ", [$chat,$id]);
        }
        function chats_num(){
            return DB::num_row("SELECT id FROM chats ", []);
        }

        //Chat Requests
        function add_chat($sender_id,$receipient_id){
            return DB::execute("INSERT INTO chat_requests(sender_id,receipient_id) VALUES(?,?)", [$sender_id,$receipient_id]);
        }

        function fetch_user_chat_requests($receipient_id){
            return DB::fetchAll("SELECT * FROM chat_requests WHERE receipient_id = ? ORDER BY id ",[$receipient_id]);
        }

        function fetch_user_chat_request($sender_id,$receipient_id){
            return DB::num_row("SELECT * FROM chat_requests ", [$sender_id,$receipient_id]);
        }
    }
?>