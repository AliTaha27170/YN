var ScrollButton = document.getElementById("scroll_top") ;
window.onscroll = function()
{
    if (scrollY >= 430)
    {
        ScrollButton.style="right: 10px;transform: rotate(0deg);"
    }
    else
    {
        ScrollButton.style="right: -60px;"
    }
}
ScrollButton.onclick = function()
{
    window.scrollTo({
        top : 0 ,
        behavior : "smooth"
        
    })}
    AOS.init({
        duration: 1200,
      })

      var x = document.getElementById("header_image")
      x.style.height= window.innerHeight + "px"

      