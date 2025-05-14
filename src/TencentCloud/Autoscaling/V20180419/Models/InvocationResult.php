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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the command execution
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInvocationId() Obtain Execution activity ID.
 * @method void setInvocationId(string $InvocationId) Set Execution activity ID.
 * @method string getInvocationTaskId() Obtain Task ID.
 * @method void setInvocationTaskId(string $InvocationTaskId) Set Task ID.
 * @method string getCommandId() Obtain Command ID.
 * @method void setCommandId(string $CommandId) Set Command ID.
 * @method string getTaskStatus() Obtain Specifies the execution task status.
 * @method void setTaskStatus(string $TaskStatus) Set Specifies the execution task status.
 * @method string getErrorMessage() Obtain Specifies the exception information during execution.
 * @method void setErrorMessage(string $ErrorMessage) Set Specifies the exception information during execution.
 */
class InvocationResult extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Execution activity ID.
     */
    public $InvocationId;

    /**
     * @var string Task ID.
     */
    public $InvocationTaskId;

    /**
     * @var string Command ID.
     */
    public $CommandId;

    /**
     * @var string Specifies the execution task status.
     */
    public $TaskStatus;

    /**
     * @var string Specifies the exception information during execution.
     */
    public $ErrorMessage;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InvocationId Execution activity ID.
     * @param string $InvocationTaskId Task ID.
     * @param string $CommandId Command ID.
     * @param string $TaskStatus Specifies the execution task status.
     * @param string $ErrorMessage Specifies the exception information during execution.
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
