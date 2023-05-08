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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Threshold setting for an extended event
 *
 * @method string getEventType() Obtain Event type. Valid values: `slow` (set threshold for slow SQL ), `blocked` (set threshold for the blocking and deadlock).
 * @method void setEventType(string $EventType) Set Event type. Valid values: `slow` (set threshold for slow SQL ), `blocked` (set threshold for the blocking and deadlock).
 * @method integer getThreshold() Obtain Threshold in milliseconds. Valid values: `0`(disable), `non-zero` (enable)
 * @method void setThreshold(integer $Threshold) Set Threshold in milliseconds. Valid values: `0`(disable), `non-zero` (enable)
 */
class EventConfig extends AbstractModel
{
    /**
     * @var string Event type. Valid values: `slow` (set threshold for slow SQL ), `blocked` (set threshold for the blocking and deadlock).
     */
    public $EventType;

    /**
     * @var integer Threshold in milliseconds. Valid values: `0`(disable), `non-zero` (enable)
     */
    public $Threshold;

    /**
     * @param string $EventType Event type. Valid values: `slow` (set threshold for slow SQL ), `blocked` (set threshold for the blocking and deadlock).
     * @param integer $Threshold Threshold in milliseconds. Valid values: `0`(disable), `non-zero` (enable)
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
