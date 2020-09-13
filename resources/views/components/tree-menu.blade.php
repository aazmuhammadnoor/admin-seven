@foreach($child as $key => $ch)
	@if($ch['child'] != null)
		<li class="nav-item">
	     <a href="{{ $ch['url'] }}" class="nav-link">
	      <i class="fas {{ $ch['icon'] }} nav-icon"></i>
	      <p>{{ $ch['label'] }}</p>
	     </a>
	    </li>
		<ul class="nav nav-treeview">
		  @php
		  	dd($ch);
		  @endphp
		  <x-tree-menu :child="$ch['child']" />
		</ul>
	@else
		<li class="nav-item">
	     <a href="{{ $ch['url'] }}" class="nav-link">
	      <i class="fas {{ $ch['icon'] }} nav-icon"></i>
	      <p>{{ $ch['label'] }}</p>
	     </a>
	    </li>
	@endif
@endforeach