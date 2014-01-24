

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/bootstrap-transition.js"></script>
<script src="./assets/js/bootstrap-alert.js"></script>
<script src="./assets/js/bootstrap-modal.js"></script>
<script src="./assets/js/bootstrap-dropdown.js"></script>
<script src="./assets/js/bootstrap-scrollspy.js"></script>
<script src="./assets/js/bootstrap-tab.js"></script>
<script src="./assets/js/bootstrap-tooltip.js"></script>
<script src="./assets/js/bootstrap-popover.js"></script>
<script src="./assets/js/bootstrap-button.js"></script>
<script src="./assets/js/bootstrap-collapse.js"></script>
<script src="./assets/js/bootstrap-carousel.js"></script>
<script src="./assets/js/bootstrap-typeahead.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery.ajax({
		url: 'http://127.0.0.1:1337',
		type: 'post',
		data: {
			"apikey":"lolbutts",
			"user":"tobias@davistobias.com",
			"query":{
				"box":"INBOX",
				"search":["UNSEEN",["SINCE","Feb 10, 2013"]],
				"headers":["from","to","subject","date"]
			}
		},
		dataType: "json",
		success: function (data, err, ignore) {
			alert(data)
		},
		error: function(ignore, status, error) {
			console.log(ignore)
		}
	})
})
</script>

  </body>
</html>
