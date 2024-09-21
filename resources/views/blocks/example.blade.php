<div>
    {{-- @dump($text)
  <style>
    pre.sf-dump, pre.sf-dump .sf-dump-default {
        z-index: 10;
    }
  </style> --}}
  {!! tiptap_converter()->asHTML($text) !!}
</div>