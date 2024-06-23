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
 * DescribeRealTimeTaskSpeed request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method integer getStartTime() Obtain Timestamp with Milliseconds
 * @method void setStartTime(integer $StartTime) Set Timestamp with Milliseconds
 * @method integer getEndTime() Obtain Timestamp with Milliseconds
 * @method void setEndTime(integer $EndTime) Set Timestamp with Milliseconds
 * @method integer getGranularity() Obtain Granularity, 1 or 5
 * @method void setGranularity(integer $Granularity) Set Granularity, 1 or 5
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class DescribeRealTimeTaskSpeedRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var integer Timestamp with Milliseconds
     */
    public $StartTime;

    /**
     * @var integer Timestamp with Milliseconds
     */
    public $EndTime;

    /**
     * @var integer Granularity, 1 or 5
     */
    public $Granularity;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param string $TaskId Task ID
     * @param integer $StartTime Timestamp with Milliseconds
     * @param integer $EndTime Timestamp with Milliseconds
     * @param integer $Granularity Granularity, 1 or 5
     * @param string $ProjectId Project ID
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
