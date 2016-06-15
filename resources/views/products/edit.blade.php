@extends('layout.app')




@section('content')

                    <div class="container">
                        <div>
                            <a href="#" class="btn btn-sm btn-success">Save</a>
                                  
                            <a href="#" class="btn btn-sm btn-default">Cancel</a>    
                        </div>
                    </div>

                    {!! Form::open(['route' => 'products/{ $product->id }', 'id' => $product->id ]) !!}

                        {{ method_field(PATCH) }}
                        {{ Form::titile('title') }}
                    {!! Form::close() !!}


<div class="thumbnail">

                    <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">$&nbsp{{ $product->price }}</h4>
                        <h4><a href="#">{{ $product->title }}</a>
                        </h4>
                        <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>



                <ul class="nav nav-pills">
				  <li class="active"><a href="#">Technical information</a></li>
				  <li><a href="#">Reviews</a></li>
				  <li><a href="#">Downloads</a></li>
				</ul>

                @include('products.partials.technical')
                <!-- @include('products.partials.reviews') -->

            </div>

        </div>

    </div>
    <!-- /.container -->




@stop