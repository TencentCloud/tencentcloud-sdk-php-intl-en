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
 * Indonesia ID card.
 *
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBloodType() Obtain Blood type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBloodType(string $BloodType) Set Blood type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormattedAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStreet() Obtain Street
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStreet(string $Street) Set Street
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVillage() Obtain Village
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVillage(string $Village) Set Village
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArea() Obtain Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArea(string $Area) Set Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReligion() Obtain Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReligion(string $Religion) Set Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMaritalStatus() Obtain Marital status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaritalStatus(string $MaritalStatus) Set Marital status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOccupation() Obtain Job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOccupation(string $Occupation) Set Job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationality(string $Nationality) Set Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDueDate() Obtain ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDueDate(string $DueDate) Set ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedDate() Obtain Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedDate(string $IssuedDate) Set Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProvince() Obtain Province
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProvince(string $Province) Set Province
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCity() Obtain City
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCity(string $City) Set City
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NormalIndonesiaIDCard extends AbstractModel
{
    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Gender
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Blood type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BloodType;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormattedAddress;

    /**
     * @var string Street
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Street;

    /**
     * @var string Village
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Village;

    /**
     * @var string Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Area;

    /**
     * @var string Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Religion;

    /**
     * @var string Marital status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaritalStatus;

    /**
     * @var string Job
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Occupation;

    /**
     * @var string Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nationality;

    /**
     * @var string ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DueDate;

    /**
     * @var string Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedDate;

    /**
     * @var string Province
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Province;

    /**
     * @var string City
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $City;

    /**
     * @param string $LicenseNumber License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullName Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BloodType Blood type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormattedAddress Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Street Street
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Village Village
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Area Region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Religion Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MaritalStatus Marital status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Occupation Job
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DueDate ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedDate Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Province Province
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $City City
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
