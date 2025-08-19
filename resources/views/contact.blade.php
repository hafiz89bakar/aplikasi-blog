{{-- filepath: resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body p-4">
                    <h2 class="h4 fw-bold mb-3 text-primary">Hubungi Kami</h2>
                    <p class="text-muted mb-4">
                        Ada pertanyaan, cadangan, atau ingin berkongsi artikel?
                        Sila isi borang di bawah atau email kami di
                        <a href="mailto:admin@aplikasiblog.com" class="text-decoration-none text-primary fw-semibold">
                            admin@aplikasiblog.com
                        </a>.
                    </p>

                    <form method="POST" action="#">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="mesej" class="form-label">Mesej</label>
                            <textarea class="form-control" id="mesej" name="mesej" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-paper-plane me-2"></i> Hantar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

