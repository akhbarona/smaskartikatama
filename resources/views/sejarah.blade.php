@extends('layouts.guest.preset')
@section('judul', 'Sejarah')
@section('konten')
    @include('layouts.guest.hero', ['judul' => 'Sejarah'])
    <!-- Sejarah Section -->
    <section class="py-120" id="sejarah">
        <div class="container">
            <div class="card lh-lg mb-40 text-base">
                <div class="card-body text-black">
                    <div class="p-20">
                        {{-- p.mb-24 --}}
                        {!! $Sejarah->deskripsi ?? 'Deskripsi Belum Ada' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
