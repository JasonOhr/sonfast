<?php include("includes/header.php");?>

<body id="springs">
    <?php include("includes/navigation.php");?>

    <div  id="hero" class=" hidden-xs">
        <div class="tag">
            <h2 class="text-center">We've got Springs!</h2>
        </div>
    </div>


    <div id="hero2">
        <div class="content">
            <h2>Custom Springs<img src="images/ichthus.png" alt="symbol" height="20" width="72"></h2>
            <p>The primary types of custom springs we provide at Sonfast Corporation include compression, extension, Bellville, leaf, and torsion springs, in addition to an array of specialty spring types made from flat or round wire stock. Springs are available in a number of carbon steel, alloy steel, stainless steel, and brass grades, all of which are produced of high quality, ASTM/SAE grade material. Customization options such as closed or open ends, hooks, and hinges, can all be incorporated into the spring design. Custom springs are manufactured either in accordance with customer provided prints, or by specifications that are determined in collaboration with our technical support team. Numerous finishing options which include everything from a simple cleaned and oiled finish to custom colored powder coating are also available.</p>
        </div>
    </div>
    <?php include("includes/spring_spec_tab.php");?>
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