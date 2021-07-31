dev_basis05
{"filter":false,"title":"Post.php","tooltip":"/blog/app/Post.php","undoManager":{"mark":72,"position":72,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function getByLimit(int $limit_count = 10)","{","    // updated_atで降順に並べたあと、limitで件数制限をかける","    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();","}"],"id":3}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"insert","lines":[" "],"id":5}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "],"id":6}],[{"start":{"row":11,"column":1},"end":{"row":11,"column":4},"action":"insert","lines":["   "],"id":7}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":8}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":9}],[{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"remove","lines":["0"],"id":10}],[{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"insert","lines":["0"],"id":11}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":58},"action":"remove","lines":["limit"],"id":12}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["p"],"id":13},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["e"]},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"insert","lines":["g"]},{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"insert","lines":["i"]},{"start":{"row":11,"column":57},"end":{"row":11,"column":58},"action":"insert","lines":["n"]},{"start":{"row":11,"column":58},"end":{"row":11,"column":59},"action":"insert","lines":["a"]},{"start":{"row":11,"column":59},"end":{"row":11,"column":60},"action":"insert","lines":["t"]},{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":81},"end":{"row":11,"column":82},"action":"remove","lines":[")"],"id":14},{"start":{"row":11,"column":80},"end":{"row":11,"column":81},"action":"remove","lines":["("]},{"start":{"row":11,"column":79},"end":{"row":11,"column":80},"action":"remove","lines":["t"]},{"start":{"row":11,"column":78},"end":{"row":11,"column":79},"action":"remove","lines":["e"]},{"start":{"row":11,"column":77},"end":{"row":11,"column":78},"action":"remove","lines":["g"]},{"start":{"row":11,"column":76},"end":{"row":11,"column":77},"action":"remove","lines":[">"]},{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["-"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["P"],"id":15},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["e"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["g"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["i"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["n"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["a"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["t"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":38},"action":"remove","lines":["getPeginateByLimit"],"id":16},{"start":{"row":8,"column":20},"end":{"row":8,"column":38},"action":"insert","lines":["getPeginateByLimit"]}],[{"start":{"row":4,"column":39},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":48},"action":"insert","lines":["Illuminate\\Database\\Eloquent\\Builder::peginate()"],"id":18}],[{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":[":"],"id":19},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":[":"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["r"]}],[{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["r"],"id":20},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["\\"]}],[{"start":{"row":5,"column":47},"end":{"row":5,"column":48},"action":"insert","lines":[";"],"id":21}],[{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"insert","lines":[":"],"id":22},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"insert","lines":[":"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":["u"],"id":23},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["s"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":[" "],"id":24}],[{"start":{"row":5,"column":42},"end":{"row":5,"column":43},"action":"remove","lines":[":"],"id":25},{"start":{"row":5,"column":41},"end":{"row":5,"column":42},"action":"remove","lines":[":"]}],[{"start":{"row":5,"column":50},"end":{"row":5,"column":51},"action":"remove","lines":[")"],"id":26},{"start":{"row":5,"column":49},"end":{"row":5,"column":50},"action":"remove","lines":["("]},{"start":{"row":5,"column":48},"end":{"row":5,"column":49},"action":"remove","lines":["e"]},{"start":{"row":5,"column":47},"end":{"row":5,"column":48},"action":"remove","lines":["t"]},{"start":{"row":5,"column":46},"end":{"row":5,"column":47},"action":"remove","lines":["a"]},{"start":{"row":5,"column":45},"end":{"row":5,"column":46},"action":"remove","lines":["n"]},{"start":{"row":5,"column":44},"end":{"row":5,"column":45},"action":"remove","lines":["i"]},{"start":{"row":5,"column":43},"end":{"row":5,"column":44},"action":"remove","lines":["g"]},{"start":{"row":5,"column":42},"end":{"row":5,"column":43},"action":"remove","lines":["e"]},{"start":{"row":5,"column":41},"end":{"row":5,"column":42},"action":"remove","lines":["p"]}],[{"start":{"row":5,"column":40},"end":{"row":5,"column":41},"action":"remove","lines":["\\"],"id":27}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":41},"action":"remove","lines":["Illuminate\\Database\\Eloquent\\Builder;"],"id":28}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":52},"action":"insert","lines":["Illuminate\\Database\\Eloquent\\Builder::peginate()"],"id":29}],[{"start":{"row":5,"column":52},"end":{"row":5,"column":53},"action":"insert","lines":[":"],"id":30},{"start":{"row":5,"column":53},"end":{"row":5,"column":54},"action":"insert","lines":[";"]}],[{"start":{"row":5,"column":53},"end":{"row":5,"column":54},"action":"remove","lines":[";"],"id":31},{"start":{"row":5,"column":52},"end":{"row":5,"column":53},"action":"remove","lines":[":"]}],[{"start":{"row":5,"column":52},"end":{"row":5,"column":53},"action":"insert","lines":[";"],"id":32}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":53},"action":"remove","lines":["use Illuminate\\Database\\Eloquent\\Builder::peginate();"],"id":33},{"start":{"row":4,"column":39},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":["e"],"id":34}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["a"],"id":35}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":61},"action":"remove","lines":["paginate"],"id":36},{"start":{"row":11,"column":53},"end":{"row":11,"column":61},"action":"insert","lines":["paginate"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["e"],"id":37}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["a"],"id":38}],[{"start":{"row":8,"column":59},"end":{"row":8,"column":60},"action":"remove","lines":["0"],"id":39},{"start":{"row":8,"column":58},"end":{"row":8,"column":59},"action":"remove","lines":["1"]}],[{"start":{"row":8,"column":58},"end":{"row":8,"column":59},"action":"insert","lines":["5"],"id":40}],[{"start":{"row":8,"column":59},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":42},{"start":{"row":8,"column":59},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":5},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":43},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["public function getPaginateByLimit(int $limit_count = 5)","    {","    // updated_atで降順に並べたあと、limitで件数制限をかける","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }"],"id":44}],[{"start":{"row":16,"column":3},"end":{"row":17,"column":76},"action":"remove","lines":[" // updated_atで降順に並べたあと、limitで件数制限をかける","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);"],"id":45},{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"remove","lines":[" "]},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":[" "],"id":46},{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":39},"end":{"row":14,"column":59},"action":"remove","lines":["int $limit_count = 5"],"id":47}],[{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"remove","lines":["t"],"id":48},{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"remove","lines":["i"]},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"remove","lines":["m"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["i"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"remove","lines":["L"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"remove","lines":["y"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"remove","lines":["B"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"remove","lines":["e"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"remove","lines":["t"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":["a"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["n"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"remove","lines":["i"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["g"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["a"]}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["P"],"id":49},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"remove","lines":["t"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["e"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["g"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["s"],"id":50},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["h"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["o"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":23},"action":"remove","lines":["sho"],"id":51},{"start":{"row":14,"column":20},"end":{"row":14,"column":24},"action":"insert","lines":["show"]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":41},"action":"remove","lines":["limitで件数制限をかける"],"id":52}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":34},"action":"insert","lines":["ペジネーション"],"id":53},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["を"]}],[{"start":{"row":10,"column":35},"end":{"row":10,"column":37},"action":"insert","lines":["設定"],"id":54}],[{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":55},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["r"],"id":56},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["e"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":["t"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["u"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["r"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":[" "],"id":57}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":[" "],"id":58},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["n"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["r"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["u"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"remove","lines":["t"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"remove","lines":["e"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["r"]}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["（"],"id":59}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":42},"action":"insert","lines":["1ページ"],"id":60}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":45},"action":"insert","lines":["あたり"],"id":61}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":47},"action":"insert","lines":["5件"],"id":62},{"start":{"row":10,"column":47},"end":{"row":10,"column":48},"action":"insert","lines":["）"]}],[{"start":{"row":14,"column":4},"end":{"row":17,"column":5},"action":"remove","lines":["public function show()","    {","        ","    }"],"id":63}],[{"start":{"row":14,"column":4},"end":{"row":18,"column":0},"action":"insert","lines":["protected $fillable = [","    'title',","    'body',","    ];",""],"id":64}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":48},"action":"remove","lines":["（1ページあたり5件）"],"id":65,"ignore":true},{"start":{"row":14,"column":5},"end":{"row":16,"column":11},"action":"remove","lines":["rotected $fillable = [","    'title',","    'body',"]},{"start":{"row":14,"column":5},"end":{"row":16,"column":8},"action":"insert","lines":["ublic function show()","    {","        "]},{"start":{"row":17,"column":4},"end":{"row":18,"column":0},"action":"remove","lines":["];",""]},{"start":{"row":17,"column":4},"end":{"row":17,"column":5},"action":"insert","lines":["}"]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":37},"action":"remove","lines":["ペジネーションを設定"],"id":66,"ignore":true},{"start":{"row":10,"column":27},"end":{"row":10,"column":41},"action":"insert","lines":["limitで件数制限をかける"]},{"start":{"row":13,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["    ","    public function show()","    {","        ","    }",""]}],[{"start":{"row":8,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["public function getPaginateByLimit(int $limit_count = 5)","    {","    // updated_atで降順に並べたあと、limitで件数制限をかける","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }"],"id":67,"ignore":true},{"start":{"row":8,"column":4},"end":{"row":8,"column":6},"action":"insert","lines":["//"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":6},"action":"remove","lines":["//"],"id":68,"ignore":true},{"start":{"row":8,"column":4},"end":{"row":18,"column":0},"action":"insert","lines":["public function getPaginateByLimit(int $limit_count = 5)","    {","    // updated_atで降順に並べたあと、ペジネーションを設定（1ページあたり5件）","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }","    ","    protected $fillable = [","    'title',","    'body',","    ];",""]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"insert","lines":["s"],"id":69}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":["s"],"id":70}],[{"start":{"row":8,"column":4},"end":{"row":18,"column":0},"action":"remove","lines":["public function getPaginateByLimit(int $limit_count = 5)","    {","    // updated_atで降順に並べたあと、ペジネーションを設定（1ページあたり5件）","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }","    ","    protected $fillable = [","    'title',","    'body',","    ];",""],"id":71,"ignore":true},{"start":{"row":8,"column":4},"end":{"row":8,"column":6},"action":"insert","lines":["//"]}],[{"start":{"row":8,"column":4},"end":{"row":10,"column":4},"action":"insert","lines":["public function getPaginateByLimit(int $limit_count = 5)","    {","    "],"id":72},{"start":{"row":10,"column":6},"end":{"row":18,"column":0},"action":"insert","lines":[" updated_atで降順に並べたあと、ペジネーションを設定（1ページあたり5件）","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }","    ","    protected $fillable = [","    'title',","    'body',","    ];",""]}],[{"start":{"row":8,"column":4},"end":{"row":18,"column":0},"action":"remove","lines":["public function getPaginateByLimit(int $limit_count = 5)","    {","    // updated_atで降順に並べたあと、ペジネーションを設定（1ページあたり5件）","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }","    ","    protected $fillable = [","    'title',","    'body',","    ];",""],"id":73,"ignore":true},{"start":{"row":8,"column":4},"end":{"row":8,"column":6},"action":"insert","lines":["//"]}],[{"start":{"row":0,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class Post extends Model","{","    //","}",""],"id":74},{"start":{"row":0,"column":0},"end":{"row":19,"column":1},"action":"insert","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class Post extends Model","{","    public function getPaginateByLimit(int $limit_count = 5)","    {","    // updated_atで降順に並べたあと、ペジネーションを設定（1ページあたり5件）","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }","    ","    protected $fillable = [","    'title',","    'body',","    ];","","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":1},"end":{"row":19,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1627480887670,"hash":"58251debb4a0e08b93b377fdfa43a7c8ed78257f"}

{"filter":false,"title":"Post.php","tooltip":"/blog/app/Post.php","undoManager":{"mark":64,"position":64,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function getByLimit(int $limit_count = 10)","{","    // updated_atで降順に並べたあと、limitで件数制限をかける","    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();","}"],"id":3}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"insert","lines":[" "],"id":5}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "],"id":6}],[{"start":{"row":11,"column":1},"end":{"row":11,"column":4},"action":"insert","lines":["   "],"id":7}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":8}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":9}],[{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"remove","lines":["0"],"id":10}],[{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"insert","lines":["0"],"id":11}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":58},"action":"remove","lines":["limit"],"id":12}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["p"],"id":13},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["e"]},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"insert","lines":["g"]},{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"insert","lines":["i"]},{"start":{"row":11,"column":57},"end":{"row":11,"column":58},"action":"insert","lines":["n"]},{"start":{"row":11,"column":58},"end":{"row":11,"column":59},"action":"insert","lines":["a"]},{"start":{"row":11,"column":59},"end":{"row":11,"column":60},"action":"insert","lines":["t"]},{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":81},"end":{"row":11,"column":82},"action":"remove","lines":[")"],"id":14},{"start":{"row":11,"column":80},"end":{"row":11,"column":81},"action":"remove","lines":["("]},{"start":{"row":11,"column":79},"end":{"row":11,"column":80},"action":"remove","lines":["t"]},{"start":{"row":11,"column":78},"end":{"row":11,"column":79},"action":"remove","lines":["e"]},{"start":{"row":11,"column":77},"end":{"row":11,"column":78},"action":"remove","lines":["g"]},{"start":{"row":11,"column":76},"end":{"row":11,"column":77},"action":"remove","lines":[">"]},{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["-"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["P"],"id":15},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["e"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["g"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["i"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["n"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["a"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["t"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":38},"action":"remove","lines":["getPeginateByLimit"],"id":16},{"start":{"row":8,"column":20},"end":{"row":8,"column":38},"action":"insert","lines":["getPeginateByLimit"]}],[{"start":{"row":4,"column":39},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":48},"action":"insert","lines":["Illuminate\\Database\\Eloquent\\Builder::peginate()"],"id":18}],[{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":[":"],"id":19},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":[":"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["r"]}],[{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["r"],"id":20},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["\\"]}],[{"start":{"row":5,"column":47},"end":{"row":5,"column":48},"action":"insert","lines":[";"],"id":21}],[{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"insert","lines":[":"],"id":22},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"insert","lines":[":"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":["u"],"id":23},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["s"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":[" "],"id":24}],[{"start":{"row":5,"column":42},"end":{"row":5,"column":43},"action":"remove","lines":[":"],"id":25},{"start":{"row":5,"column":41},"end":{"row":5,"column":42},"action":"remove","lines":[":"]}],[{"start":{"row":5,"column":50},"end":{"row":5,"column":51},"action":"remove","lines":[")"],"id":26},{"start":{"row":5,"column":49},"end":{"row":5,"column":50},"action":"remove","lines":["("]},{"start":{"row":5,"column":48},"end":{"row":5,"column":49},"action":"remove","lines":["e"]},{"start":{"row":5,"column":47},"end":{"row":5,"column":48},"action":"remove","lines":["t"]},{"start":{"row":5,"column":46},"end":{"row":5,"column":47},"action":"remove","lines":["a"]},{"start":{"row":5,"column":45},"end":{"row":5,"column":46},"action":"remove","lines":["n"]},{"start":{"row":5,"column":44},"end":{"row":5,"column":45},"action":"remove","lines":["i"]},{"start":{"row":5,"column":43},"end":{"row":5,"column":44},"action":"remove","lines":["g"]},{"start":{"row":5,"column":42},"end":{"row":5,"column":43},"action":"remove","lines":["e"]},{"start":{"row":5,"column":41},"end":{"row":5,"column":42},"action":"remove","lines":["p"]}],[{"start":{"row":5,"column":40},"end":{"row":5,"column":41},"action":"remove","lines":["\\"],"id":27}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":41},"action":"remove","lines":["Illuminate\\Database\\Eloquent\\Builder;"],"id":28}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":52},"action":"insert","lines":["Illuminate\\Database\\Eloquent\\Builder::peginate()"],"id":29}],[{"start":{"row":5,"column":52},"end":{"row":5,"column":53},"action":"insert","lines":[":"],"id":30},{"start":{"row":5,"column":53},"end":{"row":5,"column":54},"action":"insert","lines":[";"]}],[{"start":{"row":5,"column":53},"end":{"row":5,"column":54},"action":"remove","lines":[";"],"id":31},{"start":{"row":5,"column":52},"end":{"row":5,"column":53},"action":"remove","lines":[":"]}],[{"start":{"row":5,"column":52},"end":{"row":5,"column":53},"action":"insert","lines":[";"],"id":32}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":53},"action":"remove","lines":["use Illuminate\\Database\\Eloquent\\Builder::peginate();"],"id":33},{"start":{"row":4,"column":39},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":["e"],"id":34}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["a"],"id":35}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":61},"action":"remove","lines":["paginate"],"id":36},{"start":{"row":11,"column":53},"end":{"row":11,"column":61},"action":"insert","lines":["paginate"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["e"],"id":37}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["a"],"id":38}],[{"start":{"row":8,"column":59},"end":{"row":8,"column":60},"action":"remove","lines":["0"],"id":39},{"start":{"row":8,"column":58},"end":{"row":8,"column":59},"action":"remove","lines":["1"]}],[{"start":{"row":8,"column":58},"end":{"row":8,"column":59},"action":"insert","lines":["5"],"id":40}],[{"start":{"row":8,"column":59},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":42},{"start":{"row":8,"column":59},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":5},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":43},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["public function getPaginateByLimit(int $limit_count = 5)","    {","    // updated_atで降順に並べたあと、limitで件数制限をかける","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }"],"id":44}],[{"start":{"row":16,"column":3},"end":{"row":17,"column":76},"action":"remove","lines":[" // updated_atで降順に並べたあと、limitで件数制限をかける","        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);"],"id":45},{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"remove","lines":[" "]},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":[" "],"id":46},{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":39},"end":{"row":14,"column":59},"action":"remove","lines":["int $limit_count = 5"],"id":47}],[{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"remove","lines":["t"],"id":48},{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"remove","lines":["i"]},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"remove","lines":["m"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["i"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"remove","lines":["L"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"remove","lines":["y"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"remove","lines":["B"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"remove","lines":["e"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"remove","lines":["t"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":["a"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["n"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"remove","lines":["i"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["g"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["a"]}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["P"],"id":49},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"remove","lines":["t"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["e"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["g"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["s"],"id":50},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["h"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["o"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":23},"action":"remove","lines":["sho"],"id":51},{"start":{"row":14,"column":20},"end":{"row":14,"column":24},"action":"insert","lines":["show"]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":41},"action":"remove","lines":["limitで件数制限をかける"],"id":52}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":34},"action":"insert","lines":["ペジネーション"],"id":53},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["を"]}],[{"start":{"row":10,"column":35},"end":{"row":10,"column":37},"action":"insert","lines":["設定"],"id":54}],[{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":55},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["r"],"id":56},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["e"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":["t"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["u"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["r"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":[" "],"id":57}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":[" "],"id":58},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["n"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["r"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["u"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"remove","lines":["t"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"remove","lines":["e"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["r"]}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["（"],"id":59}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":42},"action":"insert","lines":["1ページ"],"id":60}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":45},"action":"insert","lines":["あたり"],"id":61}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":47},"action":"insert","lines":["5件"],"id":62},{"start":{"row":10,"column":47},"end":{"row":10,"column":48},"action":"insert","lines":["）"]}],[{"start":{"row":14,"column":4},"end":{"row":17,"column":5},"action":"remove","lines":["public function show()","    {","        ","    }"],"id":63}],[{"start":{"row":14,"column":4},"end":{"row":17,"column":2},"action":"insert","lines":["protected $fillable = [","    'title',","    'body',","];"],"id":64}],[{"start":{"row":17,"column":2},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":65}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "],"id":66}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":4},"end":{"row":17,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1627447152851,"hash":"daf0d7e20e7d1e76d9fcaedc9a8d9f8e55c14eb3"}

