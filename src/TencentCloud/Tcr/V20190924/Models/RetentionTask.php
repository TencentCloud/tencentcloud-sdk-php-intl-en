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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule of tag retention task execution
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method integer getExecutionId() Obtain Rule execution ID
 * @method void setExecutionId(integer $ExecutionId) Set Rule execution ID
 * @method string getStartTime() Obtain Task start time
 * @method void setStartTime(string $StartTime) Set Task start time
 * @method string getEndTime() Obtain Task end time
 * @method void setEndTime(string $EndTime) Set Task end time
 * @method string getStatus() Obtain Task execution status. Valid values: Failed, Succeed, Stopped, InProgress.
 * @method void setStatus(string $Status) Set Task execution status. Valid values: Failed, Succeed, Stopped, InProgress.
 * @method integer getTotal() Obtain Total number of tags
 * @method void setTotal(integer $Total) Set Total number of tags
 * @method integer getRetained() Obtain Number of retained tags
 * @method void setRetained(integer $Retained) Set Number of retained tags
 * @method string getRepository() Obtain Application repository
 * @method void setRepository(string $Repository) Set Application repository
 */
class RetentionTask extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var integer Rule execution ID
     */
    public $ExecutionId;

    /**
     * @var string Task start time
     */
    public $StartTime;

    /**
     * @var string Task end time
     */
    public $EndTime;

    /**
     * @var string Task execution status. Valid values: Failed, Succeed, Stopped, InProgress.
     */
    public $Status;

    /**
     * @var integer Total number of tags
     */
    public $Total;

    /**
     * @var integer Number of retained tags
     */
    public $Retained;

    /**
     * @var string Application repository
     */
    public $Repository;

    /**
     * @param integer $TaskId Task ID
     * @param integer $ExecutionId Rule execution ID
     * @param string $StartTime Task start time
     * @param string $EndTime Task end time
     * @param string $Status Task execution status. Valid values: Failed, Succeed, Stopped, InProgress.
     * @param integer $Total Total number of tags
     * @param integer $Retained Number of retained tags
     * @param string $Repository Application repository
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

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Retained",$param) and $param["Retained"] !== null) {
            $this->Retained = $param["Retained"];
        }

        if (array_key_exists("Repository",$param) and $param["Repository"] !== null) {
            $this->Repository = $param["Repository"];
        }
    }
}
