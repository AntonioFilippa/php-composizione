<?php
class User 
{
    private static int $counter = 0;
    private int $id;
    private string $name;
    private int $age;
    private Address $address;

    public function __construct(string $name, int $age, Address $address)
    {
        $this->id = ++self::$counter;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
        public function getId(): int {
        return $this->id;
    }
}

class Address
{
    private string $street;
    private string $city;
    private string $state;
    private string $zip;

    public function __construct(string $street, string $city, string $state, string $zip)
    {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }
}
// Create a new user
$user = new User('John Doe', 30, new Address('123 Main St', 'Springfield', 'IL', '62701'));


?>
<!-- HTML STRUCTURE TO SHOW USER INFORMATION -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>User Information</h1>
            </div>
               <div class="card-body">
                <p class="card-text"><strong>Name:</strong> <?php echo $user->getName(); ?></p>
                <p class="card-text"><strong>Age:</strong> <?php echo $user->getAge(); ?></p>
                <p class="card-text"><strong>Address:</strong> <?php echo $user->getAddress()?->getStreet(); ?></p>
                <p class="card-text"><strong>City:</strong> <?php echo $user->getAddress()?->getCity(); ?></p>
                <p class="card-text"><strong>State:</strong> <?php echo $user->getAddress()?->getState(); ?></p>
                <p class="card-text"><strong>Zip:</strong> <?php echo $user->getAddress()?->getZip(); ?></p>
                <p class="card-text"><strong>ID:</strong> <?php echo $user->getId(); ?></p>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>