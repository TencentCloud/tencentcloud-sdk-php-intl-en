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
 * RegisterEvent request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getName() Obtain Event Name, supports English, numbers, and underscores, up to 20 characters long, cannot start with a number or underscore.
 * @method void setName(string $Name) Set Event Name, supports English, numbers, and underscores, up to 20 characters long, cannot start with a number or underscore.
 * @method string getEventSubType() Obtain Event Segmentation Type, cycle types: DAY, HOUR, MIN, SECOND
 * @method void setEventSubType(string $EventSubType) Set Event Segmentation Type, cycle types: DAY, HOUR, MIN, SECOND
 * @method string getEventBroadcastType() Obtain Broadcast: BROADCAST, Unicast: SINGLE
 * @method void setEventBroadcastType(string $EventBroadcastType) Set Broadcast: BROADCAST, Unicast: SINGLE
 * @method string getTimeUnit() Obtain For cycle types of day and hour: HOURS, For minutes: MINUTES, For seconds: SECONDS
 * @method void setTimeUnit(string $TimeUnit) Set For cycle types of day and hour: HOURS, For minutes: MINUTES, For seconds: SECONDS
 * @method string getOwner() Obtain Event Owner
 * @method void setOwner(string $Owner) Set Event Owner
 * @method string getEventType() Obtain Required. event type. default value: TIME_SERIES.
 * @method void setEventType(string $EventType) Set Required. event type. default value: TIME_SERIES.
 * @method string getDimensionFormat() Obtain Required. corresponds to day: yyyyMMdd, corresponds to HOUR: yyyyMMddHH, corresponds to MIN: yyyyMMddHHmm, corresponds to SECOND: yyyyMMddHHmmss. default value: yyyyMMdd.
 * @method void setDimensionFormat(string $DimensionFormat) Set Required. corresponds to day: yyyyMMdd, corresponds to HOUR: yyyyMMddHH, corresponds to MIN: yyyyMMddHHmm, corresponds to SECOND: yyyyMMddHHmmss. default value: yyyyMMdd.
 * @method integer getTimeToLive() Obtain Uptime
 * @method void setTimeToLive(integer $TimeToLive) Set Uptime
 * @method string getDescription() Obtain Event Description
 * @method void setDescription(string $Description) Set Event Description
 */
class RegisterEventRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Event Name, supports English, numbers, and underscores, up to 20 characters long, cannot start with a number or underscore.
     */
    public $Name;

    /**
     * @var string Event Segmentation Type, cycle types: DAY, HOUR, MIN, SECOND
     */
    public $EventSubType;

    /**
     * @var string Broadcast: BROADCAST, Unicast: SINGLE
     */
    public $EventBroadcastType;

    /**
     * @var string For cycle types of day and hour: HOURS, For minutes: MINUTES, For seconds: SECONDS
     */
    public $TimeUnit;

    /**
     * @var string Event Owner
     */
    public $Owner;

    /**
     * @var string Required. event type. default value: TIME_SERIES.
     */
    public $EventType;

    /**
     * @var string Required. corresponds to day: yyyyMMdd, corresponds to HOUR: yyyyMMddHH, corresponds to MIN: yyyyMMddHHmm, corresponds to SECOND: yyyyMMddHHmmss. default value: yyyyMMdd.
     */
    public $DimensionFormat;

    /**
     * @var integer Uptime
     */
    public $TimeToLive;

    /**
     * @var string Event Description
     */
    public $Description;

    /**
     * @param string $ProjectId Project ID
     * @param string $Name Event Name, supports English, numbers, and underscores, up to 20 characters long, cannot start with a number or underscore.
     * @param string $EventSubType Event Segmentation Type, cycle types: DAY, HOUR, MIN, SECOND
     * @param string $EventBroadcastType Broadcast: BROADCAST, Unicast: SINGLE
     * @param string $TimeUnit For cycle types of day and hour: HOURS, For minutes: MINUTES, For seconds: SECONDS
     * @param string $Owner Event Owner
     * @param string $EventType Required. event type. default value: TIME_SERIES.
     * @param string $DimensionFormat Required. corresponds to day: yyyyMMdd, corresponds to HOUR: yyyyMMddHH, corresponds to MIN: yyyyMMddHHmm, corresponds to SECOND: yyyyMMddHHmmss. default value: yyyyMMdd.
     * @param integer $TimeToLive Uptime
     * @param string $Description Event Description
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("DimensionFormat",$param) and $param["DimensionFormat"] !== null) {
            $this->DimensionFormat = $param["DimensionFormat"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
