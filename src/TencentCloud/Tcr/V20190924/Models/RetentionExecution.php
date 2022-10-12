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
 * Tag retention rule execution
 *
 * @method integer getExecutionId() Obtain Execution ID
 * @method void setExecutionId(integer $ExecutionId) Set Execution ID
 * @method integer getRetentionId() Obtain Rule ID
 * @method void setRetentionId(integer $RetentionId) Set Rule ID
 * @method string getStartTime() Obtain Execution start time
 * @method void setStartTime(string $StartTime) Set Execution start time
 * @method string getEndTime() Obtain Execution end time
 * @method void setEndTime(string $EndTime) Set Execution end time
 * @method string getStatus() Obtain Execution status. Valid values: Failed, Succeed, Stopped, InProgress.
 * @method void setStatus(string $Status) Set Execution status. Valid values: Failed, Succeed, Stopped, InProgress.
 */
class RetentionExecution extends AbstractModel
{
    /**
     * @var integer Execution ID
     */
    public $ExecutionId;

    /**
     * @var integer Rule ID
     */
    public $RetentionId;

    /**
     * @var string Execution start time
     */
    public $StartTime;

    /**
     * @var string Execution end time
     */
    public $EndTime;

    /**
     * @var string Execution status. Valid values: Failed, Succeed, Stopped, InProgress.
     */
    public $Status;

    /**
     * @param integer $ExecutionId Execution ID
     * @param integer $RetentionId Rule ID
     * @param string $StartTime Execution start time
     * @param string $EndTime Execution end time
     * @param string $Status Execution status. Valid values: Failed, Succeed, Stopped, InProgress.
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
        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
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
    }
}
