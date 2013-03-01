$(document).ready(function(){
	
	var oHomepage = {

		fnInitMain: function(){


		},

		fnChangePage: function(){
			$(".menu-link").click(function(){
				var sTarget = $(this).attr("target");
				$(".main-body .page").hide();
				$("."+sTarget).show();
			});
		}

	};

	oHomepage.fnInitMain();


});