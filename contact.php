
<?php include("includes/header_nav.php");?>

<body id="contact" >
    <?php include("includes/navigation.php");?>

    <div id="hero" class="text-uppercase ">
        <h2 class="space">Contact Us</h2>
    </div>


    <div class="modal fade" id="bioModal" tabindex="-1" role="dialog" aria-labelledby="bioModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="bioModalLabel">New message</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <p></p><!-- this is where the bio will go -->
                    </div>
<!--                    <form>-->
<!--                        <div class="form-group">-->
<!--                            <label for="recipient-name" class="control-label">Recipient:</label>-->
<!--                            <input type="text" class="form-control" id="recipient-name">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="message-text" class="control-label">Message:</label>-->
<!--                            <textarea class="form-control" id="message-text"></textarea>-->
<!--                        </div>-->
<!--                    </form>-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



    <div id="hero2">
        <div class="map-space">
            <div id="map"   >
            </div>
            <div id="map2">

            </div>
        </div>


        <div id="contact-info" class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-uppercase" >Sonfast</h2>
                </div>
                <div class="col-md-8 ">
                    <ul class="list-unstyled">
                        <li>Toll Free: 800.565.1439</li>
                        <li>Fax: 864.834.7277</li>
                        <li><a href="mailto:sales@sonfast.com?subject=More%20Information">Inquiries: sales@sonfast.com</a></li>
                    </ul>

                </div>

            </div>
            <div class="row">
                <div >
                    <p class="text-right small">450 Stamey Valley Rd. Travelers Rest, SC 29690</p>
                    <p class="text-right small">250 Alisa St. Somerset, PA 15501</p>
                </div>
            </div>

            <div class="row">
                <p  >Sales Team</p>
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-xs-6 center">
                            <h6>Southeast Sales:</h6>
                            <div class="pic"><img class="img-rounded img-responsive" src="images/paul.png" alt="picture"/>
                            </div>
                            <h5>Paul A. Pappy</h5>
                            <div class="h7"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>  864.884.9158</div>

                            <div class="h7"><a href="mailto:paul@sonfast.com?subject=More%20Information"><span class="glyphicon glyphicon-envelope"></span>  paul@sonfast.com</a></div>
                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#bioModal" data-bio="paulBio">Paul's Bio</button>
                        </div>
                        <div class="col-xs-6 center">
                            <h6>Northeast Sales:</h6>
                            <div class="pic">
                                <img class="img-rounded img-responsive" src="images/doug2.jpg" alt="picture"/>
                            </div>
                            <h5> Doug Darr</h5>
                            <div class="h7"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>  814.701.1168</div>
                            <div class="h7"><a href="mailto:darrsom@aol.com?subject=More%20Information""><span class="glyphicon glyphicon-envelope"></span>  darrsom@aol.com</a></div>
                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#bioModal" data-bio="dougBio">Doug's Bio</button>
                        </div>
                    </div>


                </div>

            </div>
        </div>
</div>
    <?php
    //include("includes/standards.php");
    include("includes/footer.php")
    ?>
</body>
</html>