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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMultiPathGatewayStatus request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Gateway ID.
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getGatewayStatus() Obtain Modifies the enabled/disabled status of the gateway. valid values: <li> offline: disabled;</li> <li> online: enabled.</li>.
 * @method void setGatewayStatus(string $GatewayStatus) Set Modifies the enabled/disabled status of the gateway. valid values: <li> offline: disabled;</li> <li> online: enabled.</li>.
 */
class ModifyMultiPathGatewayStatusRequest extends AbstractModel
{
    /**
     * @var string Gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Modifies the enabled/disabled status of the gateway. valid values: <li> offline: disabled;</li> <li> online: enabled.</li>.
     */
    public $GatewayStatus;

    /**
     * @param string $GatewayId Gateway ID.
     * @param string $ZoneId Zone ID.
     * @param string $GatewayStatus Modifies the enabled/disabled status of the gateway. valid values: <li> offline: disabled;</li> <li> online: enabled.</li>.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GatewayStatus",$param) and $param["GatewayStatus"] !== null) {
            $this->GatewayStatus = $param["GatewayStatus"];
        }
    }
}
