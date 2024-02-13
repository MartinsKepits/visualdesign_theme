$(document).ready(function () {
    $(".navbar-toggle").click(function () {
        $(".navbar.navbar-expand-lg").toggleClass("menu-active");
        $(document.body).toggleClass("disable-scroll");
    });

    $(".navbar-menu-bg").click(function () {
        $(".navbar.navbar-expand-lg.menu-active").removeClass("menu-active");
        $(document.body).removeClass("disable-scroll");
    });

    if (window.innerWidth <= 1024) {
        $(".navbar .menu-item.menu-item-has-children").addClass("open-submenu");
        // Functionality to open/close menu item submenu on mobile
        // $(".navbar .menu-item.menu-item-has-children a").click(function () {
        //     $(this).parent().toggleClass("open-submenu");
        // });
    }
});
