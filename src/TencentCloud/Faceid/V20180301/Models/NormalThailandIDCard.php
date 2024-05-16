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
 * Thailand ID Card
 *
 * @method string getLicenseNumber() Obtain LicenseNumber
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set LicenseNumber
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullName() Obtain Thailand name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Thailand name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastName() Obtain Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstName() Obtain First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormattedAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationDate() Obtain Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedDate() Obtain Issued date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedDate(string $IssuedDate) Set Issued date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistrationNumber() Obtain Registration number 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration number 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReligion() Obtain Religion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReligion(string $Religion) Set Religion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getThaiBirthday() Obtain Birthday in Thai
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThaiBirthday(string $ThaiBirthday) Set Birthday in Thai
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getThaiExpirationDate() Obtain Expiration date in Thai
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThaiExpirationDate(string $ThaiExpirationDate) Set Expiration date in Thai
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getThaiIssueDate() Obtain Issued date in Thai
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThaiIssueDate(string $ThaiIssueDate) Set Issued date in Thai
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NormalThailandIDCard extends AbstractModel
{
    /**
     * @var string LicenseNumber
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Thailand name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string Last name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastName;

    /**
     * @var string First name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstName;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormattedAddress;

    /**
     * @var string Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationDate;

    /**
     * @var string Issued date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedDate;

    /**
     * @var string Registration number 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistrationNumber;

    /**
     * @var string Religion
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Religion;

    /**
     * @var string Birthday in Thai
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ThaiBirthday;

    /**
     * @var string Expiration date in Thai
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ThaiExpirationDate;

    /**
     * @var string Issued date in Thai
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ThaiIssueDate;

    /**
     * @param string $LicenseNumber LicenseNumber
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullName Thailand name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastName Last name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstName First name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormattedAddress Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationDate Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedDate Issued date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistrationNumber Registration number 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Religion Religion
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ThaiBirthday Birthday in Thai
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ThaiExpirationDate Expiration date in Thai
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ThaiIssueDate Issued date in Thai
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
