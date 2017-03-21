 window.onload = function () {
			if(!document.getElementsByClassName){
			    document.getElementsByClassName = function(className, element){
				    var children = (element || document).getElementsByTagName('*');
				    var elements = new Array();
				    for (var k=0; k<children.length; k++){
				        var child = children[k];
				        var classNames = child.className.split(' ');
				        for (var j=0; j<classNames.length; j++){
					        if (classNames[j] == className){ 
					        	elements.push(child);
					        	break;
					        }
				        }
	    			} 
    			return elements;
    		};}   
            var sct = document.getElementsByClassName("shopClass-item");
            
            for(var i = 0; i < sct.length; i++) {
            	sct[i].onmouseover = function(){
            		this.className = "shopClass-item shopClass-active";                     
                }
                sct[i].onmouseout = function(){
                	this.className = "shopClass-item";                           
                }                        
            }
}