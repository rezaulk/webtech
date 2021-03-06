<?php 
	$path=__DIR__."/../data/person_data_access(reza).php";
	include($path); ?>
<?php

    function getsellerName($personId){
        return getsellerFromDb($personId);
    }
	 function getTopseller(){
        return getTopsellerFromDb();
    }
	function getTopbuyer(){
        return getTopbuyerFromDb();
    }
	
	function getallgig($personId)
	{
		return getallgigFromDb($personId);
		
	}
	function getactivegig($personId)
	{
		return getactivegigToDb($personId);
	}
	



     function maxGigId(){
		return getMaxGigId();
	}
	function login($user){
        return logindb($user);
    }
	function getuserName($personId){
        return getuserNameFromDb($personId);
    }
	function getUserEmail($key){
        return getUserEmailFromDb($key);
    }
	function getJoiningDate($key){
        return getJoiningDateFromDb($key);
    }
	function accessGig($key)
	{
		return accessGigToDb($key);
	}
	function addGig($key)
	{
		return addGigToDb($key);
	}
	function selleridaccess($key)
	{
		return selleridaccessToDb($key);
	}
	
	function orderReject($key)
	{
		return orderRejectToDb($key);
	}
	
	function orderAccept($key)
	{
		return orderAcceptToDb($key);
	}
	
	
	//orderlist seller view
	
	function sellercompleteorderaccess($key)
	{
		return sellercompleteorderaccessToDb($key);
	}
	
	function sellerpendingorderaccess($key)
	{
		return sellerpendingorderaccessToDb($key);
	}
	
	function selleractiveorderaccess($key)
	{
		return selleractiveorderaccessToDb($key);
	}
	
	
	function buyernameaccess($key)
	{
		return buyernameaccessToDb($key);
	}
	function gigTitleaccess($key)
	{
		return gigTitleaccessToDb($key);
	}
	
	
	
	//orderlist buyer view
	
	function buyercompleteorderaccess($key)
	{
		return buyercompleteorderaccessToDb($key);
	}
	
	function buyerpendingorderaccess($key)
	{
		return buyerpendingorderaccessToDb($key);
	}
	
	function buyeractiveorderaccess($key)
	{
		return buyeractiveorderaccessToDb($key);
	}
	
	
	function sellernameaccess($key)
	{
		return sellernameaccessToDb($key);
	}
	
	
	// seller gig list show
	function gigaccess($key)
	{
		return gigaccessToDb($key);
	}
	
	
	
	
	
    function addPerson($person){
        return addPersonToDb($person);
    }
    
    function editPerson($person){
        return editPersonToDb($person);
    }
    
    function removePerson($personId){
        return removePersonFromDb($personId);
    }
    
    function getAllUsers(){
        return getAllUsersFromDb();
    }
    
    function getPersonById($personId){
        return getPersonByIdFromDb($personId);
    }
    
    function getPersonsByName($personName){
        return getPersonsByNameFromDb($personName);
    }
    
    function getPersonsByEmail($personEmail){
        return getPersonsByEmailFromDb($personEmail);
    }
    
    function getPersonsByNameOrEmail($key){
        return getPersonsByNameOrEmailFromDb($key);
    }
    
    function isUniquePersonEmail($personEmail){
        $persons  = getAllPersons();
        $isUnique = true;
        foreach($persons as $person){
            if($person['email']==$personEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
    
    function isUniquePersonEmailForUpdate($personId, $personEmail){
        $persons  = getAllPersons();
        $isUnique = true;
        foreach($persons as $person){
            if($person['id']!=$personId && $person['email']==$personEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
    
    function isValidPerson($personId){
        $persons = getAllPersons();
        $isValid = false;
        foreach($persons as $person){
            if($person['id']==$personId){
                $isValid = true;
                break;
            }
        }
        return $isValid;
    }
?>