<table class="table">
	<slug/>
</table>
@isset($pagination)
<div class="row">
	<div class="col-12">
		<ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          @for ($i = 1; $i <= $pagination['total_page'] ; $i++)
          	<li class="page-item {{ $pagination['current_page'] == $i ? 'active' : '' }}"><a class="page-link" href="#">{{ $i }}</a></li>
          @endfor
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
	</div>
</div>
@endisset