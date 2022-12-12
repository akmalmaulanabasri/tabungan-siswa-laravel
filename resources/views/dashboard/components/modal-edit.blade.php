<form method="POST" action="{{ route('dashboard.student.update', $u->nis) }}" class="form-group">
    @csrf
    <label for="nis" class="form-label">Nis</label>
    <input placeholder="12108292" type="number" name="nis" id="nis" class="form-control"
        value="{{ old('nis', $u->nis) }}" disabled>

    @error('nis')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <label for="name" class="form-label mt-2">Nama</label>
    <input placeholder="Akmal Maulana Basri" type="text" name="name" id="name" class="form-control"
        value="{{ old('name', $u->name) }}">

    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <label for="rombel" class="form-label mt-2">Rombel</label>
    <select name="rombel_id" id="rombel" class="form-control">
        <option value="{{ $u->rombel->id }}">{{ $u->rombel->nama_rombel }} (Selected)
        </option>
        @foreach ($rombel as $r)
            <option value="{{ $r->id }}">{{ $r->nama_rombel }}</option>
        @endforeach
    </select>

    @error('rombel_id')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <label for="rayon" class="form-label mt-2">Rayon</label>
    <select name="rayon_id" id="rayon" class="form-control">
        <option value="{{ $u->rayon->id }}">{{ $u->rayon->nama_rayon }} (Selected)
        </option>
        @foreach ($rayon as $r)
            <option value="{{ $r->id }}">{{ $r->nama_rayon }}</option>
        @endforeach
    </select>

    @error('rayon_id')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="kirim" class="d-none" id="btnSubmit">

    <a onclick="confirmUpdate({{ $u->id }})" class="btn btn-warning ms-auto mt-3"><i class="fas fa-pencil"></i> Update Data Siswa</a>
    
    <script>
        function confirmUpdate(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang diubah tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, ubah data!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("btnSubmit").click(); 
                }
            })        
        }    
    </script>
</form>
