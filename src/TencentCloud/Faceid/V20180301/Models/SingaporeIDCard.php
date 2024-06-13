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
 * Singapore ID Card
 *
 * @method string getChName() Obtain Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChName(string $ChName) Set Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChineseName() Obtain Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChineseName(string $ChineseName) Set Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnName() Obtain English name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnName(string $EnName) Set English name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullName() Obtain English name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set English name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getID() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(string $ID) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCountryOfBirth() Obtain Country of birth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountryOfBirth(string $CountryOfBirth) Set Country of birth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationality(string $Nationality) Set Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Address (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRace() Obtain Race (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRace(string $Race) Set Race (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNRICCode() Obtain  NRIC number (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNRICCode(string $NRICCode) Set  NRIC number (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPostCode() Obtain Post number (on the front)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPostCode(string $PostCode) Set Post number (on the front)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDateOfExpiration() Obtain Date of expiry (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Date of expiry (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDateOfIssue() Obtain Date of issue (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDateOfIssue(string $DateOfIssue) Set Date of issue (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SingaporeIDCard extends AbstractModel
{
    /**
     * @var string Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ChName;

    /**
     * @var string Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChineseName;

    /**
     * @var string English name
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $EnName;

    /**
     * @var string English name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ID;

    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Gender
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Country of birth
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $CountryOfBirth;

    /**
     * @var string Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nationality;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Address (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string Race (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Race;

    /**
     * @var string  NRIC number (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NRICCode;

    /**
     * @var string Post number (on the front)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PostCode;

    /**
     * @var string Date of expiry (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DateOfExpiration;

    /**
     * @var string Date of issue (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DateOfIssue;

    /**
     * @param string $ChName Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChineseName Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnName English name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullName English name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ID License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CountryOfBirth Country of birth
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Address (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Race Race (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NRICCode  NRIC number (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PostCode Post number (on the front)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DateOfExpiration Date of expiry (on the back)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DateOfIssue Date of issue (on the back)
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
        if (array_key_exists("ChName",$param) and $param["ChName"] !== null) {
            $this->ChName = $param["ChName"];
        }

        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("CountryOfBirth",$param) and $param["CountryOfBirth"] !== null) {
            $this->CountryOfBirth = $param["CountryOfBirth"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Race",$param) and $param["Race"] !== null) {
            $this->Race = $param["Race"];
        }

        if (array_key_exists("NRICCode",$param) and $param["NRICCode"] !== null) {
            $this->NRICCode = $param["NRICCode"];
        }

        if (array_key_exists("PostCode",$param) and $param["PostCode"] !== null) {
            $this->PostCode = $param["PostCode"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("DateOfIssue",$param) and $param["DateOfIssue"] !== null) {
            $this->DateOfIssue = $param["DateOfIssue"];
        }
    }
}
