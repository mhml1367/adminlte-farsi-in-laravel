
          @if(session('message'))
          <div class="alert alert-{{session('alert')}} alert-dismissible">
            <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>
                @if (session('alert')=='danger')
                    <i class="icon fa fa-ban"></i>
                @endif
                @if (session('alert')=='info')
                    <i class="icon fa fa-info"></i>
                @endif
                @if (session('alert')=='warning')
                    <i class="icon fa fa-warning"></i>
                @endif
                @if (session('alert')=='success')
                <i class="icon fa fa-success"></i>
            @endif
                {{session('message')}}</h4>
          </div>
          @endif
