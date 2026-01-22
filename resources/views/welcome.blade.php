<x-layout>
    <header class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center header-custom">
            <div class="col-12">
                <h1 class="text-center display-4 title">Benvenuti</h1>
                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
        </div>
    </header>
</x-layout>