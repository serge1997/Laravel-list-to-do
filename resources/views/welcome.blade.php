@extends('layouts.main')

@section('title', 'List to Do')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-6" id="image-container">
                <img src="/img/list.jpg" alt="List to do ilustração" class="img-fluid">
            </div>
    
            <div id="info-container" class="col-md-6">
                <h1>gerenciador de tarefa <br> <span translate="no">list to do</span> </h1>
                <div class="lorem-container">
                    <p>
                        Lorem ipsum dolor sit amet. Sit dolor nihil aut harum necessitatibus eum unde
                        veritatis in quis dolores aut officiis eaque
                        ut perferendis autem sed eaque incidunt. Quo fuga soluta ab asperiores quaerat non consequatur labore. Eum obcaecati quod
                        eos totam ipsa ex omnis aliquid? Vel consequatur eligendi At 
                        culpa autem non tenetur voluptas qui perspiciatis voluptatem quo tempora modi sed quae veniam.
                    </p>
                </div>
                <div class="col-md-12" id="get-started">
                    <a href="#" class="btn" id="get-started-link">
                        get started
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection