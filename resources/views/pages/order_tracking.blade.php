<x-app-layout>
    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Tracking Order</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Tracking Order</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row justify-content-center pt--75 pb--80 pt-md--55 pb-md--60 pt-sm--35 pb-sm--40">
                    <div class="col-lg-6">
                        <p class="heading-color mb--30 text-center">To track your order please enter your Order ID
                            in the box below and press the "Track" button. This was given to you on your receipt and
                            in the confirmation email you should have received.</p>
                        <form class="form form--track" action="{{route('trackOrder')}}" method="POST">
                            @csrf
                            <div class="form__group mb--30">
                                <label for="order_id" class="form__label form__label--3">Order ID</label>
                                <input type="text" name="order_id" name="order_id" class="form__input form__input--3" placeholder="Found in your order confirmation email.">
                            </div>
                            <div class="form__group text-center">
                                <input type="submit" value="Track" class="btn btn-submit btn-style-1">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
</x-app-layout>