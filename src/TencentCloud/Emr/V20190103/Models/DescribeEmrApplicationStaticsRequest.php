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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrApplicationStatics request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Start timestamp (s).
 * @method void setStartTime(integer $StartTime) Set Start timestamp (s).
 * @method integer getEndTime() Obtain End timestamp (s).
 * @method void setEndTime(integer $EndTime) Set End timestamp (s).
 * @method array getQueues() Obtain Filtered queue name.
 * @method void setQueues(array $Queues) Set Filtered queue name.
 * @method array getUsers() Obtain Filtered username.
 * @method void setUsers(array $Users) Set Filtered username.
 * @method array getApplicationTypes() Obtain Filtered job type.
 * @method void setApplicationTypes(array $ApplicationTypes) Set Filtered job type.
 * @method array getGroupBy() Obtain Grouping field. Valid values: queue, user, and applicationType.
 * @method void setGroupBy(array $GroupBy) Set Grouping field. Valid values: queue, user, and applicationType.
 * @method string getOrderBy() Obtain Sorting field. Valid values: sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, and sumHDFSBytesRead.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values: sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, and sumHDFSBytesRead.
 * @method integer getIsAsc() Obtain Sorting order. Valid values: 0 (descending) and 1 (ascending).
 * @method void setIsAsc(integer $IsAsc) Set Sorting order. Valid values: 0 (descending) and 1 (ascending).
 * @method integer getOffset() Obtain Page number.
 * @method void setOffset(integer $Offset) Set Page number.
 * @method integer getLimit() Obtain Number of entries per page. Value range: [10, 100].
 * @method void setLimit(integer $Limit) Set Number of entries per page. Value range: [10, 100].
 */
class DescribeEmrApplicationStaticsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Start timestamp (s).
     */
    public $StartTime;

    /**
     * @var integer End timestamp (s).
     */
    public $EndTime;

    /**
     * @var array Filtered queue name.
     */
    public $Queues;

    /**
     * @var array Filtered username.
     */
    public $Users;

    /**
     * @var array Filtered job type.
     */
    public $ApplicationTypes;

    /**
     * @var array Grouping field. Valid values: queue, user, and applicationType.
     */
    public $GroupBy;

    /**
     * @var string Sorting field. Valid values: sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, and sumHDFSBytesRead.
     */
    public $OrderBy;

    /**
     * @var integer Sorting order. Valid values: 0 (descending) and 1 (ascending).
     */
    public $IsAsc;

    /**
     * @var integer Page number.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Value range: [10, 100].
     */
    public $Limit;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Start timestamp (s).
     * @param integer $EndTime End timestamp (s).
     * @param array $Queues Filtered queue name.
     * @param array $Users Filtered username.
     * @param array $ApplicationTypes Filtered job type.
     * @param array $GroupBy Grouping field. Valid values: queue, user, and applicationType.
     * @param string $OrderBy Sorting field. Valid values: sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, and sumHDFSBytesRead.
     * @param integer $IsAsc Sorting order. Valid values: 0 (descending) and 1 (ascending).
     * @param integer $Offset Page number.
     * @param integer $Limit Number of entries per page. Value range: [10, 100].
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Queues",$param) and $param["Queues"] !== null) {
            $this->Queues = $param["Queues"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("ApplicationTypes",$param) and $param["ApplicationTypes"] !== null) {
            $this->ApplicationTypes = $param["ApplicationTypes"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("IsAsc",$param) and $param["IsAsc"] !== null) {
            $this->IsAsc = $param["IsAsc"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
