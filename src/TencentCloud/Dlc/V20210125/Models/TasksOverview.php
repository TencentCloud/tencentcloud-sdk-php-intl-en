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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The task overview.
 *
 * @method integer getTaskQueuedCount() Obtain The number of tasks in queue.
 * @method void setTaskQueuedCount(integer $TaskQueuedCount) Set The number of tasks in queue.
 * @method integer getTaskInitCount() Obtain The number of initialized tasks.
 * @method void setTaskInitCount(integer $TaskInitCount) Set The number of initialized tasks.
 * @method integer getTaskRunningCount() Obtain The number of tasks in progress.
 * @method void setTaskRunningCount(integer $TaskRunningCount) Set The number of tasks in progress.
 * @method integer getTotalTaskCount() Obtain The total number of tasks in this time range.
 * @method void setTotalTaskCount(integer $TotalTaskCount) Set The total number of tasks in this time range.
 */
class TasksOverview extends AbstractModel
{
    /**
     * @var integer The number of tasks in queue.
     */
    public $TaskQueuedCount;

    /**
     * @var integer The number of initialized tasks.
     */
    public $TaskInitCount;

    /**
     * @var integer The number of tasks in progress.
     */
    public $TaskRunningCount;

    /**
     * @var integer The total number of tasks in this time range.
     */
    public $TotalTaskCount;

    /**
     * @param integer $TaskQueuedCount The number of tasks in queue.
     * @param integer $TaskInitCount The number of initialized tasks.
     * @param integer $TaskRunningCount The number of tasks in progress.
     * @param integer $TotalTaskCount The total number of tasks in this time range.
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
        if (array_key_exists("TaskQueuedCount",$param) and $param["TaskQueuedCount"] !== null) {
            $this->TaskQueuedCount = $param["TaskQueuedCount"];
        }

        if (array_key_exists("TaskInitCount",$param) and $param["TaskInitCount"] !== null) {
            $this->TaskInitCount = $param["TaskInitCount"];
        }

        if (array_key_exists("TaskRunningCount",$param) and $param["TaskRunningCount"] !== null) {
            $this->TaskRunningCount = $param["TaskRunningCount"];
        }

        if (array_key_exists("TotalTaskCount",$param) and $param["TotalTaskCount"] !== null) {
            $this->TotalTaskCount = $param["TotalTaskCount"];
        }
    }
}
