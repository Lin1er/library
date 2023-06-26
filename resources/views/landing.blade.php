@extends('layouts.main')

@section('styles') 
<style>
    /* Mobile Styles */
    @media screen and (max-width: 600px) {
        
        .con-bg {
            background: url('img/ic.png') no-repeat;
            background-size: cover;
            padding-top: 100px;
            padding-bottom: 150px;
            flex-direction: column;
        }

        .con-land {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .pamflet {
            max-width: 300px;
            padding: 20px;
            box-shadow: 0px 0px 19px 10px rgb(0 0 0 / 55%);
            order: 2;
        }

        .h1-land {
            text-align: center;
            font-size: 20px;
            font-family: -webkit-body;
        }

        .p-land {
            font-family: math;
            font-size: 10px;
        }

        .img-land {
            margin-bottom: 20px;
            max-width: 180px;
            filter: hue-rotate(43deg);
            box-shadow: 0px 0px 19px 10px rgb(0 0 0 / 55%);
            order: 1;
        }
    }

    /* Tablet Styles */
    @media screen and (min-width: 601px) and (max-width: 1000px) {
        .con-bg {
            background: url('img/ic.png') no-repeat;
            background-size: cover;
            padding-top: 100px;
            padding-bottom: 150px;
        }

        .con-land {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pamflet {
            max-width: 400px;
            padding: 20px;
            margin-right: 70px;
            box-shadow: 0px 0px 19px 10px rgb(0 0 0 / 55%);
        }

        .h1-land {
            text-align: center;
            font-size: 3rem;
            font-family: -webkit-body;
        }

        .p-land {
            font-family: math;
        }

        .img-land {
            margin-left: 20px;
            max-width: 300px;
            filter: hue-rotate(43deg);
            box-shadow: 0px 0px 19px 10px rgb(0 0 0 / 55%);
        }
    }

    /* Laptop Styles */
    @media screen and (min-width: 1001px) {
        .con-bg {
            background: url('img/ic.png') no-repeat;
            background-size: cover;
            padding-top: 100px;
            padding-bottom: 150px;
        }

        .con-land {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pamflet {
            max-width: 600px;
            padding: 20px;
            margin-right: 70px;
            box-shadow: 0px 0px 19px 10px rgb(0 0 0 / 55%);
        }

        .h1-land {
            text-align: center;
            font-size: 5rem;
            font-family: -webkit-body;
        }

        .p-land {
            font-family: math;
        }

        .img-land {
            margin-left: 20px;
            max-width: 500px;
            filter: hue-rotate(43deg);
            box-shadow: 0px 0px 19px 10px rgb(0 0 0 / 55%);
        }
    }
</style>
@endsection

@section('container')
<div class="con-bg">
    <div class="con-land">
        <div class="card pamflet">
            <h1 class="h1-land">BookTopia</h1>
            <p class="p-land">Enter Booktopia, the ultimate hub catering to every school’s literary cravings. We’ve got all the novels, textbooks, and educational resources your brain needs to fuel that insatiable curiosity.</p>
            <a href="/books" class="btn btn-dark">Explore Now</a>
        </div>
        <img src="img/book.jpg" alt="Book" class="rounded border img-land"> 
    </div>
</div>
<div class="mt-5">
    <h1 class="text-center">Ini Artikel atau yang lain bebas</h1>
</div>
@endsection
