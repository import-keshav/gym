var backgound_image_index = 1;

function go_home()
  {
    window.location.href = "http://localhost/gym/php/home1.php";  
  }
  
function change_background_image_towards_left()
  {
    if(backgound_image_index>=1 && backgound_image_index<3)
      {
        backgound_image_index += 1;
        document.getElementById("bottom").background = "url(http://localhost/gym/images/image" + backgound_image_index + ".jpeg);" ;
      } 
  }

function search_products(e)
{
  if(e.keyCode === 13)
    {
      e.preventDefault();
      window.location.href = "http://localhost/gym/php/search_product.php";
    }
  else if(e === 99)
  {
    window.location.href = "http://localhost/gym/php/search_product.php";
  }
}
  

