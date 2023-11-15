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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of advanced vulnerability scan configurations
 *
 * @method string getRiskId() Obtain Risk ID
 * @method void setRiskId(string $RiskId) Set Risk ID
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(string $RiskLevel) Set Risk level
 * @method string getCheckFrom() Obtain Source of the check task
 * @method void setCheckFrom(string $CheckFrom) Set Source of the check task
 * @method integer getEnable() Obtain Whether it's enabled. `1`: Enable; `0`: Disabled
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEnable(integer $Enable) Set Whether it's enabled. `1`: Enable; `0`: Disabled
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVULType() Obtain Risk type.
 * @method void setVULType(string $VULType) Set Risk type.
 * @method string getImpactVersion() Obtain Affected versions
 * @method void setImpactVersion(string $ImpactVersion) Set Affected versions
 * @method string getCVE() Obtain CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCVE(string $CVE) Set CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getVULTag() Obtain Vulnerability tag
 * @method void setVULTag(array $VULTag) Set Vulnerability tag
 * @method array getFixMethod() Obtain Fix solution
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setFixMethod(array $FixMethod) Set Fix solution
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getReleaseTime() Obtain Disclosure time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setReleaseTime(string $ReleaseTime) Set Disclosure time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getEMGCVulType() Obtain Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVULDescribe() Obtain Vulnerability description
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVULDescribe(string $VULDescribe) Set Vulnerability description
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getImpactComponent() Obtain Affected components
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setImpactComponent(string $ImpactComponent) Set Affected components
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class VULRiskAdvanceCFGList extends AbstractModel
{
    /**
     * @var string Risk ID
     */
    public $RiskId;

    /**
     * @var string Vulnerability name
     */
    public $VULName;

    /**
     * @var string Risk level
     */
    public $RiskLevel;

    /**
     * @var string Source of the check task
     */
    public $CheckFrom;

    /**
     * @var integer Whether it's enabled. `1`: Enable; `0`: Disabled
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var string Risk type.
     */
    public $VULType;

    /**
     * @var string Affected versions
     */
    public $ImpactVersion;

    /**
     * @var string CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CVE;

    /**
     * @var array Vulnerability tag
     */
    public $VULTag;

    /**
     * @var array Fix solution
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $FixMethod;

    /**
     * @var string Disclosure time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ReleaseTime;

    /**
     * @var integer Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $EMGCVulType;

    /**
     * @var string Vulnerability description
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VULDescribe;

    /**
     * @var string Affected components
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ImpactComponent;

    /**
     * @param string $RiskId Risk ID
     * @param string $VULName Vulnerability name
     * @param string $RiskLevel Risk level
     * @param string $CheckFrom Source of the check task
     * @param integer $Enable Whether it's enabled. `1`: Enable; `0`: Disabled
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VULType Risk type.
     * @param string $ImpactVersion Affected versions
     * @param string $CVE CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $VULTag Vulnerability tag
     * @param array $FixMethod Fix solution
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ReleaseTime Disclosure time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $EMGCVulType Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VULDescribe Vulnerability description
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ImpactComponent Affected components
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CheckFrom",$param) and $param["CheckFrom"] !== null) {
            $this->CheckFrom = $param["CheckFrom"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("ImpactVersion",$param) and $param["ImpactVersion"] !== null) {
            $this->ImpactVersion = $param["ImpactVersion"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("VULTag",$param) and $param["VULTag"] !== null) {
            $this->VULTag = $param["VULTag"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("VULDescribe",$param) and $param["VULDescribe"] !== null) {
            $this->VULDescribe = $param["VULDescribe"];
        }

        if (array_key_exists("ImpactComponent",$param) and $param["ImpactComponent"] !== null) {
            $this->ImpactComponent = $param["ImpactComponent"];
        }
    }
}
