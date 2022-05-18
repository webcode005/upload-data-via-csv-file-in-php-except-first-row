<?php
   if($_POST[''])
        {
                   $file = $_FILES["file"]["tmp_name"]; 
                    
                    $file_open = fopen($file,"r");
                    $result = array();
                    $idd='1';
                    while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
                    {

                        if($idd!=1) 
                        {
                            $result['Customer_Code'] = $csv['0'];
                                $result['Cust_name'] = $csv['1'];
                                $result['mobile_no1'] = $csv['2'];
                                $result['mobile_no2'] = $csv['3'];
                                $result['address1'] = $csv['4'];
                                $result['address2'] = $csv['5'];
                                $result['address3'] = $csv['6'];
                                $result['city'] = $csv['7'];
                                $result['pincode'] = $csv['8'];
                                $result['email_id'] = $csv['9'];
                                $result['salesman_code'] = $csv['10'];
                                $result['salesman_name'] = $csv['11'];
                                $result['district'] = $csv['12'];
                                $result['dlno1'] = $csv['13'];
                                $result['dlno2'] = $csv['14'];
                                $result['dl_expiry_date'] = $csv['15'];
                                $result['pan_no'] = $csv['16'];
                                $result['code_created_on'] = $csv['17'];
                                $result['customer_type'] = $csv['18'];
                                $result['agent_code'] = $csv['19']; 
                                
                                $result['CreateDate'] = date("Y-m-d H:i:s");


                                // $result[] = $csv;  
                                
                                $this->MobileUpload->saveAll($result);
                        }

                                
                                
                        $idd++;        
                                
                    }

                    unset($data);
                     
                $this->Session->setFlash(' Mobile Upload Data Added Successfully.');
            
                $this->redirect(array('controller' => 'MobileUploads', 'action' => 'index'));
        }




?>
