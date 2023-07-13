<aside class="w-full md:w-1/3 flex flex-col items-center px-3">


    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">
            {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
        </p>
        <h4 class="pb-2">
            {{  \App\Models\TextWidget::getContent('about-us-sidebar') }}
        </h4>
        <a href="#" class="w-full bg-red-800 text-white font-bold text-sm uppercase rounded hover:bg-red-700 flex items-center justify-center px-2 py-3 mt-4">
            Get to know us
        </a>
    </div>

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl font-semibold mb-3"> Categories</h3>
            @foreach($categories as $category)
            <a href="#">
                {{ $category->title }} ({{ $category->total }})
            </a>
            @endforeach
   
    </div>

</aside>