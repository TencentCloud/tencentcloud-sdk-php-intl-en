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
 * Philippines driving license
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getLastName() Obtain Last name

 * @method void setLastName(string $LastName) Set Last name

 * @method string getFirstName() Obtain First name
 * @method void setFirstName(string $FirstName) Set First name
 * @method string getMiddleName() Obtain Middle name
 * @method void setMiddleName(string $MiddleName) Set Middle name
 * @method string getNationality() Obtain Nationality
 * @method void setNationality(string $Nationality) Set Nationality
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getAddress() Obtain Address.
 * @method void setAddress(string $Address) Set Address.
 * @method string getLicenseNo() Obtain ID number
 * @method void setLicenseNo(string $LicenseNo) Set ID number
 * @method string getExpiresDate() Obtain Validity period.
 * @method void setExpiresDate(string $ExpiresDate) Set Validity period.
 * @method string getAgencyCode() Obtain Organization code
 * @method void setAgencyCode(string $AgencyCode) Set Organization code
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 */
class PhilippinesDrivingLicense extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Last name

     */
    public $LastName;

    /**
     * @var string First name
     */
    public $FirstName;

    /**
     * @var string Middle name
     */
    public $MiddleName;

    /**
     * @var string Nationality
     */
    public $Nationality;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string Address.
     */
    public $Address;

    /**
     * @var string ID number
     */
    public $LicenseNo;

    /**
     * @var string Validity period.
     */
    public $ExpiresDate;

    /**
     * @var string Organization code
     */
    public $AgencyCode;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @param string $Name Name
     * @param string $LastName Last name

     * @param string $FirstName First name
     * @param string $MiddleName Middle name
     * @param string $Nationality Nationality
     * @param string $Sex Sex
     * @param string $Address Address.
     * @param string $LicenseNo ID number
     * @param string $ExpiresDate Validity period.
     * @param string $AgencyCode Organization code
     * @param string $Birthday Date of birth
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("LicenseNo",$param) and $param["LicenseNo"] !== null) {
            $this->LicenseNo = $param["LicenseNo"];
        }

        if (array_key_exists("ExpiresDate",$param) and $param["ExpiresDate"] !== null) {
            $this->ExpiresDate = $param["ExpiresDate"];
        }

        if (array_key_exists("AgencyCode",$param) and $param["AgencyCode"] !== null) {
            $this->AgencyCode = $param["AgencyCode"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }
    }
}
