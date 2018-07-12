$(function() {
    // sticky scroll
    $('#sidebar-left > .sidebar__inner').after('<div class="sticky-content-spacer"></div>');
    $('#sidebar-left > .sidebar__inner').stick_in_parent({
        parent: '.row',
        spacer: '.sticky-content-spacer',
        offset_top: 70,
        bottoming: false
    });

    $('#sidebar-right > .sidebar__inner').after('<div class="sticky-content-spacer"></div>');
    $('#sidebar-right > .sidebar__inner').stick_in_parent({
        parent: '.row',
        spacer: '.sticky-content-spacer',
        offset_top: 70,
        bottoming: false
    });

    $('#content').on('change keyup keydown paste cut', 'textarea', function () {
        $(this).height(0).height(this.scrollHeight);
    }).find('textarea').change();

});


