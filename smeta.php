<?php include('header.php') ?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Form Wizard</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-12 mb-4">
                <h5 class="mb-4">Standard / Add new Standard</h5>
                <div class="mb-4">
                    <!-- multistep form -->
                    <!-- progressbar -->
                    <div class="row multi_step_form">
                        <div class="col-lg-4 col-md-4 col-sm-12 tab_sections">
                            <ul id="progressbar" class="card-body card">
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Standard General Information</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Principle Clauses</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Types Of Audit</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Audit Related Questions</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Pre-Requisites
                                </li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Documents required at Audit</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Documents for Company to review</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Opening meeting Checklist</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Closing meeting Checklist</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Risk Table</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Employee Breakdown</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Audit Days</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Interview Sampling</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Non-Conformities</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Audit Execution Process Steps</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Certificate Template</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Application Review Checklist</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> ALL Standard</li>
                                <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Finish</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <form id="msform" action="#" method="POST" class="card-body card">

                                <div class="tab">
                                    <div class="card-body pt-0" id="standard_info">
                                        <h5 class="mb-4">Standard General Information</h5>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter Name Of Standard</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Type of Audit Cycle : </p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="smeta" name="office_scope" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="smeta">1 year</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="ctpat" name="office_scope" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="ctpat">2 year</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">What kind of audit announcements can be done in this standard?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="Announced" name="office_scope" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="Announced">Announced</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="Un-announced" name="office_scope" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="Un-announced">Un-announced</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="Semi-Un-announced" name="office_scope" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="Semi-Un-announced">Semi-Un-announced</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Announced</th>
                                                            <th scope="col">Un-announced</th>
                                                            <th scope="col">Semi-Un-announced</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <!-- <td contenteditable="true">Service Tax</td> -->
                                                            <td>Food Testing</td>
                                                            <td>People</td>
                                                            <td>Main</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Food Testing</td>
                                                            <td>People</td>
                                                            <td>Main</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Is this Standard similar to any other standard which was previously defined in the system? IF yes, do you wish to clone its settings into this standard?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="yes" name="office_scope" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="No" name="office_scope" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="No">No</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="card-body pt-0" id="principle_clauses">
                                        <h5 class="mb-4">Principle Clauses</h5>
                                        <div class="d-flex">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clause">
                                            <button type="button" class="action-button mt-0" onclick="addFormField();">Add Clauses</button>
                                        </div>
                                        <div id="fielddiv">
                                        </div>

                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="card-body pt-0" id="types_of_audit">
                                        <h5 class="mb-4">Types Of Audit</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" />
                                                    <span>Enter Audit type name</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label select_dropdown">
                                                    <select required class="form-control select2-single" data-width="100%">
                                                        <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                            Zone</option>
                                                        <option value="TPZ" selected>The Panic Zone</option>
                                                        <option value="TTZ">The Twilight Zone</option>
                                                    </select>
                                                    <span>Select Audit Announcement Type</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <button class="btn action-button float-left ml-0 mt-0">Add Audit</button>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Audit Type</th>
                                                            <th scope="col">Audit Announcement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Full Initial Audit</td>
                                                            <td>Announced/ Semi-unannounced/Unannounced</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Periodic Audit</td>
                                                            <td>Announced/ Semi-unannounced/Unannounced</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desktop Follow up Audit </td>
                                                            <td>Announced</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Full Follow-up Audit </td>
                                                            <td>Announced/ Semi-unannounced/Unannounced</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Partial Follow-up Audit </td>
                                                            <td>Announced/ Semi-unannounced/Unannounced</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="card-body pt-0" id="audit_related_questions">
                                        <h5 class="mb-4">Audit Related Questions</h5>
                                        <div class="form-group">
                                            <p class="mb-2">Type of SMETA Audit requested</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="2-pillar" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="2-pillar">2-pillar</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="4-pillar" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="4-pillar">4-pillar</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="full_initial" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="full_initial">Full Initial</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="Periodic" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="Periodic">Periodic</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="Full Follow???up" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="Full Follow???up">Full Follow???up</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="Partial Follow???U" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="Partial Follow???U">Partial Follow???Up</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="Partial Other ??? Define:" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="Partial Other ??? Define:">Partial Other ??? Define:</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Is facility already registered with SMETA?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="audit_related_questions_yes" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="audit_related_questions_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="audit_related_questions_no" name="audit_related_questions" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="audit_related_questions_no">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="mb-2">SEDEX Registration details (if already registered)</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control required" type="number" required />
                                                    <span>SEDEX Registration Number</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control required" type="text" required />
                                                    <span>SEDEX ID & Password (Optional)</span>
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="card-body pt-0" id="pre_requise">
                                        <h5 class="mb-4">Pre-Requisites</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter Pre-requisite</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Is there a need to upload a document against this pre-requisite?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="pre_requise_yes" name="pre_requise" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="pre_requise_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="pre_requise_no" name="pre_requise" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="pre_requise_no">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <button class="btn action-button float-left ml-0 mt-0">Add Pre-Requise</button>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pre-Requisite</th>
                                                            <th scope="col">Action against pre-requisite</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>SAQ (SEDEX Self-Assessment Questionnaire)</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                        <tr>
                                                            <td>SAQ (SEDEX Self-Assessment Questionnaire)</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="documents_required_at_audit">
                                        <h5 class="mb-4">Documents required at Audit (To be prepared by Customer)</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter Document Name:</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Is there a need to upload a document against this entry?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="documents_required_at_audit_yes" name="documents_required_at_audit" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="documents_required_at_audit_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="documents_required_at_audit_no" name="documents_required_at_audit" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="documents_required_at_audit_no">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Documents required at Audit (To be prepared by Customer)</th>
                                                            <th scope="col">Action against document</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Facility Floor Plans</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facility Floor Plans</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="documents_for_company_audit">
                                        <h5 class="mb-4">Documents for Company to review before Audit</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter Document Name:</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Is there a need to upload a document against this entry?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="documents_for_company_audit_yes" name="documents_for_company_audit" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="documents_for_company_audit_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="documents_for_company_audit_no" name="documents_for_company_audit" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="documents_for_company_audit_no">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Documents for Company to review before Audit</th>
                                                            <th scope="col">Action against the document</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Standard/Code</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Standard/Code</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="opening_meeting_checklist">
                                        <h5 class="mb-4">Opening meeting Checklist</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter Checkpoint:</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Create Section :</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="opening_meeting_checklist_yes" name="opening_meeting_checklist" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="opening_meeting_checklist_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="opening_meeting_checklist_no" name="opening_meeting_checklist" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="opening_meeting_checklist_no">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Documents for Company to review before Audit</th>
                                                            <th scope="col">Action against the document</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Standard/Code</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Standard/Code</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="closing_meeting_checklist">
                                        <h5 class="mb-4">Closing meeting Checklist </h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter Checkpoint:</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p class="mb-2">Create Section :</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="closing_meeting_checklist_yes" name="closing_meeting_checklist" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="closing_meeting_checklist_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="closing_meeting_checklist_no" name="closing_meeting_checklist" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="closing_meeting_checklist_no">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Closing Meeting Checklist</th>
                                                            <th scope="col">Checklist</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Thank the management for their time and contribution.</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thank the management for their time and contribution.</td>
                                                            <td>Checklist/ Upload Document</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="risk_table">
                                        <h5 class="mb-4">Risk Table</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter Risk</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label select_dropdown">
                                                    <select required class="form-control select2-single" data-width="100%">
                                                        <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                            Zone</option>
                                                        <option value="TPZ" selected>The Panic Zone</option>
                                                        <option value="TTZ">The Twilight Zone</option>
                                                    </select>
                                                    <span>Select Audit Announcement Type</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <button class="btn action-button float-left ml-0 mt-0">Add Risk</button>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Risk</th>
                                                            <th scope="col">Risk Level</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>lorem</td>
                                                            <td>lorem</td>
                                                        </tr>
                                                        <tr>
                                                            <td>lorem</td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="employee_breakdown">
                                        <h5 class="mb-4">Employee Breakdown</h5>
                                        <div class="form-group">
                                            <p class="mb-2">Do you take shift wise breakdown?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="employee_breakdown_yes" name="employee_breakdown" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="employee_breakdown_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="employee_breakdown_No" name="employee_breakdown" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="employee_breakdown_No">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" name="company_name" required />
                                                    <span>Enter no of shifts:</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Local Temporary Workers (Male)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Local Temporary Workers (Female)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Local Agency Workers (Male)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Local Agency Workers (Female)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Local Permanent Workers (Male)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Local Permanent Workers (Female)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Migrant Temporary Workers (Male)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Migrant Temporary Workers (Female)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Migrant Agency Workers (Male)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Migrant Agency Workers (Female)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Migrant Permanent Workers (Male)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Migrant Permanent Workers (Female)</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <label class="form-group has-float-label">
                                                    <input class="form-control" type="text" placeholder="" name="company_address" required />
                                                    <span>Management</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="tab">
                                    <div class="card-body pt-0" id="audit_days">
                                        <h5 class="mb-4">Audit Days</h5>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No. Of Employees</th>
                                                            <th scope="col">Audit Days</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <!-- <td contenteditable="true">Service Tax</td> -->
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>101-500</td>
                                                            <td> 2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>501-1000</td>
                                                            <td> 3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1001-2000</td>
                                                            <td> 4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2000+</td>
                                                            <td> 4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <p class="mb-2">Is there any change in audit days due to audit type?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="audit_days_yes" name="audit_days" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="audit_days_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="audit_days_No" name="audit_days" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="audit_days_No">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="card mb-4 toggle_card">
                                                <div id="smartWizardClickable">
                                                    <ul class="card-header">
                                                        <li><a href="#clickable1">Partial Audit<br /><small>Partial Follow Up Audit</small></a></li>
                                                        <li><a href="#clickable2">resultant<br /><small>resultant</small></a></li>
                                                    </ul>

                                                    <div class="card-body">
                                                        <div id="clickable1">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No. Of Employees</th>
                                                                        <th scope="col">Audit Days (Partial Follow up Audit)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <!-- <td contenteditable="true">Service Tax</td> -->
                                                                        <td>1-100</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>101-500</td>
                                                                        <td> 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>501-1000</td>
                                                                        <td> 3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1001-2000</td>
                                                                        <td> 4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2000+</td>
                                                                        <td> 4</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div id="clickable2">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No. Of Employees</th>
                                                                        <th scope="col">Audit Days</th>
                                                                        <th scope="col">Audit Days (Partial Follow up Audit)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1-100</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>101-500</td>
                                                                        <td>2</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>501-1000</td>
                                                                        <td>3</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1001-2000</td>
                                                                        <td>4</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2000+</td>
                                                                        <td>4</td>
                                                                        <td>TBC</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="card-body pt-0" id="interview_sampling">
                                        <h5 class="mb-4">Interview Sampling</h5>
                                        <div class="form-group">
                                            <p class="mb-2">Is Interview Sampling applicable?</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="interview_sampling_yes" name="interview_sampling" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="interview_sampling_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="interview_sampling_No" name="interview_sampling" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="interview_sampling_No">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No. Of Workers excluding management</th>
                                                            <th scope="col">Individual Interviews</th>
                                                            <th scope="col">Group Interviews</th>
                                                            <th scope="col">Total Employess Interviews</th>
                                                            <th scope="col">Working Files/time and wage records</th>
                                                            <th scope="col">Effecting Time Spent On Interview</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No. Of Non-Employees</th>
                                                            <th scope="col">Non-Employee Interview Sample</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1-100</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>101-500</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>501-1000</td>
                                                            <td>3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               
                                <div class="tab">
                                    <div class="card-body pt-0" id="non_conformities">
                                        <h5 class="mb-4">Non-Conformities</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="non_conformities_observations" name="non_conformities" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="non_conformities_observations">Observations</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Required</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Duration</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Follow Up Audit</span>
                                                    </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="non_conformities_Minor" name="non_conformities_Minor" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="non_conformities_Minor">Minor</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Required</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Duration</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Follow Up Audit</span>
                                                    </label>
                                            </div>
