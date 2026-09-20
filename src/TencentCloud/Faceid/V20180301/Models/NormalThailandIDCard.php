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
 * Thai Identity Card (mapped field result)
 *
 * @method string getLicenseNumber() Obtain Identity number
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity number
 * @method string getFullName() Obtain Thai name
 * @method void setFullName(string $FullName) Set Thai name
 * @method string getLastName() Obtain English name
 * @method void setLastName(string $LastName) Set English name
 * @method string getFirstName() Obtain English name
 * @method void setFirstName(string $FirstName) Set English name
 * @method string getBirthday() Obtain English birth date
 * @method void setBirthday(string $Birthday) Set English birth date
 * @method string getFormattedAddress() Obtain Address.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address.
 * @method string getExpirationDate() Obtain Expiration date
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date
 * @method string getIssuedDate() Obtain English birth date
 * @method void setIssuedDate(string $IssuedDate) Set English birth date
 * @method string getRegistrationNumber() Obtain Serial number
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Serial number
 * @method string getReligion() Obtain Religious belief
 * @method void setReligion(string $Religion) Set Religious belief
 * @method string getThaiBirthday() Obtain Date of birth in Thai
 * @method void setThaiBirthday(string $ThaiBirthday) Set Date of birth in Thai
 * @method string getThaiExpirationDate() Obtain Expiration date in Thai
 * @method void setThaiExpirationDate(string $ThaiExpirationDate) Set Expiration date in Thai
 * @method string getThaiIssueDate() Obtain Date of issue in Thai
 * @method void setThaiIssueDate(string $ThaiIssueDate) Set Date of issue in Thai
 */
class NormalThailandIDCard extends AbstractModel
{
    /**
     * @var string Identity number
     */
    public $LicenseNumber;

    /**
     * @var string Thai name
     */
    public $FullName;

    /**
     * @var string English name
     */
    public $LastName;

    /**
     * @var string English name
     */
    public $FirstName;

    /**
     * @var string English birth date
     */
    public $Birthday;

    /**
     * @var string Address.
     */
    public $FormattedAddress;

    /**
     * @var string Expiration date
     */
    public $ExpirationDate;

    /**
     * @var string English birth date
     */
    public $IssuedDate;

    /**
     * @var string Serial number
     */
    public $RegistrationNumber;

    /**
     * @var string Religious belief
     */
    public $Religion;

    /**
     * @var string Date of birth in Thai
     */
    public $ThaiBirthday;

    /**
     * @var string Expiration date in Thai
     */
    public $ThaiExpirationDate;

    /**
     * @var string Date of issue in Thai
     */
    public $ThaiIssueDate;

    /**
     * @param string $LicenseNumber Identity number
     * @param string $FullName Thai name
     * @param string $LastName English name
     * @param string $FirstName English name
     * @param string $Birthday English birth date
     * @param string $FormattedAddress Address.
     * @param string $ExpirationDate Expiration date
     * @param string $IssuedDate English birth date
     * @param string $RegistrationNumber Serial number
     * @param string $Religion Religious belief
     * @param string $ThaiBirthday Date of birth in Thai
     * @param string $ThaiExpirationDate Expiration date in Thai
     * @param string $ThaiIssueDate Date of issue in Thai
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

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("FormattedAddress",$param) and $param["FormattedAddress"] !== null) {
            $this->FormattedAddress = $param["FormattedAddress"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }

        if (array_key_exists("Religion",$param) and $param["Religion"] !== null) {
            $this->Religion = $param["Religion"];
        }

        if (array_key_exists("ThaiBirthday",$param) and $param["ThaiBirthday"] !== null) {
            $this->ThaiBirthday = $param["ThaiBirthday"];
        }

        if (array_key_exists("ThaiExpirationDate",$param) and $param["ThaiExpirationDate"] !== null) {
            $this->ThaiExpirationDate = $param["ThaiExpirationDate"];
        }

        if (array_key_exists("ThaiIssueDate",$param) and $param["ThaiIssueDate"] !== null) {
            $this->ThaiIssueDate = $param["ThaiIssueDate"];
        }
    }
}
