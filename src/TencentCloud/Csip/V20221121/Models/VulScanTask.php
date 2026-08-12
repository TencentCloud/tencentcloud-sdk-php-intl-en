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
 * Vulnerability scanning task history
 *
 * @method integer getId() Obtain <p>Task ID.</p>
 * @method void setId(integer $Id) Set <p>Task ID.</p>
 * @method string getJobId() Obtain <p>Task ID.</p>
 * @method void setJobId(string $JobId) Set <p>Task ID.</p>
 * @method integer getAppId() Obtain <p>Associated user appid of the task</p>
 * @method void setAppId(integer $AppId) Set <p>Associated user appid of the task</p>
 * @method integer getTaskType() Obtain <p>Task type</p><p>Enumeration value:</p><ul><li>0: One-click scan</li><li>1: Period scanning</li></ul>
 * @method void setTaskType(integer $TaskType) Set <p>Task type</p><p>Enumeration value:</p><ul><li>0: One-click scan</li><li>1: Period scanning</li></ul>
 * @method array getVulCategory() Obtain <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
 * @method void setVulCategory(array $VulCategory) Set <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
 * @method array getVulName() Obtain <p>Vulnerability name</p>
 * @method void setVulName(array $VulName) Set <p>Vulnerability name</p>
 * @method array getKbName() Obtain <p>kb name.</p>
 * @method void setKbName(array $KbName) Set <p>kb name.</p>
 * @method integer getEmergency() Obtain <p>Whether an emergency vulnerability</p><p>Enumeration value:</p><ul><li>0: No</li><li>1: Yes</li></ul>
 * @method void setEmergency(integer $Emergency) Set <p>Whether an emergency vulnerability</p><p>Enumeration value:</p><ul><li>0: No</li><li>1: Yes</li></ul>
 * @method integer getAccount() Obtain <p>Number of accounts to scan (0: all accounts, others: number of accounts)</p>
 * @method void setAccount(integer $Account) Set <p>Number of accounts to scan (0: all accounts, others: number of accounts)</p>
 * @method string getStartTime() Obtain <p>Scan start time</p>
 * @method void setStartTime(string $StartTime) Set <p>Scan start time</p>
 * @method string getEndTime() Obtain <p>Scan end time</p>
 * @method void setEndTime(string $EndTime) Set <p>Scan end time</p>
 * @method string getStatus() Obtain <p>Scan status (INITIALIZING: Initialization, SCANNING: Scanning, SUCCESS: Scan successful, TOTAL_FAIL: Total scan failure)</p><p>Enumeration value:</p><ul><li>STOPPED: Stopped</li></ul>
 * @method void setStatus(string $Status) Set <p>Scan status (INITIALIZING: Initialization, SCANNING: Scanning, SUCCESS: Scan successful, TOTAL_FAIL: Total scan failure)</p><p>Enumeration value:</p><ul><li>STOPPED: Stopped</li></ul>
 * @method array getLevel() Obtain <p>Vulnerability threat level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
 * @method void setLevel(array $Level) Set <p>Vulnerability threat level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
 * @method array getMethod() Obtain <p>Scanning method</p><p>Enumeration value:</p><ul><li>VersionCompare: version comparison</li><li>POC: POC detection</li><li>VersionComparePOC: version comparison+POC detection</li></ul>
 * @method void setMethod(array $Method) Set <p>Scanning method</p><p>Enumeration value:</p><ul><li>VersionCompare: version comparison</li><li>POC: POC detection</li><li>VersionComparePOC: version comparison+POC detection</li></ul>
 * @method array getAssetList() Obtain <p>Asset list</p>
 * @method void setAssetList(array $AssetList) Set <p>Asset list</p>
 * @method integer getAssetRange() Obtain <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Selected excluded assets</li></ul>
 * @method void setAssetRange(integer $AssetRange) Set <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Selected excluded assets</li></ul>
 */
class VulScanTask extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $Id;

    /**
     * @var string <p>Task ID.</p>
     */
    public $JobId;

    /**
     * @var integer <p>Associated user appid of the task</p>
     */
    public $AppId;

    /**
     * @var integer <p>Task type</p><p>Enumeration value:</p><ul><li>0: One-click scan</li><li>1: Period scanning</li></ul>
     */
    public $TaskType;

    /**
     * @var array <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
     */
    public $VulCategory;

    /**
     * @var array <p>Vulnerability name</p>
     */
    public $VulName;

    /**
     * @var array <p>kb name.</p>
     */
    public $KbName;

    /**
     * @var integer <p>Whether an emergency vulnerability</p><p>Enumeration value:</p><ul><li>0: No</li><li>1: Yes</li></ul>
     */
    public $Emergency;

    /**
     * @var integer <p>Number of accounts to scan (0: all accounts, others: number of accounts)</p>
     */
    public $Account;

    /**
     * @var string <p>Scan start time</p>
     */
    public $StartTime;

    /**
     * @var string <p>Scan end time</p>
     */
    public $EndTime;

    /**
     * @var string <p>Scan status (INITIALIZING: Initialization, SCANNING: Scanning, SUCCESS: Scan successful, TOTAL_FAIL: Total scan failure)</p><p>Enumeration value:</p><ul><li>STOPPED: Stopped</li></ul>
     */
    public $Status;

    /**
     * @var array <p>Vulnerability threat level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
     */
    public $Level;

    /**
     * @var array <p>Scanning method</p><p>Enumeration value:</p><ul><li>VersionCompare: version comparison</li><li>POC: POC detection</li><li>VersionComparePOC: version comparison+POC detection</li></ul>
     */
    public $Method;

    /**
     * @var array <p>Asset list</p>
     */
    public $AssetList;

    /**
     * @var integer <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Selected excluded assets</li></ul>
     */
    public $AssetRange;

    /**
     * @param integer $Id <p>Task ID.</p>
     * @param string $JobId <p>Task ID.</p>
     * @param integer $AppId <p>Associated user appid of the task</p>
     * @param integer $TaskType <p>Task type</p><p>Enumeration value:</p><ul><li>0: One-click scan</li><li>1: Period scanning</li></ul>
     * @param array $VulCategory <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
     * @param array $VulName <p>Vulnerability name</p>
     * @param array $KbName <p>kb name.</p>
     * @param integer $Emergency <p>Whether an emergency vulnerability</p><p>Enumeration value:</p><ul><li>0: No</li><li>1: Yes</li></ul>
     * @param integer $Account <p>Number of accounts to scan (0: all accounts, others: number of accounts)</p>
     * @param string $StartTime <p>Scan start time</p>
     * @param string $EndTime <p>Scan end time</p>
     * @param string $Status <p>Scan status (INITIALIZING: Initialization, SCANNING: Scanning, SUCCESS: Scan successful, TOTAL_FAIL: Total scan failure)</p><p>Enumeration value:</p><ul><li>STOPPED: Stopped</li></ul>
     * @param array $Level <p>Vulnerability threat level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
     * @param array $Method <p>Scanning method</p><p>Enumeration value:</p><ul><li>VersionCompare: version comparison</li><li>POC: POC detection</li><li>VersionComparePOC: version comparison+POC detection</li></ul>
     * @param array $AssetList <p>Asset list</p>
     * @param integer $AssetRange <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Selected excluded assets</li></ul>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("KbName",$param) and $param["KbName"] !== null) {
            $this->KbName = $param["KbName"];
        }

        if (array_key_exists("Emergency",$param) and $param["Emergency"] !== null) {
            $this->Emergency = $param["Emergency"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }
    }
}
