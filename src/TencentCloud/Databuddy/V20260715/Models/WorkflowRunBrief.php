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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operating status of the workflow list item
 *
 * @method string getWorkflowRunId() Obtain Workflow running ID
 * @method void setWorkflowRunId(string $WorkflowRunId) Set Workflow running ID
 * @method string getRunStartTime() Obtain Start time in milliseconds.
 * @method void setRunStartTime(string $RunStartTime) Set Start time in milliseconds.
 * @method string getRunState() Obtain <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("SUCCESS"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
 * @method void setRunState(string $RunState) Set <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("SUCCESS"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
 * @method string getErrorCodeString() Obtain Runtime error code
 * @method void setErrorCodeString(string $ErrorCodeString) Set Runtime error code
 */
class WorkflowRunBrief extends AbstractModel
{
    /**
     * @var string Workflow running ID
     */
    public $WorkflowRunId;

    /**
     * @var string Start time in milliseconds.
     */
    public $RunStartTime;

    /**
     * @var string <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("SUCCESS"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
     */
    public $RunState;

    /**
     * @var string Runtime error code
     */
    public $ErrorCodeString;

    /**
     * @param string $WorkflowRunId Workflow running ID
     * @param string $RunStartTime Start time in milliseconds.
     * @param string $RunState <p>RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("SUCCESS"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
     * @param string $ErrorCodeString Runtime error code
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
        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
        }
    }
}
