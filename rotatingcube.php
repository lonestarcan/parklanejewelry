<?php
/**
 * Rotating Cube with JuneTeenth Logo
 * //#0047BB Chroma Key Blue
 * //#00ff00 Chroma Key Green
 */
?><body style="background-color:#0047BB;">
<div class="wrapper">
  <div class="container">
    <div class="image-cube">
      <div class="front">
        <img src="http://juneteenthfest.net/wp-content/uploads/2024/06/cropped-JUNETEENTHFESTlogox-1.png">
      </div>
      <div class="right">
        <img src="http://juneteenthfest.net/wp-content/uploads/2024/06/cropped-JUNETEENTHFESTlogox-1.png">
      </div>
      <div class="back">
        <img src="http://juneteenthfest.net/wp-content/uploads/2024/06/cropped-JUNETEENTHFESTlogox-1.png">
      </div>
      <div class="left">
        <img src="http://juneteenthfest.net/wp-content/uploads/2024/06/cropped-JUNETEENTHFESTlogox-1.png">
      </div>
    </div>
  </div>
</div>
<style>
  *,
*:before,
*:after{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.wrapper{
  height: 300px;
  width: 300px;
  //border: 1px solid black;
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}
.container{
  height: 100%;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 800px;
  perspective-origin: 50%;
}
.image-cube{
  width: 300px;
  height: 300px;
  transform-style: preserve-3d;
  position: relative;
 animation: spin 10s linear infinite ;
   }
@keyframes spin{
  100%{
    transform: rotateY(360deg);
  }
}
.image-cube div{
   height: 300px;
  width: 300px;
  position: absolute;
    }
img{
  width: 100%;
}
.front{
  transform: translateZ(150px);
}
.right{
  transform: rotateY(-270deg) translateX(150px);
  transform-origin: 100% 0;
}
.back{
  transform: translateZ(-150px) rotateY(180deg);
}
.left{
  transform: rotateY(270deg) translateX(-150px);
  transform-origin: 0 50%;
}
</style>
</body>