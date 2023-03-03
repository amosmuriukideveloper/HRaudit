<x-app-layout>
    
    <div class="col-md-12">
        <div class="card-box"  style="border:1px solid #ccc">
            <div class="card-header mb-2" style="border:1px solid #ccc">
                <h4 class="header-title"><b>HR Audit BioData Form</b></h4>
      </div>
 
           

            <form id="basic-form" action="{{ route('employment.change.store', $id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="id" value="{{ $id }}">
                <div>
                    <h3>Employment Changes/Moves</h3>
             
                        <div class="form-group  row">

                            <div class="col-md-6">
                                <label class="control-label">Relative *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relative_id" id="yes" value="1" {{ old('relative_id') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="yes">Yes </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relative_id" id="no" value="0" {{ old('relative_id') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="no">No</label>
                                </div>
                                @if ($errors->has('relative_id'))
                                    <span class="text-danger">{{ $errors->first('relative_id') }}</span>
                                @endif
                            </div>
                          
                             <div class="col-md-6">
                                <label class="control-label" for="name"> Name *</label>
                                <div class="">
                                    <input id="name" name="name" value="{{old('name')}}" type="text" class="required form-control">
                                </div>
                                @if ($errors->has('name'))
                                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                             </div>
                             
                        </div>


                        <div class="form-group  row">
                                

                            <div class="col-md-6">
                                <label class="control-label" for="job_title_id">Job Title *</label>
                                <div class="">
                                    <input type="text" id="job_title_id" name="job_title_id" class="required form-control" value="{{ old('job_title_id') }}" placeholder="Enter job title">
                                </div>
                                @if ($errors->has('job_title_id'))
                                    <span class="text-danger text-left">{{ $errors->first('job_title_id') }}</span>
                                @endif
                            </div>

                                <div class="col-md-6">
                                    <label class="control-label" for="relationship">Relationship *</label>
                                    <div class="">
                                        <input type="text" id="relationship" name="relationship" class="required form-control" value="{{ old('relationship') }}" placeholder="Enter relationship">
                                    </div>
                                    @if ($errors->has('relationship'))
                                        <span class="text-danger text-left">{{ $errors->first('relationship') }}</span>
                                    @endif
                                </div>
                                
                            
                        </div>

                        
                        <div class="form-group  row">
                           
                            <div class="col-md-6">
                                <label class="control-label" for="department_id">Department *</label>
                                <div class="">
                                    <select id="department_id" name="department_id" class="required form-control">
                                        <option value="">Select a department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{old('department_id', $department->id )}}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('department_id'))
                                    <span class="text-danger text-left">{{ $errors->first('department_id') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="control-label" for="study_leave">Study Leave *</label>
                                <div class="">
                                    <select id="study_leave" name="study_leave" class="required form-control">
                                        <option value="">Select an option</option>
                                        <option value="1" {{ old('study_leave') == '1' ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('study_leave') == '0' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                                @if ($errors->has('study_leave'))
                                    <span class="text-danger text-left">{{ $errors->first('study_leave') }}</span>
                                @endif
                            </div>
                            
                               
                        </div>


                        


                        <div class="form-group  row">
                            
                            

                            <div class="col-md-6">
                                <label class="control-label" for="name"> Start Date *</label>
                                <div class="">
                                    <input id="start_date" name="start_date" value="{{old('start_date')}}" type="month" class="required form-control">
                                </div>
                                @if ($errors->has('start_date'))
                                    <span class="text-danger text-left">{{ $errors->first('start_date') }}</span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="control-label" for="name"> End Date *</label>
                                <div class="">
                                    <input id="end_date" value="{{old('end_date')}}" name="end_date" type="month" class="required form-control">
                                </div>
                                @if ($errors->has('end_date'))
                                    <span class="text-danger text-left">{{ $errors->first('end_date') }}</span>
                                @endif
                            </div>
                            
                        </div>


                       
                        <div class="form-group  row">
                           
                            <div class="col-md-6">
                                <label class="control-label" for="institution">Institution *</label>
                                <div class="">
                                    <input type="text" id="institution" name="institution" class="required form-control" value="{{ old('institution') }}" placeholder="Enter institution name">
                                </div>
                                @if ($errors->has('institution'))
                                    <span class="text-danger text-left">{{ $errors->first('institution') }}</span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="control-label" for="course">Course *</label>
                                <div class="">
                                    <input type="text" id="course" name="course" class="required form-control" value="{{ old('course') }}" placeholder="Enter course name">
                                </div>
                                @if ($errors->has('course'))
                                    <span class="text-danger text-left">{{ $errors->first('course') }}</span>
                                @endif
                            </div>
                                
                              </div>

                              <div class="form-group  row">
                               
                                <div class="col-md-6">
                                    <label class="control-label" for="certificate">Certificate Attained *</label>
                                    <div class="">
                                        <input type="text" id="certificate" name="certificate" class="required form-control" value="{{ old('certificate') }}" placeholder="Enter certificate name">
                                    </div>
                                    @if ($errors->has('certificate'))
                                        <span class="text-danger text-left">{{ $errors->first('certificate') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label" for="name"> Date *</label>
                                    <div class="">
                                        <input id="date" value="{{old('date')}}" name="date" type="month" class="required form-control">
                                </div>
                                @if ($errors->has('date'))
                                    <span class="text-danger text-left">{{ $errors->first('date') }}</span>
                                    @endif
                                    </div>
                                
                                  </div>

                                  <div class="form-group  row">
                                  

                                        <div class="col-md-6">
                                            <label class="control-label" for="approving_signatory"> Approving Signatory *</label>
                                            <div class="">
                                                <input id="approving_signatory" value="{{ old('approving_signatory') }}" name="approving_signatory" type="text" class="required form-control">
                                            </div>
                                            @if ($errors->has('approving_signatory'))
                                                <span class="text-danger text-left">{{ $errors->first('approving_signatory') }}</span>
                                            @endif
                                        </div>
                                        
                                  </div>

                                  <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="comments">Comments</label>
                                        <div>
                                            <textarea id="comments" name="comments" class="form-control">{{old('comments')}}</textarea>
                                        </div>
                                        @if ($errors->has('comments'))
                                            <span class="text-danger text-left">{{ $errors->first('comments') }}</span>
                                        @endif
                                    </div>
                                </div>


                        <div class="form-group  row">
                            <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect width-md"><i class="mdi mdi-send-circle-outline" ></i> Next Section : Employment Details</button>
                         
                        </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
</x-app-layout>


