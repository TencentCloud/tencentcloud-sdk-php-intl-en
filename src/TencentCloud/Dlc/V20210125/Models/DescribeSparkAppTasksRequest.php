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
 * DescribeSparkAppTasks request structure.
 *
 * @method string getJobId() Obtain Spark job ID
 * @method void setJobId(string $JobId) Set Spark job ID
 * @method integer getOffset() Obtain Paginated query offset
 * @method void setOffset(integer $Offset) Set Paginated query offset
 * @method integer getLimit() Obtain Paginated query limit
 * @method void setLimit(integer $Limit) Set Paginated query limit
 * @method string getTaskId() Obtain Execution instance ID
 * @method void setTaskId(string $TaskId) Set Execution instance ID
 * @method string getStartTime() Obtain The update start time in the format of yyyy-MM-dd HH:mm:ss.
 * @method void setStartTime(string $StartTime) Set The update start time in the format of yyyy-MM-dd HH:mm:ss.
 * @method string getEndTime() Obtain The update end time in the format of yyyy-MM-dd HH:mm:ss.
 * @method void setEndTime(string $EndTime) Set The update end time in the format of yyyy-MM-dd HH:mm:ss.
 * @method array getFilters() Obtain Filter by this parameter, which can be `task-state`.
 * @method void setFilters(array $Filters) Set Filter by this parameter, which can be `task-state`.
 */
class DescribeSparkAppTasksRequest extends AbstractModel
{
    /**
     * @var string Spark job ID
     */
    public $JobId;

    /**
     * @var integer Paginated query offset
     */
    public $Offset;

    /**
     * @var integer Paginated query limit
     */
    public $Limit;

    /**
     * @var string Execution instance ID
     */
    public $TaskId;

    /**
     * @var string The update start time in the format of yyyy-MM-dd HH:mm:ss.
     */
    public $StartTime;

    /**
     * @var string The update end time in the format of yyyy-MM-dd HH:mm:ss.
     */
    public $EndTime;

    /**
     * @var array Filter by this parameter, which can be `task-state`.
     */
    public $Filters;

    /**
     * @param string $JobId Spark job ID
     * @param integer $Offset Paginated query offset
     * @param integer $Limit Paginated query limit
     * @param string $TaskId Execution instance ID
     * @param string $StartTime The update start time in the format of yyyy-MM-dd HH:mm:ss.
     * @param string $EndTime The update end time in the format of yyyy-MM-dd HH:mm:ss.
     * @param array $Filters Filter by this parameter, which can be `task-state`.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
