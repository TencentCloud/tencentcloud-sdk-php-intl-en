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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance event information.
 *
 * @method string getEventName() Obtain Event name.
 * @method void setEventName(string $EventName) Set Event name.
 * @method string getEventStatus() Obtain Event status.
 * @method void setEventStatus(string $EventStatus) Set Event status.
 * @method string getOccurTime() Obtain Event occurrence time.
 * @method void setOccurTime(string $OccurTime) Set Event occurrence time.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 */
class InstEventInfo extends AbstractModel
{
    /**
     * @var string Event name.
     */
    public $EventName;

    /**
     * @var string Event status.
     */
    public $EventStatus;

    /**
     * @var string Event occurrence time.
     */
    public $OccurTime;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @param string $EventName Event name.
     * @param string $EventStatus Event status.
     * @param string $OccurTime Event occurrence time.
     * @param string $InstanceId Instance ID.
     * @param string $NodeId Node ID.
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

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("OccurTime",$param) and $param["OccurTime"] !== null) {
            $this->OccurTime = $param["OccurTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
