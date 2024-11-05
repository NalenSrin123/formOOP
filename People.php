<?php 
class People{
    private $fname;
    private $lname;
    private $dob;
    private $email;
    private $phone;

    public function __construct($fname,$lname,$dob,$email,$phone)
    {
        $this->fname=$fname;
        $this->lname=$lname;
        $this->dob=$dob;
        $this->email=$email;
        $this->phone=$phone;
    }
    public function showData(){
        echo '<div class="container w-75">
                <table class="table table-hover align-middle mt-3" style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>'.$this->fname.'</td>
                            <td>'.$this->lname.'</td>
                            <td>'.$this->dob.'</td>
                            <td>'.$this->email.'</td>
                            <td>'.$this->phone.'</td>
                        </tr>
                    </tbody>
                 </table>
                </div>';
    }
}

?>