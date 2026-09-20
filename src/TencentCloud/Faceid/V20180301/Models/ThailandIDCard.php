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
 * Thai Identity Card
 *
 * @method string getLastName() Obtain Last name
 * @method void setLastName(string $LastName) Set Last name
 * @method string getFirstName() Obtain First name
 * @method void setFirstName(string $FirstName) Set First name
 * @method string getLicenseNumber() Obtain No.
 * @method void setLicenseNumber(string $LicenseNumber) Set No.
 * @method string getDateOfBirth() Obtain Date of birth
 * @method void setDateOfBirth(string $DateOfBirth) Set Date of birth
 * @method string getDateOfExpiry() Obtain Expiration date
 * @method void setDateOfExpiry(string $DateOfExpiry) Set Expiration date
 * @method string getDateOfIssue() Obtain Issue date
 * @method void setDateOfIssue(string $DateOfIssue) Set Issue date
 * @method string getIssuedCountry() Obtain Issuing country
 * @method void setIssuedCountry(string $IssuedCountry) Set Issuing country
 */
class ThailandIDCard extends AbstractModel
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
    public $DateOfBirth;

    /**
     * @var string Expiration date
     */
    public $DateOfExpiry;

    /**
     * @var string Issue date
     */
    public $DateOfIssue;

    /**
     * @var string Issuing country
     */
    public $IssuedCountry;

    /**
     * @param string $LastName Last name
     * @param string $FirstName First name
     * @param string $LicenseNumber No.
     * @param string $DateOfBirth Date of birth
     * @param string $DateOfExpiry Expiration date
     * @param string $DateOfIssue Issue date
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

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("DateOfExpiry",$param) and $param["DateOfExpiry"] !== null) {
            $this->DateOfExpiry = $param["DateOfExpiry"];
        }

        if (array_key_exists("DateOfIssue",$param) and $param["DateOfIssue"] !== null) {
            $this->DateOfIssue = $param["DateOfIssue"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }
    }
}
