<?php include("includes/header.php");?>

<body id="fastener-services">
    <?php include("includes/navigation.php");?>

    <div  id="hero" class=" hidden-xs">
        <div class="tag">
            <h2 class="text-center">Custom Fasteners</h2>
        </div>
    </div>


    <div id="hero2">
        <div class="content">
            <h2>Custom Fastener Services<img src="images/ichthus.png" alt="symbol" height="20" width="72"></h2>
            <p>At Sonfast Corporation, we are capable of designing, manufacturing, and distributing a wide array of custom cold headed fasteners. We produce bolts, caps, clips, studs washers, and many other fastener types from steel, stainless steel, copper, and other metal materials. Cold heading is a process wherein the selected material is forced into the desired shape using pressure. Compared to milling or screw machining, cold heading is a very lean process, as it results in little to no material waste. Especially in designs which feature a large difference in diameter, cold heading can provide a significant cost savings due to the material savings. We can provide design and engineering assistance to support new part development or work from a set of given specifications, depending on the customers' needs. Virtually any desired finish such as anodizing, plating, or dry lubricant application can be arranged through a partner vendor.
            </p>
        </div>
    </div>
    <?php include("includes/fastener_spec_tab.php");?>
    <?php
        include("includes/standards.php");
        include("includes/footer.php");
    ?>

    <script>
        $( function() {
            $('.nav-tabs a:first').tab('show');
        } );
    </script>


</body>
</html>
<?php
/**
 * Created by Jason Ohr on 11/21/14.
 */

?>