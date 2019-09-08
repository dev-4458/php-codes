<?php
class API_TextGuru {
	const CONST_USERNAME = 'usernmae';
	const CONST_PASSWORD = 'password';
	const CONST_SENDERID = 'attuneinfocom';
	
    var $username;
	
	var $password;
	
	var	$source;
	
	public $mobile_num = array();
	
	public $message = '';
	
    /*
    *@ constructor of way2sms class
    *
    *@ $id     String :  username to authenticate the way2sms website
    *@ $pass   String :  password for way2sms website
    *
    */
    function __construct($username,$password,$source)
    {
		$this->username=urlencode($username);
		
        $this->password=urlencode($password);
		
		$this->source=urlencode($source);
		
    } 
	
	function phoneNumbervalidation($mobile){
	
		
		if(preg_match('/^((\+){0,1}91(\s){0,1}(\-){0,1}(\s){0,1})?([0-9]{10})$/', $mobile,$matches)){
		
			return true;
			
		}else{
		
			return false;
			
		}
		
	}
	
	function appendMobileNum($mobile_num){
	
		if(empty($mobile_num)) return false;
		
		array_push($this->mobile_num,trim($mobile_num));
		
	}
	
	function setMessage($message){
	
		if(empty($message)) return false;
		
		$this->message = $message;
		
	}	
	
	function send(){
		
		$arr_errors = array();
		
		try{
			
			if(empty($this->username) || empty($this->password) || empty($this->source)) throw new Exception('Please specify the proper credentials.');
			
			$mobile_num = $this->mobile_num;
			
			$message = $this->message;
			
			if(empty($mobile_num)) throw new Exception('Mobile No. not defined.');
			
			if(empty($message)) throw new Exception('Please specify the message.');
			
			$message = strip_tags($message);
			
			// normalize newlines
			$message = preg_replace('/(\r\n|\r|\n)+/', " ", $message);
			
			// replace whitespace characters with a single space
			$message = preg_replace('/\s+/', ' ', $message);
			 
			if(strlen($message) > 200) throw new Exception('You cannot send the message longer than 200 characters');
			
			$message  = urlencode($message );
			if(strstr($mobile_num,','))  $mobile_num = explode(',',$mobile_num);
			
			if(!is_array($mobile_num)) $mobile_num = array($mobile_num);
			
			$message = addslashes($message)	;
			
			foreach($mobile_num as $key=>$mobile){
			
				$mobile = preg_replace("/[^0-9]/", "", $mobile);
				
				if(strlen($mobile)< 10 ) throw new Exception('Invalid Number: '.$mobile );
				
				if(strlen($mobile) == 10){
					 $mobile = '91'.$mobile;
					 
				}elseif(strlen($mobile) == 11 && substr($mobile,0,1) == '0'){
					$mobile = '91'.substr($mobile,1,10);
					
				}elseif(strlen($mobile) == 12 && substr($mobile,0,2) == '91'){
					$mobile = $mobile;
				}
				
				if($this->phoneNumbervalidation($mobile) === false) throw new Exception('Invalid Number: '.$mobile );
				
							
				$mobile_num[$key] = $mobile ;
			}
		
			
			return $this->__callAPI(implode(',',$mobile_num),$message);	
			
		}catch(Exception $e){
		
			return $e->getMessage();
			
		}
	}
	
	function __callAPI($mobile,$message ){			
			
		$str_post_fields = sprintf("username=%s&password=%s&source=%s&dmobile=%s&message=%s",
								$this->username,
								$this->password,
								$this->source,
								$mobile,
								$message);
		
		$ch = curl_init('http://www.txtguru.in/imobile/api.php?');
		
		curl_setopt($ch, CURLOPT_POST, 1);
		
		curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post_fields);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		
		return curl_exec($ch);			
	
	}
	
	static function sendSMS($arr_numbers,$smscontent){	
	
		try{
		
			if(!is_array($arr_numbers)) $arr_numbers = array($arr_numbers);				
			
			if(count($arr_numbers) == 0) throw new Exception('Please specify Mobile Phone');
			
			if(empty($smscontent)) throw new Exception('Please specify SMS content');
					
			$obj_SMS = new self(self::CONST_USERNAME,self::CONST_PASSWORD,self::CONST_SENDERID);
	
			foreach($arr_numbers as $mobile_num){
			
				$obj_SMS->appendMobileNum($mobile_num);
				
			}
			
			$obj_SMS->setMessage($smscontent);
			
			$ret_message = $obj_SMS->send();
	
			if(strstr($ret_message, 'MsgID') === false){
			
				 throw new Exception($ret_message);
				 
			}
			
		}catch(Exception $e){
		
			return false;
		}
	
		return true;		
	
	}	
	
}