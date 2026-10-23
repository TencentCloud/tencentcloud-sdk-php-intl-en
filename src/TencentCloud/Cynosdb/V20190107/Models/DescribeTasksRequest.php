<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks request structure.
 *
 * @method string getStartTimeBegin() Obtain Starting value of task start time
 * @method void setStartTimeBegin(string $StartTimeBegin) Set Starting value of task start time
 * @method string getStartTimeEnd() Obtain End value of the task start time
 * @method void setStartTimeEnd(string $StartTimeEnd) Set End value of the task start time
 * @method array getFilters() Obtain Filter criteria. Supported search fields: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", "TaskType"
 * @method void setFilters(array $Filters) Set Filter criteria. Supported search fields: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", "TaskType"
 * @method integer getLimit() Obtain Query the list length
 * @method void setLimit(integer $Limit) Set Query the list length
 * @method integer getOffset() Obtain List offset for queries
 * @method void setOffset(integer $Offset) Set List offset for queries
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string Starting value of task start time
     */
    public $StartTimeBegin;

    /**
     * @var string End value of the task start time
     */
    public $StartTimeEnd;

    /**
     * @var array Filter criteria. Supported search fields: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", "TaskType"
     */
    public $Filters;

    /**
     * @var integer Query the list length
     */
    public $Limit;

    /**
     * @var integer List offset for queries
     */
    public $Offset;

    /**
     * @param string $StartTimeBegin Starting value of task start time
     * @param string $StartTimeEnd End value of the task start time
     * @param array $Filters Filter criteria. Supported search fields: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", "TaskType"
     * @param integer $Limit Query the list length
     * @param integer $Offset List offset for queries
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
        if (array_key_exists("StartTimeBegin",$param) and $param["StartTimeBegin"] !== null) {
            $this->StartTimeBegin = $param["StartTimeBegin"];
        }

        if (array_key_exists("StartTimeEnd",$param) and $param["StartTimeEnd"] !== null) {
            $this->StartTimeEnd = $param["StartTimeEnd"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
