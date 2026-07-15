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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Submit DLC task configuration
 *
 * @method string getTaskId() Obtain <p>Task id.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task id.</p>
 * @method integer getUin() Obtain <p>Account id.</p>
 * @method void setUin(integer $Uin) Set <p>Account id.</p>
 * @method string getTopicId() Obtain <p>Log topic id.</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic id.</p>
 * @method string getName() Obtain <p>Task name.</p>
 * @method void setName(string $Name) Set <p>Task name.</p>
 * @method integer getDeliverType() Obtain <p>Delivery Type, 0: real-time delivery, 1: history delivery</p>
 * @method void setDeliverType(integer $DeliverType) Set <p>Delivery Type, 0: real-time delivery, 1: history delivery</p>
 * @method integer getMaxSize() Obtain <p>Delivery file size, in MB.</p>
 * @method void setMaxSize(integer $MaxSize) Set <p>Delivery file size, in MB.</p>
 * @method integer getInterval() Obtain <p>Delivery interval in seconds</p>
 * @method void setInterval(integer $Interval) Set <p>Delivery interval in seconds</p>
 * @method integer getStartTime() Obtain <p>Start time of the delivery time range</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start time of the delivery time range</p>
 * @method integer getEndTime() Obtain <p>End time of the delivery time range</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time of the delivery time range</p>
 * @method DlcInfo getDlcInfo() Obtain <p>dlc configuration message</p>
 * @method void setDlcInfo(DlcInfo $DlcInfo) Set <p>dlc configuration message</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable delivery service log. 1 Disabled, 2 Enabled</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable delivery service log. 1 Disabled, 2 Enabled</p>
 * @method integer getStatus() Obtain <p>Task status.</p>
 * @method void setStatus(integer $Status) Set <p>Task status.</p>
 * @method integer getProgress() Obtain <p>Task progress. Historic delivery tasks take effect.</p>
 * @method void setProgress(integer $Progress) Set <p>Task progress. Historic delivery tasks take effect.</p>
 * @method integer getBizType() Obtain <p>Log topic type. 0: Standard topic, 1: Metric topic</p>
 * @method void setBizType(integer $BizType) Set <p>Log topic type. 0: Standard topic, 1: Metric topic</p>
 * @method integer getCreateTime() Obtain <p>Task creation time.</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Task creation time.</p>
 * @method integer getUpdateTime() Obtain <p>Task last modified.</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Task last modified.</p>
 * @method boolean getAutoCreateField() Obtain <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
 * @method void setAutoCreateField(boolean $AutoCreateField) Set <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
 * @method DlcFailHandle getDlcFailHandle() Obtain <p>Store logs with delivery failure in a DLC table</p>
 * @method void setDlcFailHandle(DlcFailHandle $DlcFailHandle) Set <p>Store logs with delivery failure in a DLC table</p>
 * @method string getDSLFilter() Obtain <p>Log pre-filtering - Perform pre-filtering process on the original data for data ingestion into Splunk.</p>
 * @method void setDSLFilter(string $DSLFilter) Set <p>Log pre-filtering - Perform pre-filtering process on the original data for data ingestion into Splunk.</p>
 */
class DlcDeliverInfo extends AbstractModel
{
    /**
     * @var string <p>Task id.</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Account id.</p>
     */
    public $Uin;

    /**
     * @var string <p>Log topic id.</p>
     */
    public $TopicId;

    /**
     * @var string <p>Task name.</p>
     */
    public $Name;

    /**
     * @var integer <p>Delivery Type, 0: real-time delivery, 1: history delivery</p>
     */
    public $DeliverType;

    /**
     * @var integer <p>Delivery file size, in MB.</p>
     */
    public $MaxSize;

    /**
     * @var integer <p>Delivery interval in seconds</p>
     */
    public $Interval;

    /**
     * @var integer <p>Start time of the delivery time range</p>
     */
    public $StartTime;

    /**
     * @var integer <p>End time of the delivery time range</p>
     */
    public $EndTime;

    /**
     * @var DlcInfo <p>dlc configuration message</p>
     */
    public $DlcInfo;

    /**
     * @var integer <p>Whether to enable delivery service log. 1 Disabled, 2 Enabled</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>Task status.</p>
     */
    public $Status;

    /**
     * @var integer <p>Task progress. Historic delivery tasks take effect.</p>
     */
    public $Progress;

    /**
     * @var integer <p>Log topic type. 0: Standard topic, 1: Metric topic</p>
     */
    public $BizType;

    /**
     * @var integer <p>Task creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Task last modified.</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
     */
    public $AutoCreateField;

    /**
     * @var DlcFailHandle <p>Store logs with delivery failure in a DLC table</p>
     */
    public $DlcFailHandle;

    /**
     * @var string <p>Log pre-filtering - Perform pre-filtering process on the original data for data ingestion into Splunk.</p>
     */
    public $DSLFilter;

    /**
     * @param string $TaskId <p>Task id.</p>
     * @param integer $Uin <p>Account id.</p>
     * @param string $TopicId <p>Log topic id.</p>
     * @param string $Name <p>Task name.</p>
     * @param integer $DeliverType <p>Delivery Type, 0: real-time delivery, 1: history delivery</p>
     * @param integer $MaxSize <p>Delivery file size, in MB.</p>
     * @param integer $Interval <p>Delivery interval in seconds</p>
     * @param integer $StartTime <p>Start time of the delivery time range</p>
     * @param integer $EndTime <p>End time of the delivery time range</p>
     * @param DlcInfo $DlcInfo <p>dlc configuration message</p>
     * @param integer $HasServicesLog <p>Whether to enable delivery service log. 1 Disabled, 2 Enabled</p>
     * @param integer $Status <p>Task status.</p>
     * @param integer $Progress <p>Task progress. Historic delivery tasks take effect.</p>
     * @param integer $BizType <p>Log topic type. 0: Standard topic, 1: Metric topic</p>
     * @param integer $CreateTime <p>Task creation time.</p>
     * @param integer $UpdateTime <p>Task last modified.</p>
     * @param boolean $AutoCreateField <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
     * @param DlcFailHandle $DlcFailHandle <p>Store logs with delivery failure in a DLC table</p>
     * @param string $DSLFilter <p>Log pre-filtering - Perform pre-filtering process on the original data for data ingestion into Splunk.</p>
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DlcInfo",$param) and $param["DlcInfo"] !== null) {
            $this->DlcInfo = new DlcInfo();
            $this->DlcInfo->deserialize($param["DlcInfo"]);
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AutoCreateField",$param) and $param["AutoCreateField"] !== null) {
            $this->AutoCreateField = $param["AutoCreateField"];
        }

        if (array_key_exists("DlcFailHandle",$param) and $param["DlcFailHandle"] !== null) {
            $this->DlcFailHandle = new DlcFailHandle();
            $this->DlcFailHandle->deserialize($param["DlcFailHandle"]);
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
