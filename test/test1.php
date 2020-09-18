<!DOCTYPE html> 
<html> 
   <head> 
       <title> 
           :hover condition for a:before 
           and a:after  
       </title> 
      <!-- Style to add hover condition -->
      <style> 
         a:hover::before { 
            content: "Before -"; 
         } 
         a:hover::after { 
            content: "-after"; 
         } 
      </style> 
   </head> 
     
   <body> 
      <a href="#" > Hover here </a> 
   </body> 
</html> 