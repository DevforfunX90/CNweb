window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 68 || document.documentElement.scrollTop > 68) {
    
    document.getElementById("content").className = "content-fix";
    document.getElementById("stickyColumn").className = "fixed";
    
  } else {
    document.getElementById("stickyColumn").className = "stickyColumn";
    document.getElementById("content").className = "content";
    // document.getElementById("aside").className = "aside"; 
    

  }
}