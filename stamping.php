<?php include("includes/header.php");?>

<body id="stamping-services">
    <?php include("includes/navigation.php");?>

    <div  id="hero" class=" hidden-xs">
        <div class="tag">
            <h2 class="text-center">Deep Drawn Stamping</h2>
        </div>
    </div>


    <div id="hero2">
        <div class="content">
            <h2>Custom Stamping Services<img src="images/ichthus.png" alt="symbol" height="20" width="72"></h2>
            <p>The custom stampings we offer at Sonfast Corporation include a wide array of different components that are considered to be small to medium in size. Stamping methods used to produce these custom parts include coining, deep drawing, fourslide, high speed, and compound die stamping, to name a few. For high volume applications, robotic processes can be employed to reduce lead times and per piece costs. Our experienced technical support team can assist customers in selecting the ideal production method for their part design, material, and volume needs.</p>
        </div>
    </div>
    <?php include("includes/stamping_spec_tab.php");?>
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