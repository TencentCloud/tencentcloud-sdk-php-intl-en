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
 * Fixed vulnerability information
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getLevel() Obtain Vulnerability level
Enumeration values:
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
 * @method void setLevel(string $Level) Set Vulnerability level
Enumeration values:
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
 * @method VPRRatingInfo getVRPRatingInfo() Obtain VPR rating information (including rating result, description, and phased score), consistent with DescribeHostVulRiskList
 * @method void setVRPRatingInfo(VPRRatingInfo $VRPRatingInfo) Set VPR rating information (including rating result, description, and phased score), consistent with DescribeHostVulRiskList
 * @method string getVulCategory() Obtain Vulnerability Type
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method void setVulCategory(string $VulCategory) Set Vulnerability Type
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method string getCveId() Obtain CVE id
 * @method void setCveId(string $CveId) Set CVE id
 * @method string getMachineName() Obtain Repair the host name
 * @method void setMachineName(string $MachineName) Set Repair the host name
 * @method string getInstanceId() Obtain Repair the host instance ID
 * @method void setInstanceId(string $InstanceId) Set Repair the host instance ID
 * @method integer getComponentCount() Obtain Associated component & number of paths
 * @method void setComponentCount(integer $ComponentCount) Set Associated component & number of paths
 * @method array getComponents() Obtain Associated component & path list
 * @method void setComponents(array $Components) Set Associated component & path list
 * @method string getLatestFixTime() Obtain Last repair time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setLatestFixTime(string $LatestFixTime) Set Last repair time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 */
class VulFixedItem extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Vulnerability level
Enumeration values:
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
     */
    public $Level;

    /**
     * @var VPRRatingInfo VPR rating information (including rating result, description, and phased score), consistent with DescribeHostVulRiskList
     */
    public $VRPRatingInfo;

    /**
     * @var string Vulnerability Type
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     */
    public $VulCategory;

    /**
     * @var string CVE id
     */
    public $CveId;

    /**
     * @var string Repair the host name
     */
    public $MachineName;

    /**
     * @var string Repair the host instance ID
     */
    public $InstanceId;

    /**
     * @var integer Associated component & number of paths
     */
    public $ComponentCount;

    /**
     * @var array Associated component & path list
     */
    public $Components;

    /**
     * @var string Last repair time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $LatestFixTime;

    /**
     * @param integer $VulId Vulnerability ID
     * @param string $VulName Vulnerability name
     * @param string $Level Vulnerability level
Enumeration values:
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
     * @param VPRRatingInfo $VRPRatingInfo VPR rating information (including rating result, description, and phased score), consistent with DescribeHostVulRiskList
     * @param string $VulCategory Vulnerability Type
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     * @param string $CveId CVE id
     * @param string $MachineName Repair the host name
     * @param string $InstanceId Repair the host instance ID
     * @param integer $ComponentCount Associated component & number of paths
     * @param array $Components Associated component & path list
     * @param string $LatestFixTime Last repair time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
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

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VRPRatingInfo",$param) and $param["VRPRatingInfo"] !== null) {
            $this->VRPRatingInfo = new VPRRatingInfo();
            $this->VRPRatingInfo->deserialize($param["VRPRatingInfo"]);
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ComponentCount",$param) and $param["ComponentCount"] !== null) {
            $this->ComponentCount = $param["ComponentCount"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }
    }
}
