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
 * General liscense information.
 *
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPersonalNumber() Obtain Personal number, which is returned when it is a passport
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPersonalNumber(string $PersonalNumber) Set Personal number, which is returned when it is a passport
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeFirst() Obtain The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeFirst(string $PassportCodeFirst) Set The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeSecond() Obtain The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeSecond(string $PassportCodeSecond) Set The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationDate() Obtain Date of expiry in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationDate(string $ExpirationDate) Set Date of expiry in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDueDate() Obtain Valid date in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDueDate(string $DueDate) Set Valid date in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedDate() Obtain Date of issue in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedDate(string $IssuedDate) Set Date of issue in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedAuthority() Obtain Issuing authority
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedAuthority(string $IssuedAuthority) Set Issuing authority
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedCountry() Obtain Issuing country, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: MYS
 * @method void setIssuedCountry(string $IssuedCountry) Set Issuing country, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: MYS
 * @method string getFullName() Obtain Full Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Full Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstName() Obtain First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastName() Obtain Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender on the license
- M: male
- F: female
- X: other gender
Note: This field may return null, indicating that no valid values can be obtained.
Example: M
 * @method void setSex(string $Sex) Set Gender on the license
- M: male
- F: female
- X: other gender
Note: This field may return null, indicating that no valid values can be obtained.
Example: M
 * @method string getAge() Obtain Age. 0 indicates that no valid information is obtained.
Example: 0
 * @method void setAge(string $Age) Set Age. 0 indicates that no valid information is obtained.
Example: 0
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthPlace() Obtain Birth place
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthPlace(string $BirthPlace) Set Birth place
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain Nationality, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: IND
 * @method void setNationality(string $Nationality) Set Nationality, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: IND
 * @method string getRegistrationNumber() Obtain Registration number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Address getAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(Address $Address) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GeneralCard extends AbstractModel
{
    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Personal number, which is returned when it is a passport
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PersonalNumber;

    /**
     * @var string The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassportCodeFirst;

    /**
     * @var string The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassportCodeSecond;

    /**
     * @var string Date of expiry in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationDate;

    /**
     * @var string Valid date in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DueDate;

    /**
     * @var string Date of issue in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedDate;

    /**
     * @var string Issuing authority
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedAuthority;

    /**
     * @var string Issuing country, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: MYS
     */
    public $IssuedCountry;

    /**
     * @var string Full Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

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
     * @var string Gender on the license
- M: male
- F: female
- X: other gender
Note: This field may return null, indicating that no valid values can be obtained.
Example: M
     */
    public $Sex;

    /**
     * @var string Age. 0 indicates that no valid information is obtained.
Example: 0
     */
    public $Age;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Birth place
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BirthPlace;

    /**
     * @var string Nationality, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: IND
     */
    public $Nationality;

    /**
     * @var string Registration number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistrationNumber;

    /**
     * @var Address Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @param string $LicenseNumber License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PersonalNumber Personal number, which is returned when it is a passport
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeFirst The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeSecond The first line of passport machine reading code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationDate Date of expiry in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DueDate Valid date in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedDate Date of issue in the format of YYYY-MM-DD
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedAuthority Issuing authority
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedCountry Issuing country, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: MYS
     * @param string $FullName Full Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstName First name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastName Last name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender on the license
- M: male
- F: female
- X: other gender
Note: This field may return null, indicating that no valid values can be obtained.
Example: M
     * @param string $Age Age. 0 indicates that no valid information is obtained.
Example: 0
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BirthPlace Birth place
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality Nationality, which is returned following the ISO 3166 country coding specification
Note: This field may return null, indicating that no valid values can be obtained.
Example: IND
     * @param string $RegistrationNumber Registration number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Address $Address Address
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

        if (array_key_exists("PersonalNumber",$param) and $param["PersonalNumber"] !== null) {
            $this->PersonalNumber = $param["PersonalNumber"];
        }

        if (array_key_exists("PassportCodeFirst",$param) and $param["PassportCodeFirst"] !== null) {
            $this->PassportCodeFirst = $param["PassportCodeFirst"];
        }

        if (array_key_exists("PassportCodeSecond",$param) and $param["PassportCodeSecond"] !== null) {
            $this->PassportCodeSecond = $param["PassportCodeSecond"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("DueDate",$param) and $param["DueDate"] !== null) {
            $this->DueDate = $param["DueDate"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("IssuedAuthority",$param) and $param["IssuedAuthority"] !== null) {
            $this->IssuedAuthority = $param["IssuedAuthority"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }
    }
}
