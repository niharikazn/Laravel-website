<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          html {
               font-size: 14.5px;
          }

          body {
               font-family: 'Open Sans', sans-serif;
               line-height: 1.45em;
               background-color: #f0f0f0;
               color: #404646;
          }

          * {
               box-sizing: border-box;
          }


          .cards-list {
               z-index: 0;
               width: 100%;
               display: flex;
               float: left;
               justify-content: space-around;
               flex-wrap: wrap;
          }

          .card {
               margin: 30px auto;
               width: 300px;
               height: 300px;
               border-radius: 40px;
               box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
               cursor: pointer;
               transition: 0.4s;
          }

          .vert {
               float: left;
               width: 300px;
               margin-right: 30px;
          }

          .Hor {
               margin: 30px;
               width: 600px;
               height: 300px;
               float: left;

          }
     </style>
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

<body>
     <div class="cards-list">
          @php $j=1; @endphp
          @for($i = 0; $i<=19; $i=$i+1) @switch($j) @case(1) <div class="rows">
               <div class="card vert @if($i%2==0) order-first @else order-end @endif">
                    
               </div>
               @php $j+=1; @endphp
               @break
               @case(2)
               <div class="card vert">

               </div>
               @php $j+=1; @endphp 
               @break
               @case(3)
               <div class="card Hor @if($i%2==0) order-end @else order-first @endif">
                  <span class="text-danger bg-dark">dnashbkjdbkasjfnlskdfnjksfsdffsdfs</span>  alsdjfgsjhfgsdjhkfghsjsdfsfsfsfs

               </div>
     </div>
     @php $j=1; @endphp
     @break
     @endswitch
     @endfor
     </div>

</body>

</html>