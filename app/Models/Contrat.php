<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Contrat
 *
 * @property int $id
 * @property string $type
 * @property Carbon $date
 * @property Carbon $duree
 * @property int $id_client
 *
 * @property Client $client
 *
 * @package App\Models
 */
class Contrat extends Model
{
    use HasFactory;
	protected $table = 'contrat';
	public $timestamps = false;

	protected $casts = [
		'date' => 'date',
		'duree' => 'datetime',
		'id_client' => 'int'
	];

	protected $fillable = [
		'type',
		'date',
		'duree',
		'id_client'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'id_client');
	}
}
