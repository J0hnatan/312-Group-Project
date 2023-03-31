<?php

class Controller_M1 extends Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$data = array();
		$this->template->title = 'Home Page';
		$this->template->content = View::forge('m1/index.php', $data);
        $this->template->css = "style.css";
	}

	public function action_about()
	{
		$data = array();
		$this->template->title = 'About Page';
		$this->template->content = View::forge('m1/about.php', $data);
        $this->template->css = "style.css";
	}	

    public function action_color()
	{
		$data = array();
		$this->template->title = 'Color Page';
		$this->template->css = "style.css";
		if(isset($_GET['rows_cols']) && isset($_GET['colors'])){
			$this->template->rows_cols = $_GET['rows_cols'];
			$this->template->colors = $_GET['colors'];
			$this->template->content = View::forge('m1/color_tables.php', $data);
		}
		else{
			$this->template->content = View::forge('m1/color.php', $data);
			
		}
	}
}
