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
 * Passport Information Page Content
 *
 * @method string getType() Obtain Document type, obtained from passport visual zone
 * @method void setType(string $Type) Set Document type, obtained from passport visual zone
 * @method string getIssuingCountry() Obtain Issuing country, obtained from passport visual zone
 * @method void setIssuingCountry(string $IssuingCountry) Set Issuing country, obtained from passport visual zone
 * @method string getPassportID() Obtain Unique serial number / identification number of the passport, obtained from passport visual zone
 * @method void setPassportID(string $PassportID) Set Unique serial number / identification number of the passport, obtained from passport visual zone
 * @method string getSurname() Obtain Last name, obtained from passport visual zone
 * @method void setSurname(string $Surname) Set Last name, obtained from passport visual zone
 * @method string getGivenName() Obtain First name, obtained from passport visual zone
 * @method void setGivenName(string $GivenName) Set First name, obtained from passport visual zone
 * @method string getName() Obtain Full name, obtained from passport visual zone
 * @method void setName(string $Name) Set Full name, obtained from passport visual zone
 * @method string getNationality() Obtain Nationality, obtained from passport visual zone
 * @method void setNationality(string $Nationality) Set Nationality, obtained from passport visual zone
 * @method string getDateOfBirth() Obtain Date of birth, obtained from passport visual zone
 * @method void setDateOfBirth(string $DateOfBirth) Set Date of birth, obtained from passport visual zone
 * @method string getSex() Obtain Gender, obtained from passport visual zone
 * @method void setSex(string $Sex) Set Gender, obtained from passport visual zone
 * @method string getDateOfIssuance() Obtain Date of issue, obtained from passport visual zone
 * @method void setDateOfIssuance(string $DateOfIssuance) Set Date of issue, obtained from passport visual zone
 * @method string getDateOfExpiration() Obtain Passport expiry date, obtained from passport visual zone
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Passport expiry date, obtained from passport visual zone
 * @method string getSignature() Obtain Holder's signature, obtained from passport visual zone
(Note: Only returned for PRC passport)
 * @method void setSignature(string $Signature) Set Holder's signature, obtained from passport visual zone
(Note: Only returned for PRC passport)
 * @method string getIssuePlace() Obtain Place of issue, obtained from passport visual zone
(Note: Only returned for PRC passport)
 * @method void setIssuePlace(string $IssuePlace) Set Place of issue, obtained from passport visual zone
(Note: Only returned for PRC passport)
 * @method string getIssuingAuthority() Obtain Issuing Authority, obtained from passport visual zone
(Note: Only returned for PRC passport)

 * @method void setIssuingAuthority(string $IssuingAuthority) Set Issuing Authority, obtained from passport visual zone
(Note: Only returned for PRC passport)

 * @method string getBirthPlace() Obtain Place of birth, obtained from passport visual zone
 * @method void setBirthPlace(string $BirthPlace) Set Place of birth, obtained from passport visual zone
 * @method string getPassportFlag() Obtain Passport flag, obtained from passport visual zone
 * @method void setPassportFlag(string $PassportFlag) Set Passport flag, obtained from passport visual zone
 * @method string getMiddleName() Obtain Middle name, obtained from passport visual zone
 * @method void setMiddleName(string $MiddleName) Set Middle name, obtained from passport visual zone
 * @method string getFatherName() Obtain Father's name, obtained from passport visual zone
 * @method void setFatherName(string $FatherName) Set Father's name, obtained from passport visual zone
 * @method string getMotherName() Obtain Mother's name, obtained from passport visual zone
 * @method void setMotherName(string $MotherName) Set Mother's name, obtained from passport visual zone
 * @method string getTitle() Obtain Title, obtained from passport visual zone
 * @method void setTitle(string $Title) Set Title, obtained from passport visual zone
 * @method string getPostname() Obtain Name suffix, obtained from passport visual zone
 * @method void setPostname(string $Postname) Set Name suffix, obtained from passport visual zone
 */
class PassportRecognizeInfos extends AbstractModel
{
    /**
     * @var string Document type, obtained from passport visual zone
     */
    public $Type;

    /**
     * @var string Issuing country, obtained from passport visual zone
     */
    public $IssuingCountry;

    /**
     * @var string Unique serial number / identification number of the passport, obtained from passport visual zone
     */
    public $PassportID;

    /**
     * @var string Last name, obtained from passport visual zone
     */
    public $Surname;

    /**
     * @var string First name, obtained from passport visual zone
     */
    public $GivenName;

    /**
     * @var string Full name, obtained from passport visual zone
     */
    public $Name;

    /**
     * @var string Nationality, obtained from passport visual zone
     */
    public $Nationality;

