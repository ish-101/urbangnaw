// var and const declarations

var WinWidth, WinHeight;
var MenuFullHeight;
var MenuOpen = 0;
var TotalSlides = 0;
var CurrSlide = 0;
var SlideAnimating = false;
var TotalHomeLinks = 0;
var FMCost = 0;

const MaterialStandardCurve = $.bez([0.4, 0.0, 0.2, 1]);
const SlideChangeDuration = 6000;


// begin

$(document).ready(function(){
	jCookies(function(){
		jReady(function(){
			jResize(function(){
				jScroll(function(){
					jEvents();
				});
			});
		});
	});	
});





// fundamental functions

function jCookies(next){



	next();
}

$(function() {
	$(".outlet-list" ).accordion({
		collapsible: true,
		active: false,
		heightStyle: "content",
		animate: 208,
	});
	$(".fm-list" ).accordion({
		collapsible: true,
		active: false,
		heightStyle: "content",
		animate: 208,
	});
});

function jReady(next){
	$(".full, .page-title").animate({
		"opacity": 1,
	}, 416, MaterialStandardCurve);

	$(".slide").each(function(i){
		TotalSlides = i+1;
		$(".slide-nav").append("<div class='slide-nav-btn' sn-btn-no='" + TotalSlides + "'></div>");
	});

	$(".slideshow").css({"width": TotalSlides + "00%"});
	$(".slide").css({"width": "calc(100%/" + TotalSlides + ")"});

	$(".home-link").each(function(i){
		TotalHomeLinks = i+1;
	});

	$(".home-link").css({"width": "calc(100%/" + TotalHomeLinks + ")"});

	$(".review-done").fadeOut(0);
	$(".buy-done").fadeOut(0);

	$(".noemail").fadeOut(0);

	next();
}

function jResize(next){
	WinWidth = $("html").innerWidth();
	WinHeight = $("html").innerHeight() - 0;

	MenuFullHeight = 0;
	$(".menu > *").each(function(){
		MenuFullHeight += $(this).innerHeight();
	});

	$(".head").css({"height": WinWidth/3});
	$(".head").css({"min-height": WinHeight/2});
	$(".head").css({"max-height": WinHeight*2/3});

	$(".slide-nav").css({"left": (WinWidth - $(".slide-nav").innerWidth())/2 + "px"});

	$(".slide-box").css({"top": ($(".head").innerHeight() - $(".slide-box").innerHeight())/2});

	$(".home-link").css({
		"height": WinHeight - $(".head").innerHeight()});

	$(".map-api").css({
		"height": "calc(" + WinHeight + "px - 9em)",
		"width": "calc(" + ( WinWidth * (0.8) ) + "px - 6em)",
	});

	$(".outlet-list").css({"height": WinHeight});

	$(".fs-1-fixed").css({"max-height": "calc(" + WinHeight + "px - 7em)"});

	$(".fm-cart").css({"max-height": "calc(" + WinHeight + "px - 24em)"});

	next();
}

function jScroll(next){

	next();
}

function jEvents(next){
	$(window).resize(function(){
		jResize(function(){
			jScroll();
		});	
	});

	$(window).scroll(function(){
		jScroll();
	});

	$(".menu-top-btn").click(function(){
		Menu(function(){});
	});

	$(".full").click(function(){
		if (MenuOpen)
		{
			Menu(function(){});
		}
	});

	$("a").click(function(event){
		if ($(this).attr("target") != "map")
		{
			event.preventDefault();
			Link($(this));
		}
	});

	_Slide();

	$(".slide-nav-btn").click(function(){
		Slide(Number($(this).attr("sn-btn-no")));
	});

	$("input[type='text'], input[type='email']").change(function(){
		if ($(this).val())
		{
			$(".about-you-" + $(this).attr('name')).addClass("about-you-active");
		}
		else
		{
			$(".about-you-" + $(this).attr('name')).removeClass("about-you-active");
		}
	});

	$("form[name='review']").submit(function(event){
		event.preventDefault();
		Review($(this));
	});

	$(".fm-group tr").click(function(){
		AddFMItem($(this));
	});

	UpdateFM();	

	$("form[name='buy']").submit(function(event){
		event.preventDefault();
		Buy();
	});


	next();
}




// main functions

var MenuHambIcon = document.getElementById("menu-hamb-icon");

function Menu(next)
{
	IconReset(MenuHambIcon);
	if (MenuOpen == 0)
	{
		MenuOpen = 2;
		$(".menu-top-btn > .menu-icon").css({ "-webkit-animation-direction": "normal", "-webkit-animation-play-state": "running",});
		$(".menu").animate({
			"width": "16em",
			"border-radius": "0.25em",
		}, 208, MaterialStandardCurve, function()
		{
			$(".menu").animate({
				"height": MenuFullHeight + "px"
			}, 208,  MaterialStandardCurve, function(){
				MenuOpen = 1;
				next();
			});
		});
	}
	else if (MenuOpen == 1)
	{
		MenuOpen = 2;
		$(".menu-top-btn > .menu-icon").css({ "-webkit-animation-direction": "reverse", "-webkit-animation-play-state": "running",});
		$(".menu").animate({
			"height": "4em",
		}, 208,  MaterialStandardCurve, function()
		{
			$(".menu").animate({
				"width": "4em",
				"border-radius": "2em",
			}, 208,  MaterialStandardCurve, function(){
				MenuOpen = 0;
				next();
			});
		});
	}
}

