<?php
    include_once 'db.class.php';

    class files extends DB{

        function add_file($file){
            return DB::execute("INSERT INTO files(file) VALUES(?)", [$file]);
        }
        function fetch_files(){
            return DB::fetchAll("SELECT * FROM files ORDER BY file ",[]);
        }
        function fetch_limited_files($limit){
            return DB::fetchAll("SELECT * FROM files ORDER BY file LIMIT $limit ",[]);
        }

        function fetch_last_file(){
            return DB::fetch("SELECT * FROM files ORDER BY ID DESC LIMIT 1 ",[]);
        }

        function fetch_file($id){
            return DB::fetch("SELECT * FROM files WHERE id = ? OR file = ? ",[$id,$id] );
        }
        function delete_file($id){
            return DB::execute("DELETE FROM files WHERE id = ? ",[$id] );
        }
        function update_file($file,$id){
            return DB::execute("UPDATE files SET file = ?  WHERE id = ? ", [$file,$id]);
        }
        function files_num(){
            return DB::num_row("SELECT id FROM files ", []);
        }
    }
?>