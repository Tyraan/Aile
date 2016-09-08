<?php

function ArtCourse($child_month_age)
{
    
	$discription = null;
	$name = null;	
    if($child_month_age>18 && $child_month_age<24){
    $discription = "一岁半 至 两岁";
    $name = "Art 1 Sensory Fun";    
    
    }
    elseif($child_month_age>=24 && $child_month_age<36){
		$discription = "两岁至三岁";
		$name = "Art 2 Art Exploration";
    }
    elseif($child_month_age>=36 && $child_month_age<60){
        $discription = "三岁至五岁";
        $name = "Art 3 Little Artist";
    }
    else{        
    }   
    
    if(isset($discription)){
        
    	return array('discription'=>$discription,'name'=>$name);
    }else{
    	return null;
    }    
}

function MusicCradleCourse($child_month_age){
	$discription = null;
	$name= null;
    if($child_month_age>0 && $child_month_age<=12){   	
        $discription = '零至一周岁';
        $name = 'Level 1 Music Cradle';
    }
    elseif($child_month_age>13 && $child_month_age<=18){
            $discription = "一岁至一岁半";
            $name = "Level 2 Rock with Music";
           	

    }
    
    elseif($child_month_age>19 && $child_month_age<=26){
        $discription = "一岁半至两岁零二个月";
        $name = 'Level 3 Music Path';
    }
    elseif($child_month_age>27 && $child_month_age<=36){
    	$discription = '两岁二个月至三岁';
    	$name = "Level 4 Music Parade";
    }
    elseif($child_month_age>37 && $child_month_age<=60){        
        $discription = "三岁至五岁";
        $name = "Level 5 Music All Around";
    }
    else{        
    }
    
    if(isset($discription)){
    	return array('discription'=>$discription,'name'=>$name);
    }else{
    	return null;
    }
    

}

function FitBabyCourse($child_month_age){   
        
    $discription= null;
    $name = null;        
    if($child_month_age>0 && $child_month_age<=6){
        $discription ="0-6个月";  
        $name = "FitBaby Level 1";
    }
    elseif($child_month_age>7 && $child_month_age<=10){
        $discription ="7-10个月";
        $name = "FitBaby Level 2";
    }
    
    elseif($child_month_age>10 && $child_month_age<=16){
        $discription ="11-16个月";
        $name = "FitBaby Level 3";
        
    }
    elseif($child_month_age>16 && $child_month_age<=22){
    
        $discription ="17-22个月";
        $name = "FitBaby Level 4";
    }
    elseif($child_month_age>22 && $child_month_age<=28){
        
         $discription ="23-28个月";
         $name = "FitBaby Level 5";
    }
    elseif($child_month_age>28 && $child_month_age<=36){        
        $discription ="29-36个月";
        $name = "FitBaby Level 6";
    }
    else{
        return null;
    }  


 if(isset($discription)){
   return array('discription'=>$discription,'name'=>$name);
        return null;
    }
}

function FitKidCourse($child_month_age){
    $discription=null;
    $name = null;
    if($child_month_age>30 && $child_month_age<36){
        $discription ="2.5岁--3岁"; 
        $name  = "FitKid课程  level 1";
    }
    elseif($child_month_age>=36 && $child_month_age<48){
        $discription ="3岁--4岁";
        $name  = "FitKid课程  level 2";
    }
    elseif($child_month_age>=48 && $child_month_age<60){
        $discription ="4岁--5岁";
        $name  = "FitKid课程  level 3";
    }
    elseif($child_month_age>=60 && $child_month_age<72){
        $discription ="5岁--6岁";
        $name  = "FitKid课程  level 4";
    }
    else{
        return null;
    }
     
    if(isset($discription)){
    return array('discription'=>$discription,'name'=>$name);
    }else{
        return null;
}
}
function CookingFunCourse($child_month_age){
    $discription = null;
    $name = null;
    if($child_month_age>36 && $child_month_age<=54){
    $discription = "3-4.5岁";
    $name = "Level 1 Kitchen Helper";
    }
    elseif($child_month_age>54 && $child_month_age<=72){
        $discription = "4.5-6岁";
        $name = "Level 2 Kitchen Helper";
    }
    else{
        return null;
    }
    
    if(isset($discription)){
    return array('discription'=>$discription,'name'=>$name);
    }else{
        return null;
    }
}


function LetterLandCourse($child_month_age){
    $discription = null;
    $name = null;
        
    if($child_month_age>36 && $child_month_age<=48){
       $discription = "3-4岁";
       $name = "Level 1 Letter Wizard";
        
    }
    elseif($child_month_age>48 && $child_month_age<=60){
              $discription = "4-5 岁";
       		$name = "Level 2 Letter Wizard";
    }
    elseif($child_month_age>60 && $child_month_age<=72){
            $discription = "5-6 岁";
       		$name = "Level 3 Letter Wizard";
    }
    else{
        return null;
        }
    if(isset($discription)){
          return array('discription'=>$discription,'name'=>$name);
      }else{
        return null;
     }      

    
}
function WaterGymCourse($child_month_age){
    $discription=null;
    $name = null;
    
    if ($child_month_age>0 && $child_month_age<=4 ){
    $discription="0-4 个月";
    $name = "VIP精品课程";
    }
    elseif($child_month_age>4 && $child_month_age<=36){
     $discription="5-36个月";
    $name = "小海豚系列课程";
    }
    else{
        return null;
    }    
    if(isset($discription)){
    return array('discription'=>$discription,'name'=>$name);
    }else{
        return null;
     }
    
}	


function getReply($birthday,$child_age,$child_month_age){
		$month = $child_month_age - $child_age*12;
	if($child_age<6 && $child_month_age>1){	
		$reply = "您的孩子是{$birthday}出生，现在 {$child_age} 岁 {$month}个月，可以选择如下课程";
		
	}elseif ($child_month_age<1){
		$reply = "您的孩子是{$birthday}出生，尚未满一个月，还没有适合的课程";
	}
	
	else{
		$reply = "您的孩子是{$birthday}出生,现在满  {$child_age}岁，已经可以从早教中心毕业啦，期待您的下一个小宝宝。";
	}
	return $reply;
}




?>