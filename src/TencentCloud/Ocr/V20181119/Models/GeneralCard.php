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
 * General card certificate information
 *
 * @method string getLicenseNumber() Obtain <p>ID number</p>
 * @method void setLicenseNumber(string $LicenseNumber) Set <p>ID number</p>
 * @method string getPersonalNumber() Obtain <p>Personal number, returned when the identity document type is passport</p>
 * @method void setPersonalNumber(string $PersonalNumber) Set <p>Personal number, returned when the identity document type is passport</p>
 * @method string getFullName() Obtain <p>Name</p>
 * @method void setFullName(string $FullName) Set <p>Name</p>
 * @method string getFullNameLocal() Obtain <p>Localized name</p>
 * @method void setFullNameLocal(string $FullNameLocal) Set <p>Localized name</p>
 * @method string getFirstName() Obtain <p>Name</p>
 * @method void setFirstName(string $FirstName) Set <p>Name</p>
 * @method string getFirstNameLocal() Obtain <p>Localized name</p>
 * @method void setFirstNameLocal(string $FirstNameLocal) Set <p>Localized name</p>
 * @method string getMiddleName() Obtain <p>Middle name</p>
 * @method void setMiddleName(string $MiddleName) Set <p>Middle name</p>
 * @method string getMiddleNameLocal() Obtain <p>Localized middle name</p>
 * @method void setMiddleNameLocal(string $MiddleNameLocal) Set <p>Localized middle name</p>
 * @method string getLastName() Obtain <p>Last name</p>
 * @method void setLastName(string $LastName) Set <p>Last name</p>
 * @method string getLastNameLocal() Obtain <p>Localized last name</p>
 * @method void setLastNameLocal(string $LastNameLocal) Set <p>Localized last name</p>
 * @method string getSex() Obtain <p>Gender on the document</p><ul><li>M: man</li><li>F: woman</li><li>X: other gender identity</li></ul>
 * @method void setSex(string $Sex) Set <p>Gender on the document</p><ul><li>M: man</li><li>F: woman</li><li>X: other gender identity</li></ul>
 * @method string getBirthday() Obtain <p>Date of birth</p>
 * @method void setBirthday(string $Birthday) Set <p>Date of birth</p>
 * @method string getBirthPlace() Obtain <p>Birth place</p>
 * @method void setBirthPlace(string $BirthPlace) Set <p>Birth place</p>
 * @method string getIssuedDate() Obtain <p>Issue date, in YYYY-MM-DD format</p>
 * @method void setIssuedDate(string $IssuedDate) Set <p>Issue date, in YYYY-MM-DD format</p>
 * @method string getIssuedAuthority() Obtain <p>Issuing authority</p>
 * @method void setIssuedAuthority(string $IssuedAuthority) Set <p>Issuing authority</p>
 * @method string getIssuedPlace() Obtain <p>Place where the specified file is issued</p>
 * @method void setIssuedPlace(string $IssuedPlace) Set <p>Place where the specified file is issued</p>
 * @method string getIssuedCountry() Obtain <p>Issuing country</p>
 * @method void setIssuedCountry(string $IssuedCountry) Set <p>Issuing country</p>
 * @method string getIssuedCountryCode() Obtain <p>Country code of the country that issued the file, ISO ALPHA-3 country/region code</p>
 * @method void setIssuedCountryCode(string $IssuedCountryCode) Set <p>Country code of the country that issued the file, ISO ALPHA-3 country/region code</p>
 * @method string getExpirationDate() Obtain <p>Expiration date, in YYYY-MM-DD format</p>
 * @method void setExpirationDate(string $ExpirationDate) Set <p>Expiration date, in YYYY-MM-DD format</p>
 * @method string getMRZLine1() Obtain <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the order in which the line appears in the MRZ</p>
 * @method void setMRZLine1(string $MRZLine1) Set <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the order in which the line appears in the MRZ</p>
 * @method string getMRZLine2() Obtain <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the line count in the order of the MRZ</p>
 * @method void setMRZLine2(string $MRZLine2) Set <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the line count in the order of the MRZ</p>
 * @method string getNationality() Obtain <p>Document nationality, returned following the ISO 3166 country coding specification</p>
 * @method void setNationality(string $Nationality) Set <p>Document nationality, returned following the ISO 3166 country coding specification</p>
 * @method AddressInfo getAddress() Obtain <p>Address information on the document</p>
 * @method void setAddress(AddressInfo $Address) Set <p>Address information on the document</p>
 * @method string getReligion() Obtain <p>Religious belief</p>
 * @method void setReligion(string $Religion) Set <p>Religious belief</p>
 * @method string getType() Obtain <p>Document type</p>
 * @method void setType(string $Type) Set <p>Document type</p>
 * @method string getBloodType() Obtain <p>Blood type</p>
 * @method void setBloodType(string $BloodType) Set <p>Blood type</p>
 * @method string getHeight() Obtain <p>Height</p>
 * @method void setHeight(string $Height) Set <p>Height</p>
 * @method string getWeight() Obtain <p>Weight</p>
 * @method void setWeight(string $Weight) Set <p>Weight</p>
 * @method string getVehicleClass() Obtain <p>Driver's license vehicle type (for example, A/B/C)</p>
 * @method void setVehicleClass(string $VehicleClass) Set <p>Driver's license vehicle type (for example, A/B/C)</p>
 * @method string getRestrictions() Obtain <p>Driver's license restriction condition</p>
 * @method void setRestrictions(string $Restrictions) Set <p>Driver's license restriction condition</p>
 * @method string getEndorsement() Obtain <p>Driver's license extra records</p>
 * @method void setEndorsement(string $Endorsement) Set <p>Driver's license extra records</p>
 * @method string getOthers() Obtain <p>Additional field</p>
 * @method void setOthers(string $Others) Set <p>Additional field</p>
 * @method string getPassportCodeFirst() Obtain <p>MRZ line 1 of the passport</p>
 * @method void setPassportCodeFirst(string $PassportCodeFirst) Set <p>MRZ line 1 of the passport</p>
 * @method string getPassportCodeSecond() Obtain <p>MRZ line 2 of the passport</p>
 * @method void setPassportCodeSecond(string $PassportCodeSecond) Set <p>MRZ line 2 of the passport</p>
 * @method string getDueDate() Obtain <p>Validity date, in YYYY-MM-DD format</p>
 * @method void setDueDate(string $DueDate) Set <p>Validity date, in YYYY-MM-DD format</p>
 * @method string getAge() Obtain <p>Age. 0 means no valid info is obtained</p>
 * @method void setAge(string $Age) Set <p>Age. 0 means no valid info is obtained</p>
 * @method string getRegistrationNumber() Obtain <p>Registration number</p>
 * @method void setRegistrationNumber(string $RegistrationNumber) Set <p>Registration number</p>
 */
