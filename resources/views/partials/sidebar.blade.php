
<div class="dlabnav">
  <div class="dlabnav-scroll">
    @if(Auth::user()->user_type == 1)
    @include('partials.admin_menu')
  @elseif(Auth::user()->user_type == 2)
  @include('partials.teacher_menu')
@elseif(Auth::user()->user_type == 3)
  @include('partials.student_menu')
@elseif(Auth::user()->user_type == 4)
  @include('partials.parent_menu')
@endif
  </div>
</div>