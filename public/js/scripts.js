$(function () {
    // sticky scroll
    $('#sidebar-left > .sidebar__inner').after('<div class="sticky-content-spacer"></div>');
    $('#sidebar-left > .sidebar__inner').stick_in_parent({
        parent: '.row',
        spacer: '.sticky-content-spacer',
        offset_top: 85,
        bottoming: false
    });

    $('#sidebar-right > .sidebar__inner').after('<div class="sticky-content-spacer"></div>');
    $('#sidebar-right > .sidebar__inner').stick_in_parent({
        parent: '.row',
        spacer: '.sticky-content-spacer',
        offset_top: 85,
        bottoming: false
    });

    $('#content').on('change keyup keydown paste cut', 'textarea', function () {
        $(this).height(0).height(this.scrollHeight);
    }).find('textarea').change();


    // infinite scroll
    var loading_options = {
        msg: $(`<div class="loading-icon">
                    <div class="progress">
                           <div class="progress-bar progress-bar-indeterminate" role="progressbar"></div>
                    </div>
            </div>`)
    };

    $('#status-list').infinitescroll({
        loading: loading_options,
        navSelector: ".pagination",
        nextSelector: ".pagination li.active + li a",
        itemSelector: "#status-list .card.status-box",
        pixelsFromNavToBottom: 400,
        errorCallback: function () {
            $(".loading-icon").html('End of stories...');
        }
    });

});


