@extends('Frontend.Layouts.app')

@section('content')


<!...Safety Section....>


<div class="">
    <div class="col-md-12 mt-5">

        <div class="safety-section">
            <div class="safety-background-image"></div>
            <div class="safety-content">
              <div class="safety-rectangle-box">
                <h2 class="safety-title">Safety</h2>
                <p class="safety-paragraph">Safety is our utmost priority</p>
              </div>
            </div>
          </div>


    </div>

</div>



<!....Safety first details content(1st sec)....>

<div class="container mt-5">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-8">
                <div>
                    <h2 style="color:green">Safety Comes First</h2>
                     <p>
                        The health and safety of the employees are core values to the organization and of utmost priority. Planning, design, and management of every project ensure that comprehensive risk assessment is carried out, and health and safety are fully integrated into compliance with Bangladesh National Building Code. HSE keeps the continuous focus on improvement and quality aspects of the following measures:
                     </p>
                     <p>
                        ● Protection of people from occupational illness resulting from materials, processes, and procedures used at the workplace.
                     </p>
                     <p>
                        ● Protection of people from physical injury out of risks and hazards.
                     </p>
                </div>
            </div>

            <div class="col-md-4">
                <img class="safety-sliding-image" src="{{ asset('/frontend/asset/') }}/safety_image/microscope.png" style="width:100%;height:300px;">
            </div>
        </div>


    </div>
 </div>



<!....Safety first details content(2nd sec)....>


<div class="container">
    <div class="col-md-12">
        <p>● Provision of facilities for drinking water, eating, resting, washing, sanitation, and medical care.</p>
        <p>
            ● Preparation for any unplanned event that may result in injury or illness of people and damage or loss to property, plant, material, or loss of a business opportunity.
        </p>

        <p>
            ● Provision for reporting of dangerous occurrence or near-miss incident that could have resulted in an accident.
        </p>

        <p>
            Fire safety is always dealt with as a matter of paramount importance. People are provided with periodical training and rehearsal to orient and update on the actions needed to do during an emergency situation. Manufacturing facilities are well laid out with the following facilities:
        </p>

        <p>
            ● An addressable fire detection system is installed, including firefighting capabilities.
        </p>

        <p>
            ● Building energy management system is deployed to function heat, ventilation, and air conditioning systems.
        </p>

        <p>
            ● In compliance with electrical safety - busbar trucking, residual current device, lightning protection, single line diagram, etc. are installed and cables are regularly checked by thermo-scanning.
        </p>

        <p>
            SQUARE ensures appropriate personal protective equipment to employees, conducts regular risk assessment, takes up proper corrective and preventive measures, and follows through with continuous monitoring and checks. The Government of the People’s Republic of Bangladesh has awarded SQUARE with National Occupational Health & Safety Good Practice Award for its highest standard achieved amongst the industries.
        </p>
    </div>
</div>



<!.........single pic section......>


<div class="col-md-12 mt-5" >


    <div class="safety-section">
        <div class="safety-single-pic"></div>

        </div>
      </div>


</div>

@endsection
