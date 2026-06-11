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
 * ModifyDlcDeliver request structure.
 *
 * @method string getTopicId() Obtain <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method string getTaskId() Obtain <p>Task id.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task id.</p>
 * @method string getName() Obtain <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
 * @method void setName(string $Name) Set <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
 * @method integer getDeliverType() Obtain <p>Delivery Type. Valid values: 0: batch delivery; 1: real-time delivery.</p>
 * @method void setDeliverType(integer $DeliverType) Set <p>Delivery Type. Valid values: 0: batch delivery; 1: real-time delivery.</p>
 * @method integer getStartTime() Obtain <p>Start time of the delivery time range</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start time of the delivery time range</p>
 * @method integer getEndTime() Obtain <p>End time of the delivery time range. If empty, it means unlimited time.</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time of the delivery time range. If empty, it means unlimited time.</p>
 * @method integer getMaxSize() Obtain <p>Delivery file size in MB. Required when DeliverType=0. Valid range: 5 &lt;= MaxSize &lt;= 256.</p>
 * @method void setMaxSize(integer $MaxSize) Set <p>Delivery file size in MB. Required when DeliverType=0. Valid range: 5 &lt;= MaxSize &lt;= 256.</p>
 * @method integer getInterval() Obtain <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
 * @method void setInterval(integer $Interval) Set <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
 * @method DlcInfo getDlcInfo() Obtain <p>dlc configuration message</p>
 * @method void setDlcInfo(DlcInfo $DlcInfo) Set <p>dlc configuration message</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled. Enabled by default.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled. Enabled by default.</p>
 * @method integer getStatus() Obtain <p>Task status.</p><p>Enumeration values: </p><ul><li>1: Running, </li><li>2: Stop.</li></ul>
 * @method void setStatus(integer $Status) Set <p>Task status.</p><p>Enumeration values: </p><ul><li>1: Running, </li><li>2: Stop.</li></ul>
 */
class ModifyDlcDeliverRequest extends AbstractModel
{
    /**
     * @var string <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>Task id.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
     */
    public $Name;

    /**
     * @var integer <p>Delivery Type. Valid values: 0: batch delivery; 1: real-time delivery.</p>
     */
    public $DeliverType;

    /**
     * @var integer <p>Start time of the delivery time range</p>
     */
    public $StartTime;

    /**
     * @var integer <p>End time of the delivery time range. If empty, it means unlimited time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Delivery file size in MB. Required when DeliverType=0. Valid range: 5 &lt;= MaxSize &lt;= 256.</p>
     */
    public $MaxSize;

    /**
     * @var integer <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
     */
    public $Interval;

    /**
     * @var DlcInfo <p>dlc configuration message</p>
     */
    public $DlcInfo;

    /**
     * @var integer <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled. Enabled by default.</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>Task status.</p><p>Enumeration values: </p><ul><li>1: Running, </li><li>2: Stop.</li></ul>
     */
    public $Status;

    /**
     * @param string $TopicId <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     * @param string $TaskId <p>Task id.</p>
     * @param string $Name <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
     * @param integer $DeliverType <p>Delivery Type. Valid values: 0: batch delivery; 1: real-time delivery.</p>
     * @param integer $StartTime <p>Start time of the delivery time range</p>
     * @param integer $EndTime <p>End time of the delivery time range. If empty, it means unlimited time.</p>
     * @param integer $MaxSize <p>Delivery file size in MB. Required when DeliverType=0. Valid range: 5 &lt;= MaxSize &lt;= 256.</p>
     * @param integer $Interval <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
     * @param DlcInfo $DlcInfo <p>dlc configuration message</p>
     * @param integer $HasServicesLog <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled. Enabled by default.</p>
     * @param integer $Status <p>Task status.</p><p>Enumeration values: </p><ul><li>1: Running, </li><li>2: Stop.</li></ul>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
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
    }
}
