<div class="row mb-3">
    <div class="col-xl-12 col-lg-7">
        <div id="accordion">
            <div class="card">
                <div class="card-header bg-secondary bg-gradient" id="headingOne">
                    <span class="text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fas fa-filter"></i>
                        <a href="#" class="text-white">Filter</a> 
                    </span>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        
                        @yield('search-content')

                        <div class="text-right">
                            <button class="btn btn-primary active">
                                <i class="fas fa-filter"></i>
                                <a href="#" class="text-white">Filter</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>