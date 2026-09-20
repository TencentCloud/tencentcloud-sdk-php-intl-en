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
 * Philippines TinID
 *
 * @method string getLicenseNumber() Obtain Code
 * @method void setLicenseNumber(string $LicenseNumber) Set Code
 * @method string getFullName() Obtain Name
 * @method void setFullName(string $FullName) Set Name
 * @method string getAddress() Obtain Address.
 * @method void setAddress(string $Address) Set Address.
 * @method string getBirthday() Obtain Birthday
 * @method void setBirthday(string $Birthday) Set Birthday
 * @method string getIssueDate() Obtain Issue date
 * @method void setIssueDate(string $IssueDate) Set Issue date
 */
class PhilippinesTinID extends AbstractModel
{
    /**
     * @var string Code
     */
    public $LicenseNumber;

    /**
     * @var string Name
     */
    public $FullName;

    /**
     * @var string Address.
     */
    public $Address;

    /**
     * @var string Birthday
     */
    public $Birthday;

    /**
     * @var string Issue date
     */
    public $IssueDate;

    /**
     * @param string $LicenseNumber Code
     * @param string $FullName Name
     * @param string $Address Address.
     * @param string $Birthday Birthday
     * @param string $IssueDate Issue date
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

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }
    }
}
