(function() {
    if( document.querySelector( '.js-modal-testimonial' ) ) {
        const testimonials = document.getElementsByClassName( 'js-testimonial' )
        const modal = document.querySelector( '.js-modal-testimonial' )
        const closes = document.getElementsByClassName( 'js-modal-testimonial-close' )
        const html = document.querySelector( 'html' )

        for( const i of testimonials ) {
            i.addEventListener( 'click', function() {
                modal.classList.add( 'is-active' )
                modal.querySelector( '.js-modal-content' ).innerText = this.querySelector( '.js-testimonial-content' ).innerText
                html.classList.add( 'overflow-hidden' )
            })
        }

        for( const j of closes ) {
            j.addEventListener( 'click', function() {
                modal.classList.remove( 'is-active' )
                html.classList.remove( 'overflow-hidden' )
            })
        }
    }
})()    