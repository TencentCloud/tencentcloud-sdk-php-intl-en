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
 * Task summary of vulnerability repair
 *
 * @method integer getId() Obtain Primary key ID of the fix task
 * @method void setId(integer $Id) Set Primary key ID of the fix task
 * @method integer getTaskId() Obtain Task ID.
 * @method void setTaskId(integer $TaskId) Set Task ID.
 * @method integer getFixStatus() Obtain Remediation status
Enumeration values:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
 * @method void setFixStatus(integer $FixStatus) Set Remediation status
Enumeration values:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
 * @method integer getAssetCount() Obtain Repair total number of assets
 * @method void setAssetCount(integer $AssetCount) Set Repair total number of assets
 * @method integer getSuccessCount() Obtain Number of successful fixes
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successful fixes
 * @method integer getFailCount() Obtain FIX_FAILURE count
 * @method void setFailCount(integer $FailCount) Set FIX_FAILURE count
 * @method integer getFixingCount() Obtain Number of hosts in remediation
 * @method void setFixingCount(integer $FixingCount) Set Number of hosts in remediation
 * @method integer getQueueCount() Obtain Number in queue (waiting for distribution or snapshot creation)
 * @method void setQueueCount(integer $QueueCount) Set Number in queue (waiting for distribution or snapshot creation)
 * @method integer getProgress() Obtain Progress percentage of the repair
Value range: [0, 100].
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
 * @method void setProgress(integer $Progress) Set Progress percentage of the repair
Value range: [0, 100].
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
 * @method integer getSuccessVulCount() Obtain Number of successfully fixed vulnerabilities
 * @method void setSuccessVulCount(integer $SuccessVulCount) Set Number of successfully fixed vulnerabilities
 * @method integer getFailVulCount() Obtain Number of vulnerabilities that failed to fix
 * @method void setFailVulCount(integer $FailVulCount) Set Number of vulnerabilities that failed to fix
 * @method array getVulNames() Obtain List of vulnerability names to be fixed
 * @method void setVulNames(array $VulNames) Set List of vulnerability names to be fixed
 * @method string getStartTime() Obtain Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setStartTime(string $StartTime) Set Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method string getEndTime() Obtain Fixing end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setEndTime(string $EndTime) Set Fixing end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method array getVulFixStatusList() Obtain List of vulnerability dimensional remediation status, status details of each vulnerability
 * @method void setVulFixStatusList(array $VulFixStatusList) Set List of vulnerability dimensional remediation status, status details of each vulnerability
 */
class VulFixTaskInfo extends AbstractModel
{
    /**
     * @var integer Primary key ID of the fix task
     */
    public $Id;

    /**
     * @var integer Task ID.
     */
    public $TaskId;

    /**
     * @var integer Remediation status
Enumeration values:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
     */
    public $FixStatus;

    /**
     * @var integer Repair total number of assets
     */
    public $AssetCount;

    /**
     * @var integer Number of successful fixes
     */
    public $SuccessCount;

    /**
     * @var integer FIX_FAILURE count
     */
    public $FailCount;

    /**
     * @var integer Number of hosts in remediation
     */
    public $FixingCount;

    /**
     * @var integer Number in queue (waiting for distribution or snapshot creation)
     */
    public $QueueCount;

    /**
     * @var integer Progress percentage of the repair
Value range: [0, 100].
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
     */
    public $Progress;

    /**
     * @var integer Number of successfully fixed vulnerabilities
     */
    public $SuccessVulCount;

    /**
     * @var integer Number of vulnerabilities that failed to fix
     */
    public $FailVulCount;

    /**
     * @var array List of vulnerability names to be fixed
     */
    public $VulNames;

    /**
     * @var string Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $StartTime;

    /**
     * @var string Fixing end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $EndTime;

    /**
     * @var array List of vulnerability dimensional remediation status, status details of each vulnerability
     */
    public $VulFixStatusList;

    /**
     * @param integer $Id Primary key ID of the fix task
     * @param integer $TaskId Task ID.
     * @param integer $FixStatus Remediation status
Enumeration values:
0: initialization
1: In remediation
2: Repair successful
3: Partially fix failed
4: All fix failures
5: Stop repair
     * @param integer $AssetCount Repair total number of assets
     * @param integer $SuccessCount Number of successful fixes
     * @param integer $FailCount FIX_FAILURE count
     * @param integer $FixingCount Number of hosts in remediation
     * @param integer $QueueCount Number in queue (waiting for distribution or snapshot creation)
     * @param integer $Progress Progress percentage of the repair
Value range: [0, 100].
Supplemental description: Calculation method is (SuccessCount+FailCount)/AssetCount×100.
     * @param integer $SuccessVulCount Number of successfully fixed vulnerabilities
     * @param integer $FailVulCount Number of vulnerabilities that failed to fix
     * @param array $VulNames List of vulnerability names to be fixed
     * @param string $StartTime Fix startup time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     * @param string $EndTime Fixing end time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     * @param array $VulFixStatusList List of vulnerability dimensional remediation status, status details of each vulnerability
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

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
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

        if (array_key_exists("FixingCount",$param) and $param["FixingCount"] !== null) {
            $this->FixingCount = $param["FixingCount"];
        }

        if (array_key_exists("QueueCount",$param) and $param["QueueCount"] !== null) {
            $this->QueueCount = $param["QueueCount"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("SuccessVulCount",$param) and $param["SuccessVulCount"] !== null) {
            $this->SuccessVulCount = $param["SuccessVulCount"];
        }

        if (array_key_exists("FailVulCount",$param) and $param["FailVulCount"] !== null) {
            $this->FailVulCount = $param["FailVulCount"];
        }

        if (array_key_exists("VulNames",$param) and $param["VulNames"] !== null) {
            $this->VulNames = $param["VulNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("VulFixStatusList",$param) and $param["VulFixStatusList"] !== null) {
            $this->VulFixStatusList = [];
            foreach ($param["VulFixStatusList"] as $key => $value){
                $obj = new VulFixStatusItem();
                $obj->deserialize($value);
                array_push($this->VulFixStatusList, $obj);
            }
        }
    }
}
