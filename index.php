<?php
# inclue the ActiveRecord library
 require_once 'ActiveRecord.php';
  
  ActiveRecord\Config::initialize(function($cfg)
  {
    $cfg->set_model_directory('./models');
    $cfg->set_connections(array('development' =>
      'mysql://root:mauricio@127.0.0.1/phpactiverecord'));
  });

  #$post = Post::create(array('nm_titulo' => 'terceiro post', 'ds_texto' => 'asoidasndioansdoiansd oians ioansd'));

  $post = Post::find_by_nm_titulo("segundo post");
  $post->nm_titulo = "titulo alterado mane";
  $post->save();

  $post = Post::find(2);

  var_dump($post->nm_titulo);


  ?>