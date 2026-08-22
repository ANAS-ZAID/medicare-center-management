<?php class Admin
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $isAdmin;
    private $isSupAdmin;
    private $debtor;
    private $creditor;
    private $palance;
    private $registerStatus;


    public function __construct($id = null, $name = null, $email = null, $password = null, $isAdmin = 0, $isSupAdmin = 0, $debtor = 0.0, $creditor = 0.0, $palance = 0.0, $registerStatus = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->isAdmin = $isAdmin;
        $this->isSupAdmin = $isSupAdmin;
        $this->debtor = $debtor;
        $this->creditor = $creditor;
        $this->palance = $palance;
        $this->registerStatus = $registerStatus;
      
    }

    // Getters and Setters ...

    // دالة لتحويل الكائن إلى JSON
    public function toJson()
    {
        return json_encode([
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'isAdmin' => $this->isAdmin,
            'isSupAdmin' => $this->isSupAdmin,
            'debtor' => $this->debtor,
            'creditor' => $this->creditor,
            'palance' => $this->palance,
            'registerStatus' => $this->registerStatus,
        ]);
    }

    // دالة لتحويل JSON إلى كائن
    public static function fromJson($json)
    {
        $data = json_decode($json, true);
        return new self(
            $data['id'] ?? null,
            $data['name'] ?? null,
            $data['email'] ?? null,
            $data['password'] ?? null,
            $data['isAdmin'] ?? 0,
            $data['isSupAdmin'] ?? 0,
            $data['debtor'] ?? 0.0,
            $data['creditor'] ?? 0.0,
            $data['palance'] ?? 0.0,
            $data['registerStatus'] ?? 0
        );
    }

    
}