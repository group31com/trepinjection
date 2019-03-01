(function($) {

	$(document).ready(function() {

		$("#modal-fda-link").click(function() {
			$("#modal-fda").show();
		});
		$("#modal-fda .continue-button").click(function() {
			$("#modal-fda").hide();
		});
		$("#modal-fda .cancel-button").click(function() {
			$("#modal-fda").hide();
		});

		$("#modal-privacy-link").click(function() {
			$("#modal-privacy").show();
		});
		$("#modal-privacy .continue-button").click(function() {
			$("#modal-privacy").hide();
		});
		$("#modal-privacy .cancel-button").click(function() {
			$("#modal-privacy").hide();
		});

		$("#modal-terms-link").click(function() {
			$("#modal-terms").show();
		});
		$("#modal-terms .continue-button").click(function() {
			$("#modal-terms").hide();
		});
		$("#modal-terms .cancel-button").click(function() {
			$("#modal-terms").hide();
		});

		$("#modal-contact-link").click(function() {
			$("#modal-contact").show();
		});
		$("#modal-contact .continue-button").click(function() {
			$("#modal-contact").hide();
		});
		$("#modal-contact .cancel-button").click(function() {
			$("#modal-contact").hide();
		});

		$("#modal-sandoz-link").click(function() {
			$("#modal-sandoz").show();
		});
		$("#modal-sandoz .continue-button").click(function() {
			$("#modal-sandoz").hide();
		});
		$("#modal-sandoz .cancel-button").click(function() {
			$("#modal-sandoz").hide();
		});

		$("#modal-raregen-link").click(function() {
			$("#modal-raregen").show();
		});
		$("#modal-raregen .continue-button").click(function() {
			$("#modal-raregen").hide();
		});
		$("#modal-raregen .cancel-button").click(function() {
			$("#modal-raregen").hide();
		});

		$("#modal-pha-link").click(function() {
			$("#modal-pha").show();
		});
		$("#modal-pha .continue-button").click(function() {
			$("#modal-pha").hide();
		});
		$("#modal-pha .cancel-button").click(function() {
			$("#modal-pha").hide();
		});

		$("#modal-aha-link").click(function() {
			$("#modal-aha").show();
		});
		$("#modal-aha .continue-button").click(function() {
			$("#modal-aha").hide();
		});
		$("#modal-aha .cancel-button").click(function() {
			$("#modal-aha").hide();
		});

		$("#modal-hcp-link").click(function() {
			$("#modal-hcp").show();
		});
		$("#modal-hcp .cancel-button").click(function() {
			$("#modal-hcp").hide();
		});

		$("#modal-hcpmobile-link").click(function() {
			$("#modal-hcpmobile").show();
		});
		$("#modal-hcpmobile .cancel-button").click(function() {
			$("#modal-hcpmobile").hide();
		});

		$("#modal-trial-link").click(function() {
			$("#modal-trial").show();
		});
		$("#modal-trial .continue-button").click(function() {
			$("#modal-trial").hide();
		});
		$("#modal-trial .cancel-button").click(function() {
			$("#modal-trial").hide();
		});

	});

	$(document).scroll(function () {
		var y = $(this).scrollTop();
		if (y > 800) {
			$('#stickyisi').fadeOut();
		} else {
			$('#stickyisi').fadeIn();
		}

	});
	
})( jQuery );