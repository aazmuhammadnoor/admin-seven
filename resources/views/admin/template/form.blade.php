<div class="row">
  <section class="col-lg-12">
    <x-card :title="'Form Admin Seven'">
      <x-form-input-text 
      	:column="'2:6'" {{-- 2 for label width and 6 for field --}}
      	:label="'Text Input'"  {{-- text label --}}
      	:name="'text'" 	{{-- field name --}}
      	:events="''" {{-- onclick:one()&&&onchange:two()&&&keyup:three() will be convert to onclick="one()" onchange="two()" etc --}}
      	:attributes="'require:require'" {{-- require:require will be convert to require="require" --}}
      	:placeholder="'Placeholder here'" {{-- placeholder display --}}
      	:help="'information'" {{-- help information --}}
      	:class="''" {{-- add more class and will be class="form-control [your-class] " --}}
      />
      <x-form-input-email 
      	:column="'2:6'" 
      	:label="'Email Input'" 
      	:name="'email'"
      	:events="''"
      	:attributes="'require:require'"
      	:placeholder="'Email'"
      	:class="''"
      	:value="'email@gmail.com'"
      />
      <x-form-input-password 
      	:column="'2:6'" 
      	:label="'Password Input'" 
      	:name="'password'"
      	:events="''"
      	:attributes="'require:require'"
      	:placeholder="'Password'"
      	:class="''"
      	:value="''"
      />
      <x-form-input-date 
      	:column="'2:6'" 
      	:label="'Date'" 
      	:name="'date'"
      	:events="''"
      	:attributes="'require:require'"
      	:placeholder="'Date'"
      	:class="''"
      	:value="''"
      />
    </x-card>
  </section>
</div>