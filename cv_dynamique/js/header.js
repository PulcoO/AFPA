headerScroll = 0;

$(function() {
    'use strict';

    var elSelector = '.header',
        elClassNarrow = 'header--narrow',
        elNarrowOffset = 100,
        $element = $(elSelector);

    if (!$element.length) return true;

    var elHeight = 0,
        elTop = 0,
        $document = $(document),
        dHeight = 0,
        $wrap = $('.main-wrapper'),
        wHeight = 0,
        wScrollCurrent = 0,
        wScrollBefore = 0,
        wScrollDiff = 0;

    $wrap.on('scroll', function() {
        elHeight = $element.outerHeight();
        dHeight = $('.main-wrapper')[0].scrollHeight;
        wHeight = $wrap.height();
        wScrollCurrent = $wrap.scrollTop();
        wScrollDiff = wScrollBefore - wScrollCurrent;
        elTop = headerScroll + wScrollDiff;

        $element.toggleClass(elClassNarrow, wScrollCurrent > elNarrowOffset); // toggles "narrow" classname

        if (wScrollCurrent <= 0){ // scrolled to the very top; element sticks to the top
            headerScroll = 0;
            $element.css('transform', 'translate3d(0, '+headerScroll+'px, 0)');
        }else if (wScrollDiff > 0){ // scrolled up; element slides in
            headerScroll = elTop > 0 ? 0 : elTop;
            $element.css('transform', 'translate3d(0, '+headerScroll+'px, 0)');
        }else if (wScrollDiff < 0){ // scrolled down
            if (wScrollCurrent + wHeight >= dHeight - elHeight){ // scrolled to the very bottom; element slides in
                headerScroll = (elTop = wScrollCurrent + wHeight - dHeight) < 0 ? elTop : 0;
                $element.css('transform', 'translate3d(0, '+headerScroll+'px, 0)');
            }else{ // scrolled down; element slides out
                headerScroll = Math.abs(elTop) > elHeight ? -elHeight : elTop;
                $element.css('transform', 'translate3d(0, '+headerScroll+'px, 0)');
            }
        }

        wScrollBefore = wScrollCurrent;
    });
});
