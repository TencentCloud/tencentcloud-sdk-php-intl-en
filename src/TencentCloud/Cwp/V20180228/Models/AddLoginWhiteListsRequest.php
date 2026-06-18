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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLoginWhiteLists request structure.
 *
 * @method HostLoginWhiteObj getHostLoginWhiteObj() Obtain <p>Unusual-login allowlist entry</p>
 * @method void setHostLoginWhiteObj(HostLoginWhiteObj $HostLoginWhiteObj) Set <p>Unusual-login allowlist entry</p>
 * @method string getProcessType() Obtain <p>Event sync processing method:<br>"" -- No action<br>"All" -- Add all event records matching this configuration to the allowlist<br>"Id" -- Add the event record corresponding to EventId to the allowlist</p>
 * @method void setProcessType(string $ProcessType) Set <p>Event sync processing method:<br>"" -- No action<br>"All" -- Add all event records matching this configuration to the allowlist<br>"Id" -- Add the event record corresponding to EventId to the allowlist</p>
 * @method integer getEventId() Obtain <p>Unusual-login event ID. This parameter is required when ProcessType is Id.</p>
 * @method void setEventId(integer $EventId) Set <p>Unusual-login event ID. This parameter is required when ProcessType is Id.</p>
 */
class AddLoginWhiteListsRequest extends AbstractModel
{
    /**
     * @var HostLoginWhiteObj <p>Unusual-login allowlist entry</p>
     */
    public $HostLoginWhiteObj;

    /**
     * @var string <p>Event sync processing method:<br>"" -- No action<br>"All" -- Add all event records matching this configuration to the allowlist<br>"Id" -- Add the event record corresponding to EventId to the allowlist</p>
     */
    public $ProcessType;

    /**
     * @var integer <p>Unusual-login event ID. This parameter is required when ProcessType is Id.</p>
     */
    public $EventId;

    /**
     * @param HostLoginWhiteObj $HostLoginWhiteObj <p>Unusual-login allowlist entry</p>
     * @param string $ProcessType <p>Event sync processing method:<br>"" -- No action<br>"All" -- Add all event records matching this configuration to the allowlist<br>"Id" -- Add the event record corresponding to EventId to the allowlist</p>
     * @param integer $EventId <p>Unusual-login event ID. This parameter is required when ProcessType is Id.</p>
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
