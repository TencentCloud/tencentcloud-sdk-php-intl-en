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
 * Subtasks of a baseline scan are split by detection asset dimension (one host or cluster corresponds to one subtask).
 *
 * @method integer getID() Obtain <p>Subtask ID.</p>
 * @method void setID(integer $ID) Set <p>Subtask ID.</p>
 * @method integer getTaskID() Obtain <p>ID of the main task it belongs to (corresponds to BaselineMainTask.ID).</p>
 * @method void setTaskID(integer $TaskID) Set <p>ID of the main task it belongs to (corresponds to BaselineMainTask.ID).</p>
 * @method string getStatus() Obtain <p>Execution result of the subtask. Value:</p><ul><li>SUCCESS: successful</li><li>FAILED: failed</li><li>USER_CANCELED: canceled by the user</li><li>CHECKING: detecting</li><li>UNKNOWN: unknown status</li></ul>
 * @method void setStatus(string $Status) Set <p>Execution result of the subtask. Value:</p><ul><li>SUCCESS: successful</li><li>FAILED: failed</li><li>USER_CANCELED: canceled by the user</li><li>CHECKING: detecting</li><li>UNKNOWN: unknown status</li></ul>
 * @method integer getAppid() Obtain <p>Appid of the tenant associated with the subtask.</p>
 * @method void setAppid(integer $Appid) Set <p>Appid of the tenant associated with the subtask.</p>
 * @method string getStartTime() Obtain <p>Subtask start execution time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Subtask start execution time.</p>
 * @method string getFinishTime() Obtain <p>Subtask end time. If not ended, it is empty</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Subtask end time. If not ended, it is empty</p>
 * @method string getCheckAssetType() Obtain <p>Detect asset major category, case-sensitive between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: host</li><li>CLUSTER: container cluster</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) Set <p>Detect asset major category, case-sensitive between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: host</li><li>CLUSTER: container cluster</li></ul>
 * @method BaselineHostAsset getHostAsset() Obtain <p>Host asset information returned when CheckAssetType=HOST. Empty when CheckAssetType=CLUSTER.</p>
 * @method void setHostAsset(BaselineHostAsset $HostAsset) Set <p>Host asset information returned when CheckAssetType=HOST. Empty when CheckAssetType=CLUSTER.</p>
 * @method string getErrCode() Obtain <p>Status code: In case of failure, a failure code is returned (for example, AGENT_OFFLINE, SCAN_TIMEOUT, CLIENT_SCAN_FAILED). During detection, the detection status is returned. It is empty for success or user cancellation.</p>
 * @method void setErrCode(string $ErrCode) Set <p>Status code: In case of failure, a failure code is returned (for example, AGENT_OFFLINE, SCAN_TIMEOUT, CLIENT_SCAN_FAILED). During detection, the detection status is returned. It is empty for success or user cancellation.</p>
 * @method string getErrMessage() Obtain <p>Detailed description of the reason for failure. Empty on success, canceled by the user, or during detection.</p>
 * @method void setErrMessage(string $ErrMessage) Set <p>Detailed description of the reason for failure. Empty on success, canceled by the user, or during detection.</p>
 * @method string getSolution() Obtain <p>Solution recommendation in case of failure. Empty for success, canceled by the user, or in-progress detection.</p>
 * @method void setSolution(string $Solution) Set <p>Solution recommendation in case of failure. Empty for success, canceled by the user, or in-progress detection.</p>
 * @method BaselineClusterAsset getClusterAsset() Obtain <p>Cluster asset information returned when CheckAssetType=CLUSTER. Empty when CheckAssetType=HOST.</p>
 * @method void setClusterAsset(BaselineClusterAsset $ClusterAsset) Set <p>Cluster asset information returned when CheckAssetType=CLUSTER. Empty when CheckAssetType=HOST.</p>
 */
class BaselineSubTask extends AbstractModel
{
    /**
     * @var integer <p>Subtask ID.</p>
     */
    public $ID;

