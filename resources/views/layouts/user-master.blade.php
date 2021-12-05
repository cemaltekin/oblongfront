<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oblongmark || Anasayfa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('front/assets/css/style/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/responsive/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/animation/animate.css')}}">
    <link href="{{asset('front/assets/css/tailwind.css')}}" rel="stylesheet">
</head>

<body>
    <!--Search-->
    <div id="search" class="w-full h-screen fixed flex flex-col hidden">
        <div class="flex justify-end p-4">
            <i id="searchClose" class="fa fa-times fa-2x text-white cursor-pointer"></i>
        </div>
        <div class="flex-1 flex justify-center items-center">
            <input type="text" class="bg-transparent w-1/2 border-b focus:outline-none p-4 text-white" placeholder="ne arıyon reis">
        </div>

    </div>
    <!--Search-->
    <!--RightBar-->
    <div id="right-menu" class="min-h-screen overflow-y-auto max-h-screen fixed top-0 border p-4 bg-white">
        <div class="w-full h-full p-4">
            <div class="w-full flex justify-start items-center">
                <span id="rightbarClose" class="w-8 h-8 p-6 flex justify-center items-center rounded-full"> <i class="fa fa-times"></i></span>
            </div>
            <div class="w-full flex flex-col items-center gap-8 font-rubik font-normal">
                <img src="{{asset('front/assets/images/oblonglogo.png')}}" width="150" height="auto" alt="">
                <p class="mt-4"> <b> Oblongmark.com </b> sektördeki şirketlerin alıcı ve satıcı
                    kimliğiyle birebir iletişime geçmesini
                    sağlayan <b> B2B platformudur.</b>
                    Sağladığımız <b> ileri veri analizi ile müşteri optimasyonu </b> yaparak dünya üzerinde
                    potansiyel
                    müşterilerinize kolayca ulaşın!
                    Sektörünüzün <b> pazar analizi ve aylık düzenli raporlama </b>,reklamlarınızı ister
                    oblongmark.com
                    üzerinden verebilirsiniz isterseniz <b> google ads veya facebook business manager
                        hesapları entegrasyonu</b> ile tek platformda takip edebilirsiniz. <b> E-ihale
                        sisteminden anında
                        haberdar olabilir </b> fiyat teklifinde bulunabilirsin! </p>

                <p class="mt-4">
                    <b> Oblongmark.com </b> ile tedarikçi olarak partnerleriniz alıcı statüsünde
                    sisteme davet edin ve müşterilerinizle ilişkilerinizi kuvvetlendirin!
                </p>
                <img class="mt-4" src="{{asset('front/assets/images/map.webp')}}" alt="">
                <ul class="social flex gap-4 mt-4">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="mailto:info@oblongall.com?">info@oblongall.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--RightBar-->
    <!--Header-->
    <header id="header" class="lg:px-16 px-0 py-4 md:py-0 bg-white flex flex-wrap items-center md:bg-transparent md:fixed w-full relative">

        <div class="flex-1 flex justify-between items-center">
            <a href="/" class="text-xl"><img src="{{asset('front/assets/images/oblonglogo.png')}}" class="w-1/2" alt=""></a>
        </div>

        <label for="menu-toggle" class="cursor-pointer md:hidden block mr-4">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full lg:mr-40 bg-white md:bg-transparent h-full" id="menu">
            <nav class="h-full">
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0 h-full bg-white md:bg-transparent">
                    <li class="px-4 md:px-0 dropdown-item md:h-full md:flex md:items-center bg-white md:bg-transparent">
                        <a class="md:p-4 py-3 px-0 block menu-link" href="#">
                            Kurumsal
                        </a>
                        <ul class="menu-child p-3 pt-0 md:absolute bg-white md:shadow-2xl">
                            <li>
                                <a href="#">
                                    Hakkımızda
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="px-4 md:px-0 dropdown-item md:h-full md:flex md:items-center bg-white md:bg-transparent">
                        <a class="md:p-4 py-3 px-0 block menu-link" href="#">
                            Ürün ve Hizmetler
                        </a>
                        <ul class="menu-child p-3 pt-0 md:absolute bg-white md:shadow-2xl">
                            <li>
                                <a href="#">
                                    Üyelik Paketleri
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    İleri Veri Analizi
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Üye Olmadan Reklam Vermek ?
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="px-4 md:px-0 dropdown-item md:h-full md:flex md:items-center bg-white md:bg-transparent">
                        <a class="md:p-4 py-3 px-0 block menu-link" href="#">
                            Alıcılar
                        </a>
                        <ul class="menu-child p-3 pt-0 md:absolute bg-white md:shadow-2xl">
                            <li>
                                <a href="#">
                                    Hizmet Paketleri ve Kullanım
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Tedarikçi Yönetimi ve Değerlendirme
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="px-4 md:px-0 dropdown-item md:h-full md:flex md:items-center bg-white md:bg-transparent">
                        <a class="md:p-4 py-3 px-0 block menu-link md:mb-0 mb-2" href="#">
                            Tedarikçiler
                        </a>
                        <ul class="menu-child p-3 pt-0 md:absolute bg-white md:shadow-2xl">
                            <li>
                                <a href="#">
                                    Hizmet Paketleri ve Kullanım
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="px-4 md:px-0 md:h-full md:flex md:items-center bg-white md:bg-transparent">
                        <a class="md:p-4 py-3 px-0 block md:mb-0 mb-2 menu-link" href="#">
                            İletişim
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="hidden lg:flex gap-4 items-center justify-center text-gray-500">
            <a href="#">
                <i id="searchOpen" class="fa fa-search"></i>
            </a>
            <a href="#">
                <i class="fa fa-user"></i>
            </a>
            <a>
                <i id="rightbarOpen" class="fa fa-bars fa-2x cursor-pointer"></i>
            </a>
        </div>
    </header>
    <!--Header-->
    <!--Main Content-->
    <main class="w-full">
        @yield('user-content')
    </main>
    <!--Main Content-->
    <!--Footer-->
    <footer class="w-full mt-32 relative">
        <!--Mail-->
        <div id="newsletter" class="w-8/12 absolute top-0 text-white py-8 px-12 hidden lg:flex rounded-md">
            <div class="w-1/2 flex items-center gap-4">
                <i class="fas fa-envelope fa-3x"></i>
                <h1 class="font-bold text-3xl">Sorularınız için bize ulaşın</h1>
            </div>
            <div class="w-1/2 flex items-center relative">
                <input type="text" class="p-4 h-full rounded-md focus:outline-none w-full text-gray-500 pr-28">
                <a href="#" class="p-4 right-0 top-0 text-white h-full flex items-center absolute rounded-r-md text-center">
                    Gönder
                </a>
            </div>
        </div>
        <!--Mail-->
        <div class="container py-4 md:py-40 mx-auto">
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-white font-nunito">
                <li class="px-8 flex flex-col gap-4">
                    <img src="{{asset('front/assets/img/oblonglogo.png')}}" width="190" alt="">
                    <p class="mt-6 pr-4">
                        Oblong dijital pazarlama ve reklam ajansı; sektörde öncü firmalara sosyal kuruluşlara,startup
                        kuruluş aşamasında olan şirketlere dijital dünyada pazarlama danışmanlığı veren bir teknoloji
                        firmasıdır.
                    </p>
                    <div class="flex gap-2 text-white">
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li class="px-8">
                    <h5 class="border-b-2 text-xl font-bold">ADRES</h5>
                    <div class="flex flex-col gap-4 mt-14">
                        <div class="flex gap-4">
                            <i class="fas fa-map-marked-alt"></i>
                            <h4>374 William S Canning Blvd, River MA 2721, USA</h5>
                        </div>
                        <div class="flex gap-4">
                            <i class="fas fa-phone-volume"></i>
                            <a href="tel:(+90)534-570-6987">(+90)534-570-6987</a>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@oblongall.com">info@oblongall.com</a>
                        </div>
                    </div>
                </li>
                <li class="px-8">
                    <h5 class="border-b-2 text-xl font-bold">ÜYELİK PAKETLERİ</h5>
                    <ul class="flex flex-col gap-4 mt-14 list-disc list-inside">
                        <li>
                            <a href="#">
                                Bronze Paket
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Silver Paket
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Gold Paket
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Platinum Paket
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="px-8">
                    <h5 class="border-b-2 text-xl font-bold">BLOG</h5>
                    <ul class="flex flex-col mt-14 gap-4">
                        <li>
                            <a href="#">
                                University While The Lovely Valley Team Work
                            </a>
                            <span class="flex gap-2 text-xs">
                                <i class="fa fa-calendar" style="font-size: 16px;"></i>
                                September 20, 2020
                            </span>
                        </li>
                        <li>
                            <a href="#">
                                High School Program Starting Soon 2021
                            </a>
                            <span class="flex gap-2 text-xs">
                                <i class="fa fa-calendar" style="font-size: 16px;"></i>
                                September 14, 2020
                            </span>
                        </li>

                    </ul>
                </li>
            </ul>

        </div>
    </footer>
    <!--Footer-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/20b9420eb8.js" crossorigin="anonymous"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    <script src="{{asset('front/assets/js/carousel.js')}}"></script>
</body>

</html>