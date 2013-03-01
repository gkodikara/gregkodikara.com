$(document).ready(function(){
	
	var oHomepage = {

		fnInitMain: function(){
			var self = this;
			self.fnInitChangePage();

		},

		fnInitChangePage: function(){
			$(".menu-link").click(function(){
				var sTarget = $(this).attr("target");
				$(".main-body .page").not($("." + sTarget)).hide();
				$("." + sTarget).fadeIn(100);
			});
		}

	};

	oHomepage.fnInitMain();


});