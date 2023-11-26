@extends('layouts.main')

@section('style')
<style>

    .pemerintah-desa{
        /* background-color: red; */
        margin-left: 0;
        width: 100%;
        height: 90vh;
        margin-top: 5rem;
        /* top: 5rem; */
        background-repeat: no-repeat
    }
    .lapisan{
        /* padding: 0 5rem; */
    }
    .profile{
        background-image: url('assets/img/skripsi/pemerintah/latar desa kecil hitam.png');

    }
</style>
@endsection

@section('container')

    <div class="relative pemerintah-desa bg-blue-200 left-0 " >

        <div class="lapisan absolute h-full w-full">

            <div class="px-20 profile h-full w-full  flex">
                <div class="kepala-desa flex flex-col w-96 justify-center items-center ">
                    <img class="w-72" src="assets/img/skripsi/pemerintah/def-profile.jpg" alt="">
                    <div class="garis-orange h-2 w-80 bg-orange-300 rounded-full" style="background-color: rgba(242, 129, 35)"></div>
                    <h4 class="text-white text-xl font-bold mt-2 mb-0">{{ $kepdes->nama }}</h4>
                    <span class="text-white">{{ $kepdes->jabatan }}</span>
                </div>

                <div class="ml-5 sejarah flex flex-col text-justify" style="margin-top: 10rem; padding-left: 4rem">
                    <h3 class="text-3xl font-bold mb-2" style="color: rgba(242, 129, 35)">Sejarah Desa</h3>
                    <p class="tracking-widest text-white text-xl">{{ $sejarah->value }} </p>
                </div>
            </div>

            <div class="visi-misi h-full w-full bg-white relative -top-12 pt-12 px-20" style="border-radius: 3rem">
                <h2 class="text-4xl mx-auto font-bold text-center" style="color: rgba(242, 129, 35)">VISI & MISI</h2>
                <div class="content flex flex-col justify-evenly mt-12 items-center">
                    <div class="visi text-2xl font-bold mb-4" style="color: rgba(242, 129, 35)">
                        <p class="text-2xl font-bold text-center" style="color: rgba(242, 129, 35)">Visi</p>
                        <p class="text-justify">{{ $visi->value }}</p>
                    </div>
                    <div class="misi" >
                        <p class="text-2xl font-bold text-center" style="color: rgba(242, 129, 35)">Misi</p>
                        <ol type="1">
                            <li>1. Terwujudnya penyelenggara pemerintahan desa yang profesional, efisien, efektif dan bertanggungjawab</li>
                            <li>2. Peningkatan kualitas pelayanan terhadap warga masyarakat desa</li>
                            <li>3. Meningkatkan sumber daya manusia dan memanfaatkan sumber daya alam untuk mencapai peningkatan kesejahteraan masyarakat</li>
                            <li>4. Penataan wilayah desa guna mewujudkan lingkungan yang bersih dan sehat</li>
                            <li>5. Peningkatan pendapatan asli desa melalui Badan Usaha Milik Desa (BUMD) dan program lain untuk membuka lapangan kerja</li>
                            <li>6. Meningkatkan pembangunan infrastruktur Pertanian, Pendidikan, kesehatan dan pembangunan infrastruktur lainnya dalam rangka peningkatan ekonomi masyarakat</li>
                            <li>7. Peningkatan pembinaan kemasyarakatan yang harmonis, toleran, dan saling menghormati dalam kehidupan beragama dan bermasyarakat</li>
                            <li>8. Memberdayakan masyarakat dalam pembangunan desa</li>
                            <li>9. Mewujudkan keamanan dan ketertiban di wilayah Desa Benteng Gajah</li>
                        </ol>
                    </div>

                </div>
            </div>

            <div class="Struktur-organisasi h-fit w-full relative -top-36 pt-12 px-20 my-bg pb-3" style="border-radius: 3rem 3rem 0 0 ;">
                <h2 class="text-4xl mx-auto font-bold text-center text-white mb-5">STRUKTUR ORGANISASI</h2>

                <div class="content flex flex-col item-center mb-20">
                    <div class="flex mb-5 justify-center">
                        <div>
                            <div class="my-card flex mr-5">
                                <div class="p-2 background-image w-20 h-20 bg-gray-800 rounded-l-lg">
                                    <img src="assets/img/skripsi/pemerintah/def-profile.jpg" class="rounded-full fit-content" alt="">
                                </div>
                                <div class="flex flex-col justify-center items-center data-diri px-3 pt-1 min-w-[11rem] w-fit rounded-r-lg">
                                    <p class="text-center font-bold my-tx">{{ strtoupper($kepdes->jabatan) }}</p>
                                    <p class="text-sm text-center font-bold"><span>{{ ucwords($kepdes->nama) }}</span></p>
                                    {{-- <p class="text-sm">NIK  : <span>09idk090780</span></p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="my-card flex mt-16">
                            <div class="p-2 background-image w-20 h-20 bg-gray-800 rounded-l-lg">
                                <img src="assets/img/skripsi/pemerintah/def-profile.jpg" class="rounded-full fit-content" alt="">
                            </div>
                            <div class="flex flex-col justify-center items-center data-diri px-3 pt-1 min-w-[11rem] w-fit rounded-r-lg">
                                <p class="text-center font-bold my-tx">{{ strtoupper($sekdes->jabatan) }}</p>
                                <p class="text-sm font-bold"><span>{{ ucwords($sekdes->nama) }}</span></p>
                            </div>
                        </div>
                    </div>



                    <div class="kaur grid grid-cols-4 gap-8 justify-evenly mb-5">
                        @foreach($staf as $data)
                            <div class="my-card flex w-fit">
                                <div class="p-2 background-image w-20 h-20 bg-gray-800 rounded-l-lg">
                                    <img src="assets/img/skripsi/pemerintah/def-profile.jpg" class="rounded-full fit-content" alt="">
                                </div>
                                <div class="data-diri flex flex-col justify-center items-center px-3 pt-1 min-w-[11rem] max-w-[12.5rem] rounded-r-lg">
                                    <p class="text-center font-bold my-tx leading-tight mb-2 p-0">{{ ucwords($data->jabatan) }}</p>
                                    <p class="text-sm font-bold"><span>{{ $data->nama }}</span></p>
                                </div>
                            </div>
                        @endforeach

                    </div>


                    <h1 class="text-center text-xl text-white font-bold mb-3">KEPALA DUSUN</h1>
                    <div class="kepala-dusun flex justify-evenly">

                        @foreach($kepdus as $data)
                            <div class="my-card flex">
                                <div class="p-2 background-image w-20 h-20 bg-gray-800 rounded-l-lg">
                                    <img src="assets/img/skripsi/pemerintah/def-profile.jpg" class="rounded-full fit-content" alt="">
                                </div>
                                <div class="flex flex-col justify-center items-center data-diri px-3 pt-1 min-w-[11rem] w-fit rounded-r-lg max-w-[12rem]">
                                    <p class="text-center font-bold my-tx leading-tight mb-2">{{ ucwords($data->jabatan) }}</p>
                                    <p class="text-sm font-bold"><span>{{ ucwords($data->nama) }}</span></p>
                                </div>
                            </div>
                        @endforeach
                        

                    </div>
                </div>

            </div>
   
            {{-- ===== END OF STRUKTUR ORGANISASI ===== --}}
        </div>

        

    </div>

    <script type="text/javascript">
        navbar = document.querySelector('.my-navbar');
        function bgBlack(){
            navbar.classList.add('bg-gray-900')
        }
    
        bgBlack()

        function highlight(){ 
            list = document.querySelector('.pemerintah').classList.add('current-list-item');
        }
        highlight()

    </script>
@endsection