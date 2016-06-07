jQuery(document).ready(function($){ 

    'use strict'; 

    //** notice we are including jquery and the color plugin at 
    //** http://code.jquery.com/color/jquery.color-2.1.0.js
    
    var miroed = {},
        scroll_pos = 0, 

        // Site Sections 
        sections = { 
            'introduction': {
                'top': $('.introduction').position().top,
                'bottom' : $('.introduction').position().bottom,
                'color' : '#0076A3', // blue
            },
            'work': {
                'top': $('.work').position().top,
                'bottom' : $('.work').position().bottom,
                'color' : '#70C1B3', // Sea-Green
            },
            'blog': {
                'top': $('.blog').position().top,
                'bottom' : $('.blog').position().bottom,
                'color' : '#FFE066', // Yellow
            },
            'contact': {
                'top': $('.contact').position().top,
                'bottom' : $('.contact').position().bottom,
                'color' : '#F25F5C', // Red
            }
        },

        //where you want the animation to begin
        animation_begin_pos = sections.introduction.top,

        //where you want the animation to stop 
        animation_end_pos = sections.contact.top;

        // Decides where color begins and ends 
        miroed.scrolled_colors = function ( beginning_color, ending_color ) {

            // we want to calculate the relevant transitional rgb value
            var percentScrolled = scroll_pos / ( animation_end_pos - animation_begin_pos ),
                start_color = new $.Color( beginning_color ),
                end_color = new $.Color( ending_color ),
                newRed = start_color.red() + ( ( end_color.red() - start_color.red() ) * percentScrolled ),
                newGreen = start_color.green() + ( ( end_color.green() - start_color.green() ) * percentScrolled ),
                newBlue = start_color.blue() + ( ( end_color.blue() - start_color.blue() ) * percentScrolled ),
                newColor = new $.Color( newRed, newGreen, newBlue );

                return newColor;
        };


    $(document)
        .scroll(function() {

            scroll_pos = $(this).scrollTop();

            if ( scroll_pos === sections.contact.top ) {

                // console.log('at contact');

                $('.border--left')
                    .animate(
                        {
                            backgroundColor: sections.contact.colors 
                        }, 0);

            } else if ( scroll_pos > sections.blog.top ) {

                // console.log('at blog');

                $('.border--left')
                    .animate(
                        {
                            backgroundColor: miroed.scrolled_colors(sections.blog.color, sections.contact.color) 
                        }, 0);

            } else if ( scroll_pos >= sections.introduction.top && scroll_pos <= sections.introduction.bottom ) {
                
                // console.log('at intro'); 

                $('.border--left')
                    .animate(
                        { 
                            backgroundColor: miroed.scrolled_colors(sections.introduction.color, sections.work.color) 
                        }, 0); 

            } else if ( scroll_pos > sections.work.top ) {

                // console.log('at work');

                $('.border--left')
                    .animate(
                        {
                            backgroundColor: miroed.scrolled_colors(sections.work.color, sections.blog.color) 
                        }, 0);

            } else {
                // false
            }
        });
});