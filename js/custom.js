/**
 * Created by Jason Ohr on 11/21/14.
 */
$(function () {
    var paulBio = {name:"Paul A. Pappy", bio: "Paul lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda beatae, eaque et ex excepturi exercitationem illum labore minus nam necessitatibus quasi qui quisquam reiciendis repudiandae ullam ut veritatis voluptatem?"};
    var dougBio = {name:"Doug Darr", bio: "Doug lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda beatae, eaque et ex excepturi exercitationem illum labore minus nam necessitatibus quasi qui quisquam reiciendis repudiandae ullam ut veritatis voluptatem?"};

    $('#bioModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        console.log(button.data('bio'));
        var bioButton = function(){
            if(button.data('bio') === 'paulBio'){
                return paulBio;
            }else if (button.data('bio') === 'dougBio'){
                return dougBio;
            }else {
                return "hi";
            }
        };

        var recipient = bioButton();  //Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text(recipient.name);
        modal.find('.modal-body p').text(recipient.bio);
    });

  var index = 0;
  var verses = [
    ['Do not worry about how you will speak. For it will be given to you in that hour what you should speak. For it is not you who speaks, but the Spirit of your Father who speaks in you.','Mathew 13:19-20'],
    ['For I know the plans I have for you,” declares the LORD, “plans to prosper you and not to harm you, plans to give you hope and a future.','Jeremiah 29:11 (NIV)'],
    ['And we know that in all things God works for the good of those who love him, who have been called according to His purpose.','Romans 8:28 (NIV)'],
    ['The steps of a good man are ordered by the LORD: and he delights in his way.','Psalms 37:23 (KJV)'],
    ['The Lord is my strength and my shield; in him my heart trusts, and I am helped; my heart exalts, and with my song I give thanks to him.','Psalms 28:7'],
    ['Delight yourself in the Lord, and he will give you the desires of your heart.','Psalms 37:4'],
    ['This is the day that the Lord has made; let us rejoice and be glad in it.','Psalms 118:24'],
    ['Keep steady my steps according to your promise, and let no iniquity get dominion over me.','Psalms 119:133'],
    ['Trust in the Lord with all your heart, and do not lean on your own understanding. 6 In all your ways acknowledge him, and he will make your path straight.','Proverbs 3:5-6']

  ];

  function showVerse(){
    var ver = $('.verses');
    var v;
    var b;
    ver.fadeOut(1000,function(){
      if(index < verses.length){
        v = verses[index][0];
        b = verses[index][1];
        $('.verse').text(function(){return v;});
        $('.book').text(function(){return b});
      }
      index++;
      if(index == verses.length) index = 0;
    });
    ver.fadeIn(900);
    setTimeout(showVerse,13000);
  }
  showVerse();

    $.fn.addLink = function(name){

        $(this).parent().addClass('active');
        $(this).parent().find("a:contains('" + name + "')").parent().addClass('active');
    };

    $("#sonfast a:contains('sonfast')").parent().addClass('active');
    $("#agriculture a:contains('Industry Focus')").parent().addClass('active');

    $("#springs a:contains('Products')").addLink("Compression Springs");
    $("#stamping-services a:contains('Products')").addLink("Stamping Services");
    $("#fastener-services a:contains('Products')").addLink("Fasteners");
    $("#wire-forms a:contains('Products')").addLink("Wire Forms");
    $("#gasket-services a:contains('Products')").addLink("Rubber Items");
    $("#clamp-services a:contains('Products')").addLink("Hose Clamps");


    $("#wire-forms a:contains('Products')").parent().addClass('active');
    $("#about a:contains('About')").parent().addClass('active');
    var $image = $(".content h2 img");//> img[src="images//symbol.jpg"]
    $image.attr({
      src: 'images/ichthus.png',
      height: 20,
      width: 72
    });

//    $("#pa-canvas").hide();
//    $("#contact-info button").click(function(){
//        $("#sc-canvas").toggle();
//        $('#pa-canvas').toggle();
//    });
    //
    //$(".btn-group button:eq(0)").addClass("active");
//    $(".btn-grp button").on("click",function(){
//        alert("hi");
//        $(".btn-group button:eq(0)").removeClass("active");
//    });
  $.fn.focusWithoutScrolling = function(){
    var x = window.scrollX, y = window.scrollY;
    this.focus();
    window.scrollTo(x, y);
  };

    var title = $('body').attr('id');
    title = title.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    document.title = title;
    $("li.list-group-item:odd").css("background-color","rgba(0,0,139,0.2)");
    $('.btn-group-justified button[href="#1"]').focusWithoutScrolling();
});