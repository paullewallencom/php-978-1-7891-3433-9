<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter Session Example</title> 
   </head>
	
   <body> 
      Welcome <?php echo $this->session->userdata('name'); ?> 
      <br> 
      <a href = 'http://localhost/codeigniterProject/'>
         Click Here</a> to unset session data. 
   </body>
	
</html>