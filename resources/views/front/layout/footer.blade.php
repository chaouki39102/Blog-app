@include('front.components.footer-bar')

<!-- ====== Back To Top Start ====== -->
<a href="javascript:void(0)" class="back-to-top">
    <i class="lni lni-chevron-up"> </i>
</a>
<!-- ====== Back To Top End ====== -->

<!-- ====== All Javascript Files ====== -->
<script src="{{asset('assets\js\code.jquery.com_jquery-3.7.0.min.js')}}"></script>
<script src="{{asset('assets\vendor\OwlCarousel\dist\owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@stack('js-script')
<script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    // pageLink.forEach((elem) => {
    //     elem.addEventListener("click", (e) => {
    //         e.preventDefault();
    //         document.querySelector(elem.getAttribute("href")).scrollIntoView({
    //             behavior: "smooth",
    //             offsetTop: 1 - 60,
    //         });
    //     });
    // });

    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }

    window.document.addEventListener("scroll", onScroll);
</script>
