<?php
    include_once 'db.class.php';

    class images extends DB{

        function add_image($image){
            return DB::execute("INSERT INTO images(image) VALUES(?)", [$image]);
        }
        function fetch_images(){
            return DB::fetchAll("SELECT * FROM images ORDER BY image ",[]);
        }
        function fetch_limited_images($limit){
            return DB::fetchAll("SELECT * FROM images ORDER BY image LIMIT $limit ",[]);
        }
        function fetch_image($id){
            return DB::fetch("SELECT * FROM images WHERE id = ? ",[$id] );
        }
        function delete_image($id){
            return DB::execute("DELETE FROM images WHERE id = ? ",[$id] );
        }
        function update_image($image,$id){
            return DB::execute("UPDATE images SET image = ?  WHERE id = ? ", [$image,$id]);
        }
        function images_num(){
            return DB::num_row("SELECT id FROM images ", []);
        }
    }
?>