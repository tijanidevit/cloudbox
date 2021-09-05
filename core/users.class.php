<?php
    include_once 'db.class.php';

    class users extends DB{

        function register($fullname,$email,$password){
            return DB::execute("INSERT INTO users(fullname,email,password) VALUES(?,?,?)", [$fullname,$email,$password]);
        }
        
        function fetch_users(){
            return DB::fetchAll("SELECT * FROM users ORDER BY email ASC",[]);
        }
        function fetch_user($email){
            return DB::fetch("SELECT * FROM users WHERE email = ? OR id = ?",[$email,$email] );
        }
        
        function update_user($fullname,$email,$password,$id){
            return DB::execute("UPDATE users SET fullname =?, email =?, password =? WHERE id = ? ", [$fullname,$email,$password,$id]);
        }
        function update_password($password,$id){
            return DB::execute("UPDATE users SET password =? WHERE id = ? ", [$password,$id]);
        }

        function users_num(){
            return DB::num_row("SELECT id FROM users ", []);
        }

        function check_email_existence($email){
            return DB::num_row("SELECT id FROM users WHERE email = ? ", [$email]);
        }

        function login($email,$password){
            if (DB::num_row("SELECT id FROM users WHERE email = ? AND password = ? ", [$email,$password]) > 0) {
                return true;
            }
            else{
                return false;
            }
        }

        ###### user's folders
        function user_folders_num($user_id){
            return DB::num_row("SELECT id FROM user_folders WHERE user_id = ? ",[$user_id]);
        }

        function fetch_user_folders($user_id){
            return DB::fetchAll("SELECT *,folders.id FROM user_folders WHERE user_id = ?
            ORDER BY id DESC ",[$user_id]);
        }

        function fetch_limited_user_folders($user_id,$limit){
            return DB::fetchAll("SELECT *,folders.id FROM user_folders WHERE user_id = ?
            ORDER BY id DESC LIMIT $limit ",[$user_id]);
        }


        function user_files_num($user_id){
            return DB::num_row("SELECT id FROM user_files WHERE user_id = ? ",[$user_id]);
        }

        function fetch_user_files($user_id){
            return DB::fetchAll("SELECT *,files.id FROM user_files WHERE user_id = ?
            ORDER BY id DESC ",[$user_id]);
        }

        function fetch_limited_user_files($user_id,$limit){
            return DB::fetchAll("SELECT *,files.id FROM user_files WHERE user_id = ?
            ORDER BY id DESC LIMIT $limit ",[$user_id]);
        }
    }
?>