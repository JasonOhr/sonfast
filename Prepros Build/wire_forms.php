<?php include("includes/header.php");?>

<body id="wire-forms">
    <?php include("includes/navigation.php");?>

    <div  id="hero" class=" hidden-xs">
        <div class="tag">
            <h2 class="text-center">Custom Wire Forms</h2>
        </div>
    </div>


    <div id="hero2">
        <div class="content">
            <h2>Wire Forms<img src="images/ichthus.png" alt="symbol" height="20" width="72"></h2>
            <p>The custom wire forms we supply at Sonfast Corporation are used as brackets, clips, and other mechanical components by customers in a wide range of industries. Our focus on providing personal customer service and premium quality components has led to strong relationships with automotive, medical, and consumer goods OEM customers as well as manufacturers who serve the defense industry. Wire forms are available in carbon steel, alloy steel, stainless steel, and brass materials that meet stringent quality standards. In addition to cutting, bending, and rolling processes, we can incorporate secondary machining processes to create chamfered, threaded, and pierced ends, according to customer provided prints. Our technical support is unrivaled in the industry and includes engineering consultation, design for manufacturing, and inventory management services.</p>
        </div>
    </div>
    <?php include("includes/form_spec_tab.php");?>
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