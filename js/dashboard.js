jQuery(document).ready(function($) {
// Hide all sections except the active one
    $('.dashboard-section-2, .dashboard-section-3, .dashboard-section-4, .dashboard-section-5, .dashboard-section-6, .dashboard-section-7, .dashboard-section-8, .dashboard-section-9').hide();
    $('#section1').show();
    
    $('#dashboard-navigation a').on('click', function(e) {
        e.preventDefault();
        var targetSection = $(this).data('target');
        $('.dashboard-section, .dashboard-section-2, .dashboard-section-3, .dashboard-section-4, .dashboard-section-5, .dashboard-section-6, .dashboard-section-7, .dashboard-section-8, .dashboard-section-9').hide(); // Hide all sections
        $('#' + targetSection).show(); // Show the selected section
    });
});
