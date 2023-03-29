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
 * The technical contact.
 *
 * @method string getFirstName() Obtain The first name.
 * @method void setFirstName(string $FirstName) Set The first name.
 * @method string getLastName() Obtain The last name.
 * @method void setLastName(string $LastName) Set The last name.
 * @method string getCountry() Obtain The country or region name, such as `CN`.
 * @method void setCountry(string $Country) Set The country or region name, such as `CN`.
 * @method string getProvince() Obtain The province or state name.
 * @method void setProvince(string $Province) Set The province or state name.
 * @method string getCity() Obtain The city name.
 * @method void setCity(string $City) Set The city name.
 * @method string getAddressLine() Obtain The address line 1.
 * @method void setAddressLine(string $AddressLine) Set The address line 1.
 * @method string getZipCode() Obtain The zip code.
 * @method void setZipCode(string $ZipCode) Set The zip code.
 * @method string getEmail() Obtain The email address.
 * @method void setEmail(string $Email) Set The email address.
 * @method string getPhone() Obtain The mobile number, such as `+86.13600000000`.
 * @method void setPhone(string $Phone) Set The mobile number, such as `+86.13600000000`.
 * @method string getCompanyName() Obtain The company or organization name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompanyName(string $CompanyName) Set The company or organization name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobTitle() Obtain The job title.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobTitle(string $JobTitle) Set The job title.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddressLineTwo() Obtain The address line 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddressLineTwo(string $AddressLineTwo) Set The address line 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFax() Obtain The fax number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFax(string $Fax) Set The fax number.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TechnicalContact extends AbstractModel
{
    /**
     * @var string The first name.
     */
    public $FirstName;

    /**
     * @var string The last name.
     */
    public $LastName;

    /**
     * @var string The country or region name, such as `CN`.
     */
    public $Country;

    /**
     * @var string The province or state name.
     */
    public $Province;

    /**
     * @var string The city name.
     */
    public $City;

    /**
     * @var string The address line 1.
     */
    public $AddressLine;

    /**
     * @var string The zip code.
     */
    public $ZipCode;

    /**
     * @var string The email address.
     */
    public $Email;

    /**
     * @var string The mobile number, such as `+86.13600000000`.
     */
    public $Phone;

    /**
     * @var string The company or organization name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompanyName;

    /**
     * @var string The job title.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobTitle;

    /**
     * @var string The address line 2.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddressLineTwo;

    /**
     * @var string The fax number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fax;

    /**
     * @param string $FirstName The first name.
     * @param string $LastName The last name.
     * @param string $Country The country or region name, such as `CN`.
     * @param string $Province The province or state name.
     * @param string $City The city name.
     * @param string $AddressLine The address line 1.
     * @param string $ZipCode The zip code.
     * @param string $Email The email address.
     * @param string $Phone The mobile number, such as `+86.13600000000`.
     * @param string $CompanyName The company or organization name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobTitle The job title.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddressLineTwo The address line 2.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Fax The fax number.
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
        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("AddressLine",$param) and $param["AddressLine"] !== null) {
            $this->AddressLine = $param["AddressLine"];
        }

        if (array_key_exists("ZipCode",$param) and $param["ZipCode"] !== null) {
            $this->ZipCode = $param["ZipCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("JobTitle",$param) and $param["JobTitle"] !== null) {
            $this->JobTitle = $param["JobTitle"];
        }

        if (array_key_exists("AddressLineTwo",$param) and $param["AddressLineTwo"] !== null) {
            $this->AddressLineTwo = $param["AddressLineTwo"];
        }

        if (array_key_exists("Fax",$param) and $param["Fax"] !== null) {
            $this->Fax = $param["Fax"];
        }
    }
}
