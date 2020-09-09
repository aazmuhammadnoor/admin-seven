<div class="row">
  <section class="col-lg-12">
    <x-card :title="'Simple Table'">
      @php
        $pagination = [
          'url' => url()->current(),
          'total_page' => 10,
          'first_page' => 1,
          'last_page' => 10,
          'current_page' => 2,
          'per_page' => 10,
          'total' => 100
        ];
      @endphp
      <x-table-simple
        :pagination="$pagination"
      >
      </x-table-simple>
    </x-card>
  </section>
</div>