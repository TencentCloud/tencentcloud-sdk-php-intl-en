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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event Instance
 *
 * @method string getCaseId() Obtain Event Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCaseId(string $CaseId) Set Event Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventName() Obtain Event nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventName(string $EventName) Set Event nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventType() Obtain Event typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventType(string $EventType) Set Event typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventSubType() Obtain Event Split Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventSubType(string $EventSubType) Set Event Split Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventBroadcastType() Obtain Event Broadcast Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventBroadcastType(string $EventBroadcastType) Set Event Broadcast Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTTL() Obtain Event Instance TTL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTTL(integer $TTL) Set Event Instance TTL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTimeUnit() Obtain Event Instance TTL Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Event Instance TTL Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDimension() Obtain Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDimension(string $Dimension) Set Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Event Instance Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Event Instance Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventTriggerTimestamp() Obtain Event Instance Trigger Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventTriggerTimestamp(string $EventTriggerTimestamp) Set Event Instance Trigger Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLogTimestamp() Obtain Event Instance Consumption Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLogTimestamp(string $LogTimestamp) Set Event Instance Consumption Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Event Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Event Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
 */
class EventCaseAuditLogOptDto extends AbstractModel
{
    /**
     * @var string Event Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CaseId;

    /**
     * @var string Event nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventName;

    /**
     * @var string Event typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventType;

    /**
     * @var string Event Split Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventSubType;

    /**
     * @var string Event Broadcast Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventBroadcastType;

    /**
     * @var integer Event Instance TTL
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TTL;

    /**
     * @var string Event Instance TTL Unit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TimeUnit;

    /**
     * @var string Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Dimension;

    /**
     * @var string Event Instance Status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Event Instance Trigger Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventTriggerTimestamp;

    /**
     * @var string Event Instance Consumption Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LogTimestamp;

    /**
     * @var string Event Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @param string $CaseId Event Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventName Event nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventType Event typeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventSubType Event Split Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventBroadcastType Event Broadcast Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TTL Event Instance TTL
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TimeUnit Event Instance TTL Unit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Dimension Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Event Instance Status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventTriggerTimestamp Event Instance Trigger Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LogTimestamp Event Instance Consumption Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Event Instance Description
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("CaseId",$param) and $param["CaseId"] !== null) {
            $this->CaseId = $param["CaseId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTriggerTimestamp",$param) and $param["EventTriggerTimestamp"] !== null) {
            $this->EventTriggerTimestamp = $param["EventTriggerTimestamp"];
        }

        if (array_key_exists("LogTimestamp",$param) and $param["LogTimestamp"] !== null) {
            $this->LogTimestamp = $param["LogTimestamp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
