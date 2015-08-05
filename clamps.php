<?php include("includes/header.php");?>

<body id="clamp-services">
    <?php include("includes/navigation.php");?>

    <div  id="hero" class=" hidden-xs">
        <div class="tag">
            <h2 class="text-center">Custom Hose and Cable Clamps</h2>
        </div>
    </div>


    <div id="hero2">
        <div class="content">
            <h2>Custom Clamp Services<img src="images/ichthus.png" alt="symbol" height="20" width="72"></h2>
            <p>
                At Sonfast Corporation, we provide a wide selection of custom hose and cable clamps to fit any industrial or consumer application. Hose and cable clamps are available in premium quality carbon steel, stainless steel, and nylon materials with minimums as low as 2,500 units. Steel clamps can be plated in zinc or coated in black phosphate, while stainless steel and nylon do not typically require extraneous coatings. Quality hose clamps are essential to keeping equipment safe and secure. Whether the application is air, fuel, or hydraulic fluid, leaks can lead to power loss or overheating and pose risks to those operating the machinery or working in the surround area. Our technical support services include design and engineering assistance as needed in the development of new parts, as well as the ability to work from customer provided prints.
            </p>
        </div>
    </div>
    <?php include("includes/clamp_spec_tab.php");?>
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