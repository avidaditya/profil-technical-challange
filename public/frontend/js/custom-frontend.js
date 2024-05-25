$(document).ready(function () {
    // Comment Reply
    var commentReplyActiveIcon = '<i class="ph-bold ph-caret-up text-md"></i>';
    var commentReplyNotActiveIcon = '<i class="ph-bold ph-caret-down text-md"></i>';
    $('[data-toggle="comment-reply"]').each(function () {
        let target = $($(this).data('target'));
        let active = $(this).hasClass('active');
        $(this).find('.ph-caret-down').remove();
        $(this).find('.ph-caret-up').remove();

        if (target) {
            if (active) {
                $(this).append(commentReplyActiveIcon);
                target.show();
            } else {
                $(this).append(commentReplyNotActiveIcon);
                target.hide();
            }
        }
    });

    // $('[data-toggle="comment-reply"]').on('click', function() {
    //     let target = $($(this).data('target'));
    //     let active = $(this).hasClass('active');

    //     if (target) {
    //         if (active) {
    //             $(this).removeClass('active');
    //             $(this).find('.ph-caret-up').remove();
    //             $(this).append(commentReplyNotActiveIcon);
    //             target.hide();
    //         } else {
    //             $(this).addClass('active');
    //             $(this).find('.ph-caret-down').remove();
    //             $(this).append(commentReplyActiveIcon);
    //             target.show();
    //         }
    //     }
    // });

    $('[data-toggle="comment-reply"]').on('click', function () {
        let target = $($(this).data('target'));
        let active = $(this).hasClass('active');

        if (target) {
            if (active) {
                $(this).removeClass('active');
                $(this).find('.ph-caret-up').remove();
                $(this).append(commentReplyNotActiveIcon);
                target.animate({
                    height: 'toggle',
                    opacity: 'toggle'
                }, 'fast'); // Animates the transition
            } else {
                $(this).addClass('active');
                $(this).find('.ph-caret-down').remove();
                $(this).append(commentReplyActiveIcon);
                target.animate({
                    height: 'toggle',
                    opacity: 'toggle'
                }, 'fast'); // Animates the transition
            }
        }
    });


    // Auth Modal
    var authModal = $('#auth-modal');
    var registerFormModal = $('#register-form-modal');
    var loginFormModal = $('#login-form-modal');
    if (authModal.hasClass('on-register')) {
        loginFormModal.hide();
        registerFormModal.show();
    } else {
        registerFormModal.hide();
        loginFormModal.show();
    }

    $('#register-here-btn').on('click', function () {
        authModal.addClass('on-register');
        loginFormModal.hide();
        registerFormModal.show();
    });
    $('#login-here-btn').on('click', function () {
        authModal.removeClass('on-register');
        registerFormModal.hide();
        loginFormModal.show();
    });
});


