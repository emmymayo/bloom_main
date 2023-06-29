<x-tailwind-header>
  <meta name="description" content="Bloom Digital Media is a Media and Communications Agency looking to partner
              with leading brands to engineer ROI focused digital campaigns and activities
              that attract, connect, engage, improve sales and convert Nigerian consumers online.">
  <!-- Fb verification -->
  <meta name="facebook-domain-verification" content="i1si9gdz0prrhx0zxlf7kk0po3jcvc" />
  <!-- End of Fb verification -->

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1544542205912428');
        fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1544542205912428&ev=PageView&noscript=1" />
  </noscript>
</x-tailwind-header>

<x-tailwind-navbar />

<section class="mx-6 md:mx-8 mt-20 lg:mx-12 mt-20 md:pb-24">

  <!-- BLOG -->
  <div class="lg:mt-5 mt-20 md:mt-32">
    <div class="md:my-20 md:relative">
      <h1 class="text-2xl md:text-4xl mb-12 md:mb-0 font-bold md:relative text-center">Our Blog Posts</h1>
      <div class="hidden md:flex justify-center md:relative bottom-5 right-16 -z-40">
        <svg width="208" height="32" viewBox="0 0 278 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="208" height="32" fill="#FF8100" />
        </svg>
      </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 mb-8 mx-12 md:gap-4 lg:gap-8 xl:gap-0">
      @if($posts)
      @foreach($posts as $post)
      <div style="background-image: url('{{$post->featured_image}}')" class="image-overlay mt-5 md:mx-4 h-[450px] bg-cover bg-no-repeat">
        <!-- <img src="images/image 67a.png" class="m-0 h-48" alt=""> -->
        <p class="text-sm font-light ml-8 mt-24 lg:text-lg xl:text-xl md:text-base">
          {{ (int)(str_word_count($post->content) / 320)}} min read</p>
        <h1 class="ml-8 text-sm font-bold mt-10 xl:text-3xl md:text-base lg:text-2xl pr-20">
          {{$post->title}}
        </h1>
        <div class="ml-8 mt-24">
          <a class="flex" href="/blog/{{$post->slug}}">
            <p class="font-semibold text-sm md:text-lg lg:text-xl xl:text-2xl">Read more</p>
            <svg class="pb-4 md:pb-2 xl:pb-1 md:w-16 h-10" width="30" height="24" viewBox="0 0 60 34" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M1.5 17L51.5 17" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M44.5 24L51.5 17L44.5 10" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div>
      @endforeach
      @else
      <h1>Sorry, No articles posted yet. </h1>
      @endif
      <div>{{$posts->links()}}</div>
      {{-- <div class="relative bottom-20 md:bottom-0">
        <img src="images/image 67b.png" alt="">
        <p
          class="text-sm font-light left-6 md:left-10 bottom-48 md:bottom-56 lg:bottom-80 xl:bottom-96 relative z-50 lg:text-lg xl:text-xl md:text-base">
          1 min read</p>
        <h1
          class="text-sm font-bold left-6 md:left-10 bottom-44 md:bottom-52 lg:bottom-72 xl:bottom-80 relative z-50  xl:text-3xl md:text-base lg:text-2xl ">
          How to Optimize Your <br>Website for Search Engines <br>and Drive Traffic</h1>
        <div class="left-6 md:left-10 bottom-28 md:bottom-40 lg:bottom-52 xl:bottom-64 relative z-50">
          <a class="flex" href="blogcontent2.html">
            <p class="font-semibold text-sm md:text-lg lg:text-xl xl:text-2xl">Read more</p>
            <svg class="pb-4 md:pb-2 xl:pb-1 md:w-16 h-10" width="30" height="24" viewBox="0 0 60 34" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M1.5 17L51.5 17" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M44.5 24L51.5 17L44.5 10" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div> --}}
    </div>
  </div>
  <!-- /BLOG -->

</section>

<!-- Articles list -->
{{-- <div class="container">
  <div class="row">

    <!-- Article start -->
    @if($posts)
    @foreach($posts as $post)
    <div class="image-overlay col-sm-12 row my-3 py-5 hover-shadow">
      <div class="col-md-5 ">
        <a href="/blog/{{$post->slug}}">
          <img src="{{$post->featured_image}}" height="180" class="img-fluid"
            style="filter:brightness(0.8) contrast(1.2)" />
        </a>
      </div>
      <div class="col-md-7 ">
        <h5 class="text-warning my-3"> <a href="/blog/{{$post->slug}}" class="text-warning"> {{$post->title}} </a> </h5>
        <p class="my-3 text-dark"> {{$post->excerpt}} </p>
        <a href="/blog/{{$post->slug}}" class="btn btn-outline-warning"> Read more </a>
      </div>
    </div>
    @endforeach
    @else
    <h1>Sorry, No articles posted yet. </h1>
    @endif
    <!-- Article end -->

    <div>{{$posts->links()}}</div>



  </div> --}}

  <x-to-top />
  <x-tailwind-footer />