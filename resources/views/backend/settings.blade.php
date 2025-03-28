@extends('backend.master')
@section('contant') 
<div class="card">
  <div class="card-body">
    <h5 class="card-title fw-semibold mb-4">Settings Form</h5>
    @if (session('success'))                  
      <div class="alert alert-success">{{ session('success') }}</div>          
    @endif
    <div class="card">
      <div class="card-body">
        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control" id="logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                <img style="background-color: dimgrey;" class="mt-2 rounded" height="40px" src="{{ asset($setting->logo ?? '') }}" id="blah">
              </div>
            </div>
            <div class="col">                  
              <div class="mb-3">
                <label for="favicon" class="form-label">Favicon</label>
                <input type="file" name="favicon" class="form-control" id="favicon">
                @error('favicon') <span class="text-danger">{{ $message }}</span> @enderror
                <img class="mt-2 rounded" height="30px" src="{{ asset($setting->favicon ?? '') }}" alt="">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" value="{{ $setting->title ?? ''}}" class="form-control" id="title" placeholder="Enter website title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" value="{{ $setting->address ?? '' }}" class="form-control" id="address" placeholder="Enter address">
                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
            </div>
            <div class="col">
                <div class="mb-3">
                  <label for="whats_app" class="form-label">What's App</label>
                  <input type="tel" name="whats_app" value="{{ $setting->whats_app ?? ''}}" class="form-control" id="whats_app" placeholder="Enter what's app number">
                  @error('whats_app') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="tel" name="phone" value="{{ $setting->phone ?? ''}}" class="form-control" id="phone" placeholder="Enter phone number">
                  @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" value="{{ $setting->email ?? ''}}" class="form-control" id="email" placeholder="Enter email">
                  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="mb-3">
                  <label for="facebook" class="form-label">Facebook</label>
                  <input type="text" name="facebook" value="{{ $setting->facebook ?? ''}}" class="form-control" id="facebook" placeholder="Facebook profile link">
                  @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                </div>                    
            </div>
            <div class="col">
                <div class="mb-3">
                  <label for="twitter" class="form-label">Twitter</label>
                  <input type="text" name="twitter" value="{{ $setting->twitter ?? ''}}" class="form-control" id="twitter" placeholder="Twitter profile link">
                  @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="mb-3">
                  <label for="youtube" class="form-label">YouTube</label>
                  <input type="text" name="youtube" value="{{ $setting->youtube ?? ''}}" class="form-control" id="youtube" placeholder="YouTube channel link">
                  @error('youtube') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                  <label for="instagram" class="form-label">Instagram</label>
                  <input type="text" name="instagram" value="{{ $setting->instagram ?? '' }}" class="form-control" id="instagram" placeholder="Instagram profile link">
                  @error('instagram') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="linkedin" class="form-label">Linkedin</label>
                <input type="text" name="linkedin" value="{{ $setting->linkedin ?? '' }}" class="form-control" id="linkedin" placeholder="Linkedin profile link">
                @error('linkedin') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="map_link" class="form-label">Google Map</label>
                <input type="text" name="map_link" value="{{ $setting->map_link ?? '' }}" class="form-control" id="map_link" placeholder="Google Map Embed link">
                @error('map_link') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
            </div>
          </div>          
          <div class="form-text mb-3" id="basic-addon4">Promo section main title & description to update.</div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="promo_title" class="form-label">Promo Title</label>
                <textarea class="form-control" id="promo_title" rows="1" name="promo_title" placeholder="Follow us text">{{ $setting->promo_title ?? '' }}</textarea>
                @error('promo_title') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="promo_desp" class="form-label">Promo Description</label>
                <textarea class="form-control" id="promo_desp" rows="4" name="promo_desp" placeholder="">{{ $setting->promo_desp }}</textarea>
                @error('promo_desp') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
            </div>
          </div>
          </div>
          <button type="submit" class="btn btn-golden">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection