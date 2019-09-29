<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Start Footer Section -->

<footer id="footer" class="_inlineBlock">
<div class="footer">
<?php 
// load copyright
$this->load->view("partials/_copyright");
?>
</div>
</footer>


</div> <!-- #start -->
</div> <!-- #RiskidotWebdotID -->

<script src="<?php base_url();?>assets/sources/javascript/RiskidotWebdotID.js"></script>

<script>
var right = document.getElementById("xleft");
right.style.backgroundImage = "url(\"<?php echo base_url();?>assets/img/me/aboutMeBg.jpg\")";
</script>

</body>
</html>