<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the command execution
 *
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInvocationId() Obtain Execution activity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInvocationId(string $InvocationId) Set Execution activity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInvocationTaskId() Obtain Execution task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInvocationTaskId(string $InvocationTaskId) Set Execution task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCommandId() Obtain Command ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCommandId(string $CommandId) Set Command ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskStatus() Obtain Execution Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(string $TaskStatus) Set Execution Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Execution exception information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Execution exception information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InvocationResult extends AbstractModel
{
    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Execution activity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InvocationId;

    /**
     * @var string Execution task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InvocationTaskId;

    /**
     * @var string Command ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CommandId;

    /**
     * @var string Execution Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var string Execution exception information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @param string $InstanceId Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InvocationId Execution activity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InvocationTaskId Execution task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CommandId Command ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskStatus Execution Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Execution exception information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InvocationTaskId",$param) and $param["InvocationTaskId"] !== null) {
            $this->InvocationTaskId = $param["InvocationTaskId"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
