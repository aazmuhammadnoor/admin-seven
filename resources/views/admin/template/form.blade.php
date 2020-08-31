<div class="row">
  <section class="col-lg-12">
    <x-card :title="'Form Admin Seven'">
      <x-form-input-text 
      	:column="'2:6'" {{-- 2 for label width and 6 for field --}}
      	:label="'Text Input'"  {{-- text label --}}
      	:help="'information'" {{-- help information --}}
      	:class="''" {{-- add more class and will be class="form-control [your-class] " --}}
      	require="require"
      	name="text"
      	placeholder="placeholder here"
      />
      <x-form-input-email 
      	:column="'2:6'"
      	:label="'Email'"
      	:help="'information'"
      	:class="''"
      	require="require"
      	name="email"
      	placeholder="Email"
      	value="test@gmail.com"
      />
      <x-form-input-password 
      	:column="'2:6'" 
      	:label="'Password Input'" 
      	:class="''"
      	name="password"
      	placeholder="Password"
      	:color="'info'"
      />
      <x-form-input-date 
      	:column="'2:6'" 
      	:label="'Date'" 
      	:class="''"
      	name="date"
      	placeholder="Date"
      	value="2020-01-01"
      	:color="'success'"
      />
      <x-form-input-date-range
      	:column="'2:6'" 
      	:label="'Date Range'" 
      	:class="''"
      	name="daterange"
      	placeholder="Date"
      	value="2020-01-01"
      	:color="'success'"
      />
      <x-form-input-date-time-range
      	:column="'2:6'" 
      	:label="'Date Time Range'" 
      	:class="''"
      	name="date_time_range"
      	placeholder="Date"
      	value="2020-01-01"
      	:color="'warning'"
      />
      {{-- this PHP script bellow for select options --}}
      @php
      	$options = [
      		'1' => 'One',
      		'2' => 'Two',
      		'3' => 'Three | disabled' /* make sure first string is your option's text and if you want add some attributes for spesific option use | as delimiter */
      	];
      @endphp
      <x-form-select
      	:column="'2:6'" 
      	:label="'Country'" 
      	:class="''"
      	:color="'danger'"
      	:options="$options" {{-- put options as array in PHP variable --}}
      	:default="'2'"
      	placeholder="Pilih"
      	name="select"
      />
      <x-form-input-number 
      	:column="'2:6'"
      	:label="'Number Input'"
      	:class="''"
      	require="require"
      	name="number"
      	placeholder="placeholder here"
      	:before="'$'"
      />
      <x-form-input-text-append 
      	:column="'2:3'"
      	:label="'Text Append'"
      	:class="''"
      	require="require"
      	name="text"
      	placeholder="placeholder here"
      	:before="'AB'"
      	:after="'XY'"
      	:color="'purple'"
      />
      <x-form-input-color
      	:column="'2:6'" 
      	:label="'Color'" 
      	:class="''"
      	name="color"
      	placeholder="Color"
      />
      <x-form-input-time
      	:column="'2:2'" 
      	:label="'Time'" 
      	:class="''"
      	name="time"
      	placeholder="Time"
      />
      {{-- this PHP script bellow for checkbox property --}}
      @php
      	$options = [
      		'1' => 'One',
      		'2' => 'Two',
      		'3' => 'Three | disabled'
      	];
      	$value = ['1','3']; /*because of checkbox is array format value, add :value in your attributes if you want to make default checked*/
      @endphp
      <x-form-checkbox
      	:column="'2:6'" 
      	:label="'Checkbox'" 
      	:class="''"
      	:color="'success'"
      	:options="$options" {{-- put options as array in PHP variable --}}
      	:value="$value" {{-- put value here --}}
      	placeholder="Pilih"
      	name="checkbox"
      />
      {{-- this PHP script bellow for checkbox property --}}
      @php
      	$options = [
      		'1' => 'One',
      		'2' => 'Two',
      		'3' => 'Three | disabled'
      	];
      @endphp
      <x-form-radio
      	:column="'2:6'" 
      	:label="'Radio'" 
      	:class="''"
      	:color="'info'"
      	:options="$options" {{-- put options as array in PHP variable --}}
      	:default="'2'"
      	placeholder="Pilih"
      	name="radio"
      />
      <x-form-switch
      	:column="'2:6'" 
      	:label="'Switch'" 
      	:class="''"
      	:color="'danger|success'"
      	:default="false" {{-- default value is boolean --}}
      	placeholder="Pilih"
      	name="radio"
      />
    </x-card>
  </section>
</div>