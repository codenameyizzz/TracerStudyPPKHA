@extends('admin.layouts.app')

@section('content')

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Data Responden</h1>
  </div>

  <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Pertanyaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Contoh data pertanyaan -->
        <tr>
            <td>1</td>
            <td>Bagaimana pendapat Anda tentang fasilitas kampus?</td>
            <td>
                <button class="btn btn-edit"><i class="fas fa-edit"></i></button>
                <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        <!-- Data lainnya -->
    </tbody>
</table>
</main>
@endsection