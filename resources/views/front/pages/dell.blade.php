@extends('front.layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{url('front_assets/dell/styleDell.css')}}">
<nav class="navbar sticky-top navbar-lightcontainerflex" id="productnav" style="margin:auto;z-index: 1;">
    <div class="navbar-light container" style="margin:auto;">
        <a class="navbar-brand title fade" href="#">Dell XPS</a>
        <button class="btn btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
    </div>
</nav>
<div class="container">
    <div class="row pt-5">
        <div class="col-lg-12">
            <video class="fadein" id="dellvideo" autoplay muted loop style="max-width: 100%;">
                <source src="front_assets/dell/dell.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="row pt-5 pl-5 pr-5">
        <div class="midtitlecontainer mx fade">
            <p class="midtitle" style="margin: auto;">MEET THE<br>NEWEST MEMBERS OF THE XPS FAMILY</p>
        </div>
        <div class="midtextcontainer mt-2 mb-5 fade">
            <p class="midtext" style="margin: auto;">XPS configurations badged with Creator Edition have been carefully selected<br>for those who aspire to cultivate their digital content creation skills –<br>whether that be in photography, graphic design, music production, or beyond.</p>
        </div>
    </div>
    <div class="row mb-5 fade">
        <img src="front_assets/dell/dell1.jpg" alt="" class="col-lg-6">
        <img src="front_assets/dell/dell2.jpg" alt="" class="col-lg-6">
    </div>
    <div class="row mb-5">
        <div class="col-12 mb-5 dellxpstitle fade">
            FIND THE PERFECT XPS FOR YOU
        </div>
        <div class="col-lg-6 fade">
            <div id="brandimage1">
                <img src="front_assets/dell/dell13.png" alt="" style="max-width: 100%;">
            </div>
            <div id="brandimage2" style="display: none;">
                <img src="front_assets/dell/dell15.png" alt="" style="max-width: 100%;">
            </div>
            <div id="brandimage3" style="display: none;">
                <img src="front_assets/dell/dell17.png" alt="" style="max-width: 100%;">
            </div>
            <div id="brandimage4" style="display: none;">
                <img src="front_assets/dell/dell2in1.png" alt="" style="max-width: 100%;">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="dellxpsdesc fade">
                <p id="branddesc1" style="margin:0;">
                    The new award winning XPS 13. Precisely cut with a flawless finish, features a 13.4 inch four-sided InfinityEdge display.
                </p>
                <p id="branddesc2" style="display:none;margin:0;">
                    The new XPS 15. With a refined 16:10 InfinityEdge display delivering 100% RGB Adobe color in brilliant detail.
                </p>
                <p id="branddesc3" style="display:none;margin:0;">
                    The new XPS 17. A 17-inch laptop in a 15-inch size loaded with power and a studio-quality display.
                </p>
                <p id="branddesc4" style="display:none;margin:0;">
                    The new award winning XPS 13 2-in-1. Beautifully versatile 2-in-1 design with InfinityEdge display all in a remarkably mobile form factor.
                </p>
                <div class="mt-2">
                    <button id="btnbuybottom" class="btn btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
                </div>
                <div class="nextprev mt-5">
                    <i class="fas fa-chevron-left" onclick="changeBrandBackward()"></i>
                    <p class="brandname" id="brandname1">XPS 13</p>
                    <p class="brandname" id="brandname2" style="display:none;">XPS 15</p>
                    <p class="brandname" id="brandname3" style="display:none;">XPS 17</p>
                    <p class="brandname" id="brandname4" style="display:none;">XPS 13 2in1</p>
                    <i class="fas fa-chevron-right"  onclick="changeBrandForward()"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var value = 1;
    function changeBrandForward(){
        $('#brandname'+value).hide();
        $('#branddesc'+value).hide();
        $('#brandimage'+value).hide();
        $('#btnbuybottom').hide();
        value++;
        if(value == 5)
            value = 1;
        $('#brandname'+value).fadeIn(1000);
        $('#branddesc'+value).fadeIn(1000);
        $('#brandimage'+value).fadeIn(1000);
        $('#btnbuybottom').fadeIn(1000);
    }
    function changeBrandBackward(){
        $('#brandname'+value).hide();
        $('#branddesc'+value).hide();
        $('#brandimage'+value).hide();
        value--;
        if(value == 0)
            value = 4;
        $('#brandname'+value).fadeIn(1000);
        $('#branddesc'+value).fadeIn(1000);
        $('#brandimage'+value).fadeIn(1000);
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