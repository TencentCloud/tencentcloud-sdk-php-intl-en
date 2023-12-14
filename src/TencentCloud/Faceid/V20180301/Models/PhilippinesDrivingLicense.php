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
 * Philippines driving license
 *
 * @method string getName() Obtain Full Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Full Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastName() Obtain Last name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Last name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstName() Obtain First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMiddleName() Obtain Middle name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiddleName(string $MiddleName) Set Middle name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationality(string $Nationality) Set Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNo() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNo(string $LicenseNo) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpiresDate() Obtain Date of expiry
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpiresDate(string $ExpiresDate) Set Date of expiry
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAgencyCode() Obtain Agency code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAgencyCode(string $AgencyCode) Set Agency code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PhilippinesDrivingLicense extends AbstractModel
{
    /**
     * @var string Full Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

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
     * @var string Middle name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiddleName;

    /**
     * @var string Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nationality;

    /**
     * @var string Gender
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNo;

    /**
     * @var string Date of expiry
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpiresDate;

    /**
     * @var string Agency code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AgencyCode;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @param string $Name Full Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastName Last name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstName First name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MiddleName Middle name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNo License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpiresDate Date of expiry
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AgencyCode Agency code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
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
