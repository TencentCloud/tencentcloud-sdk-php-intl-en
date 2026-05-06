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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkAccessStrategy request structure.
 *
 * @method string getGatewayId() Obtain Cloud Native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud Native API gateway instance ID.
 * @method string getGroupId() Obtain Group ID
 * @method void setGroupId(string $GroupId) Set Group ID
 * @method string getNetworkType() Obtain Network type: 
-Open public network
-Internal private network (not currently supported)
 * @method void setNetworkType(string $NetworkType) Set Network type: 
-Open public network
-Internal private network (not currently supported)
 * @method string getVip() Obtain IP address
 * @method void setVip(string $Vip) Set IP address
 * @method NetworkAccessControl getAccessControl() Obtain Access control policy
 * @method void setAccessControl(NetworkAccessControl $AccessControl) Set Access control policy
 */
class ModifyNetworkAccessStrategyRequest extends AbstractModel
{
    /**
     * @var string Cloud Native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var string Group ID
     */
    public $GroupId;

    /**
     * @var string Network type: 
-Open public network
-Internal private network (not currently supported)
     */
    public $NetworkType;

    /**
     * @var string IP address
     */
    public $Vip;

    /**
     * @var NetworkAccessControl Access control policy
     */
    public $AccessControl;

    /**
     * @param string $GatewayId Cloud Native API gateway instance ID.
     * @param string $GroupId Group ID
     * @param string $NetworkType Network type: 
-Open public network
-Internal private network (not currently supported)
     * @param string $Vip IP address
     * @param NetworkAccessControl $AccessControl Access control policy
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new NetworkAccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }
    }
}
