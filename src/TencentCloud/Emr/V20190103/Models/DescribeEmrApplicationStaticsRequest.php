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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrApplicationStatics request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method integer getStartTime() Obtain Start time in the format of timestamp. Unit: seconds.
 * @method void setStartTime(integer $StartTime) Set Start time in the format of timestamp. Unit: seconds.
 * @method integer getEndTime() Obtain End time in the format of timestamp. Unit: seconds.
 * @method void setEndTime(integer $EndTime) Set End time in the format of timestamp. Unit: seconds.
 * @method array getQueues() Obtain Queue name used for filtering
 * @method void setQueues(array $Queues) Set Queue name used for filtering
 * @method array getUsers() Obtain Username used for filtering
 * @method void setUsers(array $Users) Set Username used for filtering
 * @method array getApplicationTypes() Obtain Application type used for filtering
 * @method void setApplicationTypes(array $ApplicationTypes) Set Application type used for filtering
 * @method array getGroupBy() Obtain Group field. Valid values: `queue`, `user`, and `applicationType`.
 * @method void setGroupBy(array $GroupBy) Set Group field. Valid values: `queue`, `user`, and `applicationType`.
 * @method string getOrderBy() Obtain Sorting field. Valid values: `sumMemorySeconds`, `sumVCoreSeconds`, `sumHDFSBytesWritten`, and `sumHDFSBytesRead`.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values: `sumMemorySeconds`, `sumVCoreSeconds`, `sumHDFSBytesWritten`, and `sumHDFSBytesRead`.
 * @method integer getIsAsc() Obtain Order type. Valid values: `0` (descending) and `1`(ascending).
 * @method void setIsAsc(integer $IsAsc) Set Order type. Valid values: `0` (descending) and `1`(ascending).
 * @method integer getOffset() Obtain Page number
 * @method void setOffset(integer $Offset) Set Page number
 * @method integer getLimit() Obtain Page limit
 * @method void setLimit(integer $Limit) Set Page limit
 */
class DescribeEmrApplicationStaticsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var integer Start time in the format of timestamp. Unit: seconds.
     */
    public $StartTime;

    /**
     * @var integer End time in the format of timestamp. Unit: seconds.
     */
    public $EndTime;

    /**
     * @var array Queue name used for filtering
     */
    public $Queues;

    /**
     * @var array Username used for filtering
     */
    public $Users;

    /**
     * @var array Application type used for filtering
     */
    public $ApplicationTypes;

    /**
     * @var array Group field. Valid values: `queue`, `user`, and `applicationType`.
     */
    public $GroupBy;

    /**
     * @var string Sorting field. Valid values: `sumMemorySeconds`, `sumVCoreSeconds`, `sumHDFSBytesWritten`, and `sumHDFSBytesRead`.
     */
    public $OrderBy;

    /**
     * @var integer Order type. Valid values: `0` (descending) and `1`(ascending).
     */
    public $IsAsc;

    /**
     * @var integer Page number
     */
    public $Offset;

    /**
     * @var integer Page limit
     */
    public $Limit;

    /**
     * @param string $InstanceId Cluster ID
     * @param integer $StartTime Start time in the format of timestamp. Unit: seconds.
     * @param integer $EndTime End time in the format of timestamp. Unit: seconds.
     * @param array $Queues Queue name used for filtering
     * @param array $Users Username used for filtering
     * @param array $ApplicationTypes Application type used for filtering
     * @param array $GroupBy Group field. Valid values: `queue`, `user`, and `applicationType`.
     * @param string $OrderBy Sorting field. Valid values: `sumMemorySeconds`, `sumVCoreSeconds`, `sumHDFSBytesWritten`, and `sumHDFSBytesRead`.
     * @param integer $IsAsc Order type. Valid values: `0` (descending) and `1`(ascending).
     * @param integer $Offset Page number
     * @param integer $Limit Page limit
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
