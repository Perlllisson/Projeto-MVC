<?php

class postsController extends controller {
	public function index(){
		echo "lita das postagens";
	}
	public function ver($nome, $sobrenome) {
		echo "meu nome é:  ".$nome." ".$sobrenome;
	}
}