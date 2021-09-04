<?php
    include_once 'db.class.php';

    class Patterns extends DB{

        function add_pattern($user_id,$image_id){
            return DB::execute("INSERT INTO login_patterns(user_id,image_id) VALUES(?,?)", [$user_id,$image_id]);
        }
        function fetch_user_patterns($user_id){
            return DB::fetchAll("SELECT * FROM login_patterns WHERE user_id = ? ORDER BY id ",[$user_id]);
        }

        function fetch_pattern($id){
            return DB::fetch("SELECT * FROM login_patterns WHERE id = ? ",[$id] );
        }
        
        function delete_pattern($id){
            return DB::execute("DELETE FROM login_patterns WHERE id = ? ",[$id] );
        }
        function update_pattern($pattern,$id){
            return DB::execute("UPDATE login_patterns SET pattern = ?  WHERE id = ? ", [$pattern,$id]);
        }
        function patterns_num(){
            return DB::num_row("SELECT id FROM login_patterns ", []);
        }
    }
?>