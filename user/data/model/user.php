<?php class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $registerStatus;
    private $createdAt;
  
    public function __construct($id = null, $name = null, $email = null, $password = null, $registerStatus = 0, $createdAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->registerStatus = $registerStatus;
        $this->createdAt = $createdAt;
      
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
            'registerStatus' => $this->registerStatus,
            'createdAt' => $this->createdAt,
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
            $data['registerStatus'] ?? 0,
            $data['createdAt'] ?? null
        );
    }


 

 

   
}