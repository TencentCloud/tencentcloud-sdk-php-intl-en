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
 * AML Person object
 *
 * @method string getFullName() Obtain <p>Full name (either this or LastName is required). If FullName is filled, FirstName/MiddleName/LastName cannot be filled</p>
 * @method void setFullName(string $FullName) Set <p>Full name (either this or LastName is required). If FullName is filled, FirstName/MiddleName/LastName cannot be filled</p>
 * @method string getLastName() Obtain <p>name (either this or FullName is required)</p>
 * @method void setLastName(string $LastName) Set <p>name (either this or FullName is required)</p>
 * @method string getFirstName() Obtain <p>First name (optional)</p>
 * @method void setFirstName(string $FirstName) Set <p>First name (optional)</p>
 * @method string getMiddleName() Obtain <p>Middle name (optional)</p>
 * @method void setMiddleName(string $MiddleName) Set <p>Middle name (optional)</p>
 * @method string getIdentityNumber() Obtain <p>ID number (Option)</p>
 * @method void setIdentityNumber(string $IdentityNumber) Set <p>ID number (Option)</p>
 * @method string getDateOfBirth() Obtain <p>Date of birth, format: YYYY-MM-DD, YYYY-MM, YYYY (Year-Month-Day separated by -)</p><p>Parameter format: YYYY-MM-DD</p>
 * @method void setDateOfBirth(string $DateOfBirth) Set <p>Date of birth, format: YYYY-MM-DD, YYYY-MM, YYYY (Year-Month-Day separated by -)</p><p>Parameter format: YYYY-MM-DD</p>
 * @method string getGender() Obtain <p>Gender: MALE / FEMALE / OTHER / NOT_KNOWN</p><p>Enumeration values:</p><ul><li>MALE: male</li><li>FEMALE: female</li><li>OTHER: OTHER</li><li>NOT_KNOWN: NOT_KNOWN</li></ul>
 * @method void setGender(string $Gender) Set <p>Gender: MALE / FEMALE / OTHER / NOT_KNOWN</p><p>Enumeration values:</p><ul><li>MALE: male</li><li>FEMALE: female</li><li>OTHER: OTHER</li><li>NOT_KNOWN: NOT_KNOWN</li></ul>
 * @method string getAddress() Obtain <p>Address</p>
 * @method void setAddress(string $Address) Set <p>Address</p>
 * @method string getNationality() Obtain <p>Nationality, ISO 3166-1 alpha-2 country code (Option)</p>
 * @method void setNationality(string $Nationality) Set <p>Nationality, ISO 3166-1 alpha-2 country code (Option)</p>
 * @method string getCountry() Obtain <p>Country of residence, ISO 3166-1 alpha-2 country code (optional)</p>
 * @method void setCountry(string $Country) Set <p>Country of residence, ISO 3166-1 alpha-2 country code (optional)</p>
 */
class Person extends AbstractModel
{
    /**
     * @var string <p>Full name (either this or LastName is required). If FullName is filled, FirstName/MiddleName/LastName cannot be filled</p>
     */
    public $FullName;

    /**
     * @var string <p>name (either this or FullName is required)</p>
     */
    public $LastName;

    /**
     * @var string <p>First name (optional)</p>
     */
    public $FirstName;

    /**
     * @var string <p>Middle name (optional)</p>
     */
    public $MiddleName;

    /**
     * @var string <p>ID number (Option)</p>
     */
    public $IdentityNumber;

    /**
     * @var string <p>Date of birth, format: YYYY-MM-DD, YYYY-MM, YYYY (Year-Month-Day separated by -)</p><p>Parameter format: YYYY-MM-DD</p>
     */
    public $DateOfBirth;

    /**
     * @var string <p>Gender: MALE / FEMALE / OTHER / NOT_KNOWN</p><p>Enumeration values:</p><ul><li>MALE: male</li><li>FEMALE: female</li><li>OTHER: OTHER</li><li>NOT_KNOWN: NOT_KNOWN</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>Address</p>
     */
    public $Address;

    /**
     * @var string <p>Nationality, ISO 3166-1 alpha-2 country code (Option)</p>
     */
    public $Nationality;

    /**
     * @var string <p>Country of residence, ISO 3166-1 alpha-2 country code (optional)</p>
     */
    public $Country;

    /**
     * @param string $FullName <p>Full name (either this or LastName is required). If FullName is filled, FirstName/MiddleName/LastName cannot be filled</p>
     * @param string $LastName <p>name (either this or FullName is required)</p>
     * @param string $FirstName <p>First name (optional)</p>
     * @param string $MiddleName <p>Middle name (optional)</p>
     * @param string $IdentityNumber <p>ID number (Option)</p>
     * @param string $DateOfBirth <p>Date of birth, format: YYYY-MM-DD, YYYY-MM, YYYY (Year-Month-Day separated by -)</p><p>Parameter format: YYYY-MM-DD</p>
     * @param string $Gender <p>Gender: MALE / FEMALE / OTHER / NOT_KNOWN</p><p>Enumeration values:</p><ul><li>MALE: male</li><li>FEMALE: female</li><li>OTHER: OTHER</li><li>NOT_KNOWN: NOT_KNOWN</li></ul>
     * @param string $Address <p>Address</p>
     * @param string $Nationality <p>Nationality, ISO 3166-1 alpha-2 country code (Option)</p>
     * @param string $Country <p>Country of residence, ISO 3166-1 alpha-2 country code (optional)</p>
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
        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("MiddleName",$param) and $param["MiddleName"] !== null) {
            $this->MiddleName = $param["MiddleName"];
        }

        if (array_key_exists("IdentityNumber",$param) and $param["IdentityNumber"] !== null) {
            $this->IdentityNumber = $param["IdentityNumber"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }
    }
}
