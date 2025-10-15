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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event listener.
 *
 * @method string getEventName() Obtain Event name

 * @method void setEventName(string $EventName) Set Event name

 * @method string getEventSubType() Obtain Event cycle. valid values: SECOND, MIN, HOUR, DAY.

 * @method void setEventSubType(string $EventSubType) Set Event cycle. valid values: SECOND, MIN, HOUR, DAY.

 * @method string getEventBroadcastType() Obtain Event BROADCAST type: SINGLE, BROADCAST.

 * @method void setEventBroadcastType(string $EventBroadcastType) Set Event BROADCAST type: SINGLE, BROADCAST.

 * @method array getPropertiesList() Obtain Extension Information


 * @method void setPropertiesList(array $PropertiesList) Set Extension Information
 */
class EventListener extends AbstractModel
{
    /**
     * @var string Event name

     */
    public $EventName;

    /**
     * @var string Event cycle. valid values: SECOND, MIN, HOUR, DAY.

     */
    public $EventSubType;

    /**
     * @var string Event BROADCAST type: SINGLE, BROADCAST.

     */
    public $EventBroadcastType;

    /**
     * @var array Extension Information


     */
    public $PropertiesList;

    /**
     * @param string $EventName Event name

     * @param string $EventSubType Event cycle. valid values: SECOND, MIN, HOUR, DAY.

     * @param string $EventBroadcastType Event BROADCAST type: SINGLE, BROADCAST.

     * @param array $PropertiesList Extension Information
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("PropertiesList",$param) and $param["PropertiesList"] !== null) {
            $this->PropertiesList = [];
            foreach ($param["PropertiesList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->PropertiesList, $obj);
            }
        }
    }
}
