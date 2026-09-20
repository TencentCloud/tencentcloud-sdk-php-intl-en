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
 * Indonesian Identity Card (mapped field result)
 *
 * @method string getLicenseNumber() Obtain ID number
 * @method void setLicenseNumber(string $LicenseNumber) Set ID number
 * @method string getFullName() Obtain Name
 * @method void setFullName(string $FullName) Set Name
 * @method string getBirthday() Obtain Birthplace/Date of birth
 * @method void setBirthday(string $Birthday) Set Birthplace/Date of birth
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getBloodType() Obtain Blood type
 * @method void setBloodType(string $BloodType) Set Blood type
 * @method string getFormattedAddress() Obtain Address.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address.
 * @method string getStreet() Obtain Street
 * @method void setStreet(string $Street) Set Street
 * @method string getVillage() Obtain Village
 * @method void setVillage(string $Village) Set Village
 * @method string getArea() Obtain Region.
 * @method void setArea(string $Area) Set Region.
 * @method string getReligion() Obtain Religious belief
 * @method void setReligion(string $Religion) Set Religious belief
 * @method string getMaritalStatus() Obtain Marital status
 * @method void setMaritalStatus(string $MaritalStatus) Set Marital status
 * @method string getOccupation() Obtain Occupation
 * @method void setOccupation(string $Occupation) Set Occupation
 * @method string getNationality() Obtain Nationality
 * @method void setNationality(string $Nationality) Set Nationality
 * @method string getDueDate() Obtain Validity period of the ID card
 * @method void setDueDate(string $DueDate) Set Validity period of the ID card
 * @method string getIssuedDate() Obtain Issue date
 * @method void setIssuedDate(string $IssuedDate) Set Issue date
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain city
 * @method void setCity(string $City) Set city
 */
class NormalIndonesiaIDCard extends AbstractModel
{
    /**
     * @var string ID number
     */
    public $LicenseNumber;

    /**
     * @var string Name
     */
    public $FullName;

    /**
     * @var string Birthplace/Date of birth
     */
    public $Birthday;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string Blood type
     */
    public $BloodType;

    /**
     * @var string Address.
     */
    public $FormattedAddress;

    /**
     * @var string Street
     */
    public $Street;

    /**
     * @var string Village
     */
    public $Village;

    /**
     * @var string Region.
     */
    public $Area;

    /**
     * @var string Religious belief
     */
    public $Religion;

    /**
     * @var string Marital status
     */
    public $MaritalStatus;

    /**
     * @var string Occupation
     */
    public $Occupation;

    /**
     * @var string Nationality
     */
    public $Nationality;

    /**
     * @var string Validity period of the ID card
     */
    public $DueDate;

    /**
     * @var string Issue date
     */
    public $IssuedDate;

    /**
     * @var string Province
     */
    public $Province;

    /**
     * @var string city
     */
    public $City;

    /**
     * @param string $LicenseNumber ID number
     * @param string $FullName Name
     * @param string $Birthday Birthplace/Date of birth
     * @param string $Sex Sex
     * @param string $BloodType Blood type
     * @param string $FormattedAddress Address.
     * @param string $Street Street
     * @param string $Village Village
     * @param string $Area Region.
     * @param string $Religion Religious belief
     * @param string $MaritalStatus Marital status
     * @param string $Occupation Occupation
     * @param string $Nationality Nationality
     * @param string $DueDate Validity period of the ID card
     * @param string $IssuedDate Issue date
     * @param string $Province Province
     * @param string $City city
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
        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("BloodType",$param) and $param["BloodType"] !== null) {
            $this->BloodType = $param["BloodType"];
        }

        if (array_key_exists("FormattedAddress",$param) and $param["FormattedAddress"] !== null) {
            $this->FormattedAddress = $param["FormattedAddress"];
        }

        if (array_key_exists("Street",$param) and $param["Street"] !== null) {
            $this->Street = $param["Street"];
        }

        if (array_key_exists("Village",$param) and $param["Village"] !== null) {
            $this->Village = $param["Village"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Religion",$param) and $param["Religion"] !== null) {
            $this->Religion = $param["Religion"];
        }

        if (array_key_exists("MaritalStatus",$param) and $param["MaritalStatus"] !== null) {
            $this->MaritalStatus = $param["MaritalStatus"];
        }

        if (array_key_exists("Occupation",$param) and $param["Occupation"] !== null) {
            $this->Occupation = $param["Occupation"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("DueDate",$param) and $param["DueDate"] !== null) {
            $this->DueDate = $param["DueDate"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
