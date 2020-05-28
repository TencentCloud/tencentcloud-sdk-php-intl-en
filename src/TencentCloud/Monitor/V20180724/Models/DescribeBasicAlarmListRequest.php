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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicAlarmList request structure.
 *
 * @method string getModule() Obtain API component name. The value for the current API is monitor.
 * @method void setModule(string $Module) Set API component name. The value for the current API is monitor.
 * @method integer getStartTime() Obtain Start time, which is the timestamp one day prior by default.
 * @method void setStartTime(integer $StartTime) Set Start time, which is the timestamp one day prior by default.
 * @method integer getEndTime() Obtain End time, which is the current timestamp by default.
 * @method void setEndTime(integer $EndTime) Set End time, which is the current timestamp by default.
 * @method integer getLimit() Obtain Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
 * @method integer getOffset() Obtain Parameter offset on each page. The value starts from 0 and the default value is 0.
 * @method void setOffset(integer $Offset) Set Parameter offset on each page. The value starts from 0 and the default value is 0.
 * @method string getOccurTimeOrder() Obtain Sorting by occurrence time. Valid values: asc and desc.
 * @method void setOccurTimeOrder(string $OccurTimeOrder) Set Sorting by occurrence time. Valid values: asc and desc.
 * @method array getProjectIds() Obtain Filter by project ID.
 * @method void setProjectIds(array $ProjectIds) Set Filter by project ID.
 * @method array getViewNames() Obtain Filter by policy type.
 * @method void setViewNames(array $ViewNames) Set Filter by policy type.
 * @method array getAlarmStatus() Obtain Filter by alarm status.
 * @method void setAlarmStatus(array $AlarmStatus) Set Filter by alarm status.
 * @method string getObjLike() Obtain Filter by alarm object.
 * @method void setObjLike(string $ObjLike) Set Filter by alarm object.
 * @method array getInstanceGroupIds() Obtain Filter by instance group ID.
 * @method void setInstanceGroupIds(array $InstanceGroupIds) Set Filter by instance group ID.
 * @method array getMetricNames() Obtain Filtering by metric names
 * @method void setMetricNames(array $MetricNames) Set Filtering by metric names
 */
class DescribeBasicAlarmListRequest extends AbstractModel
{
    /**
     * @var string API component name. The value for the current API is monitor.
     */
    public $Module;

    /**
     * @var integer Start time, which is the timestamp one day prior by default.
     */
    public $StartTime;

    /**
     * @var integer End time, which is the current timestamp by default.
     */
    public $EndTime;

    /**
     * @var integer Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Parameter offset on each page. The value starts from 0 and the default value is 0.
     */
    public $Offset;

    /**
     * @var string Sorting by occurrence time. Valid values: asc and desc.
     */
    public $OccurTimeOrder;

    /**
     * @var array Filter by project ID.
     */
    public $ProjectIds;

    /**
     * @var array Filter by policy type.
     */
    public $ViewNames;

    /**
     * @var array Filter by alarm status.
     */
    public $AlarmStatus;

    /**
     * @var string Filter by alarm object.
     */
    public $ObjLike;

    /**
     * @var array Filter by instance group ID.
     */
    public $InstanceGroupIds;

    /**
     * @var array Filtering by metric names
     */
    public $MetricNames;

    /**
     * @param string $Module API component name. The value for the current API is monitor.
     * @param integer $StartTime Start time, which is the timestamp one day prior by default.
     * @param integer $EndTime End time, which is the current timestamp by default.
     * @param integer $Limit Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
     * @param integer $Offset Parameter offset on each page. The value starts from 0 and the default value is 0.
     * @param string $OccurTimeOrder Sorting by occurrence time. Valid values: asc and desc.
     * @param array $ProjectIds Filter by project ID.
     * @param array $ViewNames Filter by policy type.
     * @param array $AlarmStatus Filter by alarm status.
     * @param string $ObjLike Filter by alarm object.
     * @param array $InstanceGroupIds Filter by instance group ID.
     * @param array $MetricNames Filtering by metric names
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OccurTimeOrder",$param) and $param["OccurTimeOrder"] !== null) {
            $this->OccurTimeOrder = $param["OccurTimeOrder"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ViewNames",$param) and $param["ViewNames"] !== null) {
            $this->ViewNames = $param["ViewNames"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("ObjLike",$param) and $param["ObjLike"] !== null) {
            $this->ObjLike = $param["ObjLike"];
        }

        if (array_key_exists("InstanceGroupIds",$param) and $param["InstanceGroupIds"] !== null) {
            $this->InstanceGroupIds = $param["InstanceGroupIds"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }
    }
}