    /**
     * @var string Date of birth, obtained from passport visual zone
     */
    public $DateOfBirth;

    /**
     * @var string Gender, obtained from passport visual zone
     */
    public $Sex;

    /**
     * @var string Date of issue, obtained from passport visual zone
     */
    public $DateOfIssuance;

    /**
     * @var string Passport expiry date, obtained from passport visual zone
     */
    public $DateOfExpiration;

    /**
     * @var string Holder's signature, obtained from passport visual zone
(Note: Only returned for PRC passport)
     */
    public $Signature;

    /**
     * @var string Place of issue, obtained from passport visual zone
(Note: Only returned for PRC passport)
     */
    public $IssuePlace;

    /**
     * @var string Issuing Authority, obtained from passport visual zone
(Note: Only returned for PRC passport)

     */
    public $IssuingAuthority;

    /**
     * @var string Place of birth, obtained from passport visual zone
     */
    public $BirthPlace;

    /**
     * @var string Passport flag, obtained from passport visual zone
     */
    public $PassportFlag;

    /**
     * @var string Middle name, obtained from passport visual zone
     */
    public $MiddleName;

    /**
     * @var string Father's name, obtained from passport visual zone
     */
    public $FatherName;

    /**
     * @var string Mother's name, obtained from passport visual zone
     */
    public $MotherName;

    /**
     * @var string Title, obtained from passport visual zone
     */
    public $Title;

    /**
     * @var string Name suffix, obtained from passport visual zone
     */
    public $Postname;

    /**
     * @param string $Type Document type, obtained from passport visual zone
     * @param string $IssuingCountry Issuing country, obtained from passport visual zone
     * @param string $PassportID Unique serial number / identification number of the passport, obtained from passport visual zone
     * @param string $Surname Last name, obtained from passport visual zone
     * @param string $GivenName First name, obtained from passport visual zone
     * @param string $Name Full name, obtained from passport visual zone
     * @param string $Nationality Nationality, obtained from passport visual zone
     * @param string $DateOfBirth Date of birth, obtained from passport visual zone
     * @param string $Sex Gender, obtained from passport visual zone
     * @param string $DateOfIssuance Date of issue, obtained from passport visual zone
     * @param string $DateOfExpiration Passport expiry date, obtained from passport visual zone
     * @param string $Signature Holder's signature, obtained from passport visual zone
(Note: Only returned for PRC passport)
     * @param string $IssuePlace Place of issue, obtained from passport visual zone
(Note: Only returned for PRC passport)
     * @param string $IssuingAuthority Issuing Authority, obtained from passport visual zone
(Note: Only returned for PRC passport)

     * @param string $BirthPlace Place of birth, obtained from passport visual zone
     * @param string $PassportFlag Passport flag, obtained from passport visual zone
     * @param string $MiddleName Middle name, obtained from passport visual zone
     * @param string $FatherName Father's name, obtained from passport visual zone
     * @param string $MotherName Mother's name, obtained from passport visual zone
     * @param string $Title Title, obtained from passport visual zone
     * @param string $Postname Name suffix, obtained from passport visual zone
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IssuingCountry",$param) and $param["IssuingCountry"] !== null) {
            $this->IssuingCountry = $param["IssuingCountry"];
        }

        if (array_key_exists("PassportID",$param) and $param["PassportID"] !== null) {
            $this->PassportID = $param["PassportID"];
        }

        if (array_key_exists("Surname",$param) and $param["Surname"] !== null) {
            $this->Surname = $param["Surname"];
        }

        if (array_key_exists("GivenName",$param) and $param["GivenName"] !== null) {
            $this->GivenName = $param["GivenName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfIssuance",$param) and $param["DateOfIssuance"] !== null) {
            $this->DateOfIssuance = $param["DateOfIssuance"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("IssuePlace",$param) and $param["IssuePlace"] !== null) {
            $this->IssuePlace = $param["IssuePlace"];
        }

        if (array_key_exists("IssuingAuthority",$param) and $param["IssuingAuthority"] !== null) {
            $this->IssuingAuthority = $param["IssuingAuthority"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("PassportFlag",$param) and $param["PassportFlag"] !== null) {
            $this->PassportFlag = $param["PassportFlag"];
        }

        if (array_key_exists("MiddleName",$param) and $param["MiddleName"] !== null) {
            $this->MiddleName = $param["MiddleName"];
        }

        if (array_key_exists("FatherName",$param) and $param["FatherName"] !== null) {
            $this->FatherName = $param["FatherName"];
        }

        if (array_key_exists("MotherName",$param) and $param["MotherName"] !== null) {
            $this->MotherName = $param["MotherName"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Postname",$param) and $param["Postname"] !== null) {
            $this->Postname = $param["Postname"];
        }
    }
}
