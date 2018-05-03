@extends('admin._layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <nav class="col-3 nav flex-column">
                @include('admin._partial.side')
            </nav>
            <div class="col-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">상호명</th>
                        <th scope="col">주소</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach ($stores as $store) : ?>
                    <tr>
                        <th scope="row"><?= ++$i;?></th>
                        <td><?= $store->name; ?></td>
                        <td><?= $store->addr; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
