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
 * Information Section Content.
 *
 * @method string getType() Obtain Document Type (Passport Information Page Recognition Result).
 * @method void setType(string $Type) Set Document Type (Passport Information Page Recognition Result).
 * @method string getIssuingCountry() Obtain Issuing Country (Passport Information Page Recognition Result).
 * @method void setIssuingCountry(string $IssuingCountry) Set Issuing Country (Passport Information Page Recognition Result).
 * @method string getPassportID() Obtain Passport Number (Passport Information Page Recognition Result).
 * @method void setPassportID(string $PassportID) Set Passport Number (Passport Information Page Recognition Result).
 * @method string getSurname() Obtain Surname (Passport Information Page Recognition Result).
 * @method void setSurname(string $Surname) Set Surname (Passport Information Page Recognition Result).
 * @method string getGivenName() Obtain Given Name (Passport Information Page Recognition Result).
 * @method void setGivenName(string $GivenName) Set Given Name (Passport Information Page Recognition Result).
 * @method string getName() Obtain Full Name (Passport Information Page Recognition Result).
 * @method void setName(string $Name) Set Full Name (Passport Information Page Recognition Result).
 * @method string getNationality() Obtain Nationality Information (Passport Information Page Recognition Result).
 * @method void setNationality(string $Nationality) Set Nationality Information (Passport Information Page Recognition Result).
 * @method string getDateOfBirth() Obtain Date of Birth (Passport Information Page Recognition Result).
 * @method void setDateOfBirth(string $DateOfBirth) Set Date of Birth (Passport Information Page Recognition Result).
 * @method string getSex() Obtain Gender (Passport Information Page Recognition Result).
 * @method void setSex(string $Sex) Set Gender (Passport Information Page Recognition Result).
 * @method string getDateOfIssuance() Obtain Date of Issue (Passport Information Page Recognition Result).
 * @method void setDateOfIssuance(string $DateOfIssuance) Set Date of Issue (Passport Information Page Recognition Result).
 * @method string getDateOfExpiration() Obtain Expiry Date (Passport Information Page Recognition Result).
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Expiry Date (Passport Information Page Recognition Result).
 * @method string getSignature() Obtain Cardholder Signature (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
 * @method void setSignature(string $Signature) Set Cardholder Signature (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
 * @method string getIssuePlace() Obtain Place of Issue (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
 * @method void setIssuePlace(string $IssuePlace) Set Place of Issue (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
 * @method string getIssuingAuthority() Obtain Issuing Authority (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
 * @method void setIssuingAuthority(string $IssuingAuthority) Set Issuing Authority (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
 */
class PassportRecognizeInfos extends AbstractModel
{
    /**
     * @var string Document Type (Passport Information Page Recognition Result).
     */
    public $Type;

    /**
     * @var string Issuing Country (Passport Information Page Recognition Result).
     */
    public $IssuingCountry;

    /**
     * @var string Passport Number (Passport Information Page Recognition Result).
     */
    public $PassportID;

    /**
     * @var string Surname (Passport Information Page Recognition Result).
     */
    public $Surname;

    /**
     * @var string Given Name (Passport Information Page Recognition Result).
     */
    public $GivenName;

    /**
     * @var string Full Name (Passport Information Page Recognition Result).
     */
    public $Name;

    /**
     * @var string Nationality Information (Passport Information Page Recognition Result).
     */
    public $Nationality;

    /**
     * @var string Date of Birth (Passport Information Page Recognition Result).
     */
    public $DateOfBirth;

    /**
     * @var string Gender (Passport Information Page Recognition Result).
     */
    public $Sex;

    /**
     * @var string Date of Issue (Passport Information Page Recognition Result).
     */
    public $DateOfIssuance;

    /**
     * @var string Expiry Date (Passport Information Page Recognition Result).
     */
    public $DateOfExpiration;

    /**
     * @var string Cardholder Signature (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
     */
    public $Signature;

    /**
     * @var string Place of Issue (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
     */
    public $IssuePlace;

    /**
     * @var string Issuing Authority (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
     */
    public $IssuingAuthority;

    /**
     * @param string $Type Document Type (Passport Information Page Recognition Result).
     * @param string $IssuingCountry Issuing Country (Passport Information Page Recognition Result).
     * @param string $PassportID Passport Number (Passport Information Page Recognition Result).
     * @param string $Surname Surname (Passport Information Page Recognition Result).
     * @param string $GivenName Given Name (Passport Information Page Recognition Result).
     * @param string $Name Full Name (Passport Information Page Recognition Result).
     * @param string $Nationality Nationality Information (Passport Information Page Recognition Result).
     * @param string $DateOfBirth Date of Birth (Passport Information Page Recognition Result).
     * @param string $Sex Gender (Passport Information Page Recognition Result).
     * @param string $DateOfIssuance Date of Issue (Passport Information Page Recognition Result).
     * @param string $DateOfExpiration Expiry Date (Passport Information Page Recognition Result).
     * @param string $Signature Cardholder Signature (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
     * @param string $IssuePlace Place of Issue (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
     * @param string $IssuingAuthority Issuing Authority (Passport Information Page Recognition Result)

This field is only supported for Chinese mainland passports and not available for Hong Kong (China), Macao (China), and Taiwan (China) passports or foreign passports.
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
    }
}
