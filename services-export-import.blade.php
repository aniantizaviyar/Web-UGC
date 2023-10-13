@extends('layouts.app')
@section('title')
    UGC - Export & Import
@endsection

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Export & Import
                    <span>Secure &amp; Reliable</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div class="clearfix"></div>

    <!-- content begin -->
    <div id="content" class="no-padding">
        
        <!-- section begin -->
        <section id="service-details" class="side-bg">
            <div class="col-md-6 col-md-offset-6 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInRight" data-wow-delay=".5s" data-wow-duration=".8s">

                        <p class="lead" style="text-align:justify;">
                            <h2>Export</h2>
                    		Pengiriman jasa untuk barang dari Indonesia ke berbagai negara di seluruh dunia. 
                            UGC Logistics melayani <i>Export</i> dengan jalur Udara & Laut, diantaranya:
							<strong><br>•	Door to Door
                            <br>•	Door to Port
                            <br>•	Port to Door
                            <br>•	Port to Port</strong>
							<br><i>“UGC Logistics, Tau Beres dalam pengiriman ekspor Anda”</i>
                        </p>

                        <p class="lead" style="text-align:justify;">
                            <h2>IMPORT</h2>
                            UGC Logistics juga menyediakan jasa pengiriman barang dari berbagai negara ke Indonesia.
                            UGC Logistics melayani <i>Import</i> dengan jalur Udara & Laut, diantaranya:
							<strong><br>•	Door to Door
                            <br>•	Door to Port
                            <br>•	Port to Door
                            <br>•	Port to Port
                            <br>•	DDU
                            <br>•	DDP
                            <br>•	DAP</strong>
							<br><i>“UGC Logistics, Memudahkan pengiriman impor Anda”</i>
                        </p>

                    </div>

                </div>
            </div>

            <div class="clearfix"></div>


        </section>
        <!-- section close -->

        <div class="call-to-action text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Get your shipping quote now.</h2>
                    </div>

                    <div class="col-md-3">
                        <a href="#" class="btn-border-light">Get Quote Now</a>
                    </div>
                </div>
            </div>
        </div>

        <section id="section-faq" class="light-text">

            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0">Export & Import FAQ
                    <span>Frequently Asked Questions</span>
                        </h2>
                        <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
                    </div>

                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s" data-duration=".75s">

                        <ul class="accordion">

                            <li>
                                <a class="Active">Apa itu pengiriman laut?</a>
                                <div class="content">
                                    Pengirimian dengan jalur Laut biasanya digunakan untuk pengiriman barang dalam jumlah besar, tidak terburu-buru, atau dengan jarak pengiriman yang jauh.
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive">Apa itu pengiriman udara?</a>
                                <div class="content">
                                    Pengiriman udara adalah pengiriman barang melalui pesawat udara.
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive">Apa perbedaan antara pengiriman udara dan pengiriman laut?</a>
                                <div class="content">
                                    Pengiriman udara lebih cepat, tetapi lebih mahal daripada pengiriman laut. Pengiriman laut memakan waktu lebih lama, tetapi lebih murah daripada pengiriman udara.
                                </div>
                            </li>


                            <li>
                                <a class="NoneActive">Apa itu AWB dalam pengiriman udara?</a>
                                <div class="content">
                                    AWB (Air Waybill) adalah dokumen pengiriman yang diterbitkan oleh maskapai penerbangan sebagai bukti pengiriman dan penerimaan barang melalui pesawat udara.
                                </div>
                            </li>
                        </ul>

                    </div>


                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s" data-duration=".75s">
                        <ul class="accordion">

                            <li>
                                <a class="Active">Apa itu B/L dalam pengiriman laut?</a>
                                <div class="content">
                                    B/L (Bill of Lading) adalah dokumen pengiriman yang diterbitkan oleh perusahaan pelayaran sebagai bukti pengiriman dan penerimaan barang melalui kapal laut.
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive">Biaya pengiriman terjangkau, menggunakan service apa?</a>
                                <div class="content">
                                    Biaya pengiriman yang lebih trjangkau, kamu cukup menggunakan sea freight.
                            		Selain terjangkau, pengiriman menggunakan sea 
									freight juga memiliki kapasitas yang besar.
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive">Apakah berbedaan FCL dan LCL?</a>
                                <div class="content">
                                    FCL yaitu suatu layanan angkutan container dimana barang pemilik 
									berada dalam satu container penuh, tanpa harus ada campuran dengan barang milik orang lain.
									Pengiriman dengan metode LCL relatif lebih hemat karena pengirim tidak harus membayar satu 
									container, namun hanya berdasarkan kubikasi barang yang ia kirimkan.
                                </div>
                            </li>


                            <li>
                                <a class="NoneActive">Bisakah Form E digunakan untuk pengiriman udara dari China?</a>
                                <div class="content">
                                    Bisa, dengan pengajuan Form yang lebih awal.
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>

            <div class="clearfix"></div>
        </section>



    </div>
    <!-- content close -->
@endsection