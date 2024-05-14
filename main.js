jQuery(document).ready(function() {
    jQuery('#content').spapp({
        pages: {
            'login': 'login.html',
            'register': 'register.html',
            'profile': 'profile.html'
        }
    });

    AOS.init();
});
