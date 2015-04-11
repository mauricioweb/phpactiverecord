<?php
class Post extends ActiveRecord\Model {

	static $table_name = 'post';

	static $primary_key = 'id_post';

	static $has_many = array(
		array('comentarios', 'foreign_key' => 'id_post', 'class_name' => 'Comment')
	);
	
}

?>