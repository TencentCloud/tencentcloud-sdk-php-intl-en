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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixTaskDetail request structure.
 *
 * @method integer getTaskId() Obtain <p>Repair task ID</p>
 * @method void setTaskId(integer $TaskId) Set <p>Repair task ID</p>
 * @method integer getOffset() Obtain <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method array getFilters() Obtain <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - Exact match, filter by host instance ID<br>VulId - Exact match, filter by vulnerability ID, filter out hosts under a certain vulnerability<br>KBId - Exact match, filter by KB Patch ID, filter out hosts under a certain KB patch<br>Status - Exact match, filter by execution status: 0-Initial status 1-Issued 11-Client confirmed 2-Repair completed 3-Client offline 4-Timeout 5-Failure 6-No support 9-Waiting for snapshot creation to complete 10-Snapshot creation failed<br>FixStatus - Exact match, filter by repair result: 0-Initial status 1-Repair successful 2-Fix failure<br>SnapshotStatus - Exact match, filter by snapshot status: -1-No need to create snapshot 0-Not started 1-In progress 2-Completed 3-Creation failure</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - Exact match, filter by host instance ID<br>VulId - Exact match, filter by vulnerability ID, filter out hosts under a certain vulnerability<br>KBId - Exact match, filter by KB Patch ID, filter out hosts under a certain KB patch<br>Status - Exact match, filter by execution status: 0-Initial status 1-Issued 11-Client confirmed 2-Repair completed 3-Client offline 4-Timeout 5-Failure 6-No support 9-Waiting for snapshot creation to complete 10-Snapshot creation failed<br>FixStatus - Exact match, filter by repair result: 0-Initial status 1-Repair successful 2-Fix failure<br>SnapshotStatus - Exact match, filter by snapshot status: -1-No need to create snapshot 0-Not started 1-In progress 2-Completed 3-Creation failure</p>
 * @method string getOrder() Obtain <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time</p>
 * @method void setOrder(string $Order) Set <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time</p>
 * @method string getBy() Obtain <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending<br>Default value: desc</p>
 * @method void setBy(string $By) Set <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending<br>Default value: desc</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeVulFixTaskDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>Repair task ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - Exact match, filter by host instance ID<br>VulId - Exact match, filter by vulnerability ID, filter out hosts under a certain vulnerability<br>KBId - Exact match, filter by KB Patch ID, filter out hosts under a certain KB patch<br>Status - Exact match, filter by execution status: 0-Initial status 1-Issued 11-Client confirmed 2-Repair completed 3-Client offline 4-Timeout 5-Failure 6-No support 9-Waiting for snapshot creation to complete 10-Snapshot creation failed<br>FixStatus - Exact match, filter by repair result: 0-Initial status 1-Repair successful 2-Fix failure<br>SnapshotStatus - Exact match, filter by snapshot status: -1-No need to create snapshot 0-Not started 1-In progress 2-Completed 3-Creation failure</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending<br>Default value: desc</p>
     */
    public $By;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $TaskId <p>Repair task ID</p>
     * @param integer $Offset <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     * @param integer $Limit <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     * @param array $Filters <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - Exact match, filter by host instance ID<br>VulId - Exact match, filter by vulnerability ID, filter out hosts under a certain vulnerability<br>KBId - Exact match, filter by KB Patch ID, filter out hosts under a certain KB patch<br>Status - Exact match, filter by execution status: 0-Initial status 1-Issued 11-Client confirmed 2-Repair completed 3-Client offline 4-Timeout 5-Failure 6-No support 9-Waiting for snapshot creation to complete 10-Snapshot creation failed<br>FixStatus - Exact match, filter by repair result: 0-Initial status 1-Repair successful 2-Fix failure<br>SnapshotStatus - Exact match, filter by snapshot status: -1-No need to create snapshot 0-Not started 1-In progress 2-Completed 3-Creation failure</p>
     * @param string $Order <p>Sorting field<br>Enumeration value:<br>StartTime: Sort by repair start time<br>EndTime: Sort by repair end time</p>
     * @param string $By <p>Sorting method<br>Enumeration value:<br>asc: Ascending<br>desc: Descending<br>Default value: desc</p>
     * @param array $MemberId Group Account Member ID
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
