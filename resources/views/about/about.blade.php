@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/about-design.css') }}">
@endpush

@section('content')
    <div class="main-container">
        <!-- About 1 -->
        <div class="about">
            <div class="about-img-wrapper">
                {{-- <div class="img-about pos-1">
                    <img src="img/about.jpg" alt="" />
                </div> --}}
                <div class="img-about pos-2">
                    <img src="img/about.png" alt="" />
                </div>
            </div>
            <div class="about-info-wrapper">
                <div class="about-info">
                    <div class="title title-1">{{ __('messages.About Us') }}</div>
                    <p style="text-indent: 50px">
                        Heiwa Program merupakan program inisiasi dari komunitas di Jepang yaitu Shounan Asia. Yayasan yang
                        dimotori oleh Mr. Wagai Minoru ini memiliki tujuan untuk menyebarkan kedamaian ke seluruh dunia agar
                        peperangan terutama menggunakan bom atom/ nuklir tidak terjadi lagi. Melihat ke belakang pada 7-8
                        Agustus 1945 tentara sekutu menjatuhkan bom atom di Hiroshima dan Nagasaki. Puluhan ribu korban jiwa
                        berjatuhan. Efek dari bom maha dahsyat ini sangat luar biasa. Bahkan salah satu penyintas bom atom
                        yang masih hidup sampai saat ini, menjalani hidup dengan menyandang penyakit kanker. Atas dasar hal
                        tersebut, gerakan ini dilakukan. Heiwa Program ini menggandeng Universitas Padjadjaran (sebagai
                        salah satu universitas negeri) dan Universitas Widyatama (sebagai salah satu universitas swasta)
                        sebagai mitra kerjasama untuk menjalankan program Heiwa ini.
                        Prodi Bahasa Jepang Universitas Widyatama yang telah diberikan kesempatan berpartisipasi pada
                        program ini, menginisiasi pembuatan website ini sebagai salah satu upaya mendukung misi dari Program
                        Heiwa dengan cara menyebarkan informasi terkait dengan jangkauan lebih luas. Selain itu, adanya
                        website ini juga diharapkan agar pendokumentasian dari kegiatan ‘napak tilas’ ini dapat tersimpan
                        dengan baik agar menjadi pembelajaran bagi masyarakat serta edukasi terkait perdamaian dunia lebih
                        luas.
                        Agenda pada Heiwa Program yang berjalan yaitu program ‘napak tilas’ lokasi-lokasi yang menjadi
                        tempat terjadinya penyerangan bom. Adapun lokasi yang dituju diantaranya adalah:
                        Museum Himeyuri （ひめゆり平祈念資料館）, Okinawa
                        Peace Memorial Park （平和祈念公園）, Okinawa
                        Gua Chibi Chiri チビチリガマ, Okinawa
                        Peace Memorial Museum 平和資料館・原爆ドーム, Hiroshima
                        Tsushimamaru Memorial Museum （対馬丸記念館）, Hiroshima

                    </p>
                </div>
            </div>
        </div>
        <!-- End of About 1 -->

        <div class="break-point-horizontal">
            <hr />
        </div>

        <!-- About 2 -->
        {{-- <div class="about about-2">
            <div class="about-info-wrapper">
                <div class="about-info">
                    <div class="title title-2">VISION</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Commodo ullamcorper a lacus
                        vestibulum sed arcu non odio euismod. Interdum
                        posuere lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Nunc sed id semper risus in
                        hendrerit gravida rutrum quisque. Urna neque viverra
                        justo nec ultrices dui sapien eget mi. Vel fringilla
                        est ullamcorper eget nulla facilisi etiam dignissim.
                        Quis viverra nibh cras pulvinar mattis nunc sed
                        blandit. Habitant morbi tristique senectus et netus
                        et malesuada. Facilisis mauris sit amet massa vitae
                        tortor condimentum lacinia. Pulvinar etiam non quam
                        lacus. Cursus vitae congue mauris rhoncus aenean vel
                        elit scelerisque.
                    </p>
                </div>
            </div>
            <div class="about-img-wrapper">
                <div class="img-about pos-3">
                    <img src="img/thumbnail-about-1.jpg" alt="" />
                </div>
                <div class="img-about pos-4">
                    <img src="img/thumbnail-about-2.jpg" alt="" />
                </div>
            </div>
        </div>
        <!-- End of About 2 -->

        <div class="break-point-horizontal">
            <hr />
        </div> --}}

        <!-- Documentation -->
        <div class="header">
            <div class="header-title">{{ __('messages.Documentation') }}</div>
        </div>

        <div class="hero">
            <iframe src="https://www.youtube.com/embed/4MoRLTAJY_0?autoplay=0" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <div class="break-point-horizontal">
            <hr />
        </div>

        <div class="photos">
            <div class="photos-wrapper">
                @foreach ($photos as $photo)
                    <div class="photos-slider">
                        <img src={{ asset('storage/' . $photo->thumbnail) }} alt="" />
                        <div class="photos-button">
                            <i class="bx bx-chevron-left photos-nav-left"></i>
                            <i class="bx bx-chevron-right photos-nav-right"></i>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="photos-info-wrapper">
                <div class="photos-info">
                    <div class="title">{{ __('messages.Photos') }}</div>
                </div>
            </div>
        </div>
        <!-- End of Documentation -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/about-script.js') }}"></script>
@endpush
