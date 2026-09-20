<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Philippines voter card
 *
 * @method string getVIN() Obtain VIN of Philippines VoteID
 * @method void setVIN(string $VIN) Set VIN of Philippines VoteID
 * @method string getFirstName() Obtain Name
 * @method void setFirstName(string $FirstName) Set Name
 * @method string getLastName() Obtain Last name
 * @method void setLastName(string $LastName) Set Last name
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getCivilStatus() Obtain Marital status
 * @method void setCivilStatus(string $CivilStatus) Set Marital status
 * @method string getCitizenship() Obtain Nationality
 * @method void setCitizenship(string $Citizenship) Set Nationality
 * @method string getAddress() Obtain Address.
 * @method void setAddress(string $Address) Set Address.
 * @method string getPrecinctNo() Obtain Region.
 * @method void setPrecinctNo(string $PrecinctNo) Set Region.
 */
class PhilippinesVoteID extends AbstractModel
{
    /**
     * @var string VIN of Philippines VoteID
     */
    public $VIN;

    /**
     * @var string Name
     */
    public $FirstName;

    /**
     * @var string Last name
     */
    public $LastName;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var string Marital status
     */
    public $CivilStatus;

    /**
     * @var string Nationality
     */
    public $Citizenship;

    /**
     * @var string Address.
     */
    public $Address;

    /**
     * @var string Region.
     */
    public $PrecinctNo;

    /**
     * @param string $VIN VIN of Philippines VoteID
     * @param string $FirstName Name
     * @param string $LastName Last name
     * @param string $Birthday Date of birth
     * @param string $CivilStatus Marital status
     * @param string $Citizenship Nationality
     * @param string $Address Address.
     * @param string $PrecinctNo Region.
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
