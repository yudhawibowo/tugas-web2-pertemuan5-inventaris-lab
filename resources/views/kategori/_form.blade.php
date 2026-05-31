<div class="mb-3">
    <label class="form-label">Kategori</label>

    <div style="display:flex; gap:10px;">

        <select name="kategori_id" class="form-control">

            @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}" @selected(old('kategori_id', $item->kategori_id ?? '') == $kategori->id)>
                    {{ $kategori->nama }}
                </option>
            @endforeach

        </select>

        <a href="{{ route('kategori.create') }}" class="btn btn-success">
            +
        </a>

    </div>
</div>
