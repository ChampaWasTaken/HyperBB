<?php
class Template{
	public $templatePath, $smarty, $languagePath, $theme, $language;
	
	public function __construct($templatePath, $languagePath, $smarty){
		$this -> templatePath	=		$templatePath;
		$this -> smarty			=		$smarty;
		$this -> languagePath	=		$languagePath;
	}
	
	public function LoadLanguageFile($file){
		require ($this -> languagePath . $this -> language . '/' . $file . '.php');
		return $language;
	}
	
	public function LoadTemplateFile($file, $css = "", $vars = "", $varname = ""){
		if(is_array($vars)){
			foreach($vars as $key => $val){
				$this -> smarty -> assign($key, $val);
			}
		} else if(!empty($varname))
			$this -> smarty -> assign($varname, $vars);
		
		if(!empty($css))
			$this -> LoadCss($css);
		
		$this -> smarty -> display($this -> templatePath . $this -> theme . '/' . $file . '.tpl');
	}
	
	public function LoadJavascript($file){
		echo '<script src="' . $this -> templatePath . $this -> theme . '/Javascript/' . $file . '.js"></script>';
	}
	
	public function LoadCss($file){
		echo '<link type="text/css" rel="stylesheet" href="' . $this -> templatePath . $this -> theme . '/Css/' . $file . '.css"></link>';
	}
}
?>