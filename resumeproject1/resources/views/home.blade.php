<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{ asset('images/pic2.jpg') }}" alt="" class="img-thumbnail" width='250px' height='150px'>
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-bold st-font">Hello</h1>
                <div class="px-4" style="line-height: 2rem;">
                    <p style="text-indent:100px">I am <b class="text-warning">Sonam Mande</b>
                        having 5 years of full-stack web development experience for global businesses, I offer the
                        technical expertise you are seeking for your web developer position.
                    </p>
                    <p>Since earning my bacherlor's degree in internet and web development from XYZ university, I have
                        served as a web developer at <b class="text-warning">Internet Technologies Ltd.</b>, one of the
                        biggest digital marketing and web development firm. In this position, I have led web development
                        projects for clients in diverse industries including technology, manufacturing, pharmaceutical,
                        hospitality, retail and finanical services</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ab consequatur consectetur laborum,
                        obcaecati id a in, illo aliquid esse ea ipsa. Nesciunt voluptatem, rerum modi illum porro nisi
                        doloremque enim neque cum sapiente. Est eos unde voluptas. Quos, consectetur a incidunt sapiente
                        vero necessitatibus officia ea eaque, aperiam quisquam ipsam excepturi dicta cumque alias. Quo
                        perferendis totam modi ratione ipsum aliquid necessitatibus consequatur rerum veritatis magnam
                        dicta
                        delectus sequi explicabo unde, veniam, ipsam minima adipisci saepe? Neque enim magnam modi
                        pariatur
                        ad ullam, nisi consequuntur fugit dolor a. Quisquam animi totam molestias sint minima ad
                        distinctio,
                        possimus deleniti laboriosam?</p>
                </div>

            </div>
            <div class="text-center">
                <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-info mx-5 my-3">Contact</a>




            </div>
        </div>

    </x-slot>
</x-layout>
