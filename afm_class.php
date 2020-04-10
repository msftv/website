<?php

class afm {
    public $db_host; 
    public $db_user; 
    public $db_pass; 
    public $db_name; 
    public $db_ceas;  
    public $db_eor =array( 
    'db_connect' => 'لا يوجد اتصال بقاعدة البيانات', 
    'db_select'  => 'خطأ في اسم قاعدة البيانات ', 
    'db_query'   => 'خطأ في الإستعلام يرجى التحقق', 
    'db_ceas1'   => 'قاعدة البيانات متصلة بشكل سليم', 
    'db_ceas2'   => 'قاعدة البيانات غير متصلة ',
    'afm'       => 'لقد تم نزع حقوق السكربت '
    );
    public $afm;

    # Mysql Error     
   public function return_error($message) 
                {    
                return $this->db_eor[$message] ; 
                } 
   public function sql_connect() 

                {  
                $this->link = @mysql_pconnect($this->db_host, $this->db_user , $this->db_pass); 
                if(!$this->link) 
                { 
                die(($this->return_error(db_connect))); 
                }else{  
                $this->db = mysql_select_db($this->db_name , $this->link); 
                if(!$this->db)
                {
                die($this->return_error(db_select));    
                }else{
                $this->dbcase=$this->return_error(db_ceas1);
                } 
                }
                }
   PUBLIC FUNCTION afm_ON(){
        if('ar.php' == $_COOKIE['afm_lang']) {
			$rights = "<script type='text/javascript'>document.write('\u003c\u0063\u0065\u006e\u0074\u0065\u0072\u003e\u003c\u0066\u006f\u006e\u0074\u0020\u0073\u0069\u007a\u0065\u003d\u0022\u0031\u0022\u003e\u0647\u0630\u0627\u0020\u0627\u0644\u0645\u0648\u0642\u0639\u0020\u064a\u0639\u0645\u0644\u0020\u0639\u0644\u0649\u0020\u0646\u0638\u0627\u0645\u0020\u003c\u0061\u0020\u0068\u0072\u0065\u0066\u003d\u0022\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0077\u0077\u0077\u002e\u0074\u0068\u0065\u002d\u0067\u0068\u006f\u0073\u0074\u002e\u0063\u006f\u006d\u002f\u0073\u0063\u0072\u0069\u0070\u0074\u0073\u002f\u0061\u0077\u0063\u006d\u002f\u0022\u0020\u0074\u0061\u0072\u0067\u0065\u0074\u003d\u0022\u005f\u0062\u006c\u0061\u006e\u006b\u0022\u003e\u0041\u0057\u0043\u004d\u003c\u002f\u0061\u003e\u0020\u0627\u0644\u0625\u0635\u062f\u0627\u0631\u0020\u0032\u002c\u0032\u002c\u0020\u0645\u0646\u0020\u0628\u0631\u0645\u062c\u0629\u0020\u0641\u0631\u064a\u0642\u0020\u003c\u0061\u0020\u0068\u0072\u0065\u0066\u003d\u0022\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0077\u0077\u0077\u002e\u0074\u0065\u0061\u006d\u002d\u0038\u0064\u002e\u0063\u006f\u006d\u0022\u0020\u0074\u0061\u0072\u0067\u0065\u0074\u003d\u0022\u005f\u0062\u006c\u0061\u006e\u006b\u0022\u003e\u0054\u0045\u0041\u004d\u002d\u0038\u0044\u003c\u002f\u0061\u003e\u0020\u003c\u002f\u0066\u006f\u006e\u0074\u003e\u003c\u002f\u0063\u0065\u006e\u0074\u0065\u0072\u003e')</script>";
		} else {
			$rights = "<script type='text/javascript'>document.write('\u003c\u0063\u0065\u006e\u0074\u0065\u0072\u003e\u003c\u0066\u006f\u006e\u0074\u0020\u0073\u0069\u007a\u0065\u003d\u0022\u0031\u0022\u003e\u0074\u0068\u0069\u0073\u0020\u0077\u0065\u0062\u0073\u0069\u0074\u0065\u0020\u0075\u0073\u0065\u0073\u0020\u003c\u0061\u0020\u0068\u0072\u0065\u0066\u003d\u0022\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0077\u0077\u0077\u002e\u0074\u0068\u0065\u002d\u0067\u0068\u006f\u0073\u0074\u002e\u0063\u006f\u006d\u002f\u0073\u0063\u0072\u0069\u0070\u0074\u002f\u0061\u0077\u0063\u006d\u002f\u0022\u003e\u0041\u0057\u0043\u004d\u003c\u002f\u0061\u003e\u0020\u0076\u0065\u0072\u0073\u0069\u006f\u006e\u0020\u0032\u002c\u0032\u002c\u0020\u0070\u0072\u006f\u0067\u0072\u0061\u006d\u006d\u0065\u0064\u0020\u0062\u0079\u0020\u003c\u0061\u0020\u0068\u0072\u0065\u0066\u003d\u0022\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0077\u0077\u0077\u002e\u0074\u0065\u0061\u006d\u002d\u0038\u0064\u002e\u0063\u006f\u006d\u002f\u0022\u003e\u0054\u0045\u0041\u004d\u002d\u0038\u0044\u003c\u002f\u0061\u003e\u003c\u002f\u0066\u006f\u006e\u0074\u003e\u003c\u002f\u0063\u0065\u006e\u0074\u0065\u0072\u003e')</script>";
		}
        if ($this->afm !=$rights){
            
            exit($this->return_error(afm));
        }
        
    }            
                
                
                 
}

?>

