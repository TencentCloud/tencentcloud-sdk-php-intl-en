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
 * DescribeProductEventList request structure.
 *
 * @method string getModule() Obtain API component name. It is fixed to monitor.
 * @method void setModule(string $Module) Set API component name. It is fixed to monitor.
 * @method array getProductName() Obtain Filter by product type. For example, "cvm" indicates Cloud Virtual Machine.
 * @method void setProductName(array $ProductName) Set Filter by product type. For example, "cvm" indicates Cloud Virtual Machine.
 * @method array getEventName() Obtain Filter by event name. For example, "guest_reboot" indicates instance restart.
 * @method void setEventName(array $EventName) Set Filter by event name. For example, "guest_reboot" indicates instance restart.
 * @method array getInstanceId() Obtain Affected object, such as "ins-19708ino".
 * @method void setInstanceId(array $InstanceId) Set Affected object, such as "ins-19708ino".
 * @method array getDimensions() Obtain Filter by dimension, such as by public IP: 10.0.0.1.
 * @method void setDimensions(array $Dimensions) Set Filter by dimension, such as by public IP: 10.0.0.1.
 * @method array getRegionList() Obtain Region filter parameter for service events.
 * @method void setRegionList(array $RegionList) Set Region filter parameter for service events.
 * @method array getType() Obtain Filter by event type. Valid values: ["status_change","abnormal"], which indicate events whose statuses have changed and events with exceptions respectively.
 * @method void setType(array $Type) Set Filter by event type. Valid values: ["status_change","abnormal"], which indicate events whose statuses have changed and events with exceptions respectively.
 * @method array getStatus() Obtain Filter by event status. Valid values: ["recover","alarm","-"], which indicate that an event has been recovered, has not been recovered, and has no status respectively.
 * @method void setStatus(array $Status) Set Filter by event status. Valid values: ["recover","alarm","-"], which indicate that an event has been recovered, has not been recovered, and has no status respectively.
 * @method array getProject() Obtain Filter by project ID.
 * @method void setProject(array $Project) Set Filter by project ID.
 * @method integer getIsAlarmConfig() Obtain Filter by alarm status configuration. The value 1 indicates that the alarm status has been configured. The value 0 indicates that the alarm status has not been configured.
 * @method void setIsAlarmConfig(integer $IsAlarmConfig) Set Filter by alarm status configuration. The value 1 indicates that the alarm status has been configured. The value 0 indicates that the alarm status has not been configured.
 * @method string getTimeOrder() Obtain Sorting by update time. The value ASC indicates the ascending order. The value DESC indicates the descending order. The default value is DESC.
 * @method void setTimeOrder(string $TimeOrder) Set Sorting by update time. The value ASC indicates the ascending order. The value DESC indicates the descending order. The default value is DESC.
 * @method integer getStartTime() Obtain Start time, which is the timestamp one day prior by default.
 * @method void setStartTime(integer $StartTime) Set Start time, which is the timestamp one day prior by default.
 * @method integer getEndTime() Obtain End time, which is the current timestamp by default.
 * @method void setEndTime(integer $EndTime) Set End time, which is the current timestamp by default.
 * @method integer getOffset() Obtain Page offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Page offset. The default value is 0.
 * @method integer getLimit() Obtain The number of parameters that can be returned on each page. The default value is 20.
 * @method void setLimit(integer $Limit) Set The number of parameters that can be returned on each page. The default value is 20.
 */
class DescribeProductEventListRequest extends AbstractModel
{
    /**
     * @var string API component name. It is fixed to monitor.
     */
    public $Module;

    /**
     * @var array Filter by product type. For example, "cvm" indicates Cloud Virtual Machine.
     */
    public $ProductName;

    /**
     * @var array Filter by event name. For example, "guest_reboot" indicates instance restart.
     */
    public $EventName;

    /**
     * @var array Affected object, such as "ins-19708ino".
     */
    public $InstanceId;

    /**
     * @var array Filter by dimension, such as by public IP: 10.0.0.1.
     */
    public $Dimensions;

    /**
     * @var array Region filter parameter for service events.
     */
    public $RegionList;

    /**
     * @var array Filter by event type. Valid values: ["status_change","abnormal"], which indicate events whose statuses have changed and events with exceptions respectively.
     */
    public $Type;

    /**
     * @var array Filter by event status. Valid values: ["recover","alarm","-"], which indicate that an event has been recovered, has not been recovered, and has no status respectively.
     */
    public $Status;

    /**
     * @var array Filter by project ID.
     */
    public $Project;

    /**
     * @var integer Filter by alarm status configuration. The value 1 indicates that the alarm status has been configured. The value 0 indicates that the alarm status has not been configured.
     */
    public $IsAlarmConfig;

    /**
     * @var string Sorting by update time. The value ASC indicates the ascending order. The value DESC indicates the descending order. The default value is DESC.
     */
    public $TimeOrder;

    /**
     * @var integer Start time, which is the timestamp one day prior by default.
     */
    public $StartTime;

    /**
     * @var integer End time, which is the current timestamp by default.
     */
    public $EndTime;

    /**
     * @var integer Page offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer The number of parameters that can be returned on each page. The default value is 20.
     */
    public $Limit;

    /**
     * @param string $Module API component name. It is fixed to monitor.
     * @param array $ProductName Filter by product type. For example, "cvm" indicates Cloud Virtual Machine.
     * @param array $EventName Filter by event name. For example, "guest_reboot" indicates instance restart.
     * @param array $InstanceId Affected object, such as "ins-19708ino".
     * @param array $Dimensions Filter by dimension, such as by public IP: 10.0.0.1.
     * @param array $RegionList Region filter parameter for service events.
     * @param array $Type Filter by event type. Valid values: ["status_change","abnormal"], which indicate events whose statuses have changed and events with exceptions respectively.
     * @param array $Status Filter by event status. Valid values: ["recover","alarm","-"], which indicate that an event has been recovered, has not been recovered, and has no status respectively.
     * @param array $Project Filter by project ID.
     * @param integer $IsAlarmConfig Filter by alarm status configuration. The value 1 indicates that the alarm status has been configured. The value 0 indicates that the alarm status has not been configured.
     * @param string $TimeOrder Sorting by update time. The value ASC indicates the ascending order. The value DESC indicates the descending order. The default value is DESC.
     * @param integer $StartTime Start time, which is the timestamp one day prior by default.
     * @param integer $EndTime End time, which is the current timestamp by default.
     * @param integer $Offset Page offset. The default value is 0.
     * @param integer $Limit The number of parameters that can be returned on each page. The default value is 20.
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

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeProductEventListDimensions();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = $param["RegionList"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("IsAlarmConfig",$param) and $param["IsAlarmConfig"] !== null) {
            $this->IsAlarmConfig = $param["IsAlarmConfig"];
        }

        if (array_key_exists("TimeOrder",$param) and $param["TimeOrder"] !== null) {
            $this->TimeOrder = $param["TimeOrder"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
