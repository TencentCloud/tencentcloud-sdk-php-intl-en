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
 * DescribeTask request structure.
 *
 * @method string getJobId() Obtain Job ID
 * @method void setJobId(string $JobId) Set Job ID
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Number of returned results. Default value: 100. Maximum value: 1,000.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 100. Maximum value: 1,000.
 * @method array getFilters() Obtain Filter as detailed below:
<li> `task-instance-type` - String - Optional - Filter by the task instance state. (`SUBMITTED`, `PENDING`, `RUNNABLE`, `STARTING`, `RUNNING`, `SUCCEED`, `FAILED`, `FAILED_INTERRUPTED`).</li>
 * @method void setFilters(array $Filters) Set Filter as detailed below:
<li> `task-instance-type` - String - Optional - Filter by the task instance state. (`SUBMITTED`, `PENDING`, `RUNNABLE`, `STARTING`, `RUNNING`, `SUCCEED`, `FAILED`, `FAILED_INTERRUPTED`).</li>
 */
class DescribeTaskRequest extends AbstractModel
{
    /**
     * @var string Job ID
     */
    public $JobId;

    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 100. Maximum value: 1,000.
     */
    public $Limit;

    /**
     * @var array Filter as detailed below:
<li> `task-instance-type` - String - Optional - Filter by the task instance state. (`SUBMITTED`, `PENDING`, `RUNNABLE`, `STARTING`, `RUNNING`, `SUCCEED`, `FAILED`, `FAILED_INTERRUPTED`).</li>
     */
    public $Filters;

    /**
     * @param string $JobId Job ID
     * @param string $TaskName Task name
     * @param integer $Offset Offset
     * @param integer $Limit Number of returned results. Default value: 100. Maximum value: 1,000.
     * @param array $Filters Filter as detailed below:
<li> `task-instance-type` - String - Optional - Filter by the task instance state. (`SUBMITTED`, `PENDING`, `RUNNABLE`, `STARTING`, `RUNNING`, `SUCCEED`, `FAILED`, `FAILED_INTERRUPTED`).</li>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
