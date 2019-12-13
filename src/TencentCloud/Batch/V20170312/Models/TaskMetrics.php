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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getSubmittedCount() 获取Submitted count
 * @method void setSubmittedCount(integer $SubmittedCount) 设置Submitted count
 * @method integer getPendingCount() 获取Pending count
 * @method void setPendingCount(integer $PendingCount) 设置Pending count
 * @method integer getRunnableCount() 获取Runnable count
 * @method void setRunnableCount(integer $RunnableCount) 设置Runnable count
 * @method integer getStartingCount() 获取Starting count
 * @method void setStartingCount(integer $StartingCount) 设置Starting count
 * @method integer getRunningCount() 获取Running count
 * @method void setRunningCount(integer $RunningCount) 设置Running count
 * @method integer getSucceedCount() 获取Succeed count
 * @method void setSucceedCount(integer $SucceedCount) 设置Succeed count
 * @method integer getFailedInterruptedCount() 获取FailedInterrupted count
 * @method void setFailedInterruptedCount(integer $FailedInterruptedCount) 设置FailedInterrupted count
 * @method integer getFailedCount() 获取Failed count
 * @method void setFailedCount(integer $FailedCount) 设置Failed count
 */

/**
 *Task statistical metrics
 */
class TaskMetrics extends AbstractModel
{
    /**
     * @var integer Submitted count
     */
    public $SubmittedCount;

    /**
     * @var integer Pending count
     */
    public $PendingCount;

    /**
     * @var integer Runnable count
     */
    public $RunnableCount;

    /**
     * @var integer Starting count
     */
    public $StartingCount;

    /**
     * @var integer Running count
     */
    public $RunningCount;

    /**
     * @var integer Succeed count
     */
    public $SucceedCount;

    /**
     * @var integer FailedInterrupted count
     */
    public $FailedInterruptedCount;

    /**
     * @var integer Failed count
     */
    public $FailedCount;
    /**
     * @param integer $SubmittedCount Submitted count
     * @param integer $PendingCount Pending count
     * @param integer $RunnableCount Runnable count
     * @param integer $StartingCount Starting count
     * @param integer $RunningCount Running count
     * @param integer $SucceedCount Succeed count
     * @param integer $FailedInterruptedCount FailedInterrupted count
     * @param integer $FailedCount Failed count
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SubmittedCount",$param) and $param["SubmittedCount"] !== null) {
            $this->SubmittedCount = $param["SubmittedCount"];
        }

        if (array_key_exists("PendingCount",$param) and $param["PendingCount"] !== null) {
            $this->PendingCount = $param["PendingCount"];
        }

        if (array_key_exists("RunnableCount",$param) and $param["RunnableCount"] !== null) {
            $this->RunnableCount = $param["RunnableCount"];
        }

        if (array_key_exists("StartingCount",$param) and $param["StartingCount"] !== null) {
            $this->StartingCount = $param["StartingCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("SucceedCount",$param) and $param["SucceedCount"] !== null) {
            $this->SucceedCount = $param["SucceedCount"];
        }

        if (array_key_exists("FailedInterruptedCount",$param) and $param["FailedInterruptedCount"] !== null) {
            $this->FailedInterruptedCount = $param["FailedInterruptedCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }
    }
}
