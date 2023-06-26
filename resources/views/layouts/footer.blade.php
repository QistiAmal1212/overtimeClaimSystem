<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .flip-card {
        background-color: transparent;
        width: 170px;
        height: 200px;
        perspective: 1000px;
        font-family: sans-serif;
        margin: 0 25px;
        /* Add this line to adjust spacing */
    }

    .title {
        font-size: 1.5em;
        font-weight: 900;
        text-align: center;
        margin: 0;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2);
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border: 1px solid #1a5276;
        border-radius: 1rem;

    }

    .flip-card-front {
        background: linear-gradient(120deg, #5499c7 60%, #1a5276 88%, #2471a3 40%, rgba(0, 51, 102, 0.603) 48%);
        color: #ffffff;
        font-size: 10px;
        ;
    }

    .flip-card-back {
        background: linear-gradient(120deg, #0e3e64 30%, #1a5276 88%, #5499c7 40%, #2471a3 78%);
        color: white;
        transform: rotateY(180deg);
    }

</style>
<footer class="text-center text-lg-start text-white" style="background-color: #45526e">
    <div class="container p-4 pb-0">
        <section class="">
            <div class="row">

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">MAJIS UGAMA ISLAM DAN ADAT RESAM MELAYU PAHANG</h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">

                    <div class="flip-card ">
                        <div class="flip-card-inner ">
                            <div class="flip-card-front ">
                                <p class="title ">FULLSTACK DEVELOPER</p>
                                {{-- <p>Hover Me</p> --}}
                            </div>
                            <div class="flip-card-back ">
                                <center><img src="{{asset('image/amal.png')}}" style="margin-top:30px;width:80px; height:80px;" /></center>
                                <p>Muhammad Qisti Amaluddin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <hr class="my-3">

        <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
                <div class="col-md-7 col-lg-7 text-center text-md-start">
                    <div class="p-3">
                        &copy; 2023 - All rights reserved
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fab fa-google"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
    </div>
</footer>
