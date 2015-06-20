$(document).ready(function(){
			
			
			$(".back,.backline").mouseenter(function(){
				$(".back").show().unbind('click');
				return true;
				
			});

			$(".backline,.back").mouseleave(function(){
				$(".back").show();
				
			});
		});