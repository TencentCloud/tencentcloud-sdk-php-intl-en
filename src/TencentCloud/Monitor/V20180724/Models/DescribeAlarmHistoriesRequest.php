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
 * DescribeAlarmHistories request structure.
 *
 * @method string getModule() Obtain Value fixed at "monitor"
 * @method void setModule(string $Module) Set Value fixed at "monitor"
 * @method integer getPageNumber() Obtain Page number starting from 1. Default value: 1
 * @method void setPageNumber(integer $PageNumber) Set Page number starting from 1. Default value: 1
 * @method integer getPageSize() Obtain Number of entries per page. Value range: 1–100. Default value: 20
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: 1–100. Default value: 20
 * @method string getOrder() Obtain Sort by the first occurrence time in descending order by default. Valid values: ASC (ascending), DESC (descending)
 * @method void setOrder(string $Order) Set Sort by the first occurrence time in descending order by default. Valid values: ASC (ascending), DESC (descending)
 * @method integer getStartTime() Obtain Start time, which is the timestamp one day ago by default and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is later than the `StartTime`.
 * @method void setStartTime(integer $StartTime) Set Start time, which is the timestamp one day ago by default and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is later than the `StartTime`.
 * @method integer getEndTime() Obtain End time, which is the current timestamp and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is earlier than the `EndTime`.
 * @method void setEndTime(integer $EndTime) Set End time, which is the current timestamp and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is earlier than the `EndTime`.
 * @method array getMonitorTypes() Obtain Filter by monitor type. Valid values: "MT_QCE" (Tencent Cloud service monitoring), "MT_TAW" (application performance monitoring), "MT_RUM" (frontend performance monitoring), "MT_PROBE" (cloud automated testing). If this parameter is left empty, all types will be queried by default.
 * @method void setMonitorTypes(array $MonitorTypes) Set Filter by monitor type. Valid values: "MT_QCE" (Tencent Cloud service monitoring), "MT_TAW" (application performance monitoring), "MT_RUM" (frontend performance monitoring), "MT_PROBE" (cloud automated testing). If this parameter is left empty, all types will be queried by default.
 * @method string getAlarmObject() Obtain Filter by alarm object. Fuzzy search with string is supported
 * @method void setAlarmObject(string $AlarmObject) Set Filter by alarm object. Fuzzy search with string is supported
 * @method array getAlarmStatus() Obtain Filter by alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data). If this parameter is left empty, all will be queried by default
 * @method void setAlarmStatus(array $AlarmStatus) Set Filter by alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data). If this parameter is left empty, all will be queried by default
 * @method array getProjectIds() Obtain Filter by project ID. Valid values: `-1` (no project), `0` (default project)
 * @method void setProjectIds(array $ProjectIds) Set Filter by project ID. Valid values: `-1` (no project), `0` (default project)
 * @method array getInstanceGroupIds() Obtain Filter by instance group ID
 * @method void setInstanceGroupIds(array $InstanceGroupIds) Set Filter by instance group ID
 * @method array getNamespaces() Obtain Filter by policy type. Monitoring type and policy type are first-level and second-level filters respectively and both need to be passed in. For example, `[{"MonitorType": "MT_QCE", "Namespace": "cvm_device"}]`
 * @method void setNamespaces(array $Namespaces) Set Filter by policy type. Monitoring type and policy type are first-level and second-level filters respectively and both need to be passed in. For example, `[{"MonitorType": "MT_QCE", "Namespace": "cvm_device"}]`
 * @method array getMetricNames() Obtain Filter by metric name
 * @method void setMetricNames(array $MetricNames) Set Filter by metric name
 * @method string getPolicyName() Obtain Fuzzy search by policy name
 * @method void setPolicyName(string $PolicyName) Set Fuzzy search by policy name
 * @method string getContent() Obtain Fuzzy search by alarm content
 * @method void setContent(string $Content) Set Fuzzy search by alarm content
 * @method array getReceiverUids() Obtain Search by recipient
 * @method void setReceiverUids(array $ReceiverUids) Set Search by recipient
 * @method array getReceiverGroups() Obtain Search by recipient group
 * @method void setReceiverGroups(array $ReceiverGroups) Set Search by recipient group
 * @method array getPolicyIds() Obtain Search by alarm policy ID list
 * @method void setPolicyIds(array $PolicyIds) Set Search by alarm policy ID list
 */
class DescribeAlarmHistoriesRequest extends AbstractModel
{
    /**
     * @var string Value fixed at "monitor"
     */
    public $Module;

    /**
     * @var integer Page number starting from 1. Default value: 1
     */
    public $PageNumber;

    /**
     * @var integer Number of entries per page. Value range: 1–100. Default value: 20
     */
    public $PageSize;

