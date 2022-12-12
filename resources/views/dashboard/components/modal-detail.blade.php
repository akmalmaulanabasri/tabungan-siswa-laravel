<table class="table table-striped border">
    <tr>
        <td>Nis</td>
        <td>{{ $u->nis }}</td>
    </tr>
    <tr>
        <td>Nama Siswa</td>
        <td>{{ $u->name }}</td>
    </tr>
    <tr>
        <td>Rombel</td>
        <td>{{ $u->rombel->nama_rombel }}</td>
    </tr>
    <tr>
        <td>Rayon</td>
        <td>{{ $u->rayon->nama_rayon }}</td>
    </tr>
</table>

<a onclick="confirmDelete({{ $u->id }})" class="btn btn-danger ms-auto"><i class="fas fa-trash"></i> Delete Siswa</a>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{ route('dashboard.student.destroy', $u->user_id) }}";
            }
        })        
    }    
</script>