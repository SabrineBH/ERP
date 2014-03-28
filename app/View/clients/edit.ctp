<?php



echo $this->Form->create('Client');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('societe');
echo $this->Form->input('tel');

echo $this->Form->input('adresse');
echo $this->Form->input('email');
echo $this->Form->input('derniere_relance');
echo $this->Form->input('prochaine_relance');
echo $this->Form->input('relance automatique1');
echo $this->Form->input('relance automatique2');
echo $this->Form->input('relance automatique3');
echo $this->Form->input('relance automatique4');
echo $this->Form->input('status', array(
        'options' => array('intéressé'=> 'intéressé','Non intéressé' =>'Non intéressé','gagné' => 'gagné', 'à relancer' => 'à relancer')
 ));
echo $this->Form->input('notes');
echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Form->end('Editer');
?>
