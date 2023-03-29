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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The contact information.
 *
 * @method string getCity() Obtain The city name.
 * @method void setCity(string $City) Set The city name.
 * @method string getCountry() Obtain The country or region name.
 * @method void setCountry(string $Country) Set The country or region name.
 * @method string getEmail() Obtain The email address.
 * @method void setEmail(string $Email) Set The email address.
 * @method string getOrganizationName() Obtain The domain registrant.
 * @method void setOrganizationName(string $OrganizationName) Set The domain registrant.
 * @method string getProvince() Obtain The province or state name.
 * @method void setProvince(string $Province) Set The province or state name.
 * @method string getRegistrantName() Obtain The name of the registrant.
 * @method void setRegistrantName(string $RegistrantName) Set The name of the registrant.
 * @method string getRegistrantType() Obtain The registrant type. Valid values: `I` (individual), `E` (organization).
 * @method void setRegistrantType(string $RegistrantType) Set The registrant type. Valid values: `I` (individual), `E` (organization).
 * @method string getStreet() Obtain The detailed address.
 * @method void setStreet(string $Street) Set The detailed address.
 * @method string getTelephone() Obtain The mobile number.
 * @method void setTelephone(string $Telephone) Set The mobile number.
 * @method string getZipCode() Obtain The zip code.
 * @method void setZipCode(string $ZipCode) Set The zip code.
 * @method string getFirstName() Obtain The first name.
 * @method void setFirstName(string $FirstName) Set The first name.
 * @method string getLastName() Obtain The last name.
 * @method void setLastName(string $LastName) Set The last name.
 * @method string getCompanyName() Obtain The company name.
 * @method void setCompanyName(string $CompanyName) Set The company name.
 */
class IntlContactInfo extends AbstractModel
{
    /**
     * @var string The city name.
     */
    public $City;

    /**
     * @var string The country or region name.
     */
    public $Country;

    /**
     * @var string The email address.
     */
    public $Email;

    /**
     * @var string The domain registrant.
     */
    public $OrganizationName;

    /**
     * @var string The province or state name.
     */
    public $Province;

    /**
     * @var string The name of the registrant.
     */
    public $RegistrantName;

    /**
     * @var string The registrant type. Valid values: `I` (individual), `E` (organization).
     */
    public $RegistrantType;

    /**
     * @var string The detailed address.
     */
    public $Street;

    /**
     * @var string The mobile number.
     */
    public $Telephone;

    /**
     * @var string The zip code.
     */
    public $ZipCode;

    /**
     * @var string The first name.
     */
    public $FirstName;

    /**
     * @var string The last name.
     */
    public $LastName;

    /**
     * @var string The company name.
     */
    public $CompanyName;

    /**
     * @param string $City The city name.
     * @param string $Country The country or region name.
     * @param string $Email The email address.
     * @param string $OrganizationName The domain registrant.
     * @param string $Province The province or state name.
     * @param string $RegistrantName The name of the registrant.
     * @param string $RegistrantType The registrant type. Valid values: `I` (individual), `E` (organization).
     * @param string $Street The detailed address.
     * @param string $Telephone The mobile number.
     * @param string $ZipCode The zip code.
     * @param string $FirstName The first name.
     * @param string $LastName The last name.
     * @param string $CompanyName The company name.
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
        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("RegistrantName",$param) and $param["RegistrantName"] !== null) {
            $this->RegistrantName = $param["RegistrantName"];
        }

        if (array_key_exists("RegistrantType",$param) and $param["RegistrantType"] !== null) {
            $this->RegistrantType = $param["RegistrantType"];
        }

        if (array_key_exists("Street",$param) and $param["Street"] !== null) {
            $this->Street = $param["Street"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("ZipCode",$param) and $param["ZipCode"] !== null) {
            $this->ZipCode = $param["ZipCode"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }
    }
}