</div>

<div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="non_conformities_Major" name="non_conformities_Major" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="non_conformities_Major">Major</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Required</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Duration</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Follow Up Audit</span>
                                                    </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="non_conformities_Major_r" name="non_conformities_Major_r" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="non_conformities_Major_r">Major (Red)</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Required</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Duration</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Follow Up Audit</span>
                                                    </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="non_conformities_good_practice" name="non_conformities_good_practice" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="non_conformities_good_practice">Good Practice</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Required</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Closure Duration</span>
                                                    </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Follow Up Audit</span>
                                                    </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="audit_execution_process">
                                        <h5 class="mb-4">Audit Execution Process Steps</h5>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Process Steps</th>
                                                            <th scope="col">Duration</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Registration of client with SEDEX</td>
                                                            <td>Date of Registration Fee paid to SEDEX by the factory</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Registration of client with SEDEX</td>
                                                            <td>Date of Registration Fee paid to SEDEX by the factory</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab">
                                    <div class="card-body pt-0" id="certificate_template">
                                        <h5 class="mb-4">Certificate Template/ Relative Documents</h5>
                                        <div class="form-group">
                                            <p class="mb-2">Does Your Standard Provide a Certificate? </p>
                                            <div class="d-flex flex-wrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="certificate_template_yes" name="certificate_template" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="certificate_template_yes">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="certificate_template_no" name="certificate_template" class="custom-control-input">
                                                    <label class="custom-control-label mr-2" for="certificate_template_no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-2">Add Certificate Template</p>
                                        <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <label class="mb-0 file_uploader" for="certificate_template">Upload Document</label>
                                                            <input type="file" class="d-none file_input_val" name="" id="certificate_template">
                                        </div>
                                        </div>
                                        <p class="mb-2">Upload Other Documents</p>
                                        <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <input type="text" class="file_uploader_input" placeholder="Enter Document Name" name="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <label class="mb-0 file_uploader" for="certificate_template_other_document">Upload Document</label>
                                                            <input type="file" class="d-none file_input_val" name="" id="certificate_template_other_document">
                                                        </div>
                                                    </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Document</th>
                                                            <th scope="col">Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Text</td>
                                                            <td>ABC Document.png</td>
                                                            <td>
                                                                <div class="d-flex">
                                                            <button class="btn btn-secondary mx-1 px-3 border-0" type="button"><div class="glyph-icon simple-icon-magnifier"></div></button>
                                                            <button class="btn btn-secondary mx-1 px-3 border-0" type="button"><div class="glyph-icon simple-icon-trash"></div></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Text</td>
                                                            <td>ABC Document.png</td>
                                                            <td>
                                                                <div class="d-flex">
                                                            <button class="btn btn-secondary mx-1 px-3 border-0" type="button"><div class="glyph-icon simple-icon-magnifier"></div></button>
                                                            <button class="btn btn-secondary mx-1 px-3 border-0" type="button"><div class="glyph-icon simple-icon-trash"></div></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab">
                                    <div class="card-body pt-0" id="application_review_checklist">
                                        <h5 class="mb-4">Application Review Checklist</h5>
                                        <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                        <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Application Review.</span>
                                        </label>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Review Checklist</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, adipisci. Eum rerum, nihil animi, sunt, unde alias explicabo.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                              
                                <div class="tab">
                                    <div class="card-body pt-0" id="application_review_checklist">
                                        <h5 class="mb-4">ALL Standard</h5>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">S.No</th>
                                                            <th scope="col">Standard Name</th>
                                                            <th scope="col">Accreditation Bodies</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Smeta</td>
                                                            <td>Bodies</td>
                                                            <td>
                                                                <div class="d-flex">
                                                            <button class="btn btn-secondary mx-1 px-3 border-0" type="button"><div class="glyph-icon simple-icon-magnifier"></div></button>
                                                            <button class="btn btn-secondary mx-1 px-3 border-0" type="button"><div class="glyph-icon simple-icon-trash"></div></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab">
                                    <div class="card-body text-center text-main" id="finish">
                                        <p>Finish Setup</p>
                                        <span class="glyph-icon simple-icon-check mr-2 icon"></span>
                                    </div>
                                </div>
                                <div class="add_padding">
                                    <div>
                                        <button type="button" class="next action-button">Next</button>
                                        <button type="button" class="submit action-button">Submit</button>
                                        <button type="button" class="previous action-button">Previous</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</main>

<?php include('footer.php') ?>

<script>
    function addFormField() {
        var dataId = $('.variationinp');
        var data_id;
        if (dataId.length >= 1) {
            data_id = dataId.length + 1;
        } else {
            data_id = 1;
        }
        $("#fielddiv").append('<div class="col-md-12 variationinp px-0" id="' + data_id + '" ><div class="form-group"><div class="d-flex" id="fields"><div class="w-100"><input type="text" name="variations[]" required placeholder="Variation Value" value="" class="form-control shadow-none"></div><div class=""><a href="javascript:void(0);" data-id="' + data_id + '" class="btn remove"><div class="glyph-icon simple-icon-close"></div></a></div></div></div></div>');
        // var dataId = $('.variationinp').data('id');
        // dataId++;
    }

    $(document).on('click', '.remove', function() {
        var id = $(this).data('id');
        $('#' + id).remove();
    });
</script>