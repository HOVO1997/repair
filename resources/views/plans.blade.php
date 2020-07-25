@extends('layouts.app')
@section('content')
<section class="pricing-table-eight">
    <div class="container">
        <h2 class="plan">Choose pricing plan </h2>
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="single-plan-table table table_one">
                    <h6 class="basic">Basic</h6>
                    <strong class="count">$100</strong>
                    <p class="per">Per Month</p>
                    <ul class="ul">
                        <li class="f_li li">buy more than 3 products and get 15% discount</li>
                    </ul>
                    <form action="{{route('stripe.plan')}}" method="POST">
                        @csrf
                        <input name="plan_type" type="hidden" value="basic">
                        <input name="plan_price" type="hidden" value="100">
                        <button type="submit" class="but">GET STARTED</button>
                    </form>
                </div> <!-- /.single-plan-table -->
            </div> <!-- /.col- -->

            <div class="col-md-4 col-sm-6">
                <div class="single-plan-table table table_two">
                    <h6 class="basic">Standard</h6>
                    <strong class="count">$200</strong>
                    <p class="per">Per Month</p>
                    <ul class="ul">
                        <li class="f_li li">buy more than 5 products and get 25% discount</li>
                    </ul>
                    <form action="{{route('stripe.plan')}}" method="POST">
                        @csrf
                        <input name="plan_type" type="hidden" value="standart">
                        <input name="plan_price" type="hidden" value="200">
                        <button type="submit" class="but">GET STARTED</button>
                    </form>
                </div> <!-- /.single-plan-table -->
            </div> <!-- /.col- -->

            <div class="col-md-4 col-sm-6">
                <div class="single-plan-table table table_three">
                    <h6 class="basic">Premium</h6>
                    <strong class="count">$500</strong>
                    <p class="per">Per Month</p>
                    <ul class="ul">
                        <li class="f_li li">buy more than 5 products and get 40% discount</li>
                    </ul>
                    <form action="{{route('stripe.plan')}}" method="POST">
                        @csrf
                        <input name="plan_type" type="hidden" value="premium">
                        <input name="plan_price" type="hidden" value="500">
                        <button type="submit" class="but">GET STARTED</button>
                    </form>
                </div> <!-- /.single-plan-table -->
            </div> <!-- /.col- -->

      </div>
    </div> <!-- /.container -->
</section>
@endsection
