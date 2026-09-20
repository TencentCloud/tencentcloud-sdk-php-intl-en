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
 * Nigerian driver's license
 *
 * @method string getLastName() Obtain Last name
 * @method void setLastName(string $LastName) Set Last name
 * @method string getFirstName() Obtain Name
 * @method void setFirstName(string $FirstName) Set Name
 * @method string getLicenseNumber() Obtain Identity card
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity card
 * @method string getAge() Obtain Age
 * @method void setAge(string $Age) Set Age
 * @method string getBirthday() Obtain Birthday
 * @method void setBirthday(string $Birthday) Set Birthday
 * @method string getIssuedCountry() Obtain City of issuance
 * @method void setIssuedCountry(string $IssuedCountry) Set City of issuance
 * @method string getExpirationDate() Obtain Expiration date
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date
 * @method string getIssuedDate() Obtain Issue date
 * @method void setIssuedDate(string $IssuedDate) Set Issue date
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 */
class NigeriaDrivingLicense extends AbstractModel
{
    /**
     * @var string Last name
     */
    public $LastName;

    /**
     * @var string Name
     */
    public $FirstName;

    /**
     * @var string Identity card
     */
    public $LicenseNumber;

    /**
     * @var string Age
     */
    public $Age;

    /**
     * @var string Birthday
     */
    public $Birthday;

    /**
     * @var string City of issuance
     */
    public $IssuedCountry;

    /**
     * @var string Expiration date
     */
    public $ExpirationDate;

    /**
     * @var string Issue date
     */
    public $IssuedDate;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @param string $LastName Last name
     * @param string $FirstName Name
     * @param string $LicenseNumber Identity card
     * @param string $Age Age
     * @param string $Birthday Birthday
     * @param string $IssuedCountry City of issuance
     * @param string $ExpirationDate Expiration date
     * @param string $IssuedDate Issue date
     * @param string $Sex Sex
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

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }
    }
}
