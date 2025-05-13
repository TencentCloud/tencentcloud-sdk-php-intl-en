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
 * RegisterDsEvent request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getName() Obtain Event Name
 * @method void setName(string $Name) Set Event Name
 * @method string getEventSubType() Obtain Event cycle type: 
1. minute: MIN
2. HOUR: HOUR 
3. DAY: DAY
 * @method void setEventSubType(string $EventSubType) Set Event cycle type: 
1. minute: MIN
2. HOUR: HOUR 
3. DAY: DAY
 * @method string getTimeToLive() Obtain Event ttl. specifies a value that is an integer above 0
 * @method void setTimeToLive(string $TimeToLive) Set Event ttl. specifies a value that is an integer above 0
 * @method string getTimeUnit() Obtain Lifetime unit of the event: 1. day: DAYS 2. minute: MINUTES
 * @method void setTimeUnit(string $TimeUnit) Set Lifetime unit of the event: 1. day: DAYS 2. minute: MINUTES
 * @method string getOwner() Obtain Event Owner Account Nickname
 * @method void setOwner(string $Owner) Set Event Owner Account Nickname
 * @method string getDescription() Obtain Event Description
 * @method void setDescription(string $Description) Set Event Description
 * @method string getEventType() Obtain Event type GENERAL, TIME_SERIES
 * @method void setEventType(string $EventType) Set Event type GENERAL, TIME_SERIES
 * @method string getEventBroadcastType() Obtain Event BROADCAST type: SINGLE, BROADCAST
 * @method void setEventBroadcastType(string $EventBroadcastType) Set Event BROADCAST type: SINGLE, BROADCAST
 * @method string getDimensionFormat() Obtain Time Format
 * @method void setDimensionFormat(string $DimensionFormat) Set Time Format
 */
class RegisterDsEventRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Event Name
     */
    public $Name;

    /**
     * @var string Event cycle type: 
1. minute: MIN
2. HOUR: HOUR 
3. DAY: DAY
     */
    public $EventSubType;

    /**
     * @var string Event ttl. specifies a value that is an integer above 0
     */
    public $TimeToLive;

    /**
     * @var string Lifetime unit of the event: 1. day: DAYS 2. minute: MINUTES
     */
    public $TimeUnit;

    /**
     * @var string Event Owner Account Nickname
     */
    public $Owner;

    /**
     * @var string Event Description
     */
    public $Description;

    /**
     * @var string Event type GENERAL, TIME_SERIES
     * @deprecated
     */
    public $EventType;

    /**
     * @var string Event BROADCAST type: SINGLE, BROADCAST
     * @deprecated
     */
    public $EventBroadcastType;

    /**
     * @var string Time Format
     * @deprecated
     */
    public $DimensionFormat;

    /**
     * @param string $ProjectId Project ID
     * @param string $Name Event Name
     * @param string $EventSubType Event cycle type: 
1. minute: MIN
2. HOUR: HOUR 
3. DAY: DAY
     * @param string $TimeToLive Event ttl. specifies a value that is an integer above 0
     * @param string $TimeUnit Lifetime unit of the event: 1. day: DAYS 2. minute: MINUTES
     * @param string $Owner Event Owner Account Nickname
     * @param string $Description Event Description
     * @param string $EventType Event type GENERAL, TIME_SERIES
     * @param string $EventBroadcastType Event BROADCAST type: SINGLE, BROADCAST
     * @param string $DimensionFormat Time Format
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

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("DimensionFormat",$param) and $param["DimensionFormat"] !== null) {
            $this->DimensionFormat = $param["DimensionFormat"];
        }
    }
}
