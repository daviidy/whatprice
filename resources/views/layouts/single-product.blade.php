<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') | Whatprice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style media="screen">

ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{width:100%;border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
  .container {margin-top:0px !important;}
  .container > .row{padding:0 !important;}
  .container > .row > .col-xs-12.col-sm-5{
      padding-right:0 ;
  }
  .container > .row > .col-xs-12.col-sm-9 > div > p{
      padding-left:0 !important;
      padding-right:0 !important;
  }
  .container > .row > .col-xs-12.col-sm-9 > div > ul{
      padding-left:10px !important;

  }
  .section{width:104%;}
  .menu-items{padding-left:0;}
}

</style>
  </head>
  <body>

    @yield('content')





<script type="text/javascript">

$(document).ready(function(){
           //-- Click on detail
           $("ul.menu-items > li").on("click",function(){
               $("ul.menu-items > li").removeClass("active");
               $(this).addClass("active");
           })

           $(".attr,.attr2").on("click",function(){
               var clase = $(this).attr("class");

               $("." + clase).removeClass("active");
               $(this).addClass("active");
           })

           //-- Click on QUANTITY
           $(".btn-minus").on("click",function(){
               var now = $(".section > div > input").val();
               if ($.isNumeric(now)){
                   if (parseInt(now) -1 > 0){ now--;}
                   $(".section > div > input").val(now);
               }else{
                   $(".section > div > input").val("1");
               }
           })
           $(".btn-plus").on("click",function(){
               var now = $(".section > div > input").val();
               if ($.isNumeric(now)){
                   $(".section > div > input").val(parseInt(now)+1);
               }else{
                   $(".section > div > input").val("1");
               }
           })
       })

</script>
  </body>
</html>
