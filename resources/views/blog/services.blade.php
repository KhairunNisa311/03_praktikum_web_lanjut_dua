@extends('blog.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-services-bg"></div>        
            </div>
        </div>
        
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Our Digital Services</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row tm-services">
                    @foreach($blog as $b)
                    <div class="col-md-3 col-sm-6">
                        <figure class="tm-services-img">
                            <img src="{{ $b->image }}" alt="Image" class="img-fluid">        
                            <figcaption class="tm-service-description">{{ $b->title }}</figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-5">Service Description</h2>        
                    </div>
                </div>
                <div class="row tm-approach-row">
                    @foreach ($blog as $b)
                    <div class="col-md-6">
                        <div class="tm-approach-box">
                            <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                                <i class="fab fa-4x fa-acquisitions-incorporated tm-service-icon"></i>
                                <div>
                                    <p>{{ $b->content }}</p>
                                </div>
                            </div>        
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            
            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-3">Our Strategic Partners</h2>        
                    </div>
                </div>
                
                <div class="tm-partners mx-auto">
                    <div>
                        <img src="style/img/partner-01.png" alt="Partner Image" class="img-fluid">
                        <img src="style/img/partner-02.png" alt="Partner Image" class="img-fluid">
                        <img src="style/img/partner-03.png" alt="Partner Image" class="img-fluid">
                        <img src="style/img/partner-04.png" alt="Partner Image" class="img-fluid">
                        <img src="style/img/partner-05.png" alt="Partner Image" class="img-fluid">    
                    </div>
                    
                    <p class="tm-partner-text">Etiam et odio ut nibh suscipit eleifend. Sed facilisis, enim nec auctor vehicula, dolor odio venenatis turpis,
                    eu vehicula ipsum ligula a nisi. Nam vel nulla sed enim imperdiet fermentum. Mauris venenatis imperdiet
                    ex, quis rutrum orci vestibulum tristique. Ut gravida est ac risus dignissim sollicitudin. #999</p>
                    
                </div>
            </section>           
        </main>
    </div>
@endsection