class GeneralCard extends AbstractModel
{
    /**
     * @var string <p>ID number</p>
     */
    public $LicenseNumber;

    /**
     * @var string <p>Personal number, returned when the identity document type is passport</p>
     */
    public $PersonalNumber;

    /**
     * @var string <p>Name</p>
     */
    public $FullName;

    /**
     * @var string <p>Localized name</p>
     */
    public $FullNameLocal;

    /**
     * @var string <p>Name</p>
     */
    public $FirstName;

    /**
     * @var string <p>Localized name</p>
     */
    public $FirstNameLocal;

    /**
     * @var string <p>Middle name</p>
     */
    public $MiddleName;

    /**
     * @var string <p>Localized middle name</p>
     */
    public $MiddleNameLocal;

    /**
     * @var string <p>Last name</p>
     */
    public $LastName;

    /**
     * @var string <p>Localized last name</p>
     */
    public $LastNameLocal;

    /**
     * @var string <p>Gender on the document</p><ul><li>M: man</li><li>F: woman</li><li>X: other gender identity</li></ul>
     */
    public $Sex;

    /**
     * @var string <p>Date of birth</p>
     */
    public $Birthday;

    /**
     * @var string <p>Birth place</p>
     */
    public $BirthPlace;

    /**
     * @var string <p>Issue date, in YYYY-MM-DD format</p>
     */
    public $IssuedDate;

    /**
     * @var string <p>Issuing authority</p>
     */
    public $IssuedAuthority;

    /**
     * @var string <p>Place where the specified file is issued</p>
     */
    public $IssuedPlace;

    /**
     * @var string <p>Issuing country</p>
     */
    public $IssuedCountry;

    /**
     * @var string <p>Country code of the country that issued the file, ISO ALPHA-3 country/region code</p>
     */
    public $IssuedCountryCode;

    /**
     * @var string <p>Expiration date, in YYYY-MM-DD format</p>
     */
    public $ExpirationDate;

    /**
     * @var string <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the order in which the line appears in the MRZ</p>
     */
    public $MRZLine1;

