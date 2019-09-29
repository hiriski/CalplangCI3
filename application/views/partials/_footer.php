<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="footer container-fluid">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-footer-menu">
                        <ul>
                            <li><a href="<?php echo base_url();?>">Beranda</a></li>
                            <li><a href="<?php echo base_url();?>tentang-kami">Tentang Kami</a></li>
                            <li><a href="<?php echo base_url();?>produk">Produk</a></li>
                            <li><a href="<?php echo base_url();?>layanan">Layanan</a></li>
                            <li><a href="<?php echo base_url();?>mitra-kerja">Mitra Kerja</a></li>
                            <li><a href="<?php echo base_url();?>contact">Hubungi Kami</a></li>
                        </ul>        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">© Copyright 2019 PT. Caplang Energi Sejahtera</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/new-js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/new-js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/new-js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/new-js/main.js"></script>


<script>
var stateObj = {
    dataJs : "data-js",
    themeStyle: "theme-style",
    headerStyle: "header-style",
    left : "left",
    fixed : "fixed",
    push: "push",
    open: "open",
    show: "show",
    closed: "closed"
};

/* Change header style */
function headerJs() {
    var headerTag = document.getElementById("nav");
    window.addEventListener("scroll", () => {
        if(window.scrollY > 100) {
            headerTag.setAttribute(this.headerStyle, this.fixed);
        }
        else {
            headerTag.setAttribute(this.headerStyle,"default");
        }
    });
}
headerJs.call(stateObj);
</script>

</body>
</html>