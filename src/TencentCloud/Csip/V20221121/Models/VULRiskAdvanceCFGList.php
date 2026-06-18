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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of advanced vulnerability scan configurations
 *
 * @method string getRiskId() Obtain Risk ID
 * @method void setRiskId(string $RiskId) Set Risk ID
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getRiskLevel() Obtain Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
 * @method void setRiskLevel(string $RiskLevel) Set Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
 * @method string getCheckFrom() Obtain Source of the check task
 * @method void setCheckFrom(string $CheckFrom) Set Source of the check task
 * @method integer getEnable() Obtain Enable/Disable. 1-Enable; 0-Disable.
 * @method void setEnable(integer $Enable) Set Enable/Disable. 1-Enable; 0-Disable.
 * @method string getVULType() Obtain Risk type.
 * @method void setVULType(string $VULType) Set Risk type.
 * @method string getImpactVersion() Obtain Affected versions
 * @method void setImpactVersion(string $ImpactVersion) Set Affected versions
 * @method string getCVE() Obtain CVE
 * @method void setCVE(string $CVE) Set CVE
 * @method array getVULTag() Obtain Vulnerability tag
 * @method void setVULTag(array $VULTag) Set Vulnerability tag
 * @method array getFixMethod() Obtain Repair method
 * @method void setFixMethod(array $FixMethod) Set Repair method
 * @method string getReleaseTime() Obtain Disclosure time
 * @method void setReleaseTime(string $ReleaseTime) Set Disclosure time
 * @method integer getEMGCVulType() Obtain Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method string getVULDescribe() Obtain Vulnerability description
 * @method void setVULDescribe(string $VULDescribe) Set Vulnerability description
 * @method string getImpactComponent() Obtain Affected component
 * @method void setImpactComponent(string $ImpactComponent) Set Affected component
 * @method string getPayload() Obtain Vulnerability Payload
 * @method void setPayload(string $Payload) Set Vulnerability Payload
 * @method string getReferences() Obtain Technology reference
 * @method void setReferences(string $References) Set Technology reference
 * @method string getCVSS() Obtain CVSS Score
 * @method void setCVSS(string $CVSS) Set CVSS Score
 * @method string getAttackHeat() Obtain Attack intensity
 * @method void setAttackHeat(string $AttackHeat) Set Attack intensity
 * @method array getServiceSupport() Obtain Security Product Support Status
 * @method void setServiceSupport(array $ServiceSupport) Set Security Product Support Status
 * @method string getRecentScanTime() Obtain Latest detection time
 * @method void setRecentScanTime(string $RecentScanTime) Set Latest detection time
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
     * @var string Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
     */
    public $RiskLevel;

    /**
     * @var string Source of the check task
     */
    public $CheckFrom;

    /**
     * @var integer Enable/Disable. 1-Enable; 0-Disable.
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
     * @var string CVE
     */
    public $CVE;

    /**
     * @var array Vulnerability tag
     */
    public $VULTag;

    /**
     * @var array Repair method
     */
    public $FixMethod;

    /**
     * @var string Disclosure time
     */
    public $ReleaseTime;

    /**
     * @var integer Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     */
    public $EMGCVulType;

    /**
     * @var string Vulnerability description
     */
    public $VULDescribe;

    /**
     * @var string Affected component
     */
    public $ImpactComponent;

    /**
     * @var string Vulnerability Payload
     */
    public $Payload;

    /**
     * @var string Technology reference
     */
    public $References;

    /**
     * @var string CVSS Score
     */
    public $CVSS;

    /**
     * @var string Attack intensity
     */
    public $AttackHeat;

    /**
     * @var array Security Product Support Status
     */
    public $ServiceSupport;

    /**
     * @var string Latest detection time
     */
    public $RecentScanTime;

    /**
     * @param string $RiskId Risk ID
     * @param string $VULName Vulnerability name
     * @param string $RiskLevel Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
     * @param string $CheckFrom Source of the check task
     * @param integer $Enable Enable/Disable. 1-Enable; 0-Disable.
     * @param string $VULType Risk type.
     * @param string $ImpactVersion Affected versions
     * @param string $CVE CVE
     * @param array $VULTag Vulnerability tag
     * @param array $FixMethod Repair method
     * @param string $ReleaseTime Disclosure time
     * @param integer $EMGCVulType Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     * @param string $VULDescribe Vulnerability description
     * @param string $ImpactComponent Affected component
     * @param string $Payload Vulnerability Payload
     * @param string $References Technology reference
     * @param string $CVSS CVSS Score
     * @param string $AttackHeat Attack intensity
     * @param array $ServiceSupport Security Product Support Status
     * @param string $RecentScanTime Latest detection time
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

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = $param["AttackHeat"];
        }

        if (array_key_exists("ServiceSupport",$param) and $param["ServiceSupport"] !== null) {
            $this->ServiceSupport = [];
            foreach ($param["ServiceSupport"] as $key => $value){
                $obj = new ServiceSupport();
                $obj->deserialize($value);
                array_push($this->ServiceSupport, $obj);
            }
        }

        if (array_key_exists("RecentScanTime",$param) and $param["RecentScanTime"] !== null) {
            $this->RecentScanTime = $param["RecentScanTime"];
        }
    }
}
