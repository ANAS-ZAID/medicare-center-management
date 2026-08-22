<?php class Patient
{
    private $id;
    private $name;
    private $phone;
    private $debtor;
    private $creditor;
    private $palance;


    public function __construct($id = null, $name = null, $phone = null,  $debtor = 0.0, $creditor = 0.0, $palance = 0.0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->debtor = $debtor;
        $this->creditor = $creditor;
        $this->palance = $palance;
       }

    // Getters and Setters ...

    // دالة لتحويل الكائن إلى JSON
    public function toJson()
    {
        return json_encode([
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'debtor' => $this->debtor,
            'creditor' => $this->creditor,
            'palance' => $this->palance,
        ]);
    }

    // دالة لتحويل JSON إلى كائن
    public static function fromJson($json)
    {
        $data = json_decode($json, true);
        return new self(
            $data['id'] ?? null,
            $data['name'] ?? null,
            $data['phone'] ?? null,
           
            $data['debtor'] ?? 0.0,
            $data['creditor'] ?? 0.0,
            $data['palance'] ?? 0.0,
        );
    }

    
}