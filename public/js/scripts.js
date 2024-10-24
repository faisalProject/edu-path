document.addEventListener('DOMContentLoaded', () => {
    var hamburger_menu = document.querySelector('.hamburger-menu');
    var sidebar_menu = document.querySelector('.sidebar-menu');

    hamburger_menu ? hamburger_menu.addEventListener('click', () => {
        sidebar_menu.classList.toggle('active');
    }) : null

    var prev = [...document.querySelectorAll('.btn-prev')];
    var next = [...document.querySelectorAll('.btn-next')];
    var wrapper = [...document.querySelectorAll('.courses')];

    wrapper ? wrapper.forEach((item, i) => {
        let dimensions = item.getBoundingClientRect();
        let width = dimensions.width;

        next ? next[i].addEventListener('click', () => {
            item.scrollLeft += width
        }) : null 

        prev ? prev[i].addEventListener('click', () => {
            item.scrollLeft -= width
        }) : null
    }) : null

    var course_card = [...document.querySelectorAll('.course-card')];
    var title1 = document.querySelectorAll('.title-1');
    var participant1 = document.querySelectorAll('.participant-1');
    var desc1 = document.querySelectorAll('.desc-1');
    var title2 = document.querySelector('.title-2');
    var participant2 = document.querySelector('.participant-2');
    var desc2 = document.querySelector('.desc-2');

    title2.innerHTML = title1[0].innerHTML;
    participant2.innerHTML = participant1[0].innerHTML;
    desc2.innerHTML = desc1[0].innerHTML;

    course_card ? course_card.forEach((item, i) => {
        item.addEventListener('click', () => {
            title2.innerHTML = title1[i].innerHTML;
            participant2.innerHTML = participant1[i].innerHTML;
            desc2.innerHTML = desc1[i].innerHTML;
        })
    }) : null

    var btn_more = document.querySelector('.btn-more');
    btn_more ? btn_more.addEventListener('click', () => {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Anda harus login terlebih dahulu!",
            footer: '<a class="alert-to-login" href="/login">Login</a>'
          });
    }) : null

    var scrolls = document.querySelectorAll('.scroll');
    scrolls ? scrolls.forEach( scroll => {
        scroll.addEventListener('click', (e) => {
            var hrefValue = scroll.getAttribute('href');
            var destinationElement = document.querySelector(hrefValue);

            var offset = destinationElement.offsetTop - 70;
            document.querySelector('html, body').scrollTop = offset;
            e.preventDefault();
        })
    }) : null

    var top_dropdown_profile = document.querySelector('.top-dropdown-profile');
    var bottom_dropdown_profile = document.querySelector('.bottom-dropdown-profile')
    var profile_chevron = document.querySelector('.profile-chevron');
    top_dropdown_profile ? top_dropdown_profile.addEventListener('mousemove', () => {
        profile_chevron.classList.add('active')
        bottom_dropdown_profile.classList.add('active')
    }) : null
    
    top_dropdown_profile ? top_dropdown_profile.addEventListener('mouseleave', () => {
        profile_chevron.classList.remove('active')
        bottom_dropdown_profile.classList.remove('active')
    }) : null
    
    bottom_dropdown_profile ? bottom_dropdown_profile.addEventListener('mousemove', () => {
        profile_chevron.classList.add('active')
        bottom_dropdown_profile.classList.add('active')
    }) : null;

    bottom_dropdown_profile ? bottom_dropdown_profile.addEventListener('mouseleave', () => {
        profile_chevron.classList.remove('active')
        bottom_dropdown_profile.classList.remove('active')
    }) : null;
})