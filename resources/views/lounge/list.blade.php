@extends('_layouts.master')

@section('style')
@endsection

@section('content')
    <div class="container">
        <div class="col-12">

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">번호</th>
                        <th>제목</th>
                        <th class="text-center">날짜</th>
                        <th class="text-center">조회수</th>
                    </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td>게시판 제목입니다.</td>
                        <td class="text-center">2018. 01. 01.</td>
                        <td class="text-center">999</td>
                    </tr>
                @endfor
                </tbody>
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('script')
@endsection
