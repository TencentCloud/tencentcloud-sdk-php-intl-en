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
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method integer getUin() Obtain Account id.
 * @method void setUin(integer $Uin) Set Account id.
 * @method string getTopicId() Obtain Log topic ID.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
 * @method string getName() Obtain Task name.
 * @method void setName(string $Name) Set Task name.
 * @method integer getDeliverType() Obtain Delivery Type. Valid values: 0: real-time delivery; 1: historic delivery.
 * @method void setDeliverType(integer $DeliverType) Set Delivery Type. Valid values: 0: real-time delivery; 1: historic delivery.
 * @method integer getMaxSize() Obtain Delivery file size in MB
 * @method void setMaxSize(integer $MaxSize) Set Delivery file size in MB
 * @method integer getInterval() Obtain Delivery interval in seconds
 * @method void setInterval(integer $Interval) Set Delivery interval in seconds
 * @method integer getStartTime() Obtain Start time of the delivery time range
 * @method void setStartTime(integer $StartTime) Set Start time of the delivery time range
 * @method integer getEndTime() Obtain End time of the delivery time range
 * @method void setEndTime(integer $EndTime) Set End time of the delivery time range
 * @method DlcInfo getDlcInfo() Obtain dlc configuration message
 * @method void setDlcInfo(DlcInfo $DlcInfo) Set dlc configuration message
 * @method integer getHasServicesLog() Obtain Whether to enable delivery service log. 1 for disabled, 2 for enabled
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable delivery service log. 1 for disabled, 2 for enabled
 * @method integer getStatus() Obtain Task status.
 * @method void setStatus(integer $Status) Set Task status.
 * @method integer getProgress() Obtain Task progress. Historic delivery tasks take effect.
 * @method void setProgress(integer $Progress) Set Task progress. Historic delivery tasks take effect.
 * @method integer getBizType() Obtain Topic type of logs. 0: standard topic; 1: metric topic.
 * @method void setBizType(integer $BizType) Set Topic type of logs. 0: standard topic; 1: metric topic.
 * @method integer getCreateTime() Obtain Task creation time.
 * @method void setCreateTime(integer $CreateTime) Set Task creation time.
 * @method integer getUpdateTime() Obtain Task modification time.
 * @method void setUpdateTime(integer $UpdateTime) Set Task modification time.
 */
class DlcDeliverInfo extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var integer Account id.
     */
    public $Uin;

    /**
     * @var string Log topic ID.
     */
    public $TopicId;

    /**
     * @var string Task name.
     */
    public $Name;

    /**
     * @var integer Delivery Type. Valid values: 0: real-time delivery; 1: historic delivery.
     */
    public $DeliverType;

    /**
     * @var integer Delivery file size in MB
     */
    public $MaxSize;

    /**
     * @var integer Delivery interval in seconds
     */
    public $Interval;

    /**
     * @var integer Start time of the delivery time range
     */
    public $StartTime;

    /**
     * @var integer End time of the delivery time range
     */
    public $EndTime;

    /**
     * @var DlcInfo dlc configuration message
     */
    public $DlcInfo;

    /**
     * @var integer Whether to enable delivery service log. 1 for disabled, 2 for enabled
     */
    public $HasServicesLog;

    /**
     * @var integer Task status.
     */
    public $Status;

    /**
     * @var integer Task progress. Historic delivery tasks take effect.
     */
    public $Progress;

    /**
     * @var integer Topic type of logs. 0: standard topic; 1: metric topic.
     */
    public $BizType;

    /**
     * @var integer Task creation time.
     */
    public $CreateTime;

    /**
     * @var integer Task modification time.
     */
    public $UpdateTime;

    /**
     * @param string $TaskId Task ID.
     * @param integer $Uin Account id.
     * @param string $TopicId Log topic ID.
     * @param string $Name Task name.
     * @param integer $DeliverType Delivery Type. Valid values: 0: real-time delivery; 1: historic delivery.
     * @param integer $MaxSize Delivery file size in MB
     * @param integer $Interval Delivery interval in seconds
     * @param integer $StartTime Start time of the delivery time range
     * @param integer $EndTime End time of the delivery time range
     * @param DlcInfo $DlcInfo dlc configuration message
     * @param integer $HasServicesLog Whether to enable delivery service log. 1 for disabled, 2 for enabled
     * @param integer $Status Task status.
     * @param integer $Progress Task progress. Historic delivery tasks take effect.
     * @param integer $BizType Topic type of logs. 0: standard topic; 1: metric topic.
     * @param integer $CreateTime Task creation time.
     * @param integer $UpdateTime Task modification time.
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
    }
}
