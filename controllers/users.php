<?php

class users extends Controller{


	function index(){
		$this->users = get_all("SELECT username,count(post_id) as count FROM post NATURAL JOIN user GROUP BY user_id");
}

	function view (){
		$username = $this->params[0];
		$this->user = get_one("SELECT * FROM user WHERE username='$username'");
		$this->posts = get_all("SELECT * FROM post NATURAL JOIN user WHERE username='$username'");

		$_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
		foreach ($_tags as $tag) {
			$this->tags[$tag['post_id']][] = $tag['tag_name'];
		}
	}


}
