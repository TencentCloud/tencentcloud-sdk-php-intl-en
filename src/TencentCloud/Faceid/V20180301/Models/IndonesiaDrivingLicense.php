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
 * Indonesian driving license
 *
 * @method string getLastName() Obtain Last name
 * @method void setLastName(string $LastName) Set Last name
 * @method string getFirstName() Obtain First name
 * @method void setFirstName(string $FirstName) Set First name
 * @method string getLicenseNumber() Obtain No.
 * @method void setLicenseNumber(string $LicenseNumber) Set No.
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getAddress() Obtain Address.
 * @method void setAddress(string $Address) Set Address.
 * @method string getExpirationDate() Obtain Expiration date
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date
 * @method string getIssuedDate() Obtain Issue date
 * @method void setIssuedDate(string $IssuedDate) Set Issue date
 * @method string getIssuedCountry() Obtain Issuing country
 * @method void setIssuedCountry(string $IssuedCountry) Set Issuing country
 */
class IndonesiaDrivingLicense extends AbstractModel
{
    /**
     * @var string Last name
     */
    public $LastName;

    /**
     * @var string First name
     */
    public $FirstName;

    /**
     * @var string No.
     */
    public $LicenseNumber;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var string Address.
     */
    public $Address;

    /**
     * @var string Expiration date
     */
    public $ExpirationDate;

    /**
     * @var string Issue date
     */
    public $IssuedDate;

    /**
     * @var string Issuing country
     */
    public $IssuedCountry;

    /**
     * @param string $LastName Last name
     * @param string $FirstName First name
     * @param string $LicenseNumber No.
     * @param string $Birthday Date of birth
     * @param string $Address Address.
     * @param string $ExpirationDate Expiration date
     * @param string $IssuedDate Issue date
     * @param string $IssuedCountry Issuing country
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
        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }
    }
}
