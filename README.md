# social_media
This is my Social Media project in PHP/MYSQL/HTML/CSS 
YY
I did this personal project to learn new things on the backend side in PHP and MySQL  
This project is a copy of a social media site .

LINK WITH PHOTOS : https://drive.google.com/open?id=1IRycNe14tnGxJvU0HMgY8WaPDLh_Ko3k


Structure of database  :
 
 Table 
 
  social_network 
   - 	comments  
        com_idPrimary 	int(11) 			No 	None 		AUTO_INCREMENT 	
	   	  post_id 	int(11) 			No 	None 
        user_id 	int(11) 			No 	None 		
	  	  comment 	varchar(255) 	latin1_swedish_ci 		No 	None 			
      	comment_author 	varchar(255) 	latin1_swedish_ci 		No 	None 				
      	date   	timestamp 			No 	CURRENT_TIMESTAMP 		
  -  posts 
        post_idPrimary 	int(11) 			No 	None 		AUTO_INCREMENT 		
       	user_id 	int(11) 			No 	None 				
       	post_content 	varchar(255) 	latin1_swedish_ci 			
      	upload_image 	varchar(255) 	latin1_swedish_ci 	 	
	    	post_date 	timestamp 			No 	CURRENT_TIMESTAMP 				
   -  users 
        1 	user_idPrimary 	int(11) 			No 	None 		AUTO_INCREMENT 	
   	    f_name 	text 	latin1_swedish_ci 		No 	None 				
  	    l_name 	text 	latin1_swedish_ci 		No 	None 			
  	    user_name 	text 	latin1_swedish_ci 		No 	None 			
  	    describe_user 	varchar(255) 	latin1_swedish_ci 		No 	None 		
    	  Relationship 	text 	latin1_swedish_ci 		No 	None 		
  	    user_pass 	varchar(255) 	latin1_swedish_ci 		No 	None 			
    	  user_email 	varchar(255) 	latin1_swedish_ci 		No 	None 		
  	    user_country 	text 	latin1_swedish_ci 		No 	None 			
  	    user_gender 	text 	latin1_swedish_ci 		No 	None 			
  	    user_birthday 	text 	latin1_swedish_ci 		No 	None 			
	  	  user_image 	varchar(255) 	latin1_swedish_ci 		No 	None 			
	  	  user_cover 	varchar(255) 	latin1_swedish_ci 		No 	None 			
    	  user_reg_date 	timestamp 			No 	CURRENT_TIMESTAMP 		
	  	  status 	text 	latin1_swedish_ci 		No 	None 				
    	  posts 	text 	latin1_swedish_ci 		No 	None 			
    	  recovery_account 	varchar(255) 	latin1_swedish_ci 			
   -  user_messages  
        idPrimary 	int(11) 			No 	None 		AUTO_INCREMENT 	
     	  user_to 	int(11) 			No 	None 			
      	user_from 	int(11) 			No 	None 		
      	msg_body 	varchar(255) 	latin1_swedish_ci 		No 	None 			
      	date 	timestamp 			No 	CURRENT_TIMESTAMP 		
      	msg_seen 	text 	latin1_swedish_ci 		No 	None 		
