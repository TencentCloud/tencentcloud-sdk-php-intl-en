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
 * @method string getStartTimeBegin() Obtain Starting value of the task start time.
 * @method void setStartTimeBegin(string $StartTimeBegin) Set Starting value of the task start time.
 * @method string getStartTimeEnd() Obtain End value of the task start time.
 * @method void setStartTimeEnd(string $StartTimeEnd) Set End value of the task start time.
 * @method array getFilters() Obtain Filtering conditions. Supported fields for searching: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", and "TaskType".
 * @method void setFilters(array $Filters) Set Filtering conditions. Supported fields for searching: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", and "TaskType".
 * @method integer getLimit() Obtain Length of the list to be queried.
 * @method void setLimit(integer $Limit) Set Length of the list to be queried.
 * @method integer getOffset() Obtain Offset of the list to be queried.
 * @method void setOffset(integer $Offset) Set Offset of the list to be queried.
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string Starting value of the task start time.
     */
    public $StartTimeBegin;

    /**
     * @var string End value of the task start time.
     */
    public $StartTimeEnd;

    /**
     * @var array Filtering conditions. Supported fields for searching: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", and "TaskType".
     */
    public $Filters;

    /**
     * @var integer Length of the list to be queried.
     */
    public $Limit;

    /**
     * @var integer Offset of the list to be queried.
     */
    public $Offset;

    /**
     * @param string $StartTimeBegin Starting value of the task start time.
     * @param string $StartTimeEnd End value of the task start time.
     * @param array $Filters Filtering conditions. Supported fields for searching: "ClusterId", "ClusterName", "InstanceId", "InstanceName", "Status", "TaskId", and "TaskType".
     * @param integer $Limit Length of the list to be queried.
     * @param integer $Offset Offset of the list to be queried.
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
