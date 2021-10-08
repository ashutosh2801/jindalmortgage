<?php
namespace App\Helpers;

class Helper {
    public static function _status($id) {

         switch ($id) {
            case 1:
                return 'Application Submitted';
                break;
            case 2:
                return 'Document Received';
                break;
            case 3:
                return 'Under Review';
                break;
            case 4:
                return 'Submitted';
                break;            
            case 5:
                return 'Approved';
                break;
            case 6:
                return 'Funded';
                break; 
             default:
                return 'Not applied yet';
                 break;
         }
    }
    
    public static function _status_all() {

        return array(
                    0 => 'Not applied yet',
                    1 => 'Application Submitted',
                    2 => 'Document Received',
                    3 => 'Under Review',
                    4 => 'Submitted',
                    5 => 'Approved',
                    6 => 'Funded'
                );
        
    }
}
?>