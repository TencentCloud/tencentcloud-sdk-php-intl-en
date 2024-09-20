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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTaskRunStatus request structure.
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method integer getStatus() Obtain Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
 * @method void setStatus(integer $Status) Set Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
 * @method boolean getIsExpect() Obtain Whether the execution result meets expectations (This field is required when the task status is Execution Ended.)
 * @method void setIsExpect(boolean $IsExpect) Set Whether the execution result meets expectations (This field is required when the task status is Execution Ended.)
 * @method string getSummary() Obtain Experiment result (This field is required when the experiment status changes to Execution Ended.)
 * @method void setSummary(string $Summary) Set Experiment result (This field is required when the experiment status changes to Execution Ended.)
 */
class ModifyTaskRunStatusRequest extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var integer Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
     */
    public $Status;

    /**
     * @var boolean Whether the execution result meets expectations (This field is required when the task status is Execution Ended.)
     */
    public $IsExpect;

    /**
     * @var string Experiment result (This field is required when the experiment status changes to Execution Ended.)
     */
    public $Summary;

    /**
     * @param integer $TaskId Task ID
     * @param integer $Status Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
     * @param boolean $IsExpect Whether the execution result meets expectations (This field is required when the task status is Execution Ended.)
     * @param string $Summary Experiment result (This field is required when the experiment status changes to Execution Ended.)
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsExpect",$param) and $param["IsExpect"] !== null) {
            $this->IsExpect = $param["IsExpect"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }
    }
}
