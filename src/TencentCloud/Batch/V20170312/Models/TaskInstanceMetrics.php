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
 * Task instance statistical metrics
 *
 * @method integer getSubmittedCount() Obtain Number of submitted tasks
 * @method void setSubmittedCount(integer $SubmittedCount) Set Number of submitted tasks
 * @method integer getPendingCount() Obtain Number of pending tasks
 * @method void setPendingCount(integer $PendingCount) Set Number of pending tasks
 * @method integer getRunnableCount() Obtain Number of Runnable tasks
 * @method void setRunnableCount(integer $RunnableCount) Set Number of Runnable tasks
 * @method integer getStartingCount() Obtain Number of starting tasks
 * @method void setStartingCount(integer $StartingCount) Set Number of starting tasks
 * @method integer getRunningCount() Obtain Number of running tasks
 * @method void setRunningCount(integer $RunningCount) Set Number of running tasks
 * @method integer getSucceedCount() Obtain Number of successful tasks
 * @method void setSucceedCount(integer $SucceedCount) Set Number of successful tasks
 * @method integer getFailedInterruptedCount() Obtain Number of failed and interrupted tasks
 * @method void setFailedInterruptedCount(integer $FailedInterruptedCount) Set Number of failed and interrupted tasks
 * @method integer getFailedCount() Obtain Number of failed tasks
 * @method void setFailedCount(integer $FailedCount) Set Number of failed tasks
 */
class TaskInstanceMetrics extends AbstractModel
{
    /**
     * @var integer Number of submitted tasks
     */
    public $SubmittedCount;

    /**
     * @var integer Number of pending tasks
     */
    public $PendingCount;

    /**
     * @var integer Number of Runnable tasks
     */
    public $RunnableCount;

    /**
     * @var integer Number of starting tasks
     */
    public $StartingCount;

    /**
     * @var integer Number of running tasks
     */
    public $RunningCount;

    /**
     * @var integer Number of successful tasks
     */
    public $SucceedCount;

    /**
     * @var integer Number of failed and interrupted tasks
     */
    public $FailedInterruptedCount;

    /**
     * @var integer Number of failed tasks
     */
    public $FailedCount;

    /**
     * @param integer $SubmittedCount Number of submitted tasks
     * @param integer $PendingCount Number of pending tasks
     * @param integer $RunnableCount Number of Runnable tasks
     * @param integer $StartingCount Number of starting tasks
     * @param integer $RunningCount Number of running tasks
     * @param integer $SucceedCount Number of successful tasks
     * @param integer $FailedInterruptedCount Number of failed and interrupted tasks
     * @param integer $FailedCount Number of failed tasks
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
