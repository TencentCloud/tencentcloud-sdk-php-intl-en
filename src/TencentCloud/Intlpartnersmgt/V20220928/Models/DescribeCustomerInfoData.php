<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Customer information
 *
 * @method string getCustomerUin() Obtain Sub-Account uin.
 * @method void setCustomerUin(string $CustomerUin) Set Sub-Account uin.
 * @method string getEmail() Obtain Contact email.
 * @method void setEmail(string $Email) Set Contact email.
 * @method string getPhone() Obtain Contact phone number.
 * @method void setPhone(string $Phone) Set Contact phone number.
 * @method string getMark() Obtain Remarks.
 * @method void setMark(string $Mark) Set Remarks.
 * @method string getName() Obtain Display name.
 * @method void setName(string $Name) Set Display name.
 * @method string getBindTime() Obtain Binding time.
 * @method void setBindTime(string $BindTime) Set Binding time.
 * @method string getAccountStatus() Obtain Account status.
0: normal.
1: forcibly mandatory (this function is not supported yet).
2: mandatory arrears. 
 * @method void setAccountStatus(string $AccountStatus) Set Account status.
0: normal.
1: forcibly mandatory (this function is not supported yet).
2: mandatory arrears. 
 * @method string getAuthStatus() Obtain Specifies the identity verification status.
-999: account information not found.
-1: file not uploaded.
0: pending review.
Under review.
Error in review: 2.
3: pass review.
 * @method void setAuthStatus(string $AuthStatus) Set Specifies the identity verification status.
-999: account information not found.
-1: file not uploaded.
0: pending review.
Under review.
Error in review: 2.
3: pass review.
 * @method integer getAuthType() Obtain Real-Name type.
-1: default value. no such information. 
0: personal type. 
1: enterprise type.
 * @method void setAuthType(integer $AuthType) Set Real-Name type.
-1: default value. no such information. 
0: personal type. 
1: enterprise type.
 * @method string getCidRegisterTime() Obtain Specifies the registration time of the cid.
 * @method void setCidRegisterTime(string $CidRegisterTime) Set Specifies the registration time of the cid.
 * @method string getUinRegisterTime() Obtain Specifies the registration time of the uin.
 * @method void setUinRegisterTime(string $UinRegisterTime) Set Specifies the registration time of the uin.
 * @method string getAuthPassTime() Obtain Time when real-name authentication passed.
 * @method void setAuthPassTime(string $AuthPassTime) Set Time when real-name authentication passed.
 * @method integer getHasExpense() Obtain Whether there is consumption.
0: no consumption; 1: consumption.
 * @method void setHasExpense(integer $HasExpense) Set Whether there is consumption.
0: no consumption; 1: consumption.
 */
class DescribeCustomerInfoData extends AbstractModel
{
    /**
     * @var string Sub-Account uin.
     */
    public $CustomerUin;

    /**
     * @var string Contact email.
     */
    public $Email;

    /**
     * @var string Contact phone number.
     */
    public $Phone;

    /**
     * @var string Remarks.
     */
    public $Mark;

    /**
     * @var string Display name.
     */
    public $Name;

    /**
     * @var string Binding time.
     */
    public $BindTime;

    /**
     * @var string Account status.
0: normal.
1: forcibly mandatory (this function is not supported yet).
2: mandatory arrears. 
     */
    public $AccountStatus;

    /**
     * @var string Specifies the identity verification status.
-999: account information not found.
-1: file not uploaded.
0: pending review.
Under review.
Error in review: 2.
3: pass review.
     */
    public $AuthStatus;

    /**
     * @var integer Real-Name type.
-1: default value. no such information. 
0: personal type. 
1: enterprise type.
     */
    public $AuthType;

    /**
     * @var string Specifies the registration time of the cid.
     */
    public $CidRegisterTime;

    /**
     * @var string Specifies the registration time of the uin.
     */
    public $UinRegisterTime;

    /**
     * @var string Time when real-name authentication passed.
     */
    public $AuthPassTime;

    /**
     * @var integer Whether there is consumption.
0: no consumption; 1: consumption.
     */
    public $HasExpense;

    /**
     * @param string $CustomerUin Sub-Account uin.
     * @param string $Email Contact email.
     * @param string $Phone Contact phone number.
     * @param string $Mark Remarks.
     * @param string $Name Display name.
     * @param string $BindTime Binding time.
     * @param string $AccountStatus Account status.
0: normal.
1: forcibly mandatory (this function is not supported yet).
2: mandatory arrears. 
     * @param string $AuthStatus Specifies the identity verification status.
-999: account information not found.
-1: file not uploaded.
0: pending review.
Under review.
Error in review: 2.
3: pass review.
     * @param integer $AuthType Real-Name type.
-1: default value. no such information. 
0: personal type. 
1: enterprise type.
     * @param string $CidRegisterTime Specifies the registration time of the cid.
     * @param string $UinRegisterTime Specifies the registration time of the uin.
     * @param string $AuthPassTime Time when real-name authentication passed.
     * @param integer $HasExpense Whether there is consumption.
0: no consumption; 1: consumption.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }

        if (array_key_exists("AccountStatus",$param) and $param["AccountStatus"] !== null) {
            $this->AccountStatus = $param["AccountStatus"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("CidRegisterTime",$param) and $param["CidRegisterTime"] !== null) {
            $this->CidRegisterTime = $param["CidRegisterTime"];
        }

        if (array_key_exists("UinRegisterTime",$param) and $param["UinRegisterTime"] !== null) {
            $this->UinRegisterTime = $param["UinRegisterTime"];
        }

        if (array_key_exists("AuthPassTime",$param) and $param["AuthPassTime"] !== null) {
            $this->AuthPassTime = $param["AuthPassTime"];
        }

        if (array_key_exists("HasExpense",$param) and $param["HasExpense"] !== null) {
            $this->HasExpense = $param["HasExpense"];
        }
    }
}
