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
 * Singapore ID card
 *
 * @method string getChName() Obtain Chinese Name
 * @method void setChName(string $ChName) Set Chinese Name
 * @method string getChineseName() Obtain Chinese Name
 * @method void setChineseName(string $ChineseName) Set Chinese Name
 * @method string getEnName() Obtain English name
 * @method void setEnName(string $EnName) Set English name
 * @method string getFullName() Obtain English name
 * @method void setFullName(string $FullName) Set English name
 * @method string getID() Obtain Identity card number
 * @method void setID(string $ID) Set Identity card number
 * @method string getLicenseNumber() Obtain Identity number
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity number
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getCountryOfBirth() Obtain Country of birth
 * @method void setCountryOfBirth(string $CountryOfBirth) Set Country of birth
 * @method string getNationality() Obtain Country of birth
 * @method void setNationality(string $Nationality) Set Country of birth
 * @method string getBirthday() Obtain Birthday
 * @method void setBirthday(string $Birthday) Set Birthday
 * @method string getAddress() Obtain Address (back field)
 * @method void setAddress(string $Address) Set Address (back field)
 * @method string getRace() Obtain Nationality (back field)
 * @method void setRace(string $Race) Set Nationality (back field)
 * @method string getNRICCode() Obtain Nric number (back field)
 * @method void setNRICCode(string $NRICCode) Set Nric number (back field)
 * @method string getPostCode() Obtain Post number (back field)
 * @method void setPostCode(string $PostCode) Set Post number (back field)
 * @method string getDateOfExpiration() Obtain Expires on (back field)
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Expires on (back field)
 * @method string getDateOfIssue() Obtain Issue date (field on the back)
 * @method void setDateOfIssue(string $DateOfIssue) Set Issue date (field on the back)
 */
class SingaporeIDCard extends AbstractModel
{
    /**
     * @var string Chinese Name
     * @deprecated
     */
    public $ChName;

    /**
     * @var string Chinese Name
     */
    public $ChineseName;

    /**
     * @var string English name
     * @deprecated
     */
    public $EnName;

    /**
     * @var string English name
     */
    public $FullName;

    /**
     * @var string Identity card number
     * @deprecated
     */
    public $ID;

    /**
     * @var string Identity number
     */
    public $LicenseNumber;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string Country of birth
     * @deprecated
     */
    public $CountryOfBirth;

    /**
     * @var string Country of birth
     */
    public $Nationality;

    /**
     * @var string Birthday
     */
    public $Birthday;

    /**
     * @var string Address (back field)
     */
    public $Address;

    /**
     * @var string Nationality (back field)
     */
    public $Race;

    /**
     * @var string Nric number (back field)
     */
    public $NRICCode;

    /**
     * @var string Post number (back field)
     */
    public $PostCode;

    /**
     * @var string Expires on (back field)
     */
    public $DateOfExpiration;

    /**
     * @var string Issue date (field on the back)
     */
    public $DateOfIssue;

    /**
     * @param string $ChName Chinese Name
     * @param string $ChineseName Chinese Name
     * @param string $EnName English name
     * @param string $FullName English name
     * @param string $ID Identity card number
     * @param string $LicenseNumber Identity number
     * @param string $Sex Sex
     * @param string $CountryOfBirth Country of birth
     * @param string $Nationality Country of birth
     * @param string $Birthday Birthday
     * @param string $Address Address (back field)
     * @param string $Race Nationality (back field)
     * @param string $NRICCode Nric number (back field)
     * @param string $PostCode Post number (back field)
     * @param string $DateOfExpiration Expires on (back field)
     * @param string $DateOfIssue Issue date (field on the back)
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
