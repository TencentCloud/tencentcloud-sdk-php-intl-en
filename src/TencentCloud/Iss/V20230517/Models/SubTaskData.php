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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subtask details
 *
 * @method string getSubTaskId() Obtain Subtask ID
 * @method void setSubTaskId(string $SubTaskId) Set Subtask ID
 * @method integer getStatus() Obtain Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
 * @method void setStatus(integer $Status) Set Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
 * @method string getFailReason() Obtain Cause of the task failure.
 * @method void setFailReason(string $FailReason) Set Cause of the task failure.
 * @method float getProgress() Obtain Task progress
 * @method void setProgress(float $Progress) Set Task progress
 * @method string getAction() Obtain Operation type.
 * @method void setAction(string $Action) Set Operation type.
 * @method string getActionZhDesc() Obtain Operation type Chinese description
 * @method void setActionZhDesc(string $ActionZhDesc) Set Operation type Chinese description
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getStartedAt() Obtain Task start time
 * @method void setStartedAt(string $StartedAt) Set Task start time
 * @method string getCreatedAt() Obtain Task creation time
 * @method void setCreatedAt(string $CreatedAt) Set Task creation time
 * @method string getUpdatedAt() Obtain Task update time
 * @method void setUpdatedAt(string $UpdatedAt) Set Task update time
 * @method integer getRuntime() Obtain Task running time in milliseconds
 * @method void setRuntime(integer $Runtime) Set Task running time in milliseconds
 * @method string getDeviceId() Obtain Device ID
 * @method void setDeviceId(string $DeviceId) Set Device ID
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getChannelName() Obtain Channel name
 * @method void setChannelName(string $ChannelName) Set Channel name
 */
class SubTaskData extends AbstractModel
{
    /**
     * @var string Subtask ID
     */
    public $SubTaskId;

    /**
     * @var integer Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
     */
    public $Status;

    /**
     * @var string Cause of the task failure.
     */
    public $FailReason;

    /**
     * @var float Task progress
     */
    public $Progress;

    /**
     * @var string Operation type.
     */
    public $Action;

    /**
     * @var string Operation type Chinese description
     */
    public $ActionZhDesc;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Task start time
     */
    public $StartedAt;

    /**
     * @var string Task creation time
     */
    public $CreatedAt;

    /**
     * @var string Task update time
     */
    public $UpdatedAt;

    /**
     * @var integer Task running time in milliseconds
     */
    public $Runtime;

    /**
     * @var string Device ID
     */
    public $DeviceId;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Channel name
     */
    public $ChannelName;

    /**
     * @param string $SubTaskId Subtask ID
     * @param integer $Status Task status. 1: NEW, 2: RUNNING, 3: COMPLETED, 4: FAILED
     * @param string $FailReason Cause of the task failure.
     * @param float $Progress Task progress
     * @param string $Action Operation type.
     * @param string $ActionZhDesc Operation type Chinese description
     * @param string $ResourceId Resource ID
     * @param string $StartedAt Task start time
     * @param string $CreatedAt Task creation time
     * @param string $UpdatedAt Task update time
     * @param integer $Runtime Task running time in milliseconds
     * @param string $DeviceId Device ID
     * @param string $DeviceName Device name.
     * @param string $ChannelId Channel ID
     * @param string $ChannelName Channel name
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
        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionZhDesc",$param) and $param["ActionZhDesc"] !== null) {
            $this->ActionZhDesc = $param["ActionZhDesc"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