    /**
     * @var string Sort by the first occurrence time in descending order by default. Valid values: ASC (ascending), DESC (descending)
     */
    public $Order;

    /**
     * @var integer Start time, which is the timestamp one day ago by default and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is later than the `StartTime`.
     */
    public $StartTime;

    /**
     * @var integer End time, which is the current timestamp and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is earlier than the `EndTime`.
     */
    public $EndTime;

    /**
     * @var array Filter by monitor type. Valid values: "MT_QCE" (Tencent Cloud service monitoring), "MT_TAW" (application performance monitoring), "MT_RUM" (frontend performance monitoring), "MT_PROBE" (cloud automated testing). If this parameter is left empty, all types will be queried by default.
     */
    public $MonitorTypes;

    /**
     * @var string Filter by alarm object. Fuzzy search with string is supported
     */
    public $AlarmObject;

    /**
     * @var array Filter by alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data). If this parameter is left empty, all will be queried by default
     */
    public $AlarmStatus;

    /**
     * @var array Filter by project ID. Valid values: `-1` (no project), `0` (default project)
     */
    public $ProjectIds;

    /**
     * @var array Filter by instance group ID
     */
    public $InstanceGroupIds;

    /**
     * @var array Filter by policy type. Monitoring type and policy type are first-level and second-level filters respectively and both need to be passed in. For example, `[{"MonitorType": "MT_QCE", "Namespace": "cvm_device"}]`
     */
    public $Namespaces;

    /**
     * @var array Filter by metric name
     */
    public $MetricNames;

    /**
     * @var string Fuzzy search by policy name
     */
    public $PolicyName;

    /**
     * @var string Fuzzy search by alarm content
     */
    public $Content;

    /**
     * @var array Search by recipient
     */
    public $ReceiverUids;

    /**
     * @var array Search by recipient group
     */
    public $ReceiverGroups;

    /**
     * @var array Search by alarm policy ID list
     */
    public $PolicyIds;

    /**
     * @param string $Module Value fixed at "monitor"
     * @param integer $PageNumber Page number starting from 1. Default value: 1
     * @param integer $PageSize Number of entries per page. Value range: 1–100. Default value: 20
     * @param string $Order Sort by the first occurrence time in descending order by default. Valid values: ASC (ascending), DESC (descending)
     * @param integer $StartTime Start time, which is the timestamp one day ago by default and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is later than the `StartTime`.
     * @param integer $EndTime End time, which is the current timestamp and the time when the alarm `FirstOccurTime` first occurs. An alarm record can be searched only if its `FirstOccurTime` is earlier than the `EndTime`.
     * @param array $MonitorTypes Filter by monitor type. Valid values: "MT_QCE" (Tencent Cloud service monitoring), "MT_TAW" (application performance monitoring), "MT_RUM" (frontend performance monitoring), "MT_PROBE" (cloud automated testing). If this parameter is left empty, all types will be queried by default.
     * @param string $AlarmObject Filter by alarm object. Fuzzy search with string is supported
     * @param array $AlarmStatus Filter by alarm status. Valid values: ALARM (not resolved), OK (resolved), NO_CONF (expired), NO_DATA (insufficient data). If this parameter is left empty, all will be queried by default
     * @param array $ProjectIds Filter by project ID. Valid values: `-1` (no project), `0` (default project)
     * @param array $InstanceGroupIds Filter by instance group ID
     * @param array $Namespaces Filter by policy type. Monitoring type and policy type are first-level and second-level filters respectively and both need to be passed in. For example, `[{"MonitorType": "MT_QCE", "Namespace": "cvm_device"}]`
     * @param array $MetricNames Filter by metric name
     * @param string $PolicyName Fuzzy search by policy name
     * @param string $Content Fuzzy search by alarm content
     * @param array $ReceiverUids Search by recipient
     * @param array $ReceiverGroups Search by recipient group
     * @param array $PolicyIds Search by alarm policy ID list
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MonitorTypes",$param) and $param["MonitorTypes"] !== null) {
            $this->MonitorTypes = $param["MonitorTypes"];
        }

        if (array_key_exists("AlarmObject",$param) and $param["AlarmObject"] !== null) {
            $this->AlarmObject = $param["AlarmObject"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("InstanceGroupIds",$param) and $param["InstanceGroupIds"] !== null) {
            $this->InstanceGroupIds = $param["InstanceGroupIds"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = [];
            foreach ($param["Namespaces"] as $key => $value){
                $obj = new MonitorTypeNamespace();
                $obj->deserialize($value);
                array_push($this->Namespaces, $obj);
            }
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ReceiverUids",$param) and $param["ReceiverUids"] !== null) {
            $this->ReceiverUids = $param["ReceiverUids"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }
    }
}