function IconReset(el)
{
	el.classList.remove("icon-sprite");
	void el.offsetWidth;
	el.classList.add("icon-sprite");
}

function Link(el)
{
	if (el.attr("href"))
	{
		if (MenuOpen == 1)
		{
			Menu(function(){
				$(".full, .page-title").animate({
					"opacity": 0,
				}, 416, MaterialStandardCurve,
				function(){
					 window.location.assign(el.attr("href"));
				});
			});
		}
		else
		{
			$(".full").animate({
				"opacity": 0,
			}, 416, MaterialStandardCurve,
			function(){
				 window.location.assign(el.attr("href"));
			});
		}
	}
}


function _Slide()
{
	Slide(1);

	var SlideTimer = setInterval(function(){
		if (CurrSlide == TotalSlides)
		{
			Slide(1);
		}
		else
		{
			Slide(CurrSlide+1);
		}
	}, SlideChangeDuration);
}


function Slide(n)
{
	if (!SlideAnimating)
	{
		SlideAnimating = true;
		console.log(n);
		$(".slide-nav-btn").removeClass("slide-nav-btn-active");
		$(".slide-nav-btn[sn-btn-no='" + n +"']").addClass("slide-nav-btn-active");
		$(".slideshow").animate({
			"left": "-" + Number(n - 1) + "00%",
		}, 416 * Math.abs(CurrSlide - n) , MaterialStandardCurve, function(){
			CurrSlide = n;
			SlideAnimating = false;
		});
	}
}

function Review(el)
{
	var formloc = "form[name='" + el.attr("name") + "'] ";
	var name = $(formloc + "input[name='name']").val();
	var email = $(formloc + "input[name='email']").val();

	if (email && name)
	{
		$(".review").fadeOut(function(){
			$(".review-done").fadeIn();
		});
		$.post("/mail/review-mail.php", el.serialize(), function(data) {
			if (data == "yesyes")
			{
				$(".review-done-head").html("Sent <i class='material-icons'>done</i>").addClass("review-done-sent");
				$(".review-done-body").html("Thanks for the review! Check your E-Mail.");
			}
			else if ((data == "gnawgnaw") || (data == "gnawyes") || (data == "yesgnaw"))
			{
				$(".review-done-head").html("Error <i class='material-icons'>clear</i>").addClass("review-done-error");
				$(".review-done-body").html("Somewhere, something went wrong.");
			}
			else
			{
				$(".review-done-head").html("h@x@r").addClass("review-done-hack");
				$(".review-done-body").html("#pr0 h@x@r");
			}
		});
	}
	else
	{
		$(".review-output").html("Who are you?");
	}
}


function AddFMItem(el)
{
	var elclone = el.clone();
	$(".fm-cart table").append(elclone);
	UpdateFM();
	elclone.click(function(){
		RemoveFMItem(elclone);
	});
}

function RemoveFMItem(el)
{
	el.remove();
	UpdateFM();
}

function UpdateFM()
{
	FMCost = 0;
	$(".fm-cart tr").each(function(index, value){
		FMCost += Number($(value).find("td:nth-child(2)").html());
	});
	if (FMCost == 0)
	{
		$(".noitem").fadeIn(0);
	}
	else
	{
		$(".noitem").fadeOut(0);
	}
	$(".cost").html(FMCost);
}


function Buy()
{
	var formloc = "form[name='" + "buy" + "'] ";
	var email = $(formloc + "input[name='email']").val();

	if (email && (FMCost > 0))
	{
		$(".fs-1-fixed > *:not(.buy-done)").fadeOut(function(){
			$(".buy-done").fadeIn();
		});
		$.post("/mail/buy-mail.php", {email: email, cost: FMCost}, function(data) {
			if (data == "yesyes")
			{
				$(".buy-done-head").html("Order Placed <i class='material-icons'>done</i>").addClass("buy-done-sent");
				$(".buy-done-body").html("Check your E-Mail for the details.");
			}
			else if ((data == "gnawgnaw") || (data == "gnawyes") || (data == "yesgnaw"))
			{
				$(".buy-done-head").html("Could not place the Order <i class='material-icons'>clear</i>").addClass("buy-done-error");
				$(".buy-done-body").html("Somewhere, something went wrong.");
			}
			else
			{
				$(".buy-done-head").html("h@x@r").addClass("buy-done-hack");
				$(".buy-done-body").html("#pr0 h@x@r");
			}
		});
	}
	else
	{
		$(".noemail").fadeIn();
	}
}


// utility functions