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
 * @method string getCustomerUin() Obtain Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomerUin(string $CustomerUin) Set Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain Email Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Email Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhone() Obtain Mobile number Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhone(string $Phone) Set Mobile number Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMark() Obtain Remarks Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMark(string $Mark) Set Remarks Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Displayed name Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Displayed name Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBindTime() Obtain Binding time Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindTime(string $BindTime) Set Binding time Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccountStatus() Obtain Account status
0: Normal
1: Forcibly mandatory (this function is not supported yet)
2. Mandatory arrears
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method void setAccountStatus(string $AccountStatus) Set Account status
0: Normal
1: Forcibly mandatory (this function is not supported yet)
2. Mandatory arrears
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method string getAuthStatus() Obtain Identity verification status
-1: Files not uploaded
0: Not submitted for review
1: Under review
2: Review error
3: Approved
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method void setAuthStatus(string $AuthStatus) Set Identity verification status
-1: Files not uploaded
0: Not submitted for review
1: Under review
2: Review error
3: Approved
Note: The return value may be null, indicating that no valid data can be obtained.
 */
class DescribeCustomerInfoData extends AbstractModel
{
    /**
     * @var string Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomerUin;

    /**
     * @var string Email Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string Mobile number Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Phone;

    /**
     * @var string Remarks Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mark;

    /**
     * @var string Displayed name Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Binding time Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindTime;

    /**
     * @var string Account status
0: Normal
1: Forcibly mandatory (this function is not supported yet)
2. Mandatory arrears
Note: The return value may be null, indicating that no valid data can be obtained.
     */
    public $AccountStatus;

    /**
     * @var string Identity verification status
-1: Files not uploaded
0: Not submitted for review
1: Under review
2: Review error
3: Approved
Note: The return value may be null, indicating that no valid data can be obtained.
     */
    public $AuthStatus;

    /**
     * @param string $CustomerUin Customer UIN Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Email Email Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Phone Mobile number Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mark Remarks Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Displayed name Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BindTime Binding time Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccountStatus Account status
0: Normal
1: Forcibly mandatory (this function is not supported yet)
2. Mandatory arrears
Note: The return value may be null, indicating that no valid data can be obtained.
     * @param string $AuthStatus Identity verification status
-1: Files not uploaded
0: Not submitted for review
1: Under review
2: Review error
3: Approved
Note: The return value may be null, indicating that no valid data can be obtained.
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
    }
}
