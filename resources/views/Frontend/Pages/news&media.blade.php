@extends('Frontend.Layouts.app')

@section('content')


<!....News & Media....>


<div class="">
    <div class="col-md-12 mt-5">

        <div class="news-media-section">
            <div class="news-media-background-image"></div>
            <div class="news-media-content">
              <div class="news-media-rectangle-box">
                <h2 class="news-media-title">News & Media</h2>

              </div>
            </div>
          </div>


    </div>

</div>



<!....investor details 1st section(3 column)....>

<div class="container">
    <div class="col-md-12 mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="news-media-column">
                    <div class="news-media-image">
                        <img src="news_media_image/flower.jpg" alt="Image 1" width="100%">

                    </div>
                    <div class="news-media-title">June 12, 2020</div>
                    <div class="news-media-paragraph">HSBC arranges countrys first sustainability linked loan for Square Group</div>
                    <div>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-media-column">
                    <div class="news-media-image">
                        <img src="news_media_image/men.jpg" alt="Image 1" width="100%">

                    </div>
                    <div class="news-media-title">June 12, 2020</div>
                    <div class="news-media-paragraph">HSBC arranges countrys first sustainability linked loan for Square Group</div>
                    <div>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-media-column">
                    <div class="news-media-image">
                        <img src="news_media_image/solar.jpg" alt="Image 1" width="100%">

                    </div>
                    <div class="news-media-title">June 12, 2020</div>
                    <div class="news-media-paragraph">HSBC arranges countrys first sustainability linked loan for Square Group</div>
                    <div>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!....News & Media 2nd section(3 column)....>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="news-media-column">
                    <div class="news-media-image">
                        <img src="{{ asset('/frontend/asset/') }}/images/solar.jpg" alt="Image 1" width="100%">

                    </div>
                    <div class="news-media-title">June 12, 2020</div>
                    <div class="news-media-paragraph">HSBC arranges countrys first sustainability linked loan for Square Group</div>
                    <div>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-media-column">
                    <div class="news-media-image">
                        <img src="{{ asset('/frontend/asset/') }}/images/solar.jpg" alt="Image 1" width="100%">

                    </div>
                    <div class="news-media-title">June 12, 2020</div>
                    <div class="news-media-paragraph">HSBC arranges countrys first sustainability linked loan for Square Group</div>
                    <div>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-media-column">
                    <div class="news-media-image">
                        <img src="{{ asset('/frontend/asset/') }}/images/solar.jpg" alt="Image 1" width="100%">

                    </div>
                    <div class="news-media-title">June 12, 2020</div>
                    <div class="news-media-paragraph">HSBC arranges countrys first sustainability linked loan for Square Group</div>
                    <div>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
