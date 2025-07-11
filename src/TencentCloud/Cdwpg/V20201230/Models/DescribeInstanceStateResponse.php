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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceState response structure.
 *
 * @method string getInstanceState() Obtain Instance status. Example: serving.
 * @method void setInstanceState(string $InstanceState) Set Instance status. Example: serving.
 * @method string getFlowCreateTime() Obtain Creation time of instance operation.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowCreateTime(string $FlowCreateTime) Set Creation time of instance operation.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowName() Obtain Instance operation name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowName(string $FlowName) Set Instance operation name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getFlowProgress() Obtain Instance operation progress.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowProgress(float $FlowProgress) Set Instance operation progress.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceStateDesc() Obtain Instance status description. Example: running.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStateDesc(string $InstanceStateDesc) Set Instance status description. Example: running.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowMsg() Obtain Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowMsg(string $FlowMsg) Set Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessName() Obtain The name of the current step. Example: "Purchasing resources."Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessName(string $ProcessName) Set The name of the current step. Example: "Purchasing resources."Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupStatus() Obtain Enabling status of the instance backup task.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupStatus(integer $BackupStatus) Set Enabling status of the instance backup task.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeInstanceStateResponse extends AbstractModel
{
    /**
     * @var string Instance status. Example: serving.
     */
    public $InstanceState;

    /**
     * @var string Creation time of instance operation.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowCreateTime;

    /**
     * @var string Instance operation name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowName;

    /**
     * @var float Instance operation progress.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowProgress;

    /**
     * @var string Instance status description. Example: running.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStateDesc;

    /**
     * @var string Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowMsg;

    /**
     * @var string The name of the current step. Example: "Purchasing resources."Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessName;

    /**
     * @var integer Enabling status of the instance backup task.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupStatus;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceState Instance status. Example: serving.
     * @param string $FlowCreateTime Creation time of instance operation.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowName Instance operation name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $FlowProgress Instance operation progress.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceStateDesc Instance status description. Example: running.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowMsg Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessName The name of the current step. Example: "Purchasing resources."Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupStatus Enabling status of the instance backup task.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("FlowCreateTime",$param) and $param["FlowCreateTime"] !== null) {
            $this->FlowCreateTime = $param["FlowCreateTime"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowProgress",$param) and $param["FlowProgress"] !== null) {
            $this->FlowProgress = $param["FlowProgress"];
        }

        if (array_key_exists("InstanceStateDesc",$param) and $param["InstanceStateDesc"] !== null) {
            $this->InstanceStateDesc = $param["InstanceStateDesc"];
        }

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
