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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLoginWhiteLists request structure.
 *
 * @method HostLoginWhiteObj getHostLoginWhiteObj() Obtain Cross-region log-in allowlist entity
 * @method void setHostLoginWhiteObj(HostLoginWhiteObj $HostLoginWhiteObj) Set Cross-region log-in allowlist entity
 * @method string getProcessType() Obtain Synchronous event processing method:
"": do not process"All": add all events that match this configuration to the allowlist"Id": add the event corresponding to the event ID to the allowlist
 * @method void setProcessType(string $ProcessType) Set Synchronous event processing method:
"": do not process"All": add all events that match this configuration to the allowlist"Id": add the event corresponding to the event ID to the allowlist
 * @method integer getEventId() Obtain Cross-region log-in event ID. This parameter is required when ProcessType is set to Id.
 * @method void setEventId(integer $EventId) Set Cross-region log-in event ID. This parameter is required when ProcessType is set to Id.
 */
class AddLoginWhiteListsRequest extends AbstractModel
{
    /**
     * @var HostLoginWhiteObj Cross-region log-in allowlist entity
     */
    public $HostLoginWhiteObj;

    /**
     * @var string Synchronous event processing method:
"": do not process"All": add all events that match this configuration to the allowlist"Id": add the event corresponding to the event ID to the allowlist
     */
    public $ProcessType;

    /**
     * @var integer Cross-region log-in event ID. This parameter is required when ProcessType is set to Id.
     */
    public $EventId;

    /**
     * @param HostLoginWhiteObj $HostLoginWhiteObj Cross-region log-in allowlist entity
     * @param string $ProcessType Synchronous event processing method:
"": do not process"All": add all events that match this configuration to the allowlist"Id": add the event corresponding to the event ID to the allowlist
     * @param integer $EventId Cross-region log-in event ID. This parameter is required when ProcessType is set to Id.
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
        if (array_key_exists("HostLoginWhiteObj",$param) and $param["HostLoginWhiteObj"] !== null) {
            $this->HostLoginWhiteObj = new HostLoginWhiteObj();
            $this->HostLoginWhiteObj->deserialize($param["HostLoginWhiteObj"]);
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
