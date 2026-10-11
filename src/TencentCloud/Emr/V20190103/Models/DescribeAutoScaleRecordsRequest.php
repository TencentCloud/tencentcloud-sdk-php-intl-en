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
 * DescribeAutoScaleRecords request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getFilters() Obtain Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), and 5 (IN_RETRY).
ScaleAction: 1 (scale-out) and 2 (scale-in).

 * @method void setFilters(array $Filters) Set Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), and 5 (IN_RETRY).
ScaleAction: 1 (scale-out) and 2 (scale-in).

 * @method integer getOffset() Obtain Pagination parameter.
 * @method void setOffset(integer $Offset) Set Pagination parameter.
 * @method integer getLimit() Obtain Number of entries per page. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Maximum value: 100.
 * @method integer getRecordSource() Obtain Whether it is an auto scaling (0) or managed scaling (1) operation.
 * @method void setRecordSource(integer $RecordSource) Set Whether it is an auto scaling (0) or managed scaling (1) operation.
 * @method integer getAsc() Obtain Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
 * @method void setAsc(integer $Asc) Set Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
 */
class DescribeAutoScaleRecordsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), and 5 (IN_RETRY).
ScaleAction: 1 (scale-out) and 2 (scale-in).

     */
    public $Filters;

    /**
     * @var integer Pagination parameter.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Whether it is an auto scaling (0) or managed scaling (1) operation.
     */
    public $RecordSource;

    /**
     * @var integer Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
     */
    public $Asc;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $Filters Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), and 5 (IN_RETRY).
ScaleAction: 1 (scale-out) and 2 (scale-in).

     * @param integer $Offset Pagination parameter.
     * @param integer $Limit Number of entries per page. Maximum value: 100.
     * @param integer $RecordSource Whether it is an auto scaling (0) or managed scaling (1) operation.
     * @param integer $Asc Whether to sort data in ascending order. Valid values: 1 (yes) and 0 (no).
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RecordSource",$param) and $param["RecordSource"] !== null) {
            $this->RecordSource = $param["RecordSource"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
