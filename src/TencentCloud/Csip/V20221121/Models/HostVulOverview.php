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
 * Host Vulnerability Overview
 *
 * @method integer getUrgentRepairCount() Obtain <p>Number of vulnerabilities that require immediate fix (number of vulnerabilities with VPR rating of URGENT)</p>
 * @method void setUrgentRepairCount(integer $UrgentRepairCount) Set <p>Number of vulnerabilities that require immediate fix (number of vulnerabilities with VPR rating of URGENT)</p>
 * @method integer getDefendHostCount() Obtain <p>Hosts with vulnerability protection enabled</p>
 * @method void setDefendHostCount(integer $DefendHostCount) Set <p>Hosts with vulnerability protection enabled</p>
 * @method integer getTotalHostCount() Obtain <p>Total hosts</p>
 * @method void setTotalHostCount(integer $TotalHostCount) Set <p>Total hosts</p>
 * @method integer getFixedVulCount() Obtain <p>Total number of times vulnerabilities have been fixed</p>
 * @method void setFixedVulCount(integer $FixedVulCount) Set <p>Total number of times vulnerabilities have been fixed</p>
 * @method integer getLinuxVulCount() Obtain <p>Linux software vulnerability count</p>
 * @method void setLinuxVulCount(integer $LinuxVulCount) Set <p>Linux software vulnerability count</p>
 * @method integer getWindowVulCount() Obtain <p>Number of Windows system patches</p>
 * @method void setWindowVulCount(integer $WindowVulCount) Set <p>Number of Windows system patches</p>
 * @method integer getWebCMSVulCount() Obtain <p>Number of Web-CMS vulnerabilities</p>
 * @method void setWebCMSVulCount(integer $WebCMSVulCount) Set <p>Number of Web-CMS vulnerabilities</p>
 * @method integer getAppVulCount() Obtain <p>Number of application vulnerabilities</p>
 * @method void setAppVulCount(integer $AppVulCount) Set <p>Number of application vulnerabilities</p>
 * @method integer getEmergencyCount() Obtain <p>Number of emergency vulnerabilities</p>
 * @method void setEmergencyCount(integer $EmergencyCount) Set <p>Number of emergency vulnerabilities</p>
 * @method integer getVulItemCount() Obtain <p>Total number of vulnerability knowledge base</p>
 * @method void setVulItemCount(integer $VulItemCount) Set <p>Total number of vulnerability knowledge base</p>
 * @method string getLatestScanTime() Obtain <p>Latest scan time.</p><p>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
 * @method void setLatestScanTime(string $LatestScanTime) Set <p>Latest scan time.</p><p>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
 * @method integer getEnableTimingScan() Obtain <p>Whether period scanning is enabled</p><p>Enumeration value:</p><ul><li>1: Enabled</li><li>0: Not enabled</li></ul>
 * @method void setEnableTimingScan(integer $EnableTimingScan) Set <p>Whether period scanning is enabled</p><p>Enumeration value:</p><ul><li>1: Enabled</li><li>0: Not enabled</li></ul>
 * @method integer getCriticalRepairCount() Obtain <p>Number of critical fixes</p>
 * @method void setCriticalRepairCount(integer $CriticalRepairCount) Set <p>Number of critical fixes</p>
 * @method integer getCriticalRepairLinuxVulCount() Obtain <p>Critical Linux vulnerability fix count</p>
 * @method void setCriticalRepairLinuxVulCount(integer $CriticalRepairLinuxVulCount) Set <p>Critical Linux vulnerability fix count</p>
 * @method integer getCriticalRepairAppVulCount() Obtain <p>Severe application vulnerability fix count</p>
 * @method void setCriticalRepairAppVulCount(integer $CriticalRepairAppVulCount) Set <p>Severe application vulnerability fix count</p>
 * @method integer getCriticalRepairWebCMSVulCount() Obtain <p>Critical fix for Web-CMS vulnerabilities</p>
 * @method void setCriticalRepairWebCMSVulCount(integer $CriticalRepairWebCMSVulCount) Set <p>Critical fix for Web-CMS vulnerabilities</p>
 * @method integer getCriticalRepairEmergencyCount() Obtain <p>Critical fix emergency vulnerability count</p>
 * @method void setCriticalRepairEmergencyCount(integer $CriticalRepairEmergencyCount) Set <p>Critical fix emergency vulnerability count</p>
 */
class HostVulOverview extends AbstractModel
{
    /**
     * @var integer <p>Number of vulnerabilities that require immediate fix (number of vulnerabilities with VPR rating of URGENT)</p>
     */
    public $UrgentRepairCount;

    /**
     * @var integer <p>Hosts with vulnerability protection enabled</p>
     */
    public $DefendHostCount;

    /**
     * @var integer <p>Total hosts</p>
     */
    public $TotalHostCount;

    /**
     * @var integer <p>Total number of times vulnerabilities have been fixed</p>
     */
    public $FixedVulCount;

    /**
     * @var integer <p>Linux software vulnerability count</p>
     */
    public $LinuxVulCount;

    /**
     * @var integer <p>Number of Windows system patches</p>
     */
    public $WindowVulCount;

    /**
     * @var integer <p>Number of Web-CMS vulnerabilities</p>
     */
    public $WebCMSVulCount;

    /**
     * @var integer <p>Number of application vulnerabilities</p>
     */
    public $AppVulCount;

    /**
     * @var integer <p>Number of emergency vulnerabilities</p>
     */
    public $EmergencyCount;

    /**
     * @var integer <p>Total number of vulnerability knowledge base</p>
     */
    public $VulItemCount;

    /**
     * @var string <p>Latest scan time.</p><p>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
     */
    public $LatestScanTime;

