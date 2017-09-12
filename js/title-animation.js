/********************************

Credits
Original Author: Andrew Burton
CodePen: https://codepen.io/onge/

*********************************/


$(function(){
	// Our selector
	var $copy = $("h6");
	
	// Use lettering.js to wrap each character & word in a span tag
	$copy.lettering();

	// Our declations	
	var $span = $("span");
	var length = $span.length;
	var array = [];
	
	// Push reference to our array
	for(var i=1; i<=length; i++)
		array.push(i);
	
	// Randomise array
	shuffleArray(array);
	
	// Wrap each word in its own div so words don't split on line break
	$copy.wrapInner('<span class="word"></span>');
	var regEx = new RegExp(/<span class=\"char(\d+)\"> <\/span>/g);
	$copy.html($copy.html().replace(regEx,'</span><span class="word">'));
	
	// Fire first animation
	setTimeout(function(){
		animateLetters(array,length,true);
	},500);
});

// Animate the letters
function animateLetters(array,length,animIn)
{	
	// Scale in or out?
	var scale = (animIn) ? 1 : 1.5;
	
	// Arrange array ordering
	var arrayToUse = (animIn) ? array : array.reverse();
	
	// Opacity value to use
	var opacity = (animIn) ? 1 : 0;
	
	// Loop through each letter, adding inline styles
	for(var i=0; i<=length; i++)
	{
		$(".char" + arrayToUse[i]).attr("style","opacity: " + opacity + "; transition-delay: " + (50 * i) + "ms; transform:perspective(1050px) rotateY(0deg) scale(" + scale + "); -webkit-transition-delay: " + (50 * i) + "ms; -webkit-transform:perspective(1050px) rotateY(0deg) scale(" + scale + ");");
	}
}

    // Randomize array element order in-place. Using Fisher-Yates shuffle algorithm.
function shuffleArray(array)
{
    for (var i=array.length -1; i>0; i--)
	{
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}