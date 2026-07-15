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
 * CreateDlcDeliver request structure.
 *
 * @method string getTopicId() Obtain <p>Log topic id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>Log topic id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method string getName() Obtain <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
 * @method void setName(string $Name) Set <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
 * @method integer getDeliverType() Obtain <p>Delivery Type. 0: Batch delivery, 1: Real-time delivery</p>
 * @method void setDeliverType(integer $DeliverType) Set <p>Delivery Type. 0: Batch delivery, 1: Real-time delivery</p>
 * @method integer getStartTime() Obtain <p>Start time of the delivery time range</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start time of the delivery time range</p>
 * @method DlcInfo getDlcInfo() Obtain <p>dlc configuration message</p>
 * @method void setDlcInfo(DlcInfo $DlcInfo) Set <p>dlc configuration message</p>
 * @method integer getMaxSize() Obtain <p>Delivery file size in MB. Required when DeliverType=0. Range: 5&lt;= MaxSize &lt;= 256.</p>
 * @method void setMaxSize(integer $MaxSize) Set <p>Delivery file size in MB. Required when DeliverType=0. Range: 5&lt;= MaxSize &lt;= 256.</p>
 * @method integer getInterval() Obtain <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
 * @method void setInterval(integer $Interval) Set <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
 * @method integer getEndTime() Obtain <p>End time of the delivery time range. If empty, it means unlimited time. When EndTime is not empty, it must be greater than StartTime.</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time of the delivery time range. If empty, it means unlimited time. When EndTime is not empty, it must be greater than StartTime.</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.</p>
 * @method boolean getAutoCreateField() Obtain <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
 * @method void setAutoCreateField(boolean $AutoCreateField) Set <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
 * @method DlcFailHandle getDlcFailHandle() Obtain <p>Store delivery failure logs in DLC tables</p>
 * @method void setDlcFailHandle(DlcFailHandle $DlcFailHandle) Set <p>Store delivery failure logs in DLC tables</p>
 * @method string getDSLFilter() Obtain <p>Log pre-filtering - Perform pre-filtering on original data for data ingestion into Splunk</p>
 * @method void setDSLFilter(string $DSLFilter) Set <p>Log pre-filtering - Perform pre-filtering on original data for data ingestion into Splunk</p>
 */
class CreateDlcDeliverRequest extends AbstractModel
{
    /**
     * @var string <p>Log topic id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
     */
    public $Name;

    /**
     * @var integer <p>Delivery Type. 0: Batch delivery, 1: Real-time delivery</p>
     */
    public $DeliverType;

    /**
     * @var integer <p>Start time of the delivery time range</p>
     */
    public $StartTime;

    /**
     * @var DlcInfo <p>dlc configuration message</p>
     */
    public $DlcInfo;

    /**
     * @var integer <p>Delivery file size in MB. Required when DeliverType=0. Range: 5&lt;= MaxSize &lt;= 256.</p>
     */
    public $MaxSize;

    /**
     * @var integer <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
     */
    public $Interval;

    /**
     * @var integer <p>End time of the delivery time range. If empty, it means unlimited time. When EndTime is not empty, it must be greater than StartTime.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.</p>
     */
    public $HasServicesLog;

    /**
     * @var boolean <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
     */
    public $AutoCreateField;

    /**
     * @var DlcFailHandle <p>Store delivery failure logs in DLC tables</p>
     */
    public $DlcFailHandle;

    /**
     * @var string <p>Log pre-filtering - Perform pre-filtering on original data for data ingestion into Splunk</p>
     */
    public $DSLFilter;

    /**
     * @param string $TopicId <p>Log topic id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     * @param string $Name <p>Name: Length not exceeding 64 characters, starts with a letter, accepts 0-9, a-z, A-Z, _, -, Chinese character.</p>
     * @param integer $DeliverType <p>Delivery Type. 0: Batch delivery, 1: Real-time delivery</p>
     * @param integer $StartTime <p>Start time of the delivery time range</p>
     * @param DlcInfo $DlcInfo <p>dlc configuration message</p>
     * @param integer $MaxSize <p>Delivery file size in MB. Required when DeliverType=0. Range: 5&lt;= MaxSize &lt;= 256.</p>
     * @param integer $Interval <p>Delivery interval in seconds. Required when DeliverType=0. Valid range: 300 &lt;= Interval &lt;= 900.</p>
     * @param integer $EndTime <p>End time of the delivery time range. If empty, it means unlimited time. When EndTime is not empty, it must be greater than StartTime.</p>
     * @param integer $HasServicesLog <p>Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.</p>
     * @param boolean $AutoCreateField <p>Auto-create dlc field</p><p>Default value: false</p><p>When there are additional fields in your log, the system will automatically ship them to DLC.</p>
     * @param DlcFailHandle $DlcFailHandle <p>Store delivery failure logs in DLC tables</p>
     * @param string $DSLFilter <p>Log pre-filtering - Perform pre-filtering on original data for data ingestion into Splunk</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DlcInfo",$param) and $param["DlcInfo"] !== null) {
            $this->DlcInfo = new DlcInfo();
            $this->DlcInfo->deserialize($param["DlcInfo"]);
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
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
