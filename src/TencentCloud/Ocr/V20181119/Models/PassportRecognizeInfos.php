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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getIssuingCountry() Obtain 
 * @method void setIssuingCountry(string $IssuingCountry) Set 
 * @method string getPassportID() Obtain 
 * @method void setPassportID(string $PassportID) Set 
 * @method string getSurname() Obtain 
 * @method void setSurname(string $Surname) Set 
 * @method string getGivenName() Obtain 
 * @method void setGivenName(string $GivenName) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getNationality() Obtain 
 * @method void setNationality(string $Nationality) Set 
 * @method string getDateOfBirth() Obtain 
 * @method void setDateOfBirth(string $DateOfBirth) Set 
 * @method string getSex() Obtain 
 * @method void setSex(string $Sex) Set 
 * @method string getDateOfIssuance() Obtain 
 * @method void setDateOfIssuance(string $DateOfIssuance) Set 
 * @method string getDateOfExpiration() Obtain 
 * @method void setDateOfExpiration(string $DateOfExpiration) Set 
 * @method string getSignature() Obtain 
 * @method void setSignature(string $Signature) Set 
 * @method string getIssuePlace() Obtain 
 * @method void setIssuePlace(string $IssuePlace) Set 
 * @method string getIssuingAuthority() Obtain 
 * @method void setIssuingAuthority(string $IssuingAuthority) Set 
 */
class PassportRecognizeInfos extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $IssuingCountry;

    /**
     * @var string 
     */
    public $PassportID;

    /**
     * @var string 
     */
    public $Surname;

    /**
     * @var string 
     */
    public $GivenName;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Nationality;

    /**
     * @var string 
     */
    public $DateOfBirth;

    /**
     * @var string 
     */
    public $Sex;

    /**
     * @var string 
     */
    public $DateOfIssuance;

    /**
     * @var string 
     */
    public $DateOfExpiration;

    /**
     * @var string 
     */
    public $Signature;

    /**
     * @var string 
     */
    public $IssuePlace;

    /**
     * @var string 
     */
    public $IssuingAuthority;

    /**
     * @param string $Type 
     * @param string $IssuingCountry 
     * @param string $PassportID 
     * @param string $Surname 
     * @param string $GivenName 
     * @param string $Name 
     * @param string $Nationality 
     * @param string $DateOfBirth 
     * @param string $Sex 
     * @param string $DateOfIssuance 
     * @param string $DateOfExpiration 
     * @param string $Signature 
     * @param string $IssuePlace 
     * @param string $IssuingAuthority 
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
