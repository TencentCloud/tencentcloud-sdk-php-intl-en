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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Philippines VoteID Card
 *
 * @method string getVIN() Obtain VIN of Philippines VoteID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVIN(string $VIN) Set VIN of Philippines VoteID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstName() Obtain First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastName() Obtain Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCivilStatus() Obtain Civil status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCivilStatus(string $CivilStatus) Set Civil status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCitizenship() Obtain Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCitizenship(string $Citizenship) Set Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrecinctNo() Obtain Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrecinctNo(string $PrecinctNo) Set Region
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PhilippinesVoteID extends AbstractModel
{
    /**
     * @var string VIN of Philippines VoteID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VIN;

    /**
     * @var string First name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstName;

    /**
     * @var string Last name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastName;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Civil status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CivilStatus;

    /**
     * @var string Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Citizenship;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrecinctNo;

    /**
     * @param string $VIN VIN of Philippines VoteID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstName First name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastName Last name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CivilStatus Civil status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Citizenship Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrecinctNo Region
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VIN",$param) and $param["VIN"] !== null) {
            $this->VIN = $param["VIN"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("CivilStatus",$param) and $param["CivilStatus"] !== null) {
            $this->CivilStatus = $param["CivilStatus"];
        }

        if (array_key_exists("Citizenship",$param) and $param["Citizenship"] !== null) {
            $this->Citizenship = $param["Citizenship"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("PrecinctNo",$param) and $param["PrecinctNo"] !== null) {
            $this->PrecinctNo = $param["PrecinctNo"];
        }
    }
}
