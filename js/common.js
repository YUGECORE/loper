$('.searchbarswitch').toggle(function(){$(".searchbar").animate({marginTop:"15px"},"slow")
$(".searchfade").fadeIn("slow");},function(){$(".searchbar").animate({marginTop:"0px"},"slow")
$(".searchfade").fadeOut("slow");});

jQuery(function () {
jQuery('img').hover(
function() {jQuery(this).fadeTo("slow", 0.8);},
function() {jQuery(this).fadeTo("slow", 1);
});
});

function grin(tag) {
	var myField;
	tag = ' ' + tag + ' ';
	if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
		myField = document.getElementById('comment');
	} else {
		return false;
	}
	if (document.selection) {
		myField.focus();
		sel = document.selection.createRange();
		sel.text = tag;
		myField.focus();
	}
	else if (myField.selectionStart || myField.selectionStart == '0') {
		var startPos = myField.selectionStart;
		var endPos = myField.selectionEnd;
		var cursorPos = endPos;
		myField.value = myField.value.substring(0, startPos)
					  + tag
					  + myField.value.substring(endPos, myField.value.length);
		cursorPos += tag.length;
		myField.focus();
		myField.selectionStart = cursorPos;
		myField.selectionEnd = cursorPos;
	}
	else {
		myField.value += tag;
		myField.focus();
	}
}

$("#circletext").text("加载肿");
$(window).load(function() {
$("#circle").fadeOut(400);
$("#circle1").fadeOut(600);
$("#circletext").text("完成鸟").fadeOut(800);
});

$('#updown').click(function(){
	$('html,body').animate({scrollTop:0},500);
});

$('#downup').click(function(){
	$('html,body').animate({scrollTop:document.body.clientHeight},500);
});

$(window).scroll(function(){
	if($(this).scrollTop()>500){
		$('#updown,#downup').fadeIn()
	}
	else{
		$('#updown,#downup').fadeOut()
	}
});

$('.mytitle a').click(function(e) {
	e.preventDefault();
	var htm = '正在加载中..',
	i = 9,
	t = $(this).html(htm).unbind('click');
	(function ct() {
		i < 0 ? (i = 9, t.html(htm), ct()) : (t[0].innerHTML += '.', i--, setTimeout(ct, 100))
	})();
	window.location = this.href

});

$('.wechatsns').click(function(){
	$('.bg').fadeIn(200);
	$('.weixin').fadeIn(200);
});
$('.weixin .close').click(function(){
	$('.bg').fadeOut(200);
	$('.weixin').fadeOut(200);
});

$(".post-content a[href$=jpg],.post-content a[href$=gif],.post-content a[href$=png],.post-content a[href$=jpeg],.post-content a[href$=bmp],.post-content a[href$=JPG],.post-content a[href$=GIF],.post-content a[href$=PNG],.post-content a[href$=JPEG],.post-content a[href$=BMP]").fancybox();

var b = 0 ; 
setTimeout("birth()", 500);
function birth() { 
	document.getElementById("text").innerHTML = a.substring(0, b);
	if (b == a.length){ 
		setTimeout("b=0",500);
	} 
	else{
		b++;
	}
	setTimeout("birth()", 200); 
}