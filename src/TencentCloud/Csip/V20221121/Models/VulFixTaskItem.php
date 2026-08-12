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
 * Vulnerability repair task list item
 *
 * @method integer getId() Obtain Primary key ID of the fix task
 * @method void setId(integer $Id) Set Primary key ID of the fix task
 * @method integer getTaskId() Obtain Task ID, hash flag for interactive
 * @method void setTaskId(integer $TaskId) Set Task ID, hash flag for interactive
 * @method string getJobId() Obtain JobId, corresponding to the Task ID of the task system.
 * @method void setJobId(string $JobId) Set JobId, corresponding to the Task ID of the task system.
 * @method array getVulIds() Obtain List of vulnerability IDs to be fixed
 * @method void setVulIds(array $VulIds) Set List of vulnerability IDs to be fixed
 * @method array getKBIds() Obtain List of fixed KB patch IDs
 * @method void setKBIds(array $KBIds) Set List of fixed KB patch IDs
 * @method integer getAssetCount() Obtain Repair the total number of assets
 * @method void setAssetCount(integer $AssetCount) Set Repair the total number of assets
 * @method integer getSuccessCount() Obtain Number of successfully fixed hosts
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successfully fixed hosts
 * @method integer getFailCount() Obtain Number of hosts failed to be fixed
 * @method void setFailCount(integer $FailCount) Set Number of hosts failed to be fixed
 * @method integer getProgress() Obtain Progress percentage of the repair
Valid values: [0, 100]
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
 * @method void setProgress(integer $Progress) Set Progress percentage of the repair
Valid values: [0, 100]
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
 * @method integer getTargetAppIdsCount() Obtain Number of users in the fix task
 * @method void setTargetAppIdsCount(integer $TargetAppIdsCount) Set Number of users in the fix task
 * @method integer getFixStatus() Obtain Remediation status
Enumeration value:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
 * @method void setFixStatus(integer $FixStatus) Set Remediation status
Enumeration value:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
 * @method integer getTimeout() Obtain Maximum repair time
Unit: seconds.
 * @method void setTimeout(integer $Timeout) Set Maximum repair time
Unit: seconds.
 * @method string getStartTime() Obtain Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setStartTime(string $StartTime) Set Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method string getEndTime() Obtain Fix end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setEndTime(string $EndTime) Set Fix end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method string getCreateTime() Obtain Record creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setCreateTime(string $CreateTime) Set Record creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method array getVulNames() Obtain List of vulnerability names to be fixed, making it easy to show directly on the list page
 * @method void setVulNames(array $VulNames) Set List of vulnerability names to be fixed, making it easy to show directly on the list page
 * @method array getVulCategory() Obtain Vulnerability Type List
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method void setVulCategory(array $VulCategory) Set Vulnerability Type List
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method integer getAppId() Obtain Creator AppId
 * @method void setAppId(integer $AppId) Set Creator AppId
 */
class VulFixTaskItem extends AbstractModel
{
    /**
     * @var integer Primary key ID of the fix task
     */
    public $Id;

    /**
     * @var integer Task ID, hash flag for interactive
     */
    public $TaskId;

    /**
     * @var string JobId, corresponding to the Task ID of the task system.
     */
    public $JobId;

    /**
     * @var array List of vulnerability IDs to be fixed
     */
    public $VulIds;

    /**
     * @var array List of fixed KB patch IDs
     */
    public $KBIds;

    /**
     * @var integer Repair the total number of assets
     */
    public $AssetCount;

    /**
     * @var integer Number of successfully fixed hosts
     */
    public $SuccessCount;

    /**
     * @var integer Number of hosts failed to be fixed
     */
    public $FailCount;

    /**
     * @var integer Progress percentage of the repair
Valid values: [0, 100]
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
     */
    public $Progress;

    /**
     * @var integer Number of users in the fix task
     */
    public $TargetAppIdsCount;

    /**
     * @var integer Remediation status
Enumeration value:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
     */
    public $FixStatus;

    /**
     * @var integer Maximum repair time
Unit: seconds.
     */
    public $Timeout;

    /**
     * @var string Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $StartTime;

    /**
     * @var string Fix end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $EndTime;

    /**
     * @var string Record creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $CreateTime;

    /**
     * @var array List of vulnerability names to be fixed, making it easy to show directly on the list page
     */
    public $VulNames;

    /**
     * @var array Vulnerability Type List
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     */
    public $VulCategory;

    /**
     * @var integer Creator AppId
     */
    public $AppId;

    /**
     * @param integer $Id Primary key ID of the fix task
     * @param integer $TaskId Task ID, hash flag for interactive
     * @param string $JobId JobId, corresponding to the Task ID of the task system.
     * @param array $VulIds List of vulnerability IDs to be fixed
     * @param array $KBIds List of fixed KB patch IDs
     * @param integer $AssetCount Repair the total number of assets
     * @param integer $SuccessCount Number of successfully fixed hosts
     * @param integer $FailCount Number of hosts failed to be fixed
     * @param integer $Progress Progress percentage of the repair
Valid values: [0, 100]
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
     * @param integer $TargetAppIdsCount Number of users in the fix task
     * @param integer $FixStatus Remediation status
Enumeration value:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
     * @param integer $Timeout Maximum repair time
Unit: seconds.
     * @param string $StartTime Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     * @param string $EndTime Fix end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     * @param string $CreateTime Record creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     * @param array $VulNames List of vulnerability names to be fixed, making it easy to show directly on the list page
     * @param array $VulCategory Vulnerability Type List
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows system patch vulnerability
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     * @param integer $AppId Creator AppId
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
        }

        if (array_key_exists("KBIds",$param) and $param["KBIds"] !== null) {
            $this->KBIds = $param["KBIds"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TargetAppIdsCount",$param) and $param["TargetAppIdsCount"] !== null) {
            $this->TargetAppIdsCount = $param["TargetAppIdsCount"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VulNames",$param) and $param["VulNames"] !== null) {
            $this->VulNames = $param["VulNames"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
