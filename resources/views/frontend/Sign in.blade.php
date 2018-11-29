@extends('frontend.layouts.master')

@section('content')
  <br>
  <br>
  <div class="text-center ">
    <h1>買得快，結的快</h1>
    <h2>安心看得見</h2>
  </div>

  <br>

<div class="container text-center" style="max-width: 35rem;" ">
  <div class="card border-dark mb-3">
    <div class="card-header">
      <h4 class="card-title">歡迎使用Store GO</h4>
    </div>
<br>

    <div>
      <form class="form-inline my-2 my-lg-0">
    </div>

    <div class="text-center " >
      <h1><p class="font-weight-bold">登入</p></h1>
      </div>
<br>
    
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline ">
        <div class="container input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">帳號</span>
          </div>
          <input type="text" class="container " placeholder="ex.gmail.com...." aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </form>
    </nav>

<br>

    <div>
      <form class=" form-inline my-2 my-lg-0">
    </div>

    <nav class="navbar navbar-light bg-light">
      <form class="form-inline ">
        <div class="container input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">密碼</span>
          </div>
          <input type="text" class="container " placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </form>
    </nav>

    <br>
    <br>

      <form class="form-inline mx-3 mx-lg-3">
        <div class="container input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">圖形驗證碼</span>
          </div>
          <input type="text"  placeholder="" aria-label="Username" aria-describedby="basic-addon1">
          <span><canvas id="canvas" width="120" height="45"></canvas>
             <a href="#" id="changeImg">看不清，換一張</a></span>
        </div>
      </form>


    <nav class="navbar navbar-light  justify-content-between">
      <a class="navbar-brand"></a>
      <form class="form-inline">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">忘記密碼?</button>
      </form>
    </nav>

    <div class="card-body">
      <p class="card-text"></p>
      <a href="http://web2.ncut.edu.tw/bin/home.php" class="btn btn-primary">登入</a>
    </div>

    <div><form class=" form-inline my-2 my-lg-2"></div>

      <div class="col-md-0">
        <button type="button" class="btn btn-primary btn-lg" style="width: 400px";> 使用facebook.登入</button>
      </div>
      <div class="col-md-0">
        <button type="button" class="btn btn-danger btn-lg" style="width: 400px";>使用google + 登入</button>
      </div>
      <div class="col-md-0 mx-auto">
        <button type="button" class="btn btn-secondary btn-lg" style="width: 400px";>加入會員</button>
      </div>

  </div>
</div>
  <br>
  <br>
  <br>
  <br>

<script>
    /**生成一个随机数**/
    function randomNum(min,max){
        return Math.floor( Math.random()*(max-min)+min);
    }
    /**生成一个随机色**/
    function randomColor(min,max){
        var r = randomNum(min,max);
        var g = randomNum(min,max);
        var b = randomNum(min,max);
        return "rgb("+r+","+g+","+b+")";
    }
    drawPic();
    document.getElementById("changeImg").onclick = function(e){
        e.preventDefault();
        drawPic();
    }

    /**绘制验证码图片**/
    function drawPic(){
        var canvas=document.getElementById("canvas");
        var width=canvas.width;
        var height=canvas.height;
        var ctx = canvas.getContext('2d');
        ctx.textBaseline = 'bottom';

        /**绘制背景色**/
        ctx.fillStyle = randomColor(180,240); //颜色若太深可能导致看不清
        ctx.fillRect(0,0,width,height);
        /**绘制文字**/
        var str = 'ABCEFGHJKLMNPQRSTWXY123456789';
        for(var i=0; i<4; i++){
            var txt = str[randomNum(0,str.length)];
            ctx.fillStyle = randomColor(50,160);  //随机生成字体颜色
            ctx.font = randomNum(15,40)+'px SimHei'; //随机生成字体大小
            var x = 10+i*25;
            var y = randomNum(25,45);
            var deg = randomNum(-45, 45);
            //修改坐标原点和旋转角度
            ctx.translate(x,y);
            ctx.rotate(deg*Math.PI/180);
            ctx.fillText(txt, 0,0);
            //恢复坐标原点和旋转角度
            ctx.rotate(-deg*Math.PI/180);
            ctx.translate(-x,-y);
        }
        /**绘制干扰线**/
        for(var i=0; i<8; i++){
            ctx.strokeStyle = randomColor(40,180);
            ctx.beginPath();
            ctx.moveTo( randomNum(0,width), randomNum(0,height) );
            ctx.lineTo( randomNum(0,width), randomNum(0,height) );
            ctx.stroke();
        }
        /**绘制干扰点**/
        for(var i=0; i<100; i++){
            ctx.fillStyle = randomColor(0,255);
            ctx.beginPath();
            ctx.arc(randomNum(0,width),randomNum(0,height), 1, 0, 2*Math.PI);
            ctx.fill();
        }
    }
</script>
@endsection