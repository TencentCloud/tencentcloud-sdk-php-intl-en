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
 * @method string getInstanceId() Obtain The instance ID.
 * @method void setInstanceId(string $InstanceId) Set The instance ID.
 * @method array getFilters() Obtain Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), 5 (IN_RETRY).
ScaleAction: 1 (scale out), 2 (scale in).

 * @method void setFilters(array $Filters) Set Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), 5 (IN_RETRY).
ScaleAction: 1 (scale out), 2 (scale in).

 * @method integer getOffset() Obtain Pagination parameters.
 * @method void setOffset(integer $Offset) Set Pagination parameters.
 * @method integer getLimit() Obtain Pagination parameters. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Pagination parameters. Maximum value: 100
 * @method integer getRecordSource() Obtain Whether it is automatic scaling (0) or managed scaling (1)
 * @method void setRecordSource(integer $RecordSource) Set Whether it is automatic scaling (0) or managed scaling (1)
 * @method integer getAsc() Obtain Ascending or not. 1: ascending, 0: descending.
 * @method void setAsc(integer $Asc) Set Ascending or not. 1: ascending, 0: descending.
 */
class DescribeAutoScaleRecordsRequest extends AbstractModel
{
    /**
     * @var string The instance ID.
     */
    public $InstanceId;

    /**
     * @var array Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), 5 (IN_RETRY).
ScaleAction: 1 (scale out), 2 (scale in).

     */
    public $Filters;

    /**
     * @var integer Pagination parameters.
     */
    public $Offset;

    /**
     * @var integer Pagination parameters. Maximum value: 100
     */
    public $Limit;

    /**
     * @var integer Whether it is automatic scaling (0) or managed scaling (1)
     */
    public $RecordSource;

    /**
     * @var integer Ascending or not. 1: ascending, 0: descending.
     */
    public $Asc;

    /**
     * @param string $InstanceId The instance ID.
     * @param array $Filters Record filter parameter, which can only be "StartTime", "EndTime", "StrategyName", "ActionStatus", or "ScaleAction".
Time format. Either 2006-01-02 15:04:05 or 2006/01/02 15:04:05 for StartTime and EndTime.
ActionStatus: 0 (INITED), 1 (SUCCESS), 2 (FAILED), 3 (LIMITED_SUCCESSED), 4 (IN_PROCESS), 5 (IN_RETRY).
ScaleAction: 1 (scale out), 2 (scale in).

     * @param integer $Offset Pagination parameters.
     * @param integer $Limit Pagination parameters. Maximum value: 100
     * @param integer $RecordSource Whether it is automatic scaling (0) or managed scaling (1)
     * @param integer $Asc Ascending or not. 1: ascending, 0: descending.
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
