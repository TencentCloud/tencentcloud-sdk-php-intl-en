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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Windows event log collection configuration
 *
 * @method string getEventChannel() Obtain Event channel, supports Application, Security, Setup, System, ALL

 * @method void setEventChannel(string $EventChannel) Set Event channel, supports Application, Security, Setup, System, ALL

 * @method integer getTimeType() Obtain Time type, 1: User-defined, 2: Current time
 * @method void setTimeType(integer $TimeType) Set Time type, 1: User-defined, 2: Current time
 * @method integer getTimestamp() Obtain Time, when choosing custom time type, a specific time is required
 * @method void setTimestamp(integer $Timestamp) Set Time, when choosing custom time type, a specific time is required
 * @method array getEventIDs() Obtain Event ID filter list
 * @method void setEventIDs(array $EventIDs) Set Event ID filter list
 */
class EventLog extends AbstractModel
{
    /**
     * @var string Event channel, supports Application, Security, Setup, System, ALL

     */
    public $EventChannel;

    /**
     * @var integer Time type, 1: User-defined, 2: Current time
     */
    public $TimeType;

    /**
     * @var integer Time, when choosing custom time type, a specific time is required
     */
    public $Timestamp;

    /**
     * @var array Event ID filter list
     */
    public $EventIDs;

    /**
     * @param string $EventChannel Event channel, supports Application, Security, Setup, System, ALL

     * @param integer $TimeType Time type, 1: User-defined, 2: Current time
     * @param integer $Timestamp Time, when choosing custom time type, a specific time is required
     * @param array $EventIDs Event ID filter list
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
