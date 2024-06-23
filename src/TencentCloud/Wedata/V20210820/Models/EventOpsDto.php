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
 * Event details
 *
 * @method string getName() Obtain Event nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Event nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventType() Obtain Event typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventType(string $EventType) Set Event typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventSubType() Obtain Event Segmentation TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventSubType(string $EventSubType) Set Event Segmentation TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventBroadcastType() Obtain Event Broadcast TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventBroadcastType(string $EventBroadcastType) Set Event Broadcast TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDimensionFormat() Obtain Data Time Format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDimensionFormat(string $DimensionFormat) Set Data Time Format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTimeToLive() Obtain UptimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTimeToLive(integer $TimeToLive) Set UptimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTimeUnit() Obtain Lifetime Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Lifetime Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreationTimestamp() Obtain Creation Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreationTimestamp(string $CreationTimestamp) Set Creation Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwner() Obtain Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwner(string $Owner) Set Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProperties() Obtain AttributeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProperties(string $Properties) Set AttributeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getListeners() Obtain Listener
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setListeners(array $Listeners) Set Listener
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getEventCases() Obtain Incident Case
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventCases(array $EventCases) Set Incident Case
Note: This field may return null, indicating that no valid value can be obtained.
 */
class EventOpsDto extends AbstractModel
{
    /**
     * @var string Event nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string Event typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventType;

    /**
     * @var string Event Segmentation TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventSubType;

    /**
     * @var string Event Broadcast TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventBroadcastType;

    /**
     * @var string Data Time Format
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DimensionFormat;

    /**
     * @var integer UptimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TimeToLive;

    /**
     * @var string Lifetime Unit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TimeUnit;

    /**
     * @var string Creation Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreationTimestamp;

    /**
     * @var string Owner
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Owner;

    /**
     * @var string AttributeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Properties;

    /**
     * @var string DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var array Listener
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Listeners;

    /**
     * @var array Incident Case
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventCases;

    /**
     * @param string $Name Event nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventType Event typeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventSubType Event Segmentation TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventBroadcastType Event Broadcast TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DimensionFormat Data Time Format
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TimeToLive UptimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TimeUnit Lifetime Unit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreationTimestamp Creation Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Owner Owner
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Properties AttributeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Listeners Listener
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $EventCases Incident Case
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("DimensionFormat",$param) and $param["DimensionFormat"] !== null) {
            $this->DimensionFormat = $param["DimensionFormat"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new EventListenerOpsDto();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }

        if (array_key_exists("EventCases",$param) and $param["EventCases"] !== null) {
            $this->EventCases = [];
            foreach ($param["EventCases"] as $key => $value){
                $obj = new EventCaseOpsDto();
                $obj->deserialize($value);
                array_push($this->EventCases, $obj);
            }
        }
    }
}
