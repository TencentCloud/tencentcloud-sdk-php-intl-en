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
 * Multi-Channel gateway example instance binding relationship with origin IP ranges and origin IP range details.
 *
 * @method MultiPathGatewayCurrentOriginACL getMultiPathGatewayCurrentOriginACL() Obtain Describes the currently effective IP range for origin servers.
 * @method void setMultiPathGatewayCurrentOriginACL(MultiPathGatewayCurrentOriginACL $MultiPathGatewayCurrentOriginACL) Set Describes the currently effective IP range for origin servers.
 * @method MultiPathGatewayNextOriginACL getMultiPathGatewayNextOriginACL() Obtain When the origin IP range is updated, this field will be returned with the next version's effective origin IP range, including a comparison with the current origin IP range. this field is empty if not updated.
 * @method void setMultiPathGatewayNextOriginACL(MultiPathGatewayNextOriginACL $MultiPathGatewayNextOriginACL) Set When the origin IP range is updated, this field will be returned with the next version's effective origin IP range, including a comparison with the current origin IP range. this field is empty if not updated.
 */
class MultiPathGatewayOriginACLInfo extends AbstractModel
{
    /**
     * @var MultiPathGatewayCurrentOriginACL Describes the currently effective IP range for origin servers.
     */
    public $MultiPathGatewayCurrentOriginACL;

    /**
     * @var MultiPathGatewayNextOriginACL When the origin IP range is updated, this field will be returned with the next version's effective origin IP range, including a comparison with the current origin IP range. this field is empty if not updated.
     */
    public $MultiPathGatewayNextOriginACL;

    /**
     * @param MultiPathGatewayCurrentOriginACL $MultiPathGatewayCurrentOriginACL Describes the currently effective IP range for origin servers.
     * @param MultiPathGatewayNextOriginACL $MultiPathGatewayNextOriginACL When the origin IP range is updated, this field will be returned with the next version's effective origin IP range, including a comparison with the current origin IP range. this field is empty if not updated.
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
        if (array_key_exists("MultiPathGatewayCurrentOriginACL",$param) and $param["MultiPathGatewayCurrentOriginACL"] !== null) {
            $this->MultiPathGatewayCurrentOriginACL = new MultiPathGatewayCurrentOriginACL();
            $this->MultiPathGatewayCurrentOriginACL->deserialize($param["MultiPathGatewayCurrentOriginACL"]);
        }

        if (array_key_exists("MultiPathGatewayNextOriginACL",$param) and $param["MultiPathGatewayNextOriginACL"] !== null) {
            $this->MultiPathGatewayNextOriginACL = new MultiPathGatewayNextOriginACL();
            $this->MultiPathGatewayNextOriginACL->deserialize($param["MultiPathGatewayNextOriginACL"]);
        }
    }
}
