<?php
class BlogModel extends DB
{
    public function get_categorie_blog()
    {
        $sql = "select * from categorieblog";
        return mysqli_query($this->con, $sql);
    }

    public function get_blogs()
    {
        $sql = "select * from blogs";
        return mysqli_query($this->con, $sql);
    }

    public function insert_blog($blog_title, $blog_content, $path_file, $categorieBlog_id)
    {
        $sql = "insert into blogs(blog_title,blog_content,image,categorieBlog_id) values('$blog_title','$blog_content','$path_file','$categorieBlog_id')";
        return mysqli_query($this->con, $sql);
    }
}
