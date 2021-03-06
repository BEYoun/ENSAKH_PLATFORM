<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paimentsup Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $dateDebut
 * @property \Cake\I18n\Time $dateFin
 * @property int $Numero
 * @property string $cheque
 * @property float $montantBrut
 * @property float $Impot
 * @property float $MontantNet
 * @property int $prelevementsup_id
 *
 * @property \App\Model\Entity\Prelevementsup $prelevementsup
 * @property \App\Model\Entity\SupHeure[] $sup_heures
 */
class Paimentsup extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
