@extends('front.layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{url('front_assets/microsoft/styleSurface.css')}}">
<nav class="navbar sticky-top navbar-lightcontainerflex" id="productnav" style="margin:auto;z-index: 1;">
    <div class="navbar-light container" style="margin:auto;">
        <a class="navbar-brand title fade" href="#">Surface Laptop 3</a>
        <button class="btn btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
    </div>
</nav>
<div class="container">
    <div class="row pt-5">
        <div class="col-lg-12">
            <video class="fadein" id="dellvideo" autoplay muted loop style="max-width: 100%;">
                <source src="front_assets/microsoft/surface3video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="row pt-5 pl-5 pr-5">
        <div class="midtitlecontainer mx fade">
            <p class="midtitle" style="margin: auto;">Surface Laptop 3</p>
        </div>
        <div class="midtextcontainer mt-2 mb-5 fade">
            <p class="midtext" style="margin: auto;">Slim and stylish, available in 13.5” and new 15” touchscreens, rich color options, and two durable finishes.<br>Make a powerful statement and get improved speed, performance, and all-day battery life.</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-6">
            <img src="front_assets/microsoft/surface1.jpg" alt="" class="m-1" style="width: 100%;">
            <img src="front_assets/microsoft/surface4.jpg" alt="" class="m-1 mt-5 mbpic" style="width: 100%;">
        </div>
        <div class="col-lg-6">
            <img src="front_assets/microsoft/surface2.jpg" alt="" class="m-1" style="width: 100%;">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <img src="front_assets/microsoft/MSandstone.webp" class="sandstone" id="sandstone2" alt="" style="max-width: 100%;">
            <img src="front_assets/microsoft/MMatteBlack.webp" class="matteblack" id="matteblack2" alt="" style="max-width: 100%; display:none;">
            <img src="front_assets/microsoft/MCobaltBlue.webp" class="cobaltblue" id="cobaltblue2" alt="" style="max-width: 100%; display:none;">
            <img src="front_assets/microsoft/MPlatinum.webp" class="platinum" id="platinum2" alt="" style="max-width: 100%; display:none;">
        </div>
        <div class="col-12 mt-5" style="text-align: center;">
            <h2 style="font-weight: bold;">Choose from rich colors and durable finishes</h2>
            <h3 class="sandstone">Sandstone with a cool, metal keyboard.</h3>
            <h3 class="matteblack" style="display:none;">Matte Black with a cool, metal keyboard.</h3>
            <h3 class="cobaltblue" style="display:none;">Cobalt Blue with warm, Alcantara® material.</h3>
            <h3 class="platinum" style="display:none;">Platinum with warm, Alcantara® material.</h3>
            <button onclick="changeColorSandstone()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Sandstone">
                <img src="front_assets/microsoft/Sandstone.webp" class="colorchoose" alt="">
            </button>
            <button onclick="changeColorMatteBlack()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Matte Black">
                <img src="front_assets/microsoft/MatteBlack.png" class="colorchoose" alt="">
            </button>
            <button onclick="changeColorCobaltBlue()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Cobalt Blue">
                <img src="front_assets/microsoft/CobaltBlue.png" class="colorchoose" alt="">
            </button>
            <button onclick="changeColorPlatinum()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Platinum">
                <img src="front_assets/microsoft/Platinum.png" class="colorchoose" alt="">
            </button>
            <div class="col-6 mx-auto mt-5">
                <button id="btnbuybottom" class="btn btn-block btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
            </div>
        </div>
    </div>
</div>

<script>
    function changeColorSandstone(){
        $('.sandstone').fadeIn(1000);
        $('.matteblack').hide();
        $('.cobaltblue').hide();
        $('.platinum').hide();
    }
    function changeColorMatteBlack(){
        $('.sandstone').hide();
        $('.matteblack').fadeIn(1000);
        $('.cobaltblue').hide();
        $('.platinum').hide();
    }
    function changeColorCobaltBlue(){
        $('.sandstone').hide();
        $('.matteblack').hide();
        $('.cobaltblue').fadeIn(1000);
        $('.platinum').hide();
    }
    function changeColorPlatinum(){
        $('.sandstone').hide();
        $('.matteblack').hide();
        $('.cobaltblue').hide();
        $('.platinum').fadeIn(1000);
    }
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
        document.getElementById("dellvideo").style.opacity = 1;
        if($(window).width() > 770) {
            $("#sandstone2").attr("src", "front_assets/microsoft/MSandstone.webp");
            $("#matteblack2").attr("src", "front_assets/microsoft/MMatteBlack.webp");
            $("#cobaltblue2").attr("src", "front_assets/microsoft/MCobaltBlue.webp");
            $("#platinum2").attr("src", "front_assets/microsoft/MPlatinum.webp");
        } else {
            $("#sandstone2").attr("src", "front_assets/microsoft/PSandstone.webp");
            $("#matteblack2").attr("src", "front_assets/microsoft/PMatteBlack.webp");
            $("#cobaltblue2").attr("src", "front_assets/microsoft/PCobaltBlue.webp");
            $("#platinum2").attr("src", "front_assets/microsoft/PPlatinum.webp");
        }
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