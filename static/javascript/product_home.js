var backgound_image_index = 1;
  (function() {
    var cx = '000304040539354610735:irc8t4afuom';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();

function go_home()
  {
    window.location.href = "http://localhost/gym/php/home.php";  
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
      var search_words = document.getElementById("search_values").value ;
      window.location.href = "http://localhost/gym/php/search_product.php?search_words=" + search_words;
    }
  else if(e === 99)
  {
    window.location.href = "http://localhost/gym/php/search_product.php";
  }
}
  

