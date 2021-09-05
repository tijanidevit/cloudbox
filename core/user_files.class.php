<?php
    include_once 'db.class.php';

    class User_files extends DB{

        function add_user_file($user_id,$file_id,$title){
            return DB::execute("INSERT INTO user_files(user_id,file_id,title) VALUES(?,?,?)", [$user_id,$file_id,$title]);
        }
        function fetch_user_files($user_id){
            return DB::fetchAll("SELECT * FROM user_files WHERE user_id = ? ORDER BY id ",[$user_id]);
        }


        function fetch_last_user_file($user_id){
            return DB::fetch("SELECT * FROM user_files WHERE user_id = ? ORDER BY id DESC LIMIT 1 ",[$user_id]);
        }

        function fetch_user_file($id){
            return DB::fetch("SELECT * FROM user_files WHERE id = ? ",[$id] );
        }

        
        function delete_user_file($id){
            return DB::execute("DELETE FROM user_files WHERE id = ? ",[$id] );
        }
        function update_user_file($user_file,$id){
            return DB::execute("UPDATE user_files SET user_file = ?  WHERE id = ? ", [$user_file,$id]);
        }
        function user_files_num(){
            return DB::num_row("SELECT id FROM user_files ", []);
        }
    }
?>