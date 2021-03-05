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
 * Events returned by the DescribeProductEventList API
 *
 * @method integer getEventId() Obtain Event ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventId(integer $EventId) Set Event ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getEventCName() Obtain Event name in Chinese.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventCName(string $EventCName) Set Event name in Chinese.
Note: This field may return null, indicating that no valid value was found.
 * @method string getEventEName() Obtain Event name in English.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventEName(string $EventEName) Set Event name in English.
Note: This field may return null, indicating that no valid value was found.
 * @method string getEventName() Obtain Event name abbreviation.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventName(string $EventName) Set Event name abbreviation.
Note: This field may return null, indicating that no valid value was found.
 * @method string getProductCName() Obtain Product name in Chinese.
Note: This field may return null, indicating that no valid value was found.
 * @method void setProductCName(string $ProductCName) Set Product name in Chinese.
Note: This field may return null, indicating that no valid value was found.
 * @method string getProductEName() Obtain Product name in English.
Note: This field may return null, indicating that no valid value was found.
 * @method void setProductEName(string $ProductEName) Set Product name in English.
Note: This field may return null, indicating that no valid value was found.
 * @method string getProductName() Obtain Product name abbreviation.
Note: This field may return null, indicating that no valid value was found.
 * @method void setProductName(string $ProductName) Set Product name abbreviation.
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceName() Obtain Instance name.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
Note: This field may return null, indicating that no valid value was found.
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRegion() Obtain Region.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRegion(string $Region) Set Region.
Note: This field may return null, indicating that no valid value was found.
 * @method string getStatus() Obtain Status.
Note: This field may return null, indicating that no valid value was found.
 * @method void setStatus(string $Status) Set Status.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getSupportAlarm() Obtain Whether to support alarms.
Note: This field may return null, indicating that no valid value was found.
 * @method void setSupportAlarm(integer $SupportAlarm) Set Whether to support alarms.
Note: This field may return null, indicating that no valid value was found.
 * @method string getType() Obtain Event type.
Note: This field may return null, indicating that no valid value was found.
 * @method void setType(string $Type) Set Event type.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getStartTime() Obtain Start time.
Note: This field may return null, indicating that no valid value was found.
 * @method void setStartTime(integer $StartTime) Set Start time.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getUpdateTime() Obtain Update time.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time.
Note: This field may return null, indicating that no valid value was found.
 * @method array getDimensions() Obtain Instance object information.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDimensions(array $Dimensions) Set Instance object information.
Note: This field may return null, indicating that no valid value was found.
 * @method array getAdditionMsg() Obtain Additional information of the instance object.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAdditionMsg(array $AdditionMsg) Set Additional information of the instance object.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getIsAlarmConfig() Obtain Whether to configure alarms.
Note: This field may return null, indicating that no valid value was found.
 * @method void setIsAlarmConfig(integer $IsAlarmConfig) Set Whether to configure alarms.
Note: This field may return null, indicating that no valid value was found.
 * @method array getGroupInfo() Obtain Policy information.
Note: This field may return null, indicating that no valid value was found.
 * @method void setGroupInfo(array $GroupInfo) Set Policy information.
Note: This field may return null, indicating that no valid value was found.
 * @method string getViewName() Obtain Display name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setViewName(string $ViewName) Set Display name
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class DescribeProductEventListEvents extends AbstractModel
{
    /**
     * @var integer Event ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventId;

    /**
     * @var string Event name in Chinese.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventCName;

    /**
     * @var string Event name in English.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventEName;

    /**
     * @var string Event name abbreviation.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventName;

    /**
     * @var string Product name in Chinese.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ProductCName;

    /**
     * @var string Product name in English.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ProductEName;

    /**
     * @var string Product name abbreviation.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ProductName;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceName;

    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ProjectId;

    /**
     * @var string Region.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Region;

    /**
     * @var string Status.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Status;

    /**
     * @var integer Whether to support alarms.
Note: This field may return null, indicating that no valid value was found.
     */
    public $SupportAlarm;

    /**
     * @var string Event type.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Type;

    /**
     * @var integer Start time.
Note: This field may return null, indicating that no valid value was found.
     */
    public $StartTime;

    /**
     * @var integer Update time.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UpdateTime;

    /**
     * @var array Instance object information.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Dimensions;

    /**
     * @var array Additional information of the instance object.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AdditionMsg;

    /**
     * @var integer Whether to configure alarms.
Note: This field may return null, indicating that no valid value was found.
     */
    public $IsAlarmConfig;

    /**
     * @var array Policy information.
Note: This field may return null, indicating that no valid value was found.
     */
    public $GroupInfo;

    /**
     * @var string Display name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ViewName;

    /**
     * @param integer $EventId Event ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $EventCName Event name in Chinese.
Note: This field may return null, indicating that no valid value was found.
     * @param string $EventEName Event name in English.
Note: This field may return null, indicating that no valid value was found.
     * @param string $EventName Event name abbreviation.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ProductCName Product name in Chinese.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ProductEName Product name in English.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ProductName Product name abbreviation.
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceId Instance ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceName Instance name.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Region Region.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Status Status.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $SupportAlarm Whether to support alarms.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Type Event type.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $StartTime Start time.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $UpdateTime Update time.
Note: This field may return null, indicating that no valid value was found.
     * @param array $Dimensions Instance object information.
Note: This field may return null, indicating that no valid value was found.
     * @param array $AdditionMsg Additional information of the instance object.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $IsAlarmConfig Whether to configure alarms.
Note: This field may return null, indicating that no valid value was found.
     * @param array $GroupInfo Policy information.
Note: This field may return null, indicating that no valid value was found.
     * @param string $ViewName Display name
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventCName",$param) and $param["EventCName"] !== null) {
            $this->EventCName = $param["EventCName"];
        }

        if (array_key_exists("EventEName",$param) and $param["EventEName"] !== null) {
            $this->EventEName = $param["EventEName"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("ProductCName",$param) and $param["ProductCName"] !== null) {
            $this->ProductCName = $param["ProductCName"];
        }

        if (array_key_exists("ProductEName",$param) and $param["ProductEName"] !== null) {
            $this->ProductEName = $param["ProductEName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SupportAlarm",$param) and $param["SupportAlarm"] !== null) {
            $this->SupportAlarm = $param["SupportAlarm"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeProductEventListEventsDimensions();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("AdditionMsg",$param) and $param["AdditionMsg"] !== null) {
            $this->AdditionMsg = [];
            foreach ($param["AdditionMsg"] as $key => $value){
                $obj = new DescribeProductEventListEventsDimensions();
                $obj->deserialize($value);
                array_push($this->AdditionMsg, $obj);
            }
        }

        if (array_key_exists("IsAlarmConfig",$param) and $param["IsAlarmConfig"] !== null) {
            $this->IsAlarmConfig = $param["IsAlarmConfig"];
        }

        if (array_key_exists("GroupInfo",$param) and $param["GroupInfo"] !== null) {
            $this->GroupInfo = [];
            foreach ($param["GroupInfo"] as $key => $value){
                $obj = new DescribeProductEventListEventsGroupInfo();
                $obj->deserialize($value);
                array_push($this->GroupInfo, $obj);
            }
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }
    }
}
