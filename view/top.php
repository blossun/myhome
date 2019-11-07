<div id="header">
  <div class="topArea">
    <a href="login.php">LOGIN</a>
    <a href="join.php">JOIN US</a>
    <a href="notice.php">NOTICE</a>
    <a href="qna.php">QnA</a>
    <a href="review.php">REVIEW</a>

  </div>
<h1 class="top_logo">
<a href="index.php"><img class="banner_image" width="308" height="81" title="자바콩" alt="자바콩" src="./image/logo_banner.png"></a>
</h1>
<div class="gnbWrap">
  <ul>
    <li><a href="./product/list.html">TOP</a></li>
    <li><a href="./product/list.html">BOTTOM</a></li>
    <li><a href="./product/list.html">OUTER</a></li>
    <li><a href="./product/list.html">ACCESSORY</a></li>
    <li><a href="./product/list.html">SALE</a></li>
  </ul>
</div>
</div>

<script>
  /*
  window.onscroll = function(){ScrollEffect()};
  function ScrollEffect(){
    if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
    document.querySelector('#header').className = "slideUp";
    document.querySelector('.top_logo').style.display='none';
    document.querySelector('.contents').style.marginTop='100px';
    // document.querySelector('.top_logo').
    }
  }
  */

  // use jQuery
  var position = $(window).scrollTop();
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll > position){
      document.querySelector('#header').className = "slideUp";
      document.querySelector('.top_logo').style.display='none';
      document.querySelector('.contents').style.marginTop='100px';
    }else{
      document.querySelector('#header').className = "";
      document.querySelector('.top_logo').style.display='';
      document.querySelector('.contents').style.marginTop='';
    }
  })
</script>
