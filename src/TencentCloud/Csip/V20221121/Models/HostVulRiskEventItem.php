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
 * Host vulnerability risk event details
 *
 * @method string getUUID() Obtain Unique identifier of a vulnerability risk record.
 * @method void setUUID(string $UUID) Set Unique identifier of a vulnerability risk record.
 * @method integer getRiskID() Obtain Risk record ID
 * @method void setRiskID(integer $RiskID) Set Risk record ID
 * @method integer getVulID() Obtain Vulnerability ID
 * @method void setVulID(integer $VulID) Set Vulnerability ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getCVEID() Obtain CVE No.
Parameter format: such as CVE-2024-12345
 * @method void setCVEID(string $CVEID) Set CVE No.
Parameter format: such as CVE-2024-12345
 * @method string getCategory() Obtain Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch
WEB_CMS: Web-CMS vulnerability
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method void setCategory(string $Category) Set Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch
WEB_CMS: Web-CMS vulnerability
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method string getLevel() Obtain Vulnerability severity level
Enumeration values:
UNKNOWN: invalid
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
 * @method void setLevel(string $Level) Set Vulnerability severity level
Enumeration values:
UNKNOWN: invalid
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
 * @method string getVPRLevel() Obtain VPR repair priority
Enumeration values:
DEFERRABLE: Can be repaired later
PLANNED: Planned repair
SOON: Fix as soon as possible
URGENT: urgent repair
 * @method void setVPRLevel(string $VPRLevel) Set VPR repair priority
Enumeration values:
DEFERRABLE: Can be repaired later
PLANNED: Planned repair
SOON: Fix as soon as possible
URGENT: urgent repair
 * @method string getCheckMethod() Obtain Detection mode
Enumeration values:
VersionCompare: version comparison
POC: POC detection
VersionComparePOC: version comparison + POC
 * @method void setCheckMethod(string $CheckMethod) Set Detection mode
Enumeration values:
VersionCompare: version comparison
POC: POC detection
VersionComparePOC: version comparison + POC
 * @method string getRiskStatus() Obtain Risk status
Enumeration value:
PENDING: to be processed.
HANDLED: processed
FIXED: Fixed
SCANNING: Rechecking
IGNORED: ignored
NOT_REQUIRED: No action is required
DELETED: Deleted
FIXING: In remediation
NEED_REBOOT: Fixed and pending restart
FIX_FAILURE: FIX failure
 * @method void setRiskStatus(string $RiskStatus) Set Risk status
Enumeration value:
PENDING: to be processed.
HANDLED: processed
FIXED: Fixed
SCANNING: Rechecking
IGNORED: ignored
NOT_REQUIRED: No action is required
DELETED: Deleted
FIXING: In remediation
NEED_REBOOT: Fixed and pending restart
FIX_FAILURE: FIX failure
 * @method boolean getSupportFix() Obtain Whether one-click repair is supported
 * @method void setSupportFix(boolean $SupportFix) Set Whether one-click repair is supported
 * @method string getLatestScanTime() Obtain Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method string getInstanceID() Obtain Cloud host instance ID
Parameter format: such as ins-xxxxxxxx
 * @method void setInstanceID(string $InstanceID) Set Cloud host instance ID
Parameter format: such as ins-xxxxxxxx
 * @method integer getAppID() Obtain Account AppID
 * @method void setAppID(integer $AppID) Set Account AppID
 */
class HostVulRiskEventItem extends AbstractModel
{
    /**
     * @var string Unique identifier of a vulnerability risk record.
     */
    public $UUID;

    /**
     * @var integer Risk record ID
     */
    public $RiskID;

    /**
     * @var integer Vulnerability ID
     */
    public $VulID;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string CVE No.
Parameter format: such as CVE-2024-12345
     */
    public $CVEID;

    /**
     * @var string Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch
WEB_CMS: Web-CMS vulnerability
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     */
    public $Category;

    /**
     * @var string Vulnerability severity level
Enumeration values:
UNKNOWN: invalid
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
     */
    public $Level;

    /**
     * @var string VPR repair priority
Enumeration values:
DEFERRABLE: Can be repaired later
PLANNED: Planned repair
SOON: Fix as soon as possible
URGENT: urgent repair
     */
    public $VPRLevel;

    /**
     * @var string Detection mode
Enumeration values:
VersionCompare: version comparison
POC: POC detection
VersionComparePOC: version comparison + POC
     */
    public $CheckMethod;

    /**
     * @var string Risk status
Enumeration value:
PENDING: to be processed.
HANDLED: processed
FIXED: Fixed
SCANNING: Rechecking
IGNORED: ignored
NOT_REQUIRED: No action is required
DELETED: Deleted
FIXING: In remediation
NEED_REBOOT: Fixed and pending restart
FIX_FAILURE: FIX failure
     */
    public $RiskStatus;

    /**
     * @var boolean Whether one-click repair is supported
     */
    public $SupportFix;

    /**
     * @var string Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     */
    public $LatestScanTime;

    /**
     * @var string Cloud host instance ID
Parameter format: such as ins-xxxxxxxx
     */
    public $InstanceID;

    /**
     * @var integer Account AppID
     */
    public $AppID;

    /**
     * @param string $UUID Unique identifier of a vulnerability risk record.
     * @param integer $RiskID Risk record ID
     * @param integer $VulID Vulnerability ID
     * @param string $VulName Vulnerability name
     * @param string $CVEID CVE No.
Parameter format: such as CVE-2024-12345
     * @param string $Category Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch
WEB_CMS: Web-CMS vulnerability
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     * @param string $Level Vulnerability severity level
Enumeration values:
UNKNOWN: invalid
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
     * @param string $VPRLevel VPR repair priority
Enumeration values:
DEFERRABLE: Can be repaired later
PLANNED: Planned repair
SOON: Fix as soon as possible
URGENT: urgent repair
     * @param string $CheckMethod Detection mode
Enumeration values:
VersionCompare: version comparison
POC: POC detection
VersionComparePOC: version comparison + POC
     * @param string $RiskStatus Risk status
Enumeration value:
PENDING: to be processed.
HANDLED: processed
FIXED: Fixed
SCANNING: Rechecking
IGNORED: ignored
NOT_REQUIRED: No action is required
DELETED: Deleted
FIXING: In remediation
NEED_REBOOT: Fixed and pending restart
FIX_FAILURE: FIX failure
     * @param boolean $SupportFix Whether one-click repair is supported
     * @param string $LatestScanTime Last scan time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     * @param string $InstanceID Cloud host instance ID
Parameter format: such as ins-xxxxxxxx
     * @param integer $AppID Account AppID
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
        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("RiskID",$param) and $param["RiskID"] !== null) {
            $this->RiskID = $param["RiskID"];
        }

        if (array_key_exists("VulID",$param) and $param["VulID"] !== null) {
            $this->VulID = $param["VulID"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VPRLevel",$param) and $param["VPRLevel"] !== null) {
            $this->VPRLevel = $param["VPRLevel"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }
    }
}
