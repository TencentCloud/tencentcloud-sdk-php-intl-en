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
 * @method string getPersonalNumber() Obtain Personal number. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPersonalNumber(string $PersonalNumber) Set Personal number. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullName() Obtain Full name on the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Full name on the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullNameLocal() Obtain Full name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullNameLocal(string $FullNameLocal) Set Full name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstName() Obtain First name or given name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set First name or given name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstNameLocal() Obtain First name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstNameLocal(string $FirstNameLocal) Set First name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMiddleName() Obtain Middle name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiddleName(string $MiddleName) Set Middle name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMiddleNameLocal() Obtain Middle name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiddleNameLocal(string $MiddleNameLocal) Set Middle name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastName() Obtain Last name or surname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Last name or surname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastNameLocal() Obtain Last name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastNameLocal(string $LastNameLocal) Set Last name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender on the document.
- M: man.
- F: woman.
- X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender on the document.
- M: man.
- F: woman.
- X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Date of birth.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Date of birth.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthPlace() Obtain Birth place.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthPlace(string $BirthPlace) Set Birth place.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedDate() Obtain Issue date.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedDate(string $IssuedDate) Set Issue date.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedAuthority() Obtain Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedAuthority(string $IssuedAuthority) Set Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedPlace() Obtain Place of issue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedPlace(string $IssuedPlace) Set Place of issue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedCountry() Obtain Issuing country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedCountry(string $IssuedCountry) Set Issuing country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedCountryCode() Obtain Country code of issue, ISO Alpha-3 format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedCountryCode(string $IssuedCountryCode) Set Country code of issue, ISO Alpha-3 format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationDate() Obtain Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationDate(string $ExpirationDate) Set Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMRZLine1() Obtain First line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMRZLine1(string $MRZLine1) Set First line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMRZLine2() Obtain Second line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMRZLine2(string $MRZLine2) Set Second line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationality(string $Nationality) Set Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AddressInfo getAddress() Obtain Address information on the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(AddressInfo $Address) Set Address information on the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReligion() Obtain Religion (if displayed on the document).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReligion(string $Religion) Set Religion (if displayed on the document).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Type of document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type of document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBloodType() Obtain Blood type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBloodType(string $BloodType) Set Blood type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHeight() Obtain Height.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(string $Height) Set Height.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWeight() Obtain Weight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(string $Weight) Set Weight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVehicleClass() Obtain Vehicle class authorized on the driver license (e.g., A, B, C).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVehicleClass(string $VehicleClass) Set Vehicle class authorized on the driver license (e.g., A, B, C).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRestrictions() Obtain Restrictions on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestrictions(string $Restrictions) Set Restrictions on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndorsement() Obtain Endorsements or additional records on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndorsement(string $Endorsement) Set Endorsements or additional records on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOthers() Obtain Supplementary fields (varies by document type).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOthers(string $Others) Set Supplementary fields (varies by document type).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeFirst() Obtain First line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeFirst(string $PassportCodeFirst) Set First line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeSecond() Obtain Second line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeSecond(string $PassportCodeSecond) Set Second line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDueDate() Obtain Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDueDate(string $DueDate) Set Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAge() Obtain Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAge(string $Age) Set Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistrationNumber() Obtain Registration number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration number.
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
     * @var string Personal number. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PersonalNumber;

    /**
     * @var string Full name on the document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string Full name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullNameLocal;

    /**
     * @var string First name or given name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstName;

    /**
     * @var string First name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstNameLocal;

    /**
     * @var string Middle name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiddleName;

    /**
     * @var string Middle name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiddleNameLocal;

    /**
     * @var string Last name or surname.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastName;

    /**
     * @var string Last name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastNameLocal;

    /**
     * @var string Gender on the document.
- M: man.
- F: woman.
- X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

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
     * @var string Issue date.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedDate;

    /**
     * @var string Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedAuthority;

    /**
     * @var string Place of issue.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedPlace;

    /**
     * @var string Issuing country.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedCountry;

    /**
     * @var string Country code of issue, ISO Alpha-3 format.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedCountryCode;

    /**
     * @var string Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationDate;

    /**
     * @var string First line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MRZLine1;

    /**
     * @var string Second line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MRZLine2;

    /**
     * @var string Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nationality;

    /**
     * @var AddressInfo Address information on the document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string Religion (if displayed on the document).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Religion;

    /**
     * @var string Type of document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Blood type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BloodType;

    /**
     * @var string Height.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var string Weight.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string Vehicle class authorized on the driver license (e.g., A, B, C).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VehicleClass;

    /**
     * @var string Restrictions on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Restrictions;

    /**
     * @var string Endorsements or additional records on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Endorsement;

    /**
     * @var string Supplementary fields (varies by document type).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Others;

    /**
     * @var string First line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $PassportCodeFirst;

    /**
     * @var string Second line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $PassportCodeSecond;

    /**
     * @var string Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $DueDate;

    /**
     * @var string Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Age;

    /**
     * @var string Registration number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $RegistrationNumber;

    /**
     * @param string $LicenseNumber ID number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PersonalNumber Personal number. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullName Full name on the document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullNameLocal Full name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstName First name or given name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstNameLocal First name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MiddleName Middle name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MiddleNameLocal Middle name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastName Last name or surname.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastNameLocal Last name in local language.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender on the document.
- M: man.
- F: woman.
- X: other gender identity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Date of birth.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BirthPlace Birth place.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedDate Issue date.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedAuthority Issuing authority.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedPlace Place of issue.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedCountry Issuing country.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedCountryCode Country code of issue, ISO Alpha-3 format.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationDate Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MRZLine1 First line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MRZLine2 Second line of the Machine Readable Zone (MRZ).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality Document nationality, following ISO 3166 country coding specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AddressInfo $Address Address information on the document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Religion Religion (if displayed on the document).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Type of document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BloodType Blood type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Height Height.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Weight Weight.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VehicleClass Vehicle class authorized on the driver license (e.g., A, B, C).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Restrictions Restrictions on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Endorsement Endorsements or additional records on the driver license.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Others Supplementary fields (varies by document type).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeFirst First line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeSecond Second line of the passport MRZ (Machine Readable Zone).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DueDate Expiry date.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Age Age. 0 means no valid info.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistrationNumber Registration number.
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

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("FullNameLocal",$param) and $param["FullNameLocal"] !== null) {
            $this->FullNameLocal = $param["FullNameLocal"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("FirstNameLocal",$param) and $param["FirstNameLocal"] !== null) {
            $this->FirstNameLocal = $param["FirstNameLocal"];
        }

        if (array_key_exists("MiddleName",$param) and $param["MiddleName"] !== null) {
            $this->MiddleName = $param["MiddleName"];
        }

        if (array_key_exists("MiddleNameLocal",$param) and $param["MiddleNameLocal"] !== null) {
            $this->MiddleNameLocal = $param["MiddleNameLocal"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("LastNameLocal",$param) and $param["LastNameLocal"] !== null) {
            $this->LastNameLocal = $param["LastNameLocal"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("IssuedAuthority",$param) and $param["IssuedAuthority"] !== null) {
            $this->IssuedAuthority = $param["IssuedAuthority"];
        }

        if (array_key_exists("IssuedPlace",$param) and $param["IssuedPlace"] !== null) {
            $this->IssuedPlace = $param["IssuedPlace"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }

        if (array_key_exists("IssuedCountryCode",$param) and $param["IssuedCountryCode"] !== null) {
            $this->IssuedCountryCode = $param["IssuedCountryCode"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("MRZLine1",$param) and $param["MRZLine1"] !== null) {
            $this->MRZLine1 = $param["MRZLine1"];
        }

        if (array_key_exists("MRZLine2",$param) and $param["MRZLine2"] !== null) {
            $this->MRZLine2 = $param["MRZLine2"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new AddressInfo();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Religion",$param) and $param["Religion"] !== null) {
            $this->Religion = $param["Religion"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BloodType",$param) and $param["BloodType"] !== null) {
            $this->BloodType = $param["BloodType"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("VehicleClass",$param) and $param["VehicleClass"] !== null) {
            $this->VehicleClass = $param["VehicleClass"];
        }

        if (array_key_exists("Restrictions",$param) and $param["Restrictions"] !== null) {
            $this->Restrictions = $param["Restrictions"];
        }

        if (array_key_exists("Endorsement",$param) and $param["Endorsement"] !== null) {
            $this->Endorsement = $param["Endorsement"];
        }

        if (array_key_exists("Others",$param) and $param["Others"] !== null) {
            $this->Others = $param["Others"];
        }

        if (array_key_exists("PassportCodeFirst",$param) and $param["PassportCodeFirst"] !== null) {
            $this->PassportCodeFirst = $param["PassportCodeFirst"];
        }

        if (array_key_exists("PassportCodeSecond",$param) and $param["PassportCodeSecond"] !== null) {
            $this->PassportCodeSecond = $param["PassportCodeSecond"];
        }

        if (array_key_exists("DueDate",$param) and $param["DueDate"] !== null) {
            $this->DueDate = $param["DueDate"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }
    }
}
