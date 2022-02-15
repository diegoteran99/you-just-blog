@props(['category'])

<a href="/?category={{ $category->slug }}"
   class="px-3 py-1 border rounded-full text-blue-300 text-xs uppercase font-semibold"
   style="font-size: 10px; border-color: #f2715a; color: #f2715a; "
>{{ $category->name }}</a>
