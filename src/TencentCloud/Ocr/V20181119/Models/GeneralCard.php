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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General card certificate information.
 *
 * @method string getLicenseNumber() Obtain ID number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set ID number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPersonalNumber() Obtain Personal number. returned when the identity document type is passport.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPersonalNumber(string $PersonalNumber) Set Personal number. returned when the identity document type is passport.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeFirst() Obtain Passport mrz line 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeFirst(string $PassportCodeFirst) Set Passport mrz line 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeSecond() Obtain Passport mrz line 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeSecond(string $PassportCodeSecond) Set Passport mrz line 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationDate() Obtain Expiration date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDueDate() Obtain Expiration date in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDueDate(string $DueDate) Set Expiration date in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedDate() Obtain Issue date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedDate(string $IssuedDate) Set Issue date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedAuthority() Obtain Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedAuthority(string $IssuedAuthority) Set Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedCountry() Obtain Issuing country, following the ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedCountry(string $IssuedCountry) Set Issuing country, following the ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullName() Obtain Specifies the name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Specifies the name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstName() Obtain Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastName() Obtain Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender on the document.
-M: man.
-F: woman.
-X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender on the document.
-M: man.
-F: woman.
-X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAge() Obtain Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAge(string $Age) Set Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Date of birth.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Date of birth.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthPlace() Obtain Birth place.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthPlace(string $BirthPlace) Set Birth place.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationality(string $Nationality) Set Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistrationNumber() Obtain Registration number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AddressInfo getAddress() Obtain Specifies the address information of the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(AddressInfo $Address) Set Specifies the address information of the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullNameLocal() Obtain Localized name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullNameLocal(string $FullNameLocal) Set Localized name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstNameLocal() Obtain Localization name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstNameLocal(string $FirstNameLocal) Set Localization name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastNameLocal() Obtain Localized surname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastNameLocal(string $LastNameLocal) Set Localized surname.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GeneralCard extends AbstractModel
{
    /**
     * @var string ID number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Personal number. returned when the identity document type is passport.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PersonalNumber;

    /**
     * @var string Passport mrz line 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassportCodeFirst;

    /**
     * @var string Passport mrz line 2.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassportCodeSecond;

    /**
     * @var string Expiration date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationDate;

    /**
     * @var string Expiration date in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DueDate;

    /**
     * @var string Issue date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedDate;

    /**
     * @var string Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedAuthority;

    /**
     * @var string Issuing country, following the ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedCountry;

    /**
     * @var string Specifies the name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string Name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstName;

    /**
     * @var string Name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastName;

    /**
     * @var string Gender on the document.
-M: man.
-F: woman.
-X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Age;

    /**
     * @var string Date of birth.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Birth place.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BirthPlace;

    /**
     * @var string Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nationality;

    /**
     * @var string Registration number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistrationNumber;

    /**
     * @var AddressInfo Specifies the address information of the document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string Localized name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullNameLocal;

    /**
     * @var string Localization name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstNameLocal;

    /**
     * @var string Localized surname.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastNameLocal;

    /**
     * @param string $LicenseNumber ID number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PersonalNumber Personal number. returned when the identity document type is passport.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeFirst Passport mrz line 1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeSecond Passport mrz line 2.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationDate Expiration date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DueDate Expiration date in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedDate Issue date, in YYYY-MM-DD format.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedAuthority Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedCountry Issuing country, following the ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullName Specifies the name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstName Name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastName Name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender on the document.
-M: man.
-F: woman.
-X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Age Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Date of birth.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BirthPlace Birth place.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistrationNumber Registration number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AddressInfo $Address Specifies the address information of the document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullNameLocal Localized name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstNameLocal Localization name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastNameLocal Localized surname.
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
            $this->Address = new AddressInfo();
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
