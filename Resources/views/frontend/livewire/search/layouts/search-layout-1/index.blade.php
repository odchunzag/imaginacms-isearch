<div>
    <a data-toggle="modal" data-target="#searchModal"
       class="btn btn-link text-secondary icon cursor-pointer">
        <i class="fa fa-search"></i>
    </a>
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <img src="{{ Theme::url('img/logo.png') }}" class="img-fluid mx-auto py-2"/>
                    </div>
                    <h5 class="text-center my-4 font-weight-bold">
                        {{ $title }}
                    </h5>
                    <div id="search-box">
                        <div class="search-product row no-gutters">
                            <div class="col">
                                <div id="content_searcher" class="dropdown {{ $this->search ? 'show' : '' }}">
                                    <!-- input -->
                                    <div id="dropdownSearch"
                                         data-toggle="dropdown"
                                         aria-haspopup="true"
                                         aria-expanded="false"
                                         role="button"
                                         class="input-group dropdown-toggle">
                                        <div class="input-group">
                                            <input type="text" id="input_search" wire:model.debounce.1000ms="search" autocomplete="off"
                                                   class="form-control  rounded-right"
                                                   placeholder="{{ $placeholder }}"
                                                   aria-label="{{ $placeholder }}" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3 " type="submit" id="button-addon2">
                                                    <i class="{{ $icon }}"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- dropdown search result -->
                                    <div id="display_result"
                                         class="dropdown-menu w-100 rounded-0 py-3 m-0 overflow-auto {{ $this->search ? 'show' : '' }}"
                                         aria-labelledby="dropdownSearch"
                                         style="z-index: 999999;max-height: 480px;">
                                        @if(!empty($search))
                                            @if(count($results) > 0)
                                                <div>
                                                    @foreach($results as $item)
                                                        <div class="cart-items px-3 mb-3" style="max-height: 70px" wire:key="{{ $loop->index }}">
                                                            <!--Shopping cart items -->
                                                            <div class$="cart-items-item row">

                                                                <!-- image -->
                                                                <a href="{{ $item->url }}"
                                                                   class="cart-img pr-0  float-left col-auto text-center">
                                                                    <img class="img-fluid"
                                                                         src="{{ $item->mainImage->smallThumb }}"
                                                                         alt="{{ $item->title }}"
                                                                         style="max-height: 76px; width: 70px; object-fit: cover;">
                                                                </a>
                                                                <!-- dates -->
                                                                <div class="float-left col-9">
                                                                    <!-- title -->
                                                                    <h6 class="mb-0">
                                                                        <a href="{{ $item->url }}"
                                                                           class="font-weight-bold text-capitalize">
                                                                            {{ $item->title }}
                                                                        </a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    @endforeach
                                                </div>
                                            @else
                                                <h6 class="text-primary text-center">
                                                    {{ trans('icommerce::common.search.no_results') }}
                                                </h6>
                                            @endif
                                        @else
                                            <h6 class="text-primary text-center">
                                                {{ trans('icommerce::common.search.no_results') }}
                                            </h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-secondary text-white px-3" style="border-radius: 0 0.5rem 0.5rem 0;" type="button" class="close my-0" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>