    /**
     * @var integer <p>ID of the main task it belongs to (corresponds to BaselineMainTask.ID).</p>
     */
    public $TaskID;

    /**
     * @var string <p>Execution result of the subtask. Value:</p><ul><li>SUCCESS: successful</li><li>FAILED: failed</li><li>USER_CANCELED: canceled by the user</li><li>CHECKING: detecting</li><li>UNKNOWN: unknown status</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Appid of the tenant associated with the subtask.</p>
     */
    public $Appid;

    /**
     * @var string <p>Subtask start execution time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Subtask end time. If not ended, it is empty</p>
     */
    public $FinishTime;

    /**
     * @var string <p>Detect asset major category, case-sensitive between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: host</li><li>CLUSTER: container cluster</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var BaselineHostAsset <p>Host asset information returned when CheckAssetType=HOST. Empty when CheckAssetType=CLUSTER.</p>
     */
    public $HostAsset;

    /**
     * @var string <p>Status code: In case of failure, a failure code is returned (for example, AGENT_OFFLINE, SCAN_TIMEOUT, CLIENT_SCAN_FAILED). During detection, the detection status is returned. It is empty for success or user cancellation.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Detailed description of the reason for failure. Empty on success, canceled by the user, or during detection.</p>
     */
    public $ErrMessage;

    /**
     * @var string <p>Solution recommendation in case of failure. Empty for success, canceled by the user, or in-progress detection.</p>
     */
    public $Solution;

    /**
     * @var BaselineClusterAsset <p>Cluster asset information returned when CheckAssetType=CLUSTER. Empty when CheckAssetType=HOST.</p>
     */
    public $ClusterAsset;

    /**
     * @param integer $ID <p>Subtask ID.</p>
     * @param integer $TaskID <p>ID of the main task it belongs to (corresponds to BaselineMainTask.ID).</p>
     * @param string $Status <p>Execution result of the subtask. Value:</p><ul><li>SUCCESS: successful</li><li>FAILED: failed</li><li>USER_CANCELED: canceled by the user</li><li>CHECKING: detecting</li><li>UNKNOWN: unknown status</li></ul>
     * @param integer $Appid <p>Appid of the tenant associated with the subtask.</p>
     * @param string $StartTime <p>Subtask start execution time.</p>
     * @param string $FinishTime <p>Subtask end time. If not ended, it is empty</p>
     * @param string $CheckAssetType <p>Detect asset major category, case-sensitive between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: host</li><li>CLUSTER: container cluster</li></ul>
     * @param BaselineHostAsset $HostAsset <p>Host asset information returned when CheckAssetType=HOST. Empty when CheckAssetType=CLUSTER.</p>
     * @param string $ErrCode <p>Status code: In case of failure, a failure code is returned (for example, AGENT_OFFLINE, SCAN_TIMEOUT, CLIENT_SCAN_FAILED). During detection, the detection status is returned. It is empty for success or user cancellation.</p>
     * @param string $ErrMessage <p>Detailed description of the reason for failure. Empty on success, canceled by the user, or during detection.</p>
     * @param string $Solution <p>Solution recommendation in case of failure. Empty for success, canceled by the user, or in-progress detection.</p>
     * @param BaselineClusterAsset $ClusterAsset <p>Cluster asset information returned when CheckAssetType=CLUSTER. Empty when CheckAssetType=HOST.</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
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

        if (array_key_exists("HostAsset",$param) and $param["HostAsset"] !== null) {
            $this->HostAsset = new BaselineHostAsset();
            $this->HostAsset->deserialize($param["HostAsset"]);
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

        if (array_key_exists("ClusterAsset",$param) and $param["ClusterAsset"] !== null) {
            $this->ClusterAsset = new BaselineClusterAsset();
            $this->ClusterAsset->deserialize($param["ClusterAsset"]);
        }
    }
}
