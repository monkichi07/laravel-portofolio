@include('template.navbar')

<h1>tambah</h1>
<div class="container">
    <form action="/tambah-project" method="post">
        @csrf
        <div class="mb-3">
          <label class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="mb-3">
            <label class="form-label">isi</label>
            <input type="text" class="form-control" name="isi">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <a href="/tampil-buku">daftar buku</a>
    
</body>
</html>