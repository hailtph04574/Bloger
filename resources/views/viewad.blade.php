<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> @yield('title') </title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="{{ asset('./favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('./favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <!-- CSS files -->
    <link href="{{ asset('./dist/libs/selectize/dist/css/selectize.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/libs/flatpickr/dist/flatpickr.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/libs/nouislider/distribute/nouislider.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./dist/css/demo.min.css') }}" rel="stylesheet"/>

  </head>
  <body class="antialiased">
    <div class="page">
      @include('adlayouts/header')
      @include('adlayouts/nav')

      <div class="content">
        <div class="container-xl d-flex flex-column justify-content-center">
        @yield('content')  
        </div>
        @include('adlayouts/footer')
      </div>
    </div>
    {{-- Sweet Alert JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <!-- Libs JS -->
    <script src="{{ asset('./dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('./dist/libs/jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('./dist/libs/autosize/dist/autosize.min.js')}}"></script>
    <script src="{{ asset('./dist/libs/imask/dist/imask.min.js')}}"></script>
    <script src="{{ asset('./dist/libs/selectize/dist/js/standalone/selectize.min.js')}}"></script>
    <script src="{{ asset('./dist/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{ asset('./dist/libs/flatpickr/dist/plugins/rangePlugin.js')}}"></script>
    <script src="{{ asset('./dist/libs/nouislider/distribute/nouislider.min.js')}}"></script>
    <!-- Tabler Core -->
<script src="{{ asset('./dist/js/tabler.min.js') }}"></script>
<script>
  // @formatter:off
  noUiSlider.create(document.getElementById('range-simple'), {
  	start: 20,
  	connect: [true, false],
  	step: 10,
  	range: {
  		min: 0,
  		max: 100
  	}
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  noUiSlider.create(document.getElementById('range-connect'), {
  	start: [60, 90],
  	connect: [false, true, false],
  	step: 10,
  	range: {
  		min: 0,
  		max: 100
  	}
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  noUiSlider.create(document.getElementById('range-color'), {
  	start: 40,
  	connect: [true, false],
  	step: 10,
  	range: {
  		min: 0,
  		max: 100
  	}
  });
  // @formatter:on
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
  	flatpickr(document.getElementById('calendar-simple'), {
  	});
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
  	flatpickr(document.getElementById('calendar-time'), {
  	});
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
  	flatpickr(document.getElementById('calendar-inline'), {
  		inline: true,
  	});
  });
</script>
<script>
  $(document).ready(function () {
  	$('#select-tags').selectize({
  		maxItems: 15,
  	});
  });
</script>
<script>
  $(document).ready(function () {
  	$('#select-tags-advanced').selectize({
  		maxItems: 15,
  		plugins: ['remove_button'],
  	});
  });
</script>
<script>
  $(document).ready(function () {
  	$('#select-users').selectize({
  	});
  });
</script>
<script>
  $(document).ready(function () {
  	$('#select-people').selectize({
  		render: {
  			option: function (data, escape) {
  				return '<div class="option">' + data.avatar + '' + escape(data.text) + '</div>';
  			},
  			item: function (data, escape) {
  				return '<div class="d-flex align-items-center">' + data.avatar + '' + escape(data.text) + '</div>';
  			}
  		}
  	});
  });
</script>
<script>
  $(document).ready(function () {
  	$('#select-countries').selectize({
  		render: {
  			option: function (data, escape) {
  				return '<div class="option"><span class="flag flag-country-' + data.flag + ' mr-2 ml-n1"></span>' + escape(data.text) + '</div>';
  			},
  			item: function (data, escape) {
  				return '<div class="d-flex align-items-center"><span class="flag flag-country-' + data.flag + ' mr-2 ml-n1"></span>' + escape(data.text) + '</div>';
  			}
  		}
  	});
  });
</script>
<script>
  $(document).ready(function () {
  	$('#select-states').selectize({
  		render: {
  			option: function (data, escape) {
  				return '<div class="option"><span class="flag flag-country-' + data.flag + ' mr-2 ml-n1"></span>' + escape(data.text) + '</div>';
  			},
  			item: function (data, escape) {
  				return '<div class="d-flex align-items-center"><span class="flag flag-country-' + data.flag + ' mr-2 ml-n1"></span>' + escape(data.text) + '</div>';
  			}
  		}
  	});
  });
</script>
<script>
  (function () {
  	/**
  	 * Input mask
  	 */
  	var maskElementList = [].slice.call(document.querySelectorAll('[data-mask]'))
  	maskElementList.map(function (maskEl) {
  		return new IMask(maskEl, {
  			mask: maskEl.dataset.mask,
  			lazy: maskEl.dataset['mask-visible'] === 'true'
  		})
  	});
  })();
</script>
<script>
  (function () {
  	const elements = document.querySelectorAll('[data-toggle="autosize"]');
  	if (elements.length) {
  		elements.forEach(function (element) {
  			autosize(element);
  		});
  	}
  })();
</script>
    <script>
      function confirmDelete(el) {
          var url = el.getAttribute('url');
          var conf = confirm('Are You Sure, Delete ?');
          if (conf == true) {
              window.location.href = url;
          } else {
              return false;
          }
      }
    </script>
  <script>
    function confirmEdit(el) {
        var url = el.getAttribute('url');
        var conf = confirm('Are You Sure, Edit ?');
        if (conf == true) {
            window.location.href = url;
        } else {
            return false;
        }
    }
  </script>
</body>  
</html>