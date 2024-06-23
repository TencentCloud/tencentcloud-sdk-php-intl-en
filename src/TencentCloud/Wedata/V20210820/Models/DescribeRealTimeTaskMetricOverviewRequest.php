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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealTimeTaskMetricOverview request structure.
 *
 * @method string getTaskId() Obtain Task ID of the real-time task to be viewed, which can be obtained from the task list page
 * @method void setTaskId(string $TaskId) Set Task ID of the real-time task to be viewed, which can be obtained from the task list page
 * @method string getProjectId() Obtain Project ID to be viewed
 * @method void setProjectId(string $ProjectId) Set Project ID to be viewed
 * @method integer getStartTime() Obtain Start Time
 * @method void setStartTime(integer $StartTime) Set Start Time
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 */
class DescribeRealTimeTaskMetricOverviewRequest extends AbstractModel
{
    /**
     * @var string Task ID of the real-time task to be viewed, which can be obtained from the task list page
     */
    public $TaskId;

    /**
     * @var string Project ID to be viewed
     */
    public $ProjectId;

    /**
     * @var integer Start Time
     */
    public $StartTime;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @param string $TaskId Task ID of the real-time task to be viewed, which can be obtained from the task list page
     * @param string $ProjectId Project ID to be viewed
     * @param integer $StartTime Start Time
     * @param integer $EndTime End time
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
