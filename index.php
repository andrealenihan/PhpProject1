<?php?> 

<!DOCTYPE html>

<html>
    <head>
        <title>Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
  
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                 <br>
                <br>
                <br>
        <style>     
    
  body {
    background-image: url("menubackground.jpeg");
    background-size: 100%;
}

.interests {
  position: relative;
  width: 100%;
  max-width: 600px;
}

.interests img {
  width: 100%;
  height: auto;
}

.interests .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.interests .btn:hover {
  background-color: black;
}



.cv{
  position: relative;
  width: 100%;
  max-width: 390px;
}

.cv img {
  width: 100%;
  height: 120%;
}

.cv .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.cv .btn:hover {
  background-color: black;
}

.consulting{
  position: relative;
  width: 90%;
  max-width: 320px;
}

.consulting img {
  width: 200%;
  height: 90%;
}

.consulting .btn {
  position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.consulting .btn:hover {
  background-color: black;
}


.column {
  float: left;
  
}

.row{
    
    
  display: flex;
 
  padding: 0 4px;

}
  </style>    
            
          
    
        <br>
        
   
    <div class="column">
       
      <div class="interests">
  <img src="menubackgroundinterests.jpg" alt="interests image" style="width:100%">
  <a href="tiltedpage_scroll_demo.html" class="btn">Interests</a>
</div>
     </div>
     
        

 
    <div class="column">        
             <div class="cv">
  <img src="menubackgroundcv.jpeg" alt="cv image" style="width:100%">
  <a href="cv.html" class="btn">My Curriculum Vitae</a>
</div>
       
   </div>
        
        <div class="row">
         <div class="column">        
             <div class="consulting">
  <img src="menuconsulting.jpg" alt="cv image" style="width:150%">
  <button class="btn">Consulting Services</button>
</div>
       
   </div>
               </div>
    
                
            
        
    </body>
</html>