    /**
     * @var string <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the line count in the order of the MRZ</p>
     */
    public $MRZLine2;

    /**
     * @var string <p>Document nationality, returned following the ISO 3166 country coding specification</p>
     */
    public $Nationality;

    /**
     * @var AddressInfo <p>Address information on the document</p>
     */
    public $Address;

    /**
     * @var string <p>Religious belief</p>
     */
    public $Religion;

    /**
     * @var string <p>Document type</p>
     */
    public $Type;

    /**
     * @var string <p>Blood type</p>
     */
    public $BloodType;

    /**
     * @var string <p>Height</p>
     */
    public $Height;

    /**
     * @var string <p>Weight</p>
     */
    public $Weight;

    /**
     * @var string <p>Driver's license vehicle type (for example, A/B/C)</p>
     */
    public $VehicleClass;

    /**
     * @var string <p>Driver's license restriction condition</p>
     */
    public $Restrictions;

    /**
     * @var string <p>Driver's license extra records</p>
     */
    public $Endorsement;

    /**
     * @var string <p>Additional field</p>
     */
    public $Others;

    /**
     * @var string <p>MRZ line 1 of the passport</p>
     * @deprecated
     */
    public $PassportCodeFirst;

    /**
     * @var string <p>MRZ line 2 of the passport</p>
     * @deprecated
     */
    public $PassportCodeSecond;

    /**
     * @var string <p>Validity date, in YYYY-MM-DD format</p>
     * @deprecated
     */
    public $DueDate;

    /**
     * @var string <p>Age. 0 means no valid info is obtained</p>
     * @deprecated
     */
    public $Age;

    /**
     * @var string <p>Registration number</p>
     * @deprecated
     */
    public $RegistrationNumber;

    /**
     * @param string $LicenseNumber <p>ID number</p>
     * @param string $PersonalNumber <p>Personal number, returned when the identity document type is passport</p>
     * @param string $FullName <p>Name</p>
     * @param string $FullNameLocal <p>Localized name</p>
     * @param string $FirstName <p>Name</p>
     * @param string $FirstNameLocal <p>Localized name</p>
     * @param string $MiddleName <p>Middle name</p>
     * @param string $MiddleNameLocal <p>Localized middle name</p>
     * @param string $LastName <p>Last name</p>
     * @param string $LastNameLocal <p>Localized last name</p>
     * @param string $Sex <p>Gender on the document</p><ul><li>M: man</li><li>F: woman</li><li>X: other gender identity</li></ul>
     * @param string $Birthday <p>Date of birth</p>
     * @param string $BirthPlace <p>Birth place</p>
     * @param string $IssuedDate <p>Issue date, in YYYY-MM-DD format</p>
     * @param string $IssuedAuthority <p>Issuing authority</p>
     * @param string $IssuedPlace <p>Place where the specified file is issued</p>
     * @param string $IssuedCountry <p>Issuing country</p>
     * @param string $IssuedCountryCode <p>Country code of the country that issued the file, ISO ALPHA-3 country/region code</p>
     * @param string $ExpirationDate <p>Expiration date, in YYYY-MM-DD format</p>
     * @param string $MRZLine1 <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the order in which the line appears in the MRZ</p>
     * @param string $MRZLine2 <p>Content of the single-line machine-readable zone (MRZ) on the document. The number represents the line count in the order of the MRZ</p>
     * @param string $Nationality <p>Document nationality, returned following the ISO 3166 country coding specification</p>
     * @param AddressInfo $Address <p>Address information on the document</p>
     * @param string $Religion <p>Religious belief</p>
     * @param string $Type <p>Document type</p>
     * @param string $BloodType <p>Blood type</p>
     * @param string $Height <p>Height</p>
     * @param string $Weight <p>Weight</p>
     * @param string $VehicleClass <p>Driver's license vehicle type (for example, A/B/C)</p>
     * @param string $Restrictions <p>Driver's license restriction condition</p>
     * @param string $Endorsement <p>Driver's license extra records</p>
     * @param string $Others <p>Additional field</p>
     * @param string $PassportCodeFirst <p>MRZ line 1 of the passport</p>
     * @param string $PassportCodeSecond <p>MRZ line 2 of the passport</p>
     * @param string $DueDate <p>Validity date, in YYYY-MM-DD format</p>
     * @param string $Age <p>Age. 0 means no valid info is obtained</p>
     * @param string $RegistrationNumber <p>Registration number</p>
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
