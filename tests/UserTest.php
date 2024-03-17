<?php

namespace Oop2eJaar\classes;

use PHPUnit\Framework\TestCase;
use Oop2eJaar\classes\Database;


class UserTest extends TestCase {
    
    private $username;
    private $db;

    

    public function testRegisterUser(): void {
        // Test succes
        
        
        $this->assertTrue($this->user->registerUser('Amin', 'Auro'));
    
        // Test registration with existing username (should fail)
        $this->assertFalse($this->user->registerUser('Amin', 'Aura'));
    }
    

    public function testLoginUser(): void {
        
        $this->assertTrue($this->user->loginUser('Rauf', 'Cls'));

        
        $this->assertFalse($this->user->loginUser('Pookie', 'Bear'));

        
        $this->assertFalse($this->user->loginUser('Raul', 'Garcia'));
    }

    public function testIsLoggedin(): void {
        
        $this->assertFalse($this->user->isLoggedin());

    
        $this->user->loginUser('Pokemon', 'Greninja');
        $this->assertTrue($this->user->isLoggedin());
    }

    public function testLogoutUser()
        {
        
            $this->username->Logout();

            $isDeleted = (session_status() == PHP_SESSION_NONE && empty(session_id()));
            $this->assertTrue($isDeleted);
        }
      
}
