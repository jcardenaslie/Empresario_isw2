
    $(document).ready(function() {
        $("div.pages.lugar1").fadeIn("slow");  
          
        $("a.list-group-item").on("click", function() {

          
            //If the element is not active
            if (!$(this).hasClass("active")) {
                $("a.active").removeClass("active");
                $(this).addClass("active");
                //Hide div page shown
                $("div.pages").hide();

                //List of div/pages to show or hide

                if ($(this).hasClass("lugar2")) {
                    $("div.pages.lugar2").fadeIn("slow");    
                }

                if ($(this).hasClass("lugar1")) {
                    $("div.pages.lugar1").fadeIn("slow");  
                }
                if ($(this).hasClass("lugar3")) {
                    $("div.pages.lugar3").fadeIn("slow");    
                }

                if ($(this).hasClass("lugar4")) {
                    $("div.pages.lugar4").fadeIn("slow");  
                }

                if ($(this).hasClass("lugar5")) {
                    $("div.pages.lugar5").fadeIn("slow");    
                }

                if ($(this).hasClass("lugar6")) {
                    $("div.pages.lugar6").fadeIn("slow");  
                }

                

                if ($(this).hasClass("open")) {
                    $("div.pages.open").fadeIn("slow");  
                }
                

                }
                //If clicked option with category class.
                if ($(this).hasClass("category"))   {
                    //Collapses other opened div sibblings
                    $("div").siblings(".panel-collapse.collapse.in").collapse("hide");
                    //Unselects others options
                    $("a.active").removeClass("active");
                    //Opens first child of opened category div
                    $(this).parent().parent().next().children().children().first().trigger( "click" );
                }
                else if ($(this).parent().parent().prev().children().children().hasClass("category")) {
                    //Do nothing when selected children of opened category
                }
                //Collapses category when selected non-category option 
                else if ($(".panel-collapse.collapse").hasClass("in")){
                    $(".panel-collapse.collapse").collapse("hide");
                }
        });
    });