    /**
     * @var integer <p>Whether period scanning is enabled</p><p>Enumeration value:</p><ul><li>1: Enabled</li><li>0: Not enabled</li></ul>
     */
    public $EnableTimingScan;

    /**
     * @var integer <p>Number of critical fixes</p>
     */
    public $CriticalRepairCount;

    /**
     * @var integer <p>Critical Linux vulnerability fix count</p>
     */
    public $CriticalRepairLinuxVulCount;

    /**
     * @var integer <p>Severe application vulnerability fix count</p>
     */
    public $CriticalRepairAppVulCount;

    /**
     * @var integer <p>Critical fix for Web-CMS vulnerabilities</p>
     */
    public $CriticalRepairWebCMSVulCount;

    /**
     * @var integer <p>Critical fix emergency vulnerability count</p>
     */
    public $CriticalRepairEmergencyCount;

    /**
     * @param integer $UrgentRepairCount <p>Number of vulnerabilities that require immediate fix (number of vulnerabilities with VPR rating of URGENT)</p>
     * @param integer $DefendHostCount <p>Hosts with vulnerability protection enabled</p>
     * @param integer $TotalHostCount <p>Total hosts</p>
     * @param integer $FixedVulCount <p>Total number of times vulnerabilities have been fixed</p>
     * @param integer $LinuxVulCount <p>Linux software vulnerability count</p>
     * @param integer $WindowVulCount <p>Number of Windows system patches</p>
     * @param integer $WebCMSVulCount <p>Number of Web-CMS vulnerabilities</p>
     * @param integer $AppVulCount <p>Number of application vulnerabilities</p>
     * @param integer $EmergencyCount <p>Number of emergency vulnerabilities</p>
     * @param integer $VulItemCount <p>Total number of vulnerability knowledge base</p>
     * @param string $LatestScanTime <p>Latest scan time.</p><p>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
     * @param integer $EnableTimingScan <p>Whether period scanning is enabled</p><p>Enumeration value:</p><ul><li>1: Enabled</li><li>0: Not enabled</li></ul>
     * @param integer $CriticalRepairCount <p>Number of critical fixes</p>
     * @param integer $CriticalRepairLinuxVulCount <p>Critical Linux vulnerability fix count</p>
     * @param integer $CriticalRepairAppVulCount <p>Severe application vulnerability fix count</p>
     * @param integer $CriticalRepairWebCMSVulCount <p>Critical fix for Web-CMS vulnerabilities</p>
     * @param integer $CriticalRepairEmergencyCount <p>Critical fix emergency vulnerability count</p>
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
        if (array_key_exists("UrgentRepairCount",$param) and $param["UrgentRepairCount"] !== null) {
            $this->UrgentRepairCount = $param["UrgentRepairCount"];
        }

        if (array_key_exists("DefendHostCount",$param) and $param["DefendHostCount"] !== null) {
            $this->DefendHostCount = $param["DefendHostCount"];
        }

        if (array_key_exists("TotalHostCount",$param) and $param["TotalHostCount"] !== null) {
            $this->TotalHostCount = $param["TotalHostCount"];
        }

        if (array_key_exists("FixedVulCount",$param) and $param["FixedVulCount"] !== null) {
            $this->FixedVulCount = $param["FixedVulCount"];
        }

        if (array_key_exists("LinuxVulCount",$param) and $param["LinuxVulCount"] !== null) {
            $this->LinuxVulCount = $param["LinuxVulCount"];
        }

        if (array_key_exists("WindowVulCount",$param) and $param["WindowVulCount"] !== null) {
            $this->WindowVulCount = $param["WindowVulCount"];
        }

        if (array_key_exists("WebCMSVulCount",$param) and $param["WebCMSVulCount"] !== null) {
            $this->WebCMSVulCount = $param["WebCMSVulCount"];
        }

        if (array_key_exists("AppVulCount",$param) and $param["AppVulCount"] !== null) {
            $this->AppVulCount = $param["AppVulCount"];
        }

        if (array_key_exists("EmergencyCount",$param) and $param["EmergencyCount"] !== null) {
            $this->EmergencyCount = $param["EmergencyCount"];
        }

        if (array_key_exists("VulItemCount",$param) and $param["VulItemCount"] !== null) {
            $this->VulItemCount = $param["VulItemCount"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("EnableTimingScan",$param) and $param["EnableTimingScan"] !== null) {
            $this->EnableTimingScan = $param["EnableTimingScan"];
        }

        if (array_key_exists("CriticalRepairCount",$param) and $param["CriticalRepairCount"] !== null) {
            $this->CriticalRepairCount = $param["CriticalRepairCount"];
        }

        if (array_key_exists("CriticalRepairLinuxVulCount",$param) and $param["CriticalRepairLinuxVulCount"] !== null) {
            $this->CriticalRepairLinuxVulCount = $param["CriticalRepairLinuxVulCount"];
        }

        if (array_key_exists("CriticalRepairAppVulCount",$param) and $param["CriticalRepairAppVulCount"] !== null) {
            $this->CriticalRepairAppVulCount = $param["CriticalRepairAppVulCount"];
        }

        if (array_key_exists("CriticalRepairWebCMSVulCount",$param) and $param["CriticalRepairWebCMSVulCount"] !== null) {
            $this->CriticalRepairWebCMSVulCount = $param["CriticalRepairWebCMSVulCount"];
        }

        if (array_key_exists("CriticalRepairEmergencyCount",$param) and $param["CriticalRepairEmergencyCount"] !== null) {
            $this->CriticalRepairEmergencyCount = $param["CriticalRepairEmergencyCount"];
        }
    }
}
