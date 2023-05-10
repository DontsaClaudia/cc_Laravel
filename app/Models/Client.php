<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Client
 *
 * @property int $id
 * @property string $nom
 * @property string $ville
 * @property string $telephone
 *
 * @property Collection|Contrat[] $contrats
 *
 * @package App\Models
 */
class Client extends Model
{
    use HasFactory;
	protected $table = 'client';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'ville',
		'telephone'
	];

	public function contrats()
	{
		return $this->hasMany(Contrat::class, 'id_client');
	}
}
