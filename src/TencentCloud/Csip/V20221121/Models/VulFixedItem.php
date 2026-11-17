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
 * Information of fixed vulnerabilities
 *
 * @method integer getVulId() Obtain <p>Vulnerability ID</p>
 * @method void setVulId(integer $VulId) Set <p>Vulnerability ID</p>
 * @method string getVulName() Obtain <p>Vulnerability name</p>
 * @method void setVulName(string $VulName) Set <p>Vulnerability name</p>
 * @method string getLevel() Obtain <p>Vulnerability level<br>Enumeration values:<br>LOW: Low risk<br>MEDIUM: Medium risk<br>HIGH: High risk<br>CRITICAL: Critical</p>
 * @method void setLevel(string $Level) Set <p>Vulnerability level<br>Enumeration values:<br>LOW: Low risk<br>MEDIUM: Medium risk<br>HIGH: High risk<br>CRITICAL: Critical</p>
 * @method VPRRatingInfo getVRPRatingInfo() Obtain <p>VPR rating information (including rating result, description, and staged score), consistent with DescribeHostVulRiskList</p>
 * @method void setVRPRatingInfo(VPRRatingInfo $VRPRatingInfo) Set <p>VPR rating information (including rating result, description, and staged score), consistent with DescribeHostVulRiskList</p>
 * @method string getVulCategory() Obtain <p>Vulnerability type<br>Enumeration values:<br>LINUX: Linux software vulnerability<br>WINDOWS: Windows system patch vulnerability<br>WEB_CMS: Web-CMS vulnerability<br>APPLICATION: Application vulnerability<br>EMERGENCY: Urgent vulnerability</p>
 * @method void setVulCategory(string $VulCategory) Set <p>Vulnerability type<br>Enumeration values:<br>LINUX: Linux software vulnerability<br>WINDOWS: Windows system patch vulnerability<br>WEB_CMS: Web-CMS vulnerability<br>APPLICATION: Application vulnerability<br>EMERGENCY: Urgent vulnerability</p>
 * @method string getCveId() Obtain <p>CVE id</p>
 * @method void setCveId(string $CveId) Set <p>CVE id</p>
 * @method string getMachineName() Obtain <p>Repair host name</p>
 * @method void setMachineName(string $MachineName) Set <p>Repair host name</p>
 * @method string getInstanceId() Obtain <p>Repair host instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Repair host instance ID</p>
 * @method integer getComponentCount() Obtain <p>Associated component &amp; number of paths</p>
 * @method void setComponentCount(integer $ComponentCount) Set <p>Associated component &amp; number of paths</p>
 * @method array getComponents() Obtain <p>Associated component &amp; path list</p>
 * @method void setComponents(array $Components) Set <p>Associated component &amp; path list</p>
 * @method string getLatestFixTime() Obtain <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setLatestFixTime(string $LatestFixTime) Set <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method VPRExplainInfo getVPRExplainInfo() Obtain <p>VPR rating basis</p>
 * @method void setVPRExplainInfo(VPRExplainInfo $VPRExplainInfo) Set <p>VPR rating basis</p>
 */
class VulFixedItem extends AbstractModel
{
    /**
     * @var integer <p>Vulnerability ID</p>
     */
    public $VulId;

    /**
     * @var string <p>Vulnerability name</p>
     */
    public $VulName;

    /**
     * @var string <p>Vulnerability level<br>Enumeration values:<br>LOW: Low risk<br>MEDIUM: Medium risk<br>HIGH: High risk<br>CRITICAL: Critical</p>
     */
    public $Level;

    /**
     * @var VPRRatingInfo <p>VPR rating information (including rating result, description, and staged score), consistent with DescribeHostVulRiskList</p>
     */
    public $VRPRatingInfo;

    /**
     * @var string <p>Vulnerability type<br>Enumeration values:<br>LINUX: Linux software vulnerability<br>WINDOWS: Windows system patch vulnerability<br>WEB_CMS: Web-CMS vulnerability<br>APPLICATION: Application vulnerability<br>EMERGENCY: Urgent vulnerability</p>
     */
    public $VulCategory;

    /**
     * @var string <p>CVE id</p>
     */
    public $CveId;

    /**
     * @var string <p>Repair host name</p>
     */
    public $MachineName;

    /**
     * @var string <p>Repair host instance ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Associated component &amp; number of paths</p>
     */
    public $ComponentCount;

    /**
     * @var array <p>Associated component &amp; path list</p>
     */
    public $Components;

    /**
     * @var string <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $LatestFixTime;

    /**
     * @var VPRExplainInfo <p>VPR rating basis</p>
     */
    public $VPRExplainInfo;

    /**
     * @param integer $VulId <p>Vulnerability ID</p>
     * @param string $VulName <p>Vulnerability name</p>
     * @param string $Level <p>Vulnerability level<br>Enumeration values:<br>LOW: Low risk<br>MEDIUM: Medium risk<br>HIGH: High risk<br>CRITICAL: Critical</p>
     * @param VPRRatingInfo $VRPRatingInfo <p>VPR rating information (including rating result, description, and staged score), consistent with DescribeHostVulRiskList</p>
     * @param string $VulCategory <p>Vulnerability type<br>Enumeration values:<br>LINUX: Linux software vulnerability<br>WINDOWS: Windows system patch vulnerability<br>WEB_CMS: Web-CMS vulnerability<br>APPLICATION: Application vulnerability<br>EMERGENCY: Urgent vulnerability</p>
     * @param string $CveId <p>CVE id</p>
     * @param string $MachineName <p>Repair host name</p>
     * @param string $InstanceId <p>Repair host instance ID</p>
     * @param integer $ComponentCount <p>Associated component &amp; number of paths</p>
     * @param array $Components <p>Associated component &amp; path list</p>
     * @param string $LatestFixTime <p>Last repair time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param VPRExplainInfo $VPRExplainInfo <p>VPR rating basis</p>
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

        if (array_key_exists("VPRExplainInfo",$param) and $param["VPRExplainInfo"] !== null) {
            $this->VPRExplainInfo = new VPRExplainInfo();
            $this->VPRExplainInfo->deserialize($param["VPRExplainInfo"]);
        }
    }
}
