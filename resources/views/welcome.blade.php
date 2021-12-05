@extends('layouts.user-master')
@section('user-content')
 <!--Carousel-->
 <div class="owl-carousel owl-theme relative">
            <div id="carousel-item-1" class="item flex justify-center items-center">
                <div class="w-10/12 md:w-1/2 mx-auto text-center flex flex-col gap-6">
                    <h1 class="uppercase carousel-title ">Dijital Pazarlama ve Reklamcılık Çözümleri!</h1>
                    <h1 class="carousel-text text-white">Yurtdışındaki potansiyel müşterilerinizle tanışın!</h1>
                    <a
                        class="package-btn uppercase text-white px-4 py-2 cursor-pointer rounded-md flex items-center justify-center mx-auto w-48 h-12 fadeInUp">Hizmet
                        Paketleri</a>
                </div>
            </div>
            <div id="carousel-item-2" class="item flex justify-center items-center">
                <div class="w-10/12 md:w-1/2 mx-auto text-center flex flex-col gap-6">
                    <h1 class="uppercase carousel-title">Oblongmark.com</h1>
                    <h1 class="carousel-text text-white">İleri veri analitiği ile dünyanın her yerinde müşterilerinizi
                        bulun!</h1>
                    <a
                        class="package-btn uppercase text-white px-4 py-2 cursor-pointer rounded-md flex items-center justify-center mx-auto w-48 h-12 fadeInUp">Hizmet
                        Paketleri</a>
                </div>
            </div>
        </div>
        <!--Carousel-->
        <!--Cards-->
        <div
            class="cards w-full lg:absolute z-9999 flex flex-col lg:flex-row gap-6 items-center lg:justify-center mt-20 lg:mt-0 p-0 md:px-10">
            <div class="card flex w-full md:w-10/12 xl:w-3/12 px-4 py-8 gap-4 items-center">
                <div>
                    <img src="{{asset('front/assets/images/icons/3.webp')}}" width="50" height="auto" alt="">
                </div>
                <div class="flex-1 flex flex-col justify-center">
                    <h1>İleri Veri Analizi</h1>
                    <h1>Ürün ve Müşteri Optimizasyonu</h1>
                </div>
            </div>
            <div class="card flex w-full md:w-10/12 xl:w-3/12 px-4 py-8 gap-4 items-center">
                <div>
                    <img src="{{asset('front/assets/images/icons/2.webp')}}" width="50" height="auto" alt="">
                </div>
                <div class="flex-1 flex flex-col justify-center">
                    <h1>Veri Depolama</h1>
                    <h1>Cloud ve Google Drive Altyapısı</h1>
                </div>
            </div>
            <div class="card flex w-full md:w-10/12 xl:w-3/12 px-4 py-8 gap-4 items-center">
                <div>
                    <img src="{{asset('front/assets/images/icons/1.webp')}}" width="50" height="auto" alt="">
                </div>
                <div class="flex-1 flex flex-col justify-center">
                    <h1>API Entegrasyonu</h1>
                    <h1 >Reklam platformları ile entegre</h1>
                </div>
            </div>
        </div>
        <!--Cards-->
        <!--Main Content-->
        <!--Large Cards-->
        <div class="w-full">
            <div class="container mx-auto mt-20 px-4 lg:px-20 xl:px-0">
                <h1 class="text-center font-rubik" style="color: #ff5421;">DAHA FAZLA BILGI</h1>
                <h1 class="text-center font-bold text-3xl py-6 font-nunito">Hizmetlerimiz hakkında daha fazla bilgi
                    edinmek
                    için
                    bize ulaşın!</h1>
                <!--Card XL-->
                <div class="cards w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!--Card XL 1-->
                    <div class="card-xl w-full p-4 sm:p-8 flex flex-col justify-between text-white rounded-md">
                        <div class="card-content mx-auto w-full text-center">
                            <p>Güvenli şekilde alışveriş sisteminden elde ettiğimiz verilerinizle periyodik olarak
                                müşterileriniz, satışlarınız, tedarikçileriniz hakkında size rapor sunalım.</p>
                        </div>
                        <div class="card-footer items-center flex mt-96 md:mt-20 lg:mt-40">
                            <div class="mr-8">
                                <img src="{{asset('front/assets/images/icons/3.webp')}}" width="50px" height="auto" alt="">
                            </div>
                            <div class="flex-1 flex flex-col justify-center">
                                <h1 class="font-bold text-xl title">İleri Veri Analizi</h1>
                                <h1 class="font-normal text">Ürün ve Müşteri Optimizasyonu</h1>
                            </div>
                        </div>
                    </div>
                    <!--Card XL 1-->
                    <!--Card XL 2-->
                    <div class="card-xl w-full p-4 sm:p-8 flex flex-col justify-between text-white rounded-md">
                        <div class="card-content mx-auto w-full text-center">
                            <p>Güvenli şekilde alışveriş sisteminden elde ettiğimiz verilerinizle periyodik olarak
                                müşterileriniz, satışlarınız, tedarikçileriniz hakkında size rapor sunalım.</p>
                        </div>
                        <div class="card-footer items-center flex mt-96 md:mt-20 lg:mt-40">
                            <div class="mr-8">
                                <img src="{{asset('front/assets/images/icons/3.webp')}}" width="50px" height="auto" alt="">
                            </div>
                            <div class="flex-1 flex flex-col justify-center">
                                <h1 class="font-bold text-xl title">İleri Veri Analizi</h1>
                                <h1 class="font-normal text">Ürün ve Müşteri Optimizasyonu</h1>
                            </div>
                        </div>
                    </div>
                    <!--Card XL 2-->
                    <!--Card XL 3-->
                    <div class="card-xl w-full p-4 sm:p-8 flex flex-col justify-between text-white rounded-md">
                        <div class="card-content mx-auto w-full text-center">
                            <p>Güvenli şekilde alışveriş sisteminden elde ettiğimiz verilerinizle periyodik olarak
                                müşterileriniz, satışlarınız, tedarikçileriniz hakkında size rapor sunalım.</p>
                        </div>
                        <div class="card-footer items-center flex mt-96 md:mt-20 lg:mt-40">
                            <div class="mr-8">
                                <img src="{{asset('front/assets/images/icons/3.webp')}}" width="50px" height="auto" alt="">
                            </div>
                            <div class="flex-1 flex flex-col justify-center">
                                <h1 class="font-bold text-xl title">İleri Veri Analizi</h1>
                                <h1 class="font-normal text">Ürün ve Müşteri Optimizasyonu</h1>
                            </div>
                        </div>
                    </div>
                    <!--Card XL 3-->
                    <!--Card XL 4-->
                    <div class="card-xl w-full p-4 sm:p-8 flex flex-col justify-between text-white rounded-md">
                        <div class="card-content mx-auto w-full text-center">
                            <p>Güvenli şekilde alışveriş sisteminden elde ettiğimiz verilerinizle periyodik olarak
                                müşterileriniz, satışlarınız, tedarikçileriniz hakkında size rapor sunalım.</p>
                        </div>
                        <div class="card-footer items-center flex mt-96 md:mt-20 lg:mt-40">
                            <div class="mr-8">
                                <img src="{{asset('front/assets/images/icons/3.webp')}}" width="50px" height="auto" alt="">
                            </div>
                            <div class="flex-1 flex flex-col justify-center">
                                <h1 class="font-bold text-xl title">İleri Veri Analizi</h1>
                                <h1 class="font-normal text">Ürün ve Müşteri Optimizasyonu</h1>
                            </div>
                        </div>
                    </div>
                    <!--Card XL 4-->
                    <!--Card XL 5-->
                    <div class="card-xl w-full p-4 sm:p-8 flex flex-col justify-between text-white rounded-md">
                        <div class="card-content mx-auto w-full text-center">
                            <p>Güvenli şekilde alışveriş sisteminden elde ettiğimiz verilerinizle periyodik olarak
                                müşterileriniz, satışlarınız, tedarikçileriniz hakkında size rapor sunalım.</p>
                        </div>
                        <div class="card-footer items-center flex mt-96 md:mt-20 lg:mt-40">
                            <div class="mr-8">
                                <img src="{{asset('front/assets/images/icons/3.webp')}}" width="50px" height="auto" alt="">
                            </div>
                            <div class="flex-1 flex flex-col justify-center">
                                <h1 class="font-bold text-xl title">İleri Veri Analizi</h1>
                                <h1 class="font-normal text">Ürün ve Müşteri Optimizasyonu</h1>
                            </div>
                        </div>
                    </div>
                    <!--Card XL 5-->
                    <!--Card XL 6-->
                    <div class="card-xl w-full p-4 sm:p-8 flex flex-col justify-between text-white rounded-md">
                        <div class="card-content mx-auto w-full text-center">
                            <p>Güvenli şekilde alışveriş sisteminden elde ettiğimiz verilerinizle periyodik olarak
                                müşterileriniz, satışlarınız, tedarikçileriniz hakkında size rapor sunalım.</p>
                        </div>
                        <div class="card-footer items-center flex mt-96 md:mt-20 lg:mt-40">
                            <div class="mr-8">
                                <img src="{{asset('front/assets/images/icons/3.webp')}}" width="50px" height="auto" alt="">
                            </div>
                            <div class="flex-1 flex flex-col justify-center">
                                <h1 class="font-bold text-xl title">İleri Veri Analizi</h1>
                                <h1 class="font-normal text">Ürün ve Müşteri Optimizasyonu</h1>
                            </div>
                        </div>
                    </div>
                    <!--Card XL 6-->
                </div>
                <!--Card XL-->
                <!--Large Cards-->
            </div>
            <div id="packages" class="container mx-auto mt-20 px-4 lg:px-20 xl:px-0  mt-40">
                <!--Membership Packages-->
                <h1 class="text-center font-bold font-rubik text-4xl mb-8" style="color: #ff5421;">Üyelik Paketleri</h1>
                <div
                    class="w-full grid grid-cols-1 p-0 md:p-20 sm:grid-cols-2 sm:p-20 xl:p-0 xl:grid-cols-4 gap-20 packages">
                    <!--Package 1-->
                    <div class="w-full package h-full bg-white shadow-xl">
                        <div class="package-header p-4 rounded-t-md">
                            <div class="price flex justify-end">
                                <span class="py-2 px-4 rounded-md">180$</span>
                            </div>
                            <h1 class="text-center font-light font-rubik text-3xl mb-4 mt-2 h-10"
                                style="color:#ff5421;">
                                Bronze</h1>
                        </div>
                        <div class="package-content p-8 rounded-b-md flex-1">
                            <span class="text-gray-500">Aylık</span>
                            <ul>
                                <li>
                                    <i class="fa fa-check text-green-500" aria-hidden="true"></i> Satın alma süreç
                                    optimizasyonu
                                </li>
                                <li>
                                    <i class="fa fa-check text-green-500" aria-hidden="true"></i>Alıcı ürün temini
                                    optimizasyonu
                                </li>
                                <li>
                                    <i class="fa fa-times text-red-500" aria-hidden="true"></i> &nbsp;Piyasa fiyatları
                                    analizi
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Package 1-->
                    <!--Package 2-->
                    <div class="w-full package h-full bg-white shadow-xl">
                        <div class="package-header p-4 rounded-t-md">
                            <div class="price flex justify-end">
                                <span class="py-2 px-4 rounded-md">210$</span>
                            </div>
                            <h1 class="text-center font-light font-rubik text-3xl mb-4 mt-2 h-10"
                                style="color:#ff5421;">
                                Silver</h1>
                        </div>
                        <div class="package-content p-8 rounded-b-md">
                            <span class="text-gray-500">Aylık</span>
                            <ul>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Müşteri Kayıp Analizi
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Kargo Öneri
                                    Optimizasyonu
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Satın Alma Eğilimi
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> İndirim Duyarlılığı
                                </li>
                                <li><i class="fa fa-times text-red-500" aria-hidden="true"></i> &nbsp;Piyasa Fiyat
                                    Analizi
                                </li>
                                <li> <i class="fa fa-times text-red-500" aria-hidden="true"></i> &nbsp;Reklam tasarım
                                    optimizasyonu </li>
                            </ul>
                        </div>
                    </div>
                    <!--Package 2-->
                    <!--Package 3-->
                    <div class="w-full package h-full bg-white shadow-xl ">
                        <div class="package-header p-4 rounded-t-md">
                            <div class="price flex justify-end">
                                <span class="py-2 px-4 rounded-md">300$</span>
                            </div>
                            <h1 class="text-center font-light font-rubik text-3xl mb-4 mt-2 h-10"
                                style="color:#ff5421;">
                                Gold</h1>
                        </div>
                        <div class="package-content p-8 rounded-b-md">
                            <span class="text-gray-500">Aylık</span>
                            <ul>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Müşteri Kayıp Analizi
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Satın Alma Eğilimi
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Alıcı ürün temini
                                    optimizasyonu</li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Piyasa Fiyat Analizi
                                </li>
                                <li> <i class="fa fa-check text-green-500" aria-hidden="true"></i> İndirim Duyarlılığı
                                </li>
                                <li> <i class="fa fa-times text-red-500" aria-hidden="true"></i> &nbsp;Kargo Öneri
                                    Optimizasyonu </li>
                                <li><i class="fa fa-times text-red-500" aria-hidden="true"></i> &nbsp;Reklam tasarım
                                    optimizasyonu</li>

                            </ul>
                        </div>
                    </div>
                    <!--Package 3-->
                    <!--Package 4-->
                    <div class="w-full package h-full bg-white shadow-xl ">
                        <div class="package-header p-4 rounded-t-md">
                            <div class="price flex justify-end">
                                <span class="py-2 px-4 rounded-md">500$</span>
                            </div>
                            <h1 class="text-center font-light font-rubik text-3xl mb-4 mt-2 h-10"
                                style="color:#ff5421;">
                                Platinum</h1>
                        </div>
                        <div class="package-content p-8 rounded-b-md">
                            <span class="text-gray-500">Aylık</span>
                            <ul>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Reklam tasarım
                                    optimizasyonu</li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Kargo Öneri
                                    Optimizasyonu
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> İndirim Duyarlılığı
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Müşteri Kayıp Analizi
                                </li>
                                <li><i class="fa fa-check text-green-500" aria-hidden="true"></i> Satın Alma Eğilimi
                                </li>
                                <li> <i class="fa fa-check text-green-500" aria-hidden="true"></i> Alıcı ürün temini
                                    optimizasyonu </li>
                                <li> <i class="fa fa-check text-green-500" aria-hidden="true"></i> Piyasa Fiyat Analizi
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Package 4-->

                </div>
                <!--Sign UP Button-->
                <!-- <div class="w-full flex justify-center mt-12">
                    <a href="#" class="bg-primary py-2 hover:bg-secondary px-3 rounded-md text-white">Hemen Üye OL</a>
                </div> -->
                <!--Sign UP Button-->
                <!--Membership Packages-->

            </div>
            <!--About US-->
            <div class="w-full flex mt-40">
                <div class="hidden lg:block w-1/2">
                    <img src="{{asset('front/assets/images/home1.webp')}}" class="h-full" alt="">
                </div>
                <div class="w-full lg:w-1/2 bg-gray-300 p-8 flex items-center">
                    <div class="w-full xl:w-1/2 flex flex-col gap-4 p-4">
                        <h1 class="font-normal font-nunito text-white text-3xl">Hakkımızda</h1>
                        <h1 class="font-normal font-nunito text-white text-3xl leading-relaxed">Dijital dünyada sizinde
                            parmak iziniz olsun
                        </h1>
                        <p class="text-white font-rubik">
                            Oblong digital pazarlama ve reklamcılık şirketi olarak oblongall.com ve oblongmark.com olmak
                            üzere
                            iki farklı sitede müşterilerimize hizmet vermekteyiz oblongmark.com şirketlere daha
                            interaktif
                            kullanabileceği bir sistem sunar oblongall.com ise reklam ve tasarım ağırlıklı olarak
                            şirketlerin
                            piyasada var olmalarını sağlayan SEO, E-Ticaret sitesi geliştirme ve yönetimi,Sosyal Medya
                            Reklamcılığı,Logo ve Afiş Tasarımı gibi hizmetler sunar. Amacımız dünyadaki dijital devrimde
                            sizlerle birlikte yürümektir.
                        </p>
                        <a href="#" class="mt-4 font-rubik text-white hover:text-black px-6 py-4 rounded-md w-44"
                            onMouseOver="this.style.backgroundColor='#fff'"
                            onMouseOut="this.style.backgroundColor='#ff5421'"
                            style="background-color: #ff5421;transition: 1s background-color,1s color;">HEMEN
                            KATILIN</a>
                    </div>
                </div>
            </div>
            <!--About US-->
            <!--How To Use The System-->
            <div class="container mx-auto mt-20 px-4 lg:px-20 xl:px-0 mt-40 flex flex-col md:flex-row gap-8">
                <div class="w-full md:w-1/2" style="background-color: #f9f8f8;">
                    <h1 class="font-nunito text-lg text-center md:text-5xl">oblongmark.com Nasıl Kullanılır ?</h1>
                    <div class="w-full">
                        <div class="accordion flex flex-col items-center justify-center mt-12 p-0 md:p-8 gap-4">
                            <!--  Panel 1  -->
                            <div class="w-full">
                                <input type="checkbox" name="panel" id="panel-1" class="hidden">
                                <label for="panel-1"
                                    class="relative block cursor-pointer text-black p-4 rounded-t-md border">Sisteme
                                    Nasıl
                                    Kayıt Olabilirim ?</label>
                                <div class="accordion__content overflow-hidden bg-grey-lighter border rounded-b-md">
                                    <p class="accordion__body p-4" id="panel1">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Iusto possimus at a cum saepe molestias modi illo facere
                                        ducimus
                                        voluptatibus praesentium deleniti fugiat ab error quia sit perspiciatis velit
                                        necessitatibus.Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!-- Panel 1  -->
                            <!-- Panel 2 -->
                            <div class="w-full">
                                <input type="checkbox" name="panel" id="panel-2" class="hidden">
                                <label for="panel-2"
                                    class="relative block cursor-pointer text-black p-4 rounded-t-md border">Reklamları
                                    Nasıl Yönetebiliriz?</label>
                                <div class="accordion__content overflow-hidden bg-grey-lighter border rounded-b-md">
                                    <p class="accordion__body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Iusto possimus at a cum saepe molestias modi illo facere ducimus voluptatibus
                                        praesentium deleniti fugiat ab error quia sit perspiciatis velit
                                        necessitatibus.Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!--  Panel 2 -->
                            <!--  Panel 3  -->
                            <div class="w-full">
                                <input type="checkbox" name="panel" id="panel-3" class="hidden">
                                <label for="panel-3"
                                    class="relative block cursor-pointer text-black p-4 rounded-t-md border">Canlı
                                    E-İhale
                                    Sistemleri?</label>
                                <div class="accordion__content overflow-hidden bg-grey-lighter border rounded-b-md">
                                    <p class="accordion__body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Iusto possimus at a cum saepe molestias modi illo facere ducimus voluptatibus
                                        praesentium deleniti fugiat ab error quia sit perspiciatis velit
                                        necessitatibus.Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!--  Panel 3  -->
                            <!--  Panel 4  -->
                            <div class="w-full">
                                <input type="checkbox" name="panel" id="panel-4" class="hidden">
                                <label for="panel-4"
                                    class="relative block cursor-pointer text-black p-4 rounded-t-md border">Cloud
                                    Altyapısı
                                    Nasıl Çalışıyor?</label>
                                <div class="accordion__content overflow-hidden bg-grey-lighter border rounded-b-md">
                                    <p class="accordion__body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Iusto possimus at a cum saepe molestias modi illo facere ducimus voluptatibus
                                        praesentium deleniti fugiat ab error quia sit perspiciatis velit
                                        necessitatibus.Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!--  Panel 4  -->
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <iframe id="systemUseIframe" width="100%" height="480"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                </div>
            </div>
            <!--How To Use The System-->
            <div id="how-to-system" class="w-full h-screen mt-20">
                <div
                    class="container mx-auto px-4 lg:px-20 xl:px-0 mt-40 flex gap-2 md:gap-4 xl:gap-8 justify-center items-center z-50 h-full">
                    <div class="w-1/2 text-white p-1 md:p-12 rounded-md font-rubik"
                        style="background-color: #171F3296;">
                        <h1 class="text-xl md:text-3xl text-center p-2 md:p-6">ALICI</h1>
                        <p class="py-8 text-xs md:text-base lg:text-xl font-normal italic text-center">Oblongmark.com da
                            alıcılar partner oldukları şirketler tarafından gönderilen davetiyeler ile
                            sisteme kayıt olabilirler.Raporlama ve faturalandırma işlemlerini kullanabilir
                            e-ihale sistemine kayıt olarak anlık güncellenen ihalelere katılabilirler.Bronz üyelik tipi
                            altında sistemi kullanan alıcılar diğer üyelik tipleri ile
                            hesaplarını upgrade edip aynı zamandatedarikçi olarak da sisteme kayıt olabilirler.Sistemde
                            ilşkili oldukları tedarikçileri puanlayabilir ve ileri veri analizi ile
                            en uygun tedarikçiyi tespit edip satın alma faaliyetlerini iyileştirebilirler.</p>
                    </div>
                    <div class="w-1/2 text-white p-1 md:p-12 rounded-md font-rubik"
                        style="background-color: #171F3296;">
                        <h1 class="text-xl md:text-3xl text-center p-2 md:p-6">TEDARİKÇİ</h1>
                        <p class="py-8 text-xs md:text-base lg:text-xl font-normal italic text-center">Oblongmark.com da
                            tedarikçiler partner oldukları alıcıları sistemden davetiye kodu alarak bronz üyelik
                            sistemine
                            çekebilirler.İleri veri analizinden faydalanan
                            tedarikçiler müşterilerini optimize edip doğru ürünü doğru müşteriye tanıtarak pazarlama
                            maliyetlerini düşürürler. Google ads ve Facebook Business Manager üzerinden verdikleri
                            reklamları sistem üzerinden kontrol edebilir kampanya sonuçlarından doğan raporları analiz
                            edebilirler ayrıca site içerisinde birebir
                            ilişkili müşterilerine reklam verip hızlı pazarlama yapabilirler.</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
