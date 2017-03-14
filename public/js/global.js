/*
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

$(document).ready(function(){
	
	$('.search-filter').each(function(){
		var $this 		= $(this),
			name 		= $this.attr('name'),
			param 		= getQueryVariable(name);
		
		if(param){
			$this.val(param);
		}
		
	});
	
	$('.search-filter').on('change',function(name){
		var $this 		= $(this),
			name 		= $this.attr('name'),
			value		= $this.val(),
			param	 	= getQueryVariable(name),
			currentUrl	= window.location.href,
			url 		= '';
		
		if(value.length == 0){
			if(currentUrl.indexOf('?') > -1){
				url = currentUrl.replace('?' + name + '=' + param,'');
			} else {
				url = currentUrl.replace('&' + name + '=' + param,'');
			}
		} else {
			if(currentUrl.indexOf('?') > -1){
				if(param){
					if(param.length > 0){
						url = currentUrl.replace(name + '=' + param, name + '=' + value); 
					}
				} else {
					url = currentUrl + '&' + name + '=' + value; 
				}
			} else {
				url = currentUrl + '?' + name + '=' + value; 
			}
		}
		
		window.location.href = url;
		
	});
	
});
*/