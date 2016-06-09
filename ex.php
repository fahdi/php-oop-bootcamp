<?php

use UniversalCoders\Person;
use UniversalCoders\Staff;
use UniversalCoders\Business;


$fahad = new Person("Fahad Murtaza");
$staff = new Staff([$fahad]);
$universal_coders = new Business($staff);


//$universal_coders->hire($fahad);
$universal_coders->hire(new Person("Rizwan Abbasi"));

//var_dump($staff);

var_dump($universal_coders->getStaffMembers());
