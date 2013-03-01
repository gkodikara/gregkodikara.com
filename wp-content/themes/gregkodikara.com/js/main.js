$(document).ready(function(){
	
	var oHomepage = {

		fnInitMain: function(){
			var self = this;
			self.fnInitChangePage();

		},

		fnInitChangePage: function(){
			$(".menu-link").click(function(){
				var sTarget = $(this).attr("target");
				$(".main-body .show").removeClass("show");
				$("."+sTarget).addClass("show");
			});
		}

	};

	oHomepage.fnInitMain();


});