$(document).ready(function() {
    const portfolioItems = $('.portfolioItem');
    $('.portfolioCard>img').removeClass('d-none')

    $('.filterPortfolio>a').click(e => {
        e.preventDefault();

        $('.filterPortfolio .active').removeClass('active');

        $(e.target).addClass('active');
        resetPortfolioItems();
        
        const target = e.target,
              toggle = target.getAttribute('data-toggle'),
              toggleMatches = portfolioItems.filter(':not([data-type="' + toggle + '"])');

        if(toggle == "all") {
            return resetPortfolioItems();
        }

        toggleMatches.each(x => {
            let portfolioItem = toggleMatches[x];

            $(portfolioItem).addClass('shrink');
        })

    })

    function resetPortfolioItems() {
        portfolioItems.each(x => {
            let portfolioItem = portfolioItems[x];
            $(portfolioItem).removeClass('shrink').addClass('grow')
        })
        setTimeout(() => {
            console.log('revalidated')
            window.blazy.revalidate()
        },500)
    }

    $('.portfolioOverlay').click((e) => {
        var windowWidth = window.screen.width < window.outerWidth ?
                  window.screen.width : window.outerWidth,
                  mobile = windowWidth < 800;
                  
        if(!mobile) {
            e.preventDefault();
            let tar = $(e.target),
                tarPortItem = tar.parents('.portfolioItem'),
                tarPortInfo = tarPortItem.find('.portfolioItemInfo'),
                tarSection = tar.parents('#work'),
                tarImg = tar.siblings('img'),
                portContainer = $('.portfolioContainer'),
                portInfo = portContainer.children('.portfolioInfo');

            if(tarPortItem.hasClass('logo-design')) {
                tarImg.clone().appendTo(portInfo.children('.portfolioImg'))
            } else {
                let newImg = tar.siblings('.fullSize').children('img').clone().addClass('web-design'),
                    imgSrc = newImg.attr('data-src');
                
                newImg.attr('src', imgSrc).appendTo(portInfo.children('.portfolioImg'))
            }

            $('body').css('overflow', 'hidden');
            tarPortItem.toggleClass('activePort');



            let extraImgs = tar.siblings('.portfolioExtraImg').children().clone();
                
                extraImgs.each((x) => {
                    let datasrc = $(extraImgs[x]).attr('data-src');
                    console.log(x)
                    $(extraImgs[x]).attr('src', datasrc).appendTo(portInfo.children('.extraImg'))
                })
            
            tarPortInfo.clone().removeClass('d-none').appendTo(portInfo)
            portContainer.attr('style', 'opacity:1;height:100vh;width:100vw;')
            portInfo.attr('style', 'height:70vh;width:80vw;')
            
            setTimeout(() => {
                if(tarPortItem.hasClass('logo-design')) {
                    let portImg = $('.portfolioImg img');
                    portInfo.children('.extraImg').attr('style', 'left: 40px;')
                    portImg.attr('style','position:absolute;top:10%;left:40px;width:40%;padding:0px 40px;')
                    portInfo.children('.portfolioItemInfo').css('top', '10%')
                } else if(tarPortItem.hasClass('web-design')) {
                    let portImg = $('.portfolioImg img');
                    portInfo.children('.extraImg').attr('style', 'left: 0%;')
                    portImg.attr('style','left:20px;width:50%;')
                    portInfo.children('.portfolioItemInfo').css('top', '10%').css('padding-left','30px').css('width', '50%').css('left','50%').css('margin-top', '-30px')
                }
            }, 1300)


            window.scrollTo(0, tarSection.offset().top - 150); 
        }
    })

    $('.portfolioContainer').click((e) => {
    
        if($(e.target).hasClass('portfolioContainer') || $(e.target).hasClass('closeButton') ){
            e.preventDefault();

            let container = $('.portfolioContainer'),
                contInfo = $('.portfolioContainer').children('.portfolioInfo');

            container.css('display','none').css('transition','none !important').css('opacity', '0').css('height','0px').css('width','0px');
            contInfo.removeAttr('style');

            contInfo.children().empty().removeAttr('style')
            contInfo.find('.portfolioItemInfo').remove();

            setTimeout(() => {
                container.removeAttr('style');
            }, 50)
            
            $('body').css('overflow', 'visible');

        }
    })
})
