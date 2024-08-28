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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the vulnerability database list
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method integer getLevel() Obtain Vulnerability level
 * @method void setLevel(integer $Level) Set Vulnerability level
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method string getCveId() Obtain CVE ID
 * @method void setCveId(string $CveId) Set CVE ID
 * @method integer getVulCategory() Obtain 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities.
 * @method void setVulCategory(integer $VulCategory) Set 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities.
 * @method string getPublishDate() Obtain Release time
 * @method void setPublishDate(string $PublishDate) Set Release time
 * @method integer getMethod() Obtain Vulnerability Detection Method: 0 - Version Comparison, 1 - POC Verification
 * @method void setMethod(integer $Method) Set Vulnerability Detection Method: 0 - Version Comparison, 1 - POC Verification
 * @method integer getAttackLevel() Obtain Vulnerability attack level
 * @method void setAttackLevel(integer $AttackLevel) Set Vulnerability attack level
 * @method integer getFixSwitch() Obtain Whether automatic vulnerability fixing is supported
0: not supported on Windows/Linux; 1: supported on Windows/Linux; 2: supported on Linux only; 3: supported on Windows only.
 * @method void setFixSwitch(integer $FixSwitch) Set Whether automatic vulnerability fixing is supported
0: not supported on Windows/Linux; 1: supported on Windows/Linux; 2: supported on Linux only; 3: supported on Windows only.
 * @method integer getSupportDefense() Obtain Whether defense against vulnerabilities is supported
0: not supported; 1: supported.
 * @method void setSupportDefense(integer $SupportDefense) Set Whether defense against vulnerabilities is supported
0: not supported; 1: supported.
 */
class VulStoreListInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var integer Vulnerability level
     */
    public $Level;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var string CVE ID
     */
    public $CveId;

    /**
     * @var integer 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities.
     */
    public $VulCategory;

    /**
     * @var string Release time
     */
    public $PublishDate;

    /**
     * @var integer Vulnerability Detection Method: 0 - Version Comparison, 1 - POC Verification
     */
    public $Method;

    /**
     * @var integer Vulnerability attack level
     */
    public $AttackLevel;

    /**
     * @var integer Whether automatic vulnerability fixing is supported
0: not supported on Windows/Linux; 1: supported on Windows/Linux; 2: supported on Linux only; 3: supported on Windows only.
     */
    public $FixSwitch;

    /**
     * @var integer Whether defense against vulnerabilities is supported
0: not supported; 1: supported.
     */
    public $SupportDefense;

    /**
     * @param integer $VulId Vulnerability ID
     * @param integer $Level Vulnerability level
     * @param string $Name Vulnerability name
     * @param string $CveId CVE ID
     * @param integer $VulCategory 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities.
     * @param string $PublishDate Release time
     * @param integer $Method Vulnerability Detection Method: 0 - Version Comparison, 1 - POC Verification
     * @param integer $AttackLevel Vulnerability attack level
     * @param integer $FixSwitch Whether automatic vulnerability fixing is supported
0: not supported on Windows/Linux; 1: supported on Windows/Linux; 2: supported on Linux only; 3: supported on Windows only.
     * @param integer $SupportDefense Whether defense against vulnerabilities is supported
0: not supported; 1: supported.
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("PublishDate",$param) and $param["PublishDate"] !== null) {
            $this->PublishDate = $param["PublishDate"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }

        if (array_key_exists("SupportDefense",$param) and $param["SupportDefense"] !== null) {
            $this->SupportDefense = $param["SupportDefense"];
        }
    }
}
