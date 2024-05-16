<div class="item">
    <span class="d-block text-gray-1 text-left font-weight-normal">
        {{ $field['title'] ?? "" }}
    </span>
    <div class="border-bottom border-width-2 border-color-1 mb-4 form-content">
        <div class="u-datepicker overflow-hidden input-group py-2 flex-nowrap form-date-search is_single_picker">
            <div class="input-group-prepend">
                <span class="d-flex align-items-center mr-2 font-size-21">
                    <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                </span>
            </div>
            <div class="date-wrapper height-40 font-size-16 ml-1 shadow-none font-weight-bold form-control hero-form bg-transparent border-0 flatpickr-input p-0">
                <div class="render check-in-render">{{Request::query('start',display_date(strtotime("today")))}}</div>
            </div>
            <input type="hidden" class="check-in-input" value="{{Request::query('start',display_date(strtotime("today")))}}" name="start">
            <input type="text" class="check-in-out" value="{{Request::query('date',date("Y-m-d"))}}">
        </div>
    </div>
</div>
