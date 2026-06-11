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
 * Windows event log collection configuration
 *
 * @method string getEventChannel() Obtain Event channel, support
-Application log
-Security log
-Startup log
-System log
-ALL logs

 * @method void setEventChannel(string $EventChannel) Set Event channel, support
-Application log
-Security log
-Startup log
-System log
-ALL logs

 * @method integer getTimeType() Obtain Supported types of the time field (Timestamp)
-1 (User-customized time)
-2 (current time)
 * @method void setTimeType(integer $TimeType) Set Supported types of the time field (Timestamp)
-1 (User-customized time)
-2 (current time)
 * @method integer getTimestamp() Obtain Time, when users choose custom time type, specify the time in seconds
Format: timestamp, 1754897446
 * @method void setTimestamp(integer $Timestamp) Set Time, when users choose custom time type, specify the time in seconds
Format: timestamp, 1754897446
 * @method array getEventIDs() Obtain Event ID filter list
	
Optional. Being empty indicates no filtering is applied.
Support forward filtering for a single value (for example: 20) or a range (for example: 0-20), also support reverse filtering for a single value (for example: -20).
Multiple filter items can be separated by commas, for example: 1-200,-100 means collect event logs within the range of 1-200 except 100.
 * @method void setEventIDs(array $EventIDs) Set Event ID filter list
	
Optional. Being empty indicates no filtering is applied.
Support forward filtering for a single value (for example: 20) or a range (for example: 0-20), also support reverse filtering for a single value (for example: -20).
Multiple filter items can be separated by commas, for example: 1-200,-100 means collect event logs within the range of 1-200 except 100.
 */
class EventLog extends AbstractModel
{
    /**
     * @var string Event channel, support
-Application log
-Security log
-Startup log
-System log
-ALL logs

     */
    public $EventChannel;

    /**
     * @var integer Supported types of the time field (Timestamp)
-1 (User-customized time)
-2 (current time)
     */
    public $TimeType;

    /**
     * @var integer Time, when users choose custom time type, specify the time in seconds
Format: timestamp, 1754897446
     */
    public $Timestamp;

    /**
     * @var array Event ID filter list
	
Optional. Being empty indicates no filtering is applied.
Support forward filtering for a single value (for example: 20) or a range (for example: 0-20), also support reverse filtering for a single value (for example: -20).
Multiple filter items can be separated by commas, for example: 1-200,-100 means collect event logs within the range of 1-200 except 100.
     */
    public $EventIDs;

    /**
     * @param string $EventChannel Event channel, support
-Application log
-Security log
-Startup log
-System log
-ALL logs

     * @param integer $TimeType Supported types of the time field (Timestamp)
-1 (User-customized time)
-2 (current time)
     * @param integer $Timestamp Time, when users choose custom time type, specify the time in seconds
Format: timestamp, 1754897446
     * @param array $EventIDs Event ID filter list
	
Optional. Being empty indicates no filtering is applied.
Support forward filtering for a single value (for example: 20) or a range (for example: 0-20), also support reverse filtering for a single value (for example: -20).
Multiple filter items can be separated by commas, for example: 1-200,-100 means collect event logs within the range of 1-200 except 100.
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
        if (array_key_exists("EventChannel",$param) and $param["EventChannel"] !== null) {
            $this->EventChannel = $param["EventChannel"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("EventIDs",$param) and $param["EventIDs"] !== null) {
            $this->EventIDs = $param["EventIDs"];
        }
    }
}
