@extends('layouts.app1')

@section('content')
<main class="main users chart-page" id="skip-target">
    <div class="container">
      <h2 class="main-title">Esoft Management System</h2>
    <div class="row stat-cards">
    <!-- Kelaniya Card -->
<div class="col-md-6 col-xl-3">
    <article class="stat-cards-item">
        <div class="stat-cards-icon primary">
            <i data-feather="bar-chart-2" aria-hidden="true"></i>
        </div>
        <div class="stat-cards-info">
            <p class="stat-cards-info__num">Colombo</p>
        </div>
        <div class="stat-cards-info">
            <a href="{{ route('dashboard', ['customerId' => 'C001']) }}" class="cssbuttons-io-button">
                EXPLORE
                <div class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                    </svg>
                </div>
            </a>
        </div>
    </article>
</div>

<!-- Warakapola Card -->
<div class="col-md-6 col-xl-3">
    <article class="stat-cards-item">
        <div class="stat-cards-icon primary">
            <i data-feather="bar-chart-2" aria-hidden="true"></i>
        </div>
        <div class="stat-cards-info">
            <p class="stat-cards-info__num">Kandy</p>
        </div>
        <div class="stat-cards-info">
            <a href="{{ route('dashboard', ['customerId' => 'K001']) }}" class="cssbuttons-io-button">
                EXPLORE
                <div class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                    </svg>
                </div>
            </a>
        </div>
    </article>
</div>


      <!-- Dambulla Card -->
      <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                  <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                  <p class="stat-cards-info__num">Nugegoda</p>
              </div>
              <div class="stat-cards-info">
                  <a href="{{ route('dashboard', ['customerId' => 'N001']) }}" class="cssbuttons-io-button">
                      EXPLORE
                      <div class="icon">
                          <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                          </svg>
                      </div>
                  </a>
              </div>
          </article>
      </div>

      <!-- Kurunagala Card -->
      <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                  <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                  <p class="stat-cards-info__num">Battaramulla</p>
              </div>
              <div class="stat-cards-info">
                  <a href="{{ route('dashboard', ['customerId' => 'B001']) }}" class="cssbuttons-io-button">
                      EXPLORE
                      <div class="icon">
                          <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                          </svg>
                      </div>
                  </a>
              </div>
          </article>
      </div>
  </div>
  
@endsection

@section('scripts')
@endsection