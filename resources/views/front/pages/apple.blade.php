@extends('front.layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{url('front_assets/apple/styleApple.css')}}">
<nav class="navbar sticky-top navbar-lightcontainerflex" id="productnav" style="margin:auto;z-index: 1;">
    <div class="navbar-light container" style="margin:auto;">
        <a class="navbar-brand title fade" href="#">Macbook</a>
        <button class="btn btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
    </div>
</nav>
<div class="container">
    <div class="col-lg-12 mt-5">
        <video id="firstvideo" class="fadein" autoplay muted loop style="max-width: 100%;">
            <source src="front_assets/apple/macbookairvideo.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
    </div>
    
    <div class="col-12 mt-5 fade" style="text-align: center;font-size: 30px;font-weight: bolder;">
        Find the right MacBook for you.
    </div>
    <div class="col-12 mt-5 pb-5 fade">
        <img src="front_assets/apple/macbookairx.png" alt="" style="width: 100%;">
    </div>
   <div class="row pt-5 mt-5 aboutair fade">
       <div class="col-lg-6">
            <video autoplay muted style="max-width: 100%;">
                <source src="front_assets/apple/macbookair.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
       </div>
        <div class="col-lg-6" style="text-align: justify;">
            <h1 style="font-weight: bolder;text-align: center;">Macbook Air</h1><br>
            <div style="font-size: 18px;">
                The incredibly thin and light MacBook Air is now more powerful than ever. <br><br>It features a brilliant Retina display, new Magic Keyboard, Touch ID, processors with up to twice the performance, faster graphics, and double the storage capacity. <br><br>
            </div>
            <div class="mt-2" style="text-align: center;">
                <button id="btnbuybottom" class="btn btn-block btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
            </div>
        </div>
   </div>
   <div class="col-lg-12 mt-5" >
       <img src="front_assets/apple/macbook1.jpg" alt="" style="width: 100%;">
   </div>
   <div class="col-lg-12 mt-5">
        <video autoplay muted loop style="max-width: 100%;">
            <source src="front_assets/apple/macbookprovideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
   <div class="row pt-5 mt-5 pb-5 fade" style="float: right;">
        <div class="col-lg-6" style="text-align: justify;">
            <h1 style="font-weight: bolder;text-align: center;">Macbook Pro</h1><br>
            <div style="font-size: 18px;">
                MacBook Pro elevates the notebook to a whole new level of performance and portability. Wherever your ideas take you, you’ll get there faster than ever with high‑performance processors and memory, advanced graphics, blazing‑fast storage, and more — all in a compact 3-pound package <br><br>
            </div>
            <div class="mt-2" style="text-align: center;">
                <button id="btnbuybottom" class="btn btn-block btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="front_assets/apple/macbookpro1.png" alt="" style="max-width: 100%;">
        </div>
    </div>
    <div class="row col-lg-12 p-5">
        <div class="col-lg-6">
            <img src="front_assets/apple/mb1.jpg" alt="" style="width: 100%;" class=" m-1">
            <img src="front_assets/apple/mb3.jpg" alt="" style="width: 100%;" class="mt-5 mbpic">
        </div>
        <div class="col-lg-6">
            <img src="front_assets/apple/mb2.jpg" alt="" style="width: 100%;" class="m-1">
            <img src="front_assets/apple/mb4.jpg" alt="" style="width: 100%;" class="mt-5 mbpic">
        </div>
    </div>

</div>

<script>
    window.addEventListener("scroll", function (event) {
        if(this.scrollY > 0){
            document.getElementById("productnav").style.width = "100%";
            document.getElementById("productnav").style.borderBottom = "1px solid #ded5c4";
            document.getElementById("productnav").style.backgroundColor = "cubic-bezier(0.28, 0.11, 0.32, 1)";
        }
        else{
            document.getElementById("productnav").style.borderBottom = "1px solid #FFF";
        }
    });
    $(window).on("load",function() {
        document.getElementById("firstvideo").style.opacity = 1;
    $(window).scroll(function() {
        var windowBottom = $(this).scrollTop() + $(this).innerHeight();
        $(".fade").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top + $(this).outerHeight();
        
        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
            if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
        } else { //object goes out of view (scrolling up)
            // if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
        }
        });
    }).scroll(); //invoke scroll-handler on page-load
    });
</script>
@endsection