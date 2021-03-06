<?php self::_render( 'components/page-header', [ 
                            'title'             =>'Formateur', 
                            'backbtn-display'   =>true, 
                            'backbtn-url'       =>'/workshops/coachs', 
                            'backbtn-label'     =>'Retour aux formateurs'
                        ] ); ?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

    <?php self::_render( 'components/tabs-toolsheader', [ 
                            'tabs'=>$datas->tabs
                        ] ); ?>
                                
     <section>
                  
    <?php self::_render( 'components/section-toolsheader', [ 
                                        'title'           =>'formateur',
                                        'subtitle'        =>' - Modifier', 
                                        'response'        =>$datas->response
                                    ] ); ?>

        <div class="x_content">
            <br />

            <form action="<?php echo SITE_URL; ?>/workshops/coachupdate/<?php echo $datas->form->IdCoach; ?>" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" >

            <?php self::_render( 'components/form-field', [
                        'title'=>'Nom', 
                        'name'=>'LastnameCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                        'required'=>true
                ] ); ?>
            <?php self::_render( 'components/form-field', [
                        'title'=>'Prénom', 
                        'name'=>'FirstnameCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                ] ); ?>
                
            <hr />
                
            <?php self::_render( 'components/form-field', [
                        'title'=>'Téléphone', 
                        'name'=>'PhoneCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text',
                        'add-end'=>'<i class="mdi mdi-phone"></i>'
                ] ); ?>
            <?php self::_render( 'components/form-field', [
                        'title'=>'E-mail', 
                        'name'=>'EmailCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                        'add-end'=>'<i class="mdi mdi-mail-ru"></i>', 
                ] ); ?>
            <?php self::_render( 'components/form-field', [
                        'title'=>'Adresse', 
                        'name'=>'AddressCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                ] ); ?>
            <?php self::_render( 'components/form-field', [
                        'title'=>'Npa', 
                        'name'=>'NpaCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                ] ); ?>
            <?php self::_render( 'components/form-field', [
                        'title'=>'Localité', 
                        'name'=>'CityCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                ] ); ?>
            <?php self::_render( 'components/form-field', [
                        'title'=>'Matières enseignées', 
                        'name'=>'ExpertiseCoach', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                ] ); ?>
            <?php /* self::_render( 'components/form-field', [
                        'title'=>'StatutFormateur', 
                        'name'=>'Statut', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                ] );*/ ?>
            <?php /* self::_render( 'components/form-field', [
                        'title'=>'IDCorporate', 
                        'name'=>'IDCorporate', 
                        'values'=>$datas->form, 
                        'type'=>'input-text', 
                ] ); */ ?>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Envoyer</button>
                    </div>
                </div>

            </form>


         </section>
    </div>
</div>