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
 * General card certificate information
 *
 * @method string getLicenseNumber() Obtain ID number
 * @method void setLicenseNumber(string $LicenseNumber) Set ID number
 * @method string getPersonalNumber() Obtain Personal number. It is returned when the identity document type is a passport.
 * @method void setPersonalNumber(string $PersonalNumber) Set Personal number. It is returned when the identity document type is a passport.
 * @method string getPassportCodeFirst() Obtain MRZ line 1 of the passport
 * @method void setPassportCodeFirst(string $PassportCodeFirst) Set MRZ line 1 of the passport
 * @method string getPassportCodeSecond() Obtain MRZ line 2 of the passport
 * @method void setPassportCodeSecond(string $PassportCodeSecond) Set MRZ line 2 of the passport
 * @method string getExpirationDate() Obtain Expiration date in YYYY-MM-DD format
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date in YYYY-MM-DD format
 * @method string getDueDate() Obtain Expiration date in YYYY-MM-DD format
 * @method void setDueDate(string $DueDate) Set Expiration date in YYYY-MM-DD format
 * @method string getIssuedDate() Obtain Issue date in YYYY-MM-DD format
 * @method void setIssuedDate(string $IssuedDate) Set Issue date in YYYY-MM-DD format
 * @method string getIssuedAuthority() Obtain Issuing authority
 * @method void setIssuedAuthority(string $IssuedAuthority) Set Issuing authority
 * @method string getIssuedCountry() Obtain Issuing country. Return following the ISO 3166 country coding specification.
 * @method void setIssuedCountry(string $IssuedCountry) Set Issuing country. Return following the ISO 3166 country coding specification.
 * @method string getFullName() Obtain Name
 * @method void setFullName(string $FullName) Set Name
 * @method string getFirstName() Obtain Name
 * @method void setFirstName(string $FirstName) Set Name
 * @method string getLastName() Obtain Last name
 * @method void setLastName(string $LastName) Set Last name
 * @method string getSex() Obtain Gender on the document
-M: male
-F: female
- X: Other gender identity
 * @method void setSex(string $Sex) Set Gender on the document
-M: male
-F: female
- X: Other gender identity
 * @method string getAge() Obtain Age. 0 indicates no valid info is obtained.
 * @method void setAge(string $Age) Set Age. 0 indicates no valid info is obtained.
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getBirthPlace() Obtain Birth place
 * @method void setBirthPlace(string $BirthPlace) Set Birth place
 * @method string getNationality() Obtain Document nationality. Return following the ISO 3166 country coding specification.
 * @method void setNationality(string $Nationality) Set Document nationality. Return following the ISO 3166 country coding specification.
 * @method string getRegistrationNumber() Obtain Registration number
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration number
 * @method Address getAddress() Obtain Document address information
 * @method void setAddress(Address $Address) Set Document address information
 * @method string getFullNameLocal() Obtain Localized name
 * @method void setFullNameLocal(string $FullNameLocal) Set Localized name
 * @method string getFirstNameLocal() Obtain Localized name
 * @method void setFirstNameLocal(string $FirstNameLocal) Set Localized name
 * @method string getLastNameLocal() Obtain Localized last name
 * @method void setLastNameLocal(string $LastNameLocal) Set Localized last name
 */
class GeneralCard extends AbstractModel
{
    /**
     * @var string ID number
     */
    public $LicenseNumber;

    /**
     * @var string Personal number. It is returned when the identity document type is a passport.
     */
    public $PersonalNumber;

    /**
     * @var string MRZ line 1 of the passport
     */
    public $PassportCodeFirst;

    /**
     * @var string MRZ line 2 of the passport
     */
    public $PassportCodeSecond;

    /**
     * @var string Expiration date in YYYY-MM-DD format
     */
    public $ExpirationDate;

    /**
     * @var string Expiration date in YYYY-MM-DD format
     */
    public $DueDate;

    /**
     * @var string Issue date in YYYY-MM-DD format
     */
    public $IssuedDate;

    /**
     * @var string Issuing authority
     */
    public $IssuedAuthority;

    /**
     * @var string Issuing country. Return following the ISO 3166 country coding specification.
     */
    public $IssuedCountry;

    /**
     * @var string Name
     */
    public $FullName;

    /**
     * @var string Name
     */
    public $FirstName;

    /**
     * @var string Last name
     */
    public $LastName;

    /**
     * @var string Gender on the document
-M: male
-F: female
- X: Other gender identity
     */
    public $Sex;

    /**
     * @var string Age. 0 indicates no valid info is obtained.
     */
    public $Age;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var string Birth place
     */
    public $BirthPlace;

    /**
     * @var string Document nationality. Return following the ISO 3166 country coding specification.
     */
    public $Nationality;

    /**
     * @var string Registration number
     */
    public $RegistrationNumber;

    /**
     * @var Address Document address information
     */
    public $Address;

    /**
     * @var string Localized name
     */
    public $FullNameLocal;

    /**
     * @var string Localized name
     */
    public $FirstNameLocal;

    /**
     * @var string Localized last name
     */
    public $LastNameLocal;

    /**
     * @param string $LicenseNumber ID number
     * @param string $PersonalNumber Personal number. It is returned when the identity document type is a passport.
     * @param string $PassportCodeFirst MRZ line 1 of the passport
     * @param string $PassportCodeSecond MRZ line 2 of the passport
     * @param string $ExpirationDate Expiration date in YYYY-MM-DD format
     * @param string $DueDate Expiration date in YYYY-MM-DD format
     * @param string $IssuedDate Issue date in YYYY-MM-DD format
     * @param string $IssuedAuthority Issuing authority
     * @param string $IssuedCountry Issuing country. Return following the ISO 3166 country coding specification.
     * @param string $FullName Name
     * @param string $FirstName Name
     * @param string $LastName Last name
     * @param string $Sex Gender on the document
-M: male
-F: female
- X: Other gender identity
     * @param string $Age Age. 0 indicates no valid info is obtained.
     * @param string $Birthday Date of birth
     * @param string $BirthPlace Birth place
     * @param string $Nationality Document nationality. Return following the ISO 3166 country coding specification.
     * @param string $RegistrationNumber Registration number
     * @param Address $Address Document address information
     * @param string $FullNameLocal Localized name
     * @param string $FirstNameLocal Localized name
     * @param string $LastNameLocal Localized last name
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

        if (array_key_exists("FullNameLocal",$param) and $param["FullNameLocal"] !== null) {
            $this->FullNameLocal = $param["FullNameLocal"];
        }

        if (array_key_exists("FirstNameLocal",$param) and $param["FirstNameLocal"] !== null) {
            $this->FirstNameLocal = $param["FirstNameLocal"];
        }

        if (array_key_exists("LastNameLocal",$param) and $param["LastNameLocal"] !== null) {
            $this->LastNameLocal = $param["LastNameLocal"];
        }
    }
}
