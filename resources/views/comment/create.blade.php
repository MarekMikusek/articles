@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
					<div class="text-center">
						<h3>
							Add new comment
						</h3>
					</div>
					<form method="POST" action="/comment">
                        @csrf
						<input type="hidden" value="{{ $article_id }}" name="article_id">

                        <div class="form-group row">
                            <label for="content" class="col-md-2 col-form-label text-md-right">Comment</label>

                            <div class="col-md-10">
                                <textarea id="content" type="text" class="form-control-text" name="content" value="{{ old('content') }}" required autocomplete="content" style="width:100%"></textarea>

                                @error('content')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

