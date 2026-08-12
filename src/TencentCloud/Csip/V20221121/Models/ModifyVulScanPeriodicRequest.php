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
 * ModifyVulScanPeriodic request structure.
 *
 * @method integer getStatus() Obtain <p>Period scanning switch (0-off, 1-on)</p>
 * @method void setStatus(integer $Status) Set <p>Period scanning switch (0-off, 1-on)</p>
 * @method array getVulCategory() Obtain <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
 * @method void setVulCategory(array $VulCategory) Set <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
 * @method array getLevel() Obtain <p>Vulnerability level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
 * @method void setLevel(array $Level) Set <p>Vulnerability level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
 * @method string getMethod() Obtain <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison+POC detection)</p>
 * @method void setMethod(string $Method) Set <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison+POC detection)</p>
 * @method string getStartTime() Obtain <p>Start time (09:00:00)</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time (09:00:00)</p>
 * @method string getEndTime() Obtain <p>End time (18:00:00)</p>
 * @method void setEndTime(string $EndTime) Set <p>End time (18:00:00)</p>
 * @method integer getAssetRange() Obtain <p>Asset scope (0-All assets, 1-Custom assets, 2-Remove asset, 3-Automatic asset match)</p>
 * @method void setAssetRange(integer $AssetRange) Set <p>Asset scope (0-All assets, 1-Custom assets, 2-Remove asset, 3-Automatic asset match)</p>
 * @method integer getCycleType() Obtain <p>Period scanning type</p><p>Enumeration value:</p><ul><li>1: Daily</li><li>2: Weekly</li><li>3: Per month</li></ul>
 * @method void setCycleType(integer $CycleType) Set <p>Period scanning type</p><p>Enumeration value:</p><ul><li>1: Daily</li><li>2: Weekly</li><li>3: Per month</li></ul>
 * @method integer getTimeout() Obtain <p>Scan timeout duration</p><p>Measurement unit: second</p>
 * @method void setTimeout(integer $Timeout) Set <p>Scan timeout duration</p><p>Measurement unit: second</p>
 * @method array getCycleValue() Obtain <p>Cycle value</p><p>Value ranges from 1 to 31</p><p>Measurement unit: day of the week or per month</p>
 * @method void setCycleValue(array $CycleValue) Set <p>Cycle value</p><p>Value ranges from 1 to 31</p><p>Measurement unit: day of the week or per month</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getAssetList() Obtain <p>Asset list (instance_id list)</p>
 * @method void setAssetList(array $AssetList) Set <p>Asset list (instance_id list)</p>
 * @method integer getAllowSync() Obtain <p>Whether to run the synchronize configuration 0-not allowed, 1-allowed</p>
 * @method void setAllowSync(integer $AllowSync) Set <p>Whether to run the synchronize configuration 0-not allowed, 1-allowed</p>
 * @method integer getEnableSync() Obtain <p>Whether the admin account has enabled the auto sync configuration switch 0-Off, 1-On</p>
 * @method void setEnableSync(integer $EnableSync) Set <p>Whether the admin account has enabled the auto sync configuration switch 0-Off, 1-On</p>
 * @method array getSyncTo() Obtain <p>Configuration sync to which account appid</p>
 * @method void setSyncTo(array $SyncTo) Set <p>Configuration sync to which account appid</p>
 * @method array getTagIds() Obtain <p>Tag ID</p>
 * @method void setTagIds(array $TagIds) Set <p>Tag ID</p>
 */
class ModifyVulScanPeriodicRequest extends AbstractModel
{
    /**
     * @var integer <p>Period scanning switch (0-off, 1-on)</p>
     */
    public $Status;

    /**
     * @var array <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
     */
    public $VulCategory;

    /**
     * @var array <p>Vulnerability level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
     */
    public $Level;

    /**
     * @var string <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison+POC detection)</p>
     */
    public $Method;

    /**
     * @var string <p>Start time (09:00:00)</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time (18:00:00)</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Asset scope (0-All assets, 1-Custom assets, 2-Remove asset, 3-Automatic asset match)</p>
     */
    public $AssetRange;

    /**
     * @var integer <p>Period scanning type</p><p>Enumeration value:</p><ul><li>1: Daily</li><li>2: Weekly</li><li>3: Per month</li></ul>
     */
    public $CycleType;

    /**
     * @var integer <p>Scan timeout duration</p><p>Measurement unit: second</p>
     */
    public $Timeout;

    /**
     * @var array <p>Cycle value</p><p>Value ranges from 1 to 31</p><p>Measurement unit: day of the week or per month</p>
     */
    public $CycleValue;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Asset list (instance_id list)</p>
     */
    public $AssetList;

    /**
     * @var integer <p>Whether to run the synchronize configuration 0-not allowed, 1-allowed</p>
     */
    public $AllowSync;

    /**
     * @var integer <p>Whether the admin account has enabled the auto sync configuration switch 0-Off, 1-On</p>
     */
    public $EnableSync;

    /**
     * @var array <p>Configuration sync to which account appid</p>
     */
    public $SyncTo;

    /**
     * @var array <p>Tag ID</p>
     */
    public $TagIds;

    /**
     * @param integer $Status <p>Period scanning switch (0-off, 1-on)</p>
     * @param array $VulCategory <p>Vulnerability type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
     * @param array $Level <p>Vulnerability level</p><p>Enumeration value:</p><ul><li>LOW: Low risk</li><li>MEDIUM: Medium risk</li><li>HIGH: High risk</li><li>CRITICAL: Critical</li></ul>
     * @param string $Method <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison+POC detection)</p>
     * @param string $StartTime <p>Start time (09:00:00)</p>
     * @param string $EndTime <p>End time (18:00:00)</p>
     * @param integer $AssetRange <p>Asset scope (0-All assets, 1-Custom assets, 2-Remove asset, 3-Automatic asset match)</p>
     * @param integer $CycleType <p>Period scanning type</p><p>Enumeration value:</p><ul><li>1: Daily</li><li>2: Weekly</li><li>3: Per month</li></ul>
     * @param integer $Timeout <p>Scan timeout duration</p><p>Measurement unit: second</p>
     * @param array $CycleValue <p>Cycle value</p><p>Value ranges from 1 to 31</p><p>Measurement unit: day of the week or per month</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $AssetList <p>Asset list (instance_id list)</p>
     * @param integer $AllowSync <p>Whether to run the synchronize configuration 0-not allowed, 1-allowed</p>
     * @param integer $EnableSync <p>Whether the admin account has enabled the auto sync configuration switch 0-Off, 1-On</p>
     * @param array $SyncTo <p>Configuration sync to which account appid</p>
     * @param array $TagIds <p>Tag ID</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("CycleValue",$param) and $param["CycleValue"] !== null) {
            $this->CycleValue = $param["CycleValue"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("AllowSync",$param) and $param["AllowSync"] !== null) {
            $this->AllowSync = $param["AllowSync"];
        }

        if (array_key_exists("EnableSync",$param) and $param["EnableSync"] !== null) {
            $this->EnableSync = $param["EnableSync"];
        }

        if (array_key_exists("SyncTo",$param) and $param["SyncTo"] !== null) {
            $this->SyncTo = $param["SyncTo"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }
    }
}
