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

        ###### user's Assignment_submissions
        function user_assignments_num($user_id){
            return DB::num_row("SELECT id FROM assignment_submissions WHERE user_id = ? ",[$user_id]);
        }

        function fetch_user_assignment_submissions($user_id){
            return DB::fetchAll("SELECT *,assignment_submissions.id FROM assignment_submissions
            JOIN assignments on assignments.id = assignment_submissions.assignment_id
            JOIN courses on courses.id = assignments.course_id
            WHERE assignment_submissions.user_id = ?
            ORDER BY assignment_submissions.id DESC ",[$user_id]);
        }
    }
?>