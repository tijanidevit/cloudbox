<?php
    include_once 'db.class.php';

    class user_folders extends DB{

        function register($user_id,$folder_name){
            return DB::execute("INSERT INTO user_folders(user_id,folder_name) VALUES(?,?)", [$user_id,$folder_name]);
        }
        
        function fetch_user_folders(){
            return DB::fetchAll("SELECT * FROM user_folders ORDER BY folder_name ASC",[]);
        }
        function fetch_user_folder($folder_name){
            return DB::fetch("SELECT * FROM user_folders WHERE folder_name = ? OR id = ?",[$folder_name,$folder_name] );
        }
        
        function update_user_folder($user_id,$folder_name,$id){
            return DB::execute("UPDATE user_folders SET user_id =?, folder_name =?, password =? WHERE id = ? ", [$user_id,$folder_name,$id]);
        }
        function update_password($password,$id){
            return DB::execute("UPDATE user_folders SET password =? WHERE id = ? ", [$password,$id]);
        }

        function user_folders_num(){
            return DB::num_row("SELECT id FROM user_folders ", []);
        }

        function check_folder_name_existence($folder_name){
            return DB::num_row("SELECT id FROM user_folders WHERE folder_name = ? ", [$folder_name]);
        }

        function login($folder_name){
            if (DB::num_row("SELECT id FROM user_folders WHERE folder_name = ? AND password = ? ", [$folder_name]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }

        ###### user_folder's folders
        function user_folder_files_num($user_folder_id){
            return DB::num_row("SELECT id FROM user_folder_files WHERE user_folder_id = ? ",[$user_folder_id]);
        }

        function fetch_user_folder_files($user_folder_id){
            return DB::fetchAll("SELECT *,folders.id FROM user_folder_files WHERE user_folder_id = ?
            ORDER BY id DESC ",[$user_folder_id]);
        }
    }
?>