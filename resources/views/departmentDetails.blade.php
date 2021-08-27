@extends('layouts.header')
@section('title', 'Department Details')
@section('content')
    <!-- ---------------------------------------- DEPARTMENTS FIRST SECTION ---------------------------------------- -->
    <div class="services-home-bg">
        <div class="container m-auto text-center">
            <h2>Departments</h2>
        </div>
    </div>


    <!-- ---------------------------------------- DEPARTMENT DETAILS ------------------------------------------ -->
    <div class="container departments-list-container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-kidney-list" data-toggle="list"
                        href="#list-kidney" role="tab" aria-controls="kidney">Kidney Transplant</a>
                    <a class="list-group-item list-group-item-action" id="list-speech-list" data-toggle="list"
                        href="#list-speech" role="tab" aria-controls="speech">Speech Therapist</a>
                    <a class="list-group-item list-group-item-action" id="list-pulmonology-list" data-toggle="list"
                        href="#list-pulmonology" role="tab" aria-controls="pulmonology">Pulmonology</a>
                    <a class="list-group-item list-group-item-action" id="list-pathology-list" data-toggle="list"
                        href="#list-pathology" role="tab" aria-controls="pathology">Pathology</a>
                    <a class="list-group-item list-group-item-action" id="list-vascular-list" data-toggle="list"
                        href="#list-vascular" role="tab" aria-controls="vascular">Vascular Surgery</a>
                    <a class="list-group-item list-group-item-action" id="list-hemathology-list" data-toggle="list"
                        href="#list-hemathology" role="tab" aria-controls="hemathology">Hemathology</a>
                    <a class="list-group-item list-group-item-action" id="list-general-list" data-toggle="list"
                        href="#list-general" role="tab" aria-controls="general">General Surgry</a>
                    <a class="list-group-item list-group-item-action" id="list-cardiac-list" data-toggle="list"
                        href="#list-cardiac" role="tab" aria-controls="cardiac">Cardiac Surgry</a>
                    <a class="list-group-item list-group-item-action" id="list-radiology-list" data-toggle="list"
                        href="#list-radiology" role="tab" aria-controls="radiology">Radiology</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-kidney" role="tabpanel"
                        aria-labelledby="list-kidney-list">
                        <div class="kidney-intro">
                            Doctors hospital and medical center now providing regular services of urology and kidney
                            transplant with dedicated, highly qualified and experienced
                            surgical and nephrological team. So far our team has performed several successful kidney
                            transplant and other urological procedure under supervision of prof. Dr. Hafiz Shahzad
                            Ashraf.
                            <br>
                            Our medical team consists of Transplant Surgeons, Intensivists, Critical Care Specialists,
                            Transplant Coordinators, Immunologists, Pathologists, and counselors who collaborate to
                            deliver
                            exceptional care to patients.
                        </div>
                        <hr>
                        <div class="kidney-services">
                            <h5>Services</h5>
                            <p>
                                State of the Art renal services and facilitates includes:
                            <ul>
                                <li>24 hour emergency cover</li>
                                <li>Modern and fully equipped operation theater and ICU</li>
                                <li>Highly skilled and properly trained nursing staff</li>
                                <li>Smooth process of registration through PHOTA</li>
                            </ul>
                            </p>
                        </div>
                        <hr>
                        <div class="kidney-doctors">
                            <h5>Doctors</h5>
                            <div class="row">
                                <div class="card mr-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/doctor1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Dr Ahmad Bilal</h5>
                                        <p class="card-text">Kidney Transplant Surgeon.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/doctor2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Dr Ashraf Khan</h5>
                                        <p class="card-text">Kidney Transplant Surgeon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="list-speech" role="tabpanel"
                        aria-labelledby="list-speech-list">
                        <div class="speech-intro">
                            Speech-language pathologists (SLPs) provide a wide range of services, mainly on an
                            individual basis, but also as support for individuals, families, support groups, and
                            providing information for the general public. SLPs work to prevent, assess, diagnose, and
                            treat speech, language, social communication, cognitive-communication, and swallowing
                            disorders in children and adults. Speech services begin with initial screening for
                            communication and swallowing disorders and continue with assessment and diagnosis,
                            consultation for the provision of advice regarding management, intervention, and treatment,
                            and providing counseling and other follow up services for these disorders. Services are
                            provided in the following areas: cognitive aspects of communication (e.g., attention,
                            memory, problem-solving, executive functions). speech (phonation, articulation, fluency,
                            resonance, and voice including aeromechanical components of respiration); language
                            (phonology, morphology, syntax, semantics, and pragmatic/social aspects of communication)
                            including comprehension and expression in oral, written, graphic, and manual modalities;
                            language processing; preliteracy and language-based literacy skills, phonological awareness.
                            swallowing or other upper aerodigestive functions such as infant feeding and aeromechanical
                            events (evaluation of esophageal function is for the purpose of referral to medical
                            professionals); voice (hoarseness (dysphonia), poor vocal volume (hypophonia), abnormal
                            (e.g. rough, breathy, strained) vocal quality. Research demonstrates voice therapy to be
                            especially helpful with certain patient populations; individuals with Parkinson's Disease
                            often develop voice issues as a result of their disease. sensory awareness related to
                            communication, swallowing, or other upper aerodigestive functions. Speech, language, and
                            swallowing disorders result from a variety of causes, such as a stroke, brain injury,
                            hearing loss, developmental delay, a cleft palate, cerebral palsy, or emotional issues.
                        </div>
                        <hr>
                        <div class="speech-services">
                            <h5>Services</h5>
                            <p>
                                Therapists use a variety of strategies, including:
                            <ul>
                                <li>Language intervention activities</li>
                                <li>Articulation therapy</li>
                                <li>Oral-motor/feeding and swallowing therapy</li>
                            </ul>
                            </p>
                        </div>
                        <hr>
                        <div class="kidney-doctors">
                            <h5>Doctors</h5>
                            <div class="row">
                                <div class="card mr-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/doctor1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Dr Ahmad Bilal</h5>
                                        <p class="card-text">Speech Therapist</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/doctor2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Dr Ashraf Khan</h5>
                                        <p class="card-text">Speech Therapist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="list-pulmonology" role="tabpanel"
                        aria-labelledby="list-pulmonology-list">
                        <div class="pulmonology-intro">
                            Pulmonology is a medical speciality that deals with diseases involving the respiratory
                            tract. Pulmonology is known as chest medicine and respiratory medicine in some countries and
                            areas. Pulmonology is considered a branch of internal medicine, and is related to intensive
                            care medicine. Pulmonology often involves managing patients who need life support and
                            mechanical ventilation. Pulmonologists are specially trained in diseases and conditions of
                            the chest, particularly pneumonia, asthma, tuberculosis, emphysema, and complicated chest
                            infections.
                        </div>
                        <hr>
                        <div class="pulmonology-services">
                            <h5>Services</h5>
                            <p>
                                The pulmonologist begins the diagnostic process with a general review focusing on:
                            <ul>
                                <li>Hereditary diseases affecting the lungs (cystic fibrosis, alpha 1-antitrypsin
                                    deficiency)</li>
                                <li>Exposure to toxins (tobacco smoke, asbestos, exhaust fumes, coal mining fumes)</li>
                                <li>Exposure to infectious agents (certain types of birds, malt processing)</li>
                                <li>An autoimmune diathesis that might predispose to certain conditions (pulmonary
                                    fibrosis, pulmonary hypertension)</li>
                            </ul>
                            </p>
                            <p>
                                <b>Surgical procedures</b>
                                <br>
                                Major surgical procedures on the heart and lungs are performed by a thoracic surgeon.
                                Pulmonologists often perform specialized procedures to get samples from the inside of
                                the chest or inside of the lung. They use radiographic techniques to view vasculature of
                                the lungs and heart to assist with diagnosis.
                            </p>
                        </div>
                        <hr>
                        <div class="kidney-doctors">
                            <h5>Doctors</h5>
                            <div class="row">
                                <div class="card mr-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/doctor1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Dr Ahmad Bilal</h5>
                                        <p class="card-text">Pulmonologist</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="images/doctor2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Dr Ashraf Khan</h5>
                                        <p class="card-text">Pulmonologist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
