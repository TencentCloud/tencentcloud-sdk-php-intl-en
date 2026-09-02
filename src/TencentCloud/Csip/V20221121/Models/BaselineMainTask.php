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
 * Baseline scanning main task, corresponding to a "one-click scan/period scanning/disperse scan" action.
 *
 * @method string getJobID() Obtain <p>Global task ID corresponding to the main task.</p>
 * @method void setJobID(string $JobID) Set <p>Global task ID corresponding to the main task.</p>
 * @method integer getID() Obtain <p>Main task ID.</p>
 * @method void setID(integer $ID) Set <p>Main task ID.</p>
 * @method string getStatus() Obtain <p>Main task status. Values:</p><ul><li>INIT: initialization</li><li>SUBTASK_CREATING: creating subtasks</li><li>SCANNING: scanning</li><li>TIMEOUT: timeout</li><li>USER_CANCELED: canceled by the user</li><li>ALL_FAILED: all failed</li><li>SUCCESS: success</li></ul>
 * @method void setStatus(string $Status) Set <p>Main task status. Values:</p><ul><li>INIT: initialization</li><li>SUBTASK_CREATING: creating subtasks</li><li>SCANNING: scanning</li><li>TIMEOUT: timeout</li><li>USER_CANCELED: canceled by the user</li><li>ALL_FAILED: all failed</li><li>SUCCESS: success</li></ul>
 * @method integer getAppid() Obtain <p>Appid of the associated tenant of the main task.</p>
 * @method void setAppid(integer $Appid) Set <p>Appid of the associated tenant of the main task.</p>
 * @method string getTaskType() Obtain <p>Main task type. Value:</p><ul><li>ONE_SHOT: one-click policy scan (manual triggering)</li><li>PERIODIC: period scanning (auto-trigger by CycleScanConf)</li><li>OTHER: other disperse scans (triggered by asset dimension, etc.)</li></ul>
 * @method void setTaskType(string $TaskType) Set <p>Main task type. Value:</p><ul><li>ONE_SHOT: one-click policy scan (manual triggering)</li><li>PERIODIC: period scanning (auto-trigger by CycleScanConf)</li><li>OTHER: other disperse scans (triggered by asset dimension, etc.)</li></ul>
 * @method string getStartTime() Obtain <p>Main task start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Main task start time.</p>
 * @method string getFinishTime() Obtain <p>End time of the main task. Empty if not ended.</p>
 * @method void setFinishTime(string $FinishTime) Set <p>End time of the main task. Empty if not ended.</p>
 * @method string getCheckAssetType() Obtain <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) Set <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 * @method string getErrCode() Obtain <p>Failure error code. Empty if the request is successful.</p>
 * @method void setErrCode(string $ErrCode) Set <p>Failure error code. Empty if the request is successful.</p>
 * @method string getErrMessage() Obtain <p>Failure reason, empty if successful.</p>
 * @method void setErrMessage(string $ErrMessage) Set <p>Failure reason, empty if successful.</p>
 * @method string getSolution() Obtain <p>Solution (mapped according to ErrCode; empty on success)</p>
 * @method void setSolution(string $Solution) Set <p>Solution (mapped according to ErrCode; empty on success)</p>
 * @method integer getScanSuccessCount() Obtain <p>Number of assets scanned successfully.</p>
 * @method void setScanSuccessCount(integer $ScanSuccessCount) Set <p>Number of assets scanned successfully.</p>
 * @method integer getScanFailedCount() Obtain <p>Number of assets with scan failure.</p>
 * @method void setScanFailedCount(integer $ScanFailedCount) Set <p>Number of assets with scan failure.</p>
 * @method integer getScanTotalCount() Obtain <p>Total number of subtasks</p>
 * @method void setScanTotalCount(integer $ScanTotalCount) Set <p>Total number of subtasks</p>
 */
class BaselineMainTask extends AbstractModel
{
    /**
     * @var string <p>Global task ID corresponding to the main task.</p>
     */
    public $JobID;

    /**
     * @var integer <p>Main task ID.</p>
     */
    public $ID;

    /**
     * @var string <p>Main task status. Values:</p><ul><li>INIT: initialization</li><li>SUBTASK_CREATING: creating subtasks</li><li>SCANNING: scanning</li><li>TIMEOUT: timeout</li><li>USER_CANCELED: canceled by the user</li><li>ALL_FAILED: all failed</li><li>SUCCESS: success</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Appid of the associated tenant of the main task.</p>
     */
    public $Appid;

    /**
     * @var string <p>Main task type. Value:</p><ul><li>ONE_SHOT: one-click policy scan (manual triggering)</li><li>PERIODIC: period scanning (auto-trigger by CycleScanConf)</li><li>OTHER: other disperse scans (triggered by asset dimension, etc.)</li></ul>
     */
    public $TaskType;

    /**
     * @var string <p>Main task start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time of the main task. Empty if not ended.</p>
     */
    public $FinishTime;

    /**
     * @var string <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var string <p>Failure error code. Empty if the request is successful.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Failure reason, empty if successful.</p>
     */
    public $ErrMessage;

    /**
     * @var string <p>Solution (mapped according to ErrCode; empty on success)</p>
     */
    public $Solution;

    /**
     * @var integer <p>Number of assets scanned successfully.</p>
     */
    public $ScanSuccessCount;

    /**
     * @var integer <p>Number of assets with scan failure.</p>
     */
    public $ScanFailedCount;

    /**
     * @var integer <p>Total number of subtasks</p>
     */
    public $ScanTotalCount;

    /**
     * @param string $JobID <p>Global task ID corresponding to the main task.</p>
     * @param integer $ID <p>Main task ID.</p>
     * @param string $Status <p>Main task status. Values:</p><ul><li>INIT: initialization</li><li>SUBTASK_CREATING: creating subtasks</li><li>SCANNING: scanning</li><li>TIMEOUT: timeout</li><li>USER_CANCELED: canceled by the user</li><li>ALL_FAILED: all failed</li><li>SUCCESS: success</li></ul>
     * @param integer $Appid <p>Appid of the associated tenant of the main task.</p>
     * @param string $TaskType <p>Main task type. Value:</p><ul><li>ONE_SHOT: one-click policy scan (manual triggering)</li><li>PERIODIC: period scanning (auto-trigger by CycleScanConf)</li><li>OTHER: other disperse scans (triggered by asset dimension, etc.)</li></ul>
     * @param string $StartTime <p>Main task start time.</p>
     * @param string $FinishTime <p>End time of the main task. Empty if not ended.</p>
     * @param string $CheckAssetType <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
     * @param string $ErrCode <p>Failure error code. Empty if the request is successful.</p>
     * @param string $ErrMessage <p>Failure reason, empty if successful.</p>
     * @param string $Solution <p>Solution (mapped according to ErrCode; empty on success)</p>
     * @param integer $ScanSuccessCount <p>Number of assets scanned successfully.</p>
     * @param integer $ScanFailedCount <p>Number of assets with scan failure.</p>
     * @param integer $ScanTotalCount <p>Total number of subtasks</p>
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
        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("ScanSuccessCount",$param) and $param["ScanSuccessCount"] !== null) {
            $this->ScanSuccessCount = $param["ScanSuccessCount"];
        }

        if (array_key_exists("ScanFailedCount",$param) and $param["ScanFailedCount"] !== null) {
            $this->ScanFailedCount = $param["ScanFailedCount"];
        }

        if (array_key_exists("ScanTotalCount",$param) and $param["ScanTotalCount"] !== null) {
            $this->ScanTotalCount = $param["ScanTotalCount"];
        }
    }
}
