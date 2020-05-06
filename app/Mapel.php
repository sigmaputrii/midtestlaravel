<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table ='mapel';
    protected $fillable = ['kode','nama','semester']; 

    public function siswa()
    {
    	return $this->belongsToMany(Siswa::class);
    	
    }

    public function guru()
    {
    	return $this->belongsTo(Guru::class);
    }
}
