@extends('layout.main')
<link rel="stylesheet" href="../css/style.css">
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Categories</h1>
                <div class="table-responsive">
                    <table class="my-2 border-bottom">
                        <tr>
                            @foreach ($category as $index => $category)
                                @if ($index > 0 && $index % 4 == 0)
                        </tr>
                        <tr>
                            @endif
                            <td class="my-2 border-bottom">
                                <div class="py-3 mx-5 fs-4">
                                    <a class="text-decoration-none"
                                        href="/category/{{ $category->slug }}">{{ $category->name }}</a>
                                </div>
                            </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <ul class="list-responsive">
                    @foreach ($cat as $category)
                        <li>
                            <a class="text-decoration-none" href="/category/{{ $category->slug }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
