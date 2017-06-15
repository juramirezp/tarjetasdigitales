<?php

class CreateInstitutionTest extends FeatureTestCase
{

    public function testCreateInstitution()
    {
        //Teniendo
        $institutionName = "Empresa Demo";
        $institutionResponsabilities = "Gerente General";
        $responsabilitiesDescription = "CEO de la division latinoamericana";
        $institutionAddress = "Alameda 1342, Santiago";
        $institutionEmail = "gerente@empresa.cl";
        $institutionPhone = "123456789";
        $institutionWeb = "www.empresa.cl";

        $user = $this->defaultUser();

        $this->actingAs($user);

        //Cuando
        $this->visit(route('institution.create'))
            ->type($institutionName, 'Name')
            ->type($institutionResponsabilities, 'Responsabilities')
            ->type($responsabilitiesDescription, 'Description')
            ->type($institutionAddress, 'Address')
            ->type($institutionEmail, 'Email')
            ->type($institutionPhone, 'Phone')
            ->type($institutionWeb, 'Website')
            ->press('Guardar');

        //Entonces
        $this->seeInDatabase('institutions',[
            'Name'=>$institutionName,
            'Responsabilities'=>$institutionResponsabilities,
            'Description'=>$responsabilitiesDescription,
            'Address'=>$institutionAddress,
            'Email'=>$institutionEmail,
            'Phone'=>$institutionPhone,
            'Website'=>$institutionWeb,
				'User_id'=>$user->id,
        ]);

        //Redirect
        //$this->seeInElement($institutionName);
		  $this->see($institutionName);
    }
}
