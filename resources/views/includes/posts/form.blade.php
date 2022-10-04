@if ($errors->any())
 <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
 </div>
@endif

@if ($post->exists)
{{-- Qui vado nel post di modifica --}}
<form action="{{ route('admin.posts.update', $post)}}" method="POST">
    @method('PUT')
@else
{{-- Qui sto facendo una creazione --}}
<form action="{{ route('admin.posts.store')}}" method="POST">
@endif
    @csrf
      <div class="row">

       <div class="col-9">
           <div class="form-group">
               <label for="title">Titolo</label>
               <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required minlength="3">
           </div>
       </div>

       <div class="col-3">
            <div class="form-group">
                <label for="category_id">Seleziona categoria</label>
                <select class="form-control" id="category_id" name="category_id">
                <option value="">Nessuna categoria</option>
                @foreach ($categories as $category)
                    <option
                    @if (old('category_id', $post->category_id) == $category->id) selected
                    @endif
                     value="{{ $category->id }}">{{ $category->label }}</option>
                @endforeach
                </select>
            </div>
       </div>
    

       <div class="col-12">
           <div class="form-group">
               <label for="content">Contenuto</label>
               <textarea type="text" class="form-control" id="content" name="content" rows="6" required>
                   {{ old('content', $post->content) }}
               </textarea>
           </div>
       </div>

       <div class="col-12">
           <div class="form-group">
               <label for="image">Image</label>
               <textarea type="url" class="form-control" id="image" name="image" required>
                   {{ old('image', $post->image) }}
               </textarea>
           </div>
       </div>
      </div>

      <hr>
       
       <footer class="d-flex align-items-center justify-content-between">
       <a href="{{ route('admin.posts.index')}}" class="btn btn-secondary mr-5">
           <i class="fa-solid fa-rotate-left mr-2"></i>Torna indietro
       </a>

       <button class="btn btn-success" type="submit">
       <i class="fa-solid fa-floppy-disk mr-2"></i>Salva
       </button>
       </footer>
   </form>