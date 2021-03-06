@include('sharedHeader')
<div class="modal mymodel fade" id="readMore2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('trans.articleTitle') }}</h5>
          <button type="button" class="close" onclick="closeModel()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="readMoreBodyDescription2">

        </div>
      </div>
    </div>
  </div>

    <div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="index.html">{{ __('trans.siteName') }}</a></h1>
                    <br>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="/fr"> <img id="langs" src="<?php echo asset('images/france.png') ?>"/> </a></li>
                        <li><a href="/en"> <img id="langs" src="<?php echo asset('images/english.png') ?>"/> </a></li>
                        <li><a href="/all_news">{{ __('trans.allNews') }}</a></li>
                        <li><a href="/">{{ __('trans.homeDir') }}</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>

    <div class="wrapper row3">
        <main class="hoc container clear">
          <!-- main body -->
          <hr class="btmspace-80">
          <!-- ################################################################################################ -->
          <ul class="nospace group overview" id="allData">

          </ul>
          <!-- ################################################################################################ -->
          <!-- / main body -->
          <div class="clear"></div>
        </main>
      </div>
      <!-- read more Modal -->

      <script>
        function closeModel(){
            $('#readMore2').modal('hide');
        }

    </script>

@include('sharedFooter')
