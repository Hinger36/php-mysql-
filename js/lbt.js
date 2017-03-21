 
var container = document.getElementById("container");
var buttons = document.getElementById("buttons").getElementsByTagName("span");
var list = document.getElementById("list")
var prev = document.getElementById('prev');
var next = document.getElementById('next');
var index = 1;
var animated = false;
var timer;   
function showbutton () {
	for (var i = 0; i < buttons.length; i++) {
		if (buttons[i].className == "active"){
			buttons[i].className = "";
			break;
		}
	}
	buttons[index-1].className = "active";

}
for(var i = 0; i < buttons.length; i++) {
    buttons[i].onmouseover = function () {
        if (animated) {
                return;
            }
        if (this.className == 'on') {
            return;
            }
        var myindex = parseInt(this.getAttribute("index"));
        var myoff = -810*(myindex-index);
        if (!animated) {
             animate(myoff);
        }
        index = myindex;
        showbutton ();
    }
}
function animate (offset) {
	var time = 300;
		var interval = 10;
	var speed = offset/(time/interval);
	animated = true;
	var newleft = parseInt(list.style.left) + offset;
	function go () {

		if ( (speed > 0 && parseInt(list.style.left) < newleft) || (speed < 0 && parseInt(list.style.left) > newleft)) {
        	list.style.left = parseInt(list.style.left) + speed +"px" ;
        	setTimeout(go,interval);
        }
        else {
        	animated = false;
			if (newleft < -2430) {
				list.style.left = "-810px" ;
			}

  			if (newleft > -810) {
    			list.style.left = "-2430px" ;
    		}
		}
    }
    go ();
	
	
}

function play () {
	timer = setInterval(function () {
		next.onclick ();
	},2000);
}
function stop () {
	clearInterval(timer);
}

next.onclick = function (){
	if (animated) {
		return;
	}
	if (index == 3) {
		index = 1;
	}
	else {
		index +=1;
	}
	if (!animated) {
		animate (-810);
	} 
	showbutton ();
}
prev.onclick = function (){
	if (animated) {
		return;
	}
	if (index == 1) {
		index = 3;
	}
	else {
		index -=1;
	}
	if (!animated) {
    	animate (810);
    }
	showbutton ();
}
container.onmouseover = stop;
container.onmouseout = play;
play ()
	