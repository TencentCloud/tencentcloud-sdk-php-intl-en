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
 * Hong Kong (China) ID card.
 *
 * @method string getChineseName() Obtain Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

 * @method void setChineseName(string $ChineseName) Set Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

 * @method string getFullName() Obtain English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
 * @method void setFullName(string $FullName) Set English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
 * @method string getRegistrationNumber() Obtain Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
 * @method string getPermanent() Obtain Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermanent(string $Permanent) Set Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
 * @method void setLicenseNumber(string $LicenseNumber) Set ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
 * @method string getSymbol() Obtain Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSymbol(string $Symbol) Set Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedDate() Obtain The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedDate(string $IssuedDate) Set The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurrentIssueDate() Obtain The current date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentIssueDate(string $CurrentIssueDate) Set The current date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NormalHKIDCard extends AbstractModel
{
    /**
     * @var string Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

     */
    public $ChineseName;

    /**
     * @var string English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
     */
    public $FullName;

    /**
     * @var string Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistrationNumber;

    /**
     * @var string Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
     */
    public $Birthday;

    /**
     * @var string Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Permanent;

    /**
     * @var string ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
     */
    public $LicenseNumber;

    /**
     * @var string Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Symbol;

    /**
     * @var string The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedDate;

    /**
     * @var string The current date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentIssueDate;

    /**
     * @param string $ChineseName Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

     * @param string $FullName English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
     * @param string $RegistrationNumber Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
     * @param string $Permanent Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
     * @param string $Symbol Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedDate The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurrentIssueDate The current date of issue
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
        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Permanent",$param) and $param["Permanent"] !== null) {
            $this->Permanent = $param["Permanent"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }
    }
}
