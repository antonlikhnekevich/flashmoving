<html lang-"en">
  <head>
    @include('partials/_head')
  </head>
  <body>
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="80487" data-tilda-page-id="277451" data-tilda-formskey="037c22c7d5e69bb5f455c2a4d760c441">
      @include('partials/_nav')
      @yield('content')
      @include('partials/_footer')
    </div>
    @include('partials/_js')
  </body>
</html>
