<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="{{asset('assets/css/style.css?ver=2.9.0')}}">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- Font awesome -->
    <link href="{{asset('assets/css/font-awesome.css?ver=2.9.0')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css?ver=2.9.0')}}" rel="stylesheet"> 
    <!-- Slick slider -->
    <link href="{{asset('assets/css/slick.css?ver=2.9.0')}}" rel="stylesheet">
    <!-- Theme color -->
    <link href="{{asset('assets/css/theme-color/default-theme.css?ver=2.9.0')}}" rel="stylesheet">     
</head>
<body id="hi">
@include('partials.header')
@include('partials.slider')
@include('partials.contact')
@include('partials.footer')
</body>
<script type="text/javascript" src="{{asset('node_modules/visual-heatmap/demo/dat.gui.min.js')}}"></script>

<script type="module">

import Heatmap from "{{asset('node_modules/visual-heatmap/dist/visualHeatmap.esm.browser.js')}}";

let data = [];
let instance = Heatmap('#hi', {
        size: 100.0,
        max: 100,
        blur: 1.0,
        zoom: 1.0,
        gradient: [{
            color: [255, 255, 255, 0.0],
            offset: 0
        }, {
            color: [212, 225, 255, 1.0],
            offset: 0.2
        }, {
            color: [166, 255, 115, 1.0],
            offset: 0.45
        }, {
            color: [255, 255, 0, 0.5],
            offset: 0.75
        }, {
            color: [255, 0, 0, 1.0],
            offset: 1.0
        }]
    });

    var gui = new dat.GUI();
    var Params = function() {
        this.points = 10000;
        this.size = 100;
        this.opacity = 1.0;
        this.blur = 1.0;
        this.transalteX = 0;
        this.transalteY = 0;
        this.zoom = 1.0;
        this.rotationAngle = 0.0;
        this.update = function() {
    
        }
    };

    var params = new Params();
    var count=0;
    var position=[];
    var dataPush = true;
    document.getElementById('hi').addEventListener("click", function(e){
        if (dataPush) {
            instance.addData([{
                x: e.x,
                y: e.y,
                value: 20
            }], true);
            dataPush = false;
            var c=[];
            c[0]=e.x;
            c[1]=e.y;
            c[2]=screen.width;
            c[3]=screen.height;
            position[count]=c;
            count+=1;
            console.log(e);

            setTimeout(idleFlag, 20);
        }
    });

    function idleFlag () {
        dataPush = true;
    }
var state=false;
setInterval(function(){
 state=false;
 window.postMessage("ami","*");
 setTimeout(function(){
 try{
 if(state==false){
 window.lonely();
 }
 }catch(e){}
},200);
},500);
window.addEventListener("message",function(e){
  if(e.data=="ami"){
  window.postMessage("no!","*");
  }else if(e.data=="no!"){
    state=true
  }});
  window.lonely=function(){
   
  alert(JSON.stringify(position));
    alert(myJsonString);
 };
</script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>  
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>    
  <!-- Slick slider -->
  <script src="{{asset('assets/js/slick.js')}}"></script> 
  <!-- Counter -->
  <script src="{{asset('assets/js/waypoints.js')}}"></script> 
  <script src="{{asset('assets/js/jquery.counterup.js')}}"></script> 
  <!-- Mixit slider -->
  <script src="{{asset('assets/js/jquery.mixitup.js')}}"></script> 
  <!-- Add fancyBox -->        
  <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script> 
  
  <!-- Custom js -->
  <script src="{{asset('assets/Js/custom.js')}}"></script> 

</html>