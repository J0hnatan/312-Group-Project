<?php
class Controller_M1 extends Controller_Template
{
        public function action_index()
        {
                $data = array();
                $this->template->title = 'Home Page';
                $this->template->content = View::forge('m1/index', $data);
                $this->template->css = "styles.css";
        }
        public function action_about()
        {
                $data = array();
                $this->template->title = 'About Page';
                $this->template->content = View::forge('m1/about', $data);
                $this->template->css = "styles.css";
        }
        public function action_color()
        {
                $data = array();
                $this->template->title = 'Color Page';
                $this->template->css = "styles.css";
                if(isset($_GET['rows_cols']) && isset($_GET['colors'])){
                        $this->template->rows_cols = $_GET['rows_cols'];
                        $this->template->colors = $_GET['colors'];
                        $this->template->content = View::forge('m1/color_tables.php', $data);
                }
                else{
                        $this->template->content = View::forge('m1/color.php', $data);

                }
        }
        public function action_print()
        {
                $count = 0;
                $data['title'] = "Print View";
                if(isset($_GET['color0'])) {
                        $data['color0'] = $_GET['color0'];
                        $count++;
                }
                if(isset($_GET['color1'])) {
                        $data['color1'] = $_GET['color1'];
                        $count++;
                }
                if(isset($_GET['color2'])) {
                        $data['color2'] = $_GET['color2'];
                        $count++;
                }
                if(isset($_GET['color3'])) {
                        $data['color3'] = $_GET['color3'];
                        $count++;
                }
                if(isset($_GET['color4'])) {
                        $data['color4'] = $_GET['color4'];
                        $count++;
                }
                if(isset($_GET['color5'])) {
                        $data['color5'] = $_GET['color5'];
                        $count++;
                }
                if(isset($_GET['color6'])) {
                        $data['color6'] = $_GET['color6'];
                        $count++;
                }
                if(isset($_GET['color7'])) {
                        $data['color7'] = $_GET['color7'];
                        $count++;
                }
                if(isset($_GET['color8'])) {
                        $data['color8'] = $_GET['color8'];
                        $count++;
                }
                if(isset($_GET['color9'])) {
                        $data['color9'] = $_GET['color9'];
                        $count++;
                }
                $data['colors'] = $count;
                return new Response(View::forge('m1/print.php', $data));
        }
}
?>
