<?php
class tv14_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('templates/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
	
	public function opera($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('opera/templates/header', $vars, $return);
        $content .= $this->view('opera/'.$template_name, $vars, $return);
        $content .= $this->view('opera/templates/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
	
}

?>