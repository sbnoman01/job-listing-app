<?php


class Template{

	// path to template
	protected $template;

	// Variable passed IN
	protected $vars = [];


	// constructor function
	public function __construct( $template = '' ){
		$this->template = $template;
	}


	public function __get( $key ){

		return $this->vars[ $key ];
	}

	public function __set( $key, $value ){
		$this->vars[$key] = $value;
	} 

	public function __toString(){
		extract($this->vars);

		chdir( dirname( $this->template ) );

		ob_start();


		// inlcude files
		include basename( $this->template );

		return ob_get_clean();
	}

	public function __test(){
		echo 'auto load function';
	}
}

 ?>