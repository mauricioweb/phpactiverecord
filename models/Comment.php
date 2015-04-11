<?php

class Comment extends ActiveRecord\Model {
	
		static $table_name = 'comentario';

		static $primary_key = 'id_comentario';

		static $belongs_to = array(
     		array('post', 'primary_key' => 'id_post', 'class_name' => 'Post')
   		);
}

?>