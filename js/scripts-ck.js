/* Custom Scripts go here */$(document).ready(function(){$(".fittext-think").fitText(.3);$(".fittext-red").fitText(.2);$(".fittext-game").fitText(1.1);$(".fittext-brave").fitText(1.4);$(window).scroll(function(){$(".side-nav li a.active").removeClass("active");var e=$(window).scrollTop();if(e<=$(window).height()-280){$(".one").addClass("active");$(".side-nav li a").removeAttr("style")}else if(e<=$(window).height()+340){$(".two").addClass("active").css({background:"#e74c3b"});$(".side-nav li a").css({"border-color":"#e74c3b"})}else if(e<=$(window).height()+960){$(".three").addClass("active");$(".side-nav li a").removeAttr("style")}else if(e<=$(window).height()+1580){$(".four").addClass("active").css({background:"#e74c3b"});$(".side-nav li a").css({"border-color":"#e74c3b"})}else if(e<=$(window).height()+2200){$(".five").addClass("active");$(".side-nav li a").removeAttr("style")}else $(".side-nav li a").removeAttr("style")});$(".choc-7").html('<div class="bubble">Sorry</div>');$(".choc-10").html('<div class="bubble">Nope</div>');$(".choc-14").html('<div class="bubble">Never!</div>');$(".choc-15").html('<div class="bubble">Nice try</div>');$(".choc-21").html('<div class="bubble">Eh...</div>');$(".choc-27").html('<div class="bubble">Not Telling</div>');$(".choc-32").html('<div class="bubble">Nah</div>');$(".choc-37").html('<div class="bubble">No way!</div>');(new WOW).init();var e=function(){};e();$(window).resize(function(){e()});$("label").inFieldLabels();$(".back-top").click(function(){$("body,html").animate({scrollTop:0},800);return!1});(function(e){var t=e(".accordion > dd").hide();e(".accordion > dt > a").click(function(){t.slideUp();e(this).parent().next().is(":hidden")&&e(this).parent().next().slideDown();return!1})})(jQuery);(function(e){e(".volunteer-opportunities .accordion > dt > a").click(function(){e(this).parent().next().is(":hidden")&&e(this).parent().next().slideDown();return!1})})(jQuery);$("input, textarea").focus(function(){$(this).addClass("curFocus")});$("input, textarea").blur(function(){$(this).removeClass("curFocus")});var t=$("select#input_1_4_4");t.find('option[value="Virginia"]').text("VA")});