
var blazy;
$(document).ready(function() {
    setTimeout(() => {
        blazy = new Blazy({ 
            success: function(ele){
                // Image has loaded
                console.log('woo')
                $(ele).parents('.logo-design').children('.portfolioCard').css('padding', '40px');
                $(ele).prev().remove();
            }
          , error: function(ele, msg){
                if(msg === 'missing'){
                    console.log('missing');
                }
                else if(msg === 'invalid'){
                    console.log('invalid');
                }  
                console.log(msg)
            }
        });
    },500)


    $('.menu-item').click(function(e) {
        var windowWidth = window.screen.width < window.outerWidth ?
                  window.screen.width : window.outerWidth,
                  mobile = windowWidth < 800;
        if(mobile) {
            $('.navbar-toggler').click()
        }
    })

})