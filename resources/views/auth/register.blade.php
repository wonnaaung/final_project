@extends('layouts.authlayout')
@section('content')

<div class="container">
        <div class="col-md-4 offset-4 mt-5" >
                <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="tab-login"
            data-mdb-toggle="pill"
            href="#pills-login"
            role="tab"
            aria-controls="pills-login"
            aria-selected="true"
            >Register</a>
            
        </li>
      </ul>
                  <!-- Name input -->
                  <div class="form-outline mb-4">
                        <input type="text" id="registerName" class="form-control" />
                        <label class="form-label" for="registerName">Name</label>
                      </div>
                
                      <!-- Username input -->
                      <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" class="form-control" />
                        <label class="form-label" for="registerUsername">Username</label>
                      </div>
                
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control" />
                        <label class="form-label" for="registerEmail">Email</label>
                      </div>
                
                      <!-- Password input -->
                      <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                      </div>
                
                      <!-- Repeat Password input -->
                      <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="file" id="image" class="form-control" />
                        <label class="form-label" for="image">Input image</label>
                      </div>
                       <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input
                  class="form-check-input me-2"
                  type="checkbox"
                  value=""
                  id="registerCheck"
                  checked
                  aria-describedby="registerCheckHelpText"
                />
                <label class="form-check-label" for="registerCheck">
                  I have read and agree to the terms
                </label>
              </div>
                                  <!-- Submit button -->
            <a href="{{ route("login") }}" type="submit" class="btn btn-primary btn-block mb-3">Register</a>
              
            <div class="text-center">
              <p><a href="{{ route("login") }}">Alread Register?</a></p>
            </div>
          </form>
        </div>
          
        </div>
      </div>
      <!-- Pills content -->
</div>
</div>


@endsection

