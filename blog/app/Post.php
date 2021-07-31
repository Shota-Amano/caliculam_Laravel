<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //
}

    public function getPaginateByLimit(int $limit_count = 5)
    {
    // updated_atで降順に並べたあと、ペジネーションを設定（1ページあたり5件）
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
    'title',
    'body',
    ];

dev_basis05
}

}

 master
