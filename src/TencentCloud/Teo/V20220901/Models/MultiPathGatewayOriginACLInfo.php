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
 * Binding relationship between a multi-channel gateway example instance and the origin-pull IP range, as well as the origin-pull IP range details.
 *
 * @method MultiPathGatewayCurrentOriginACL getMultiPathGatewayCurrentOriginACL() Obtain Currently effective origin-pull IP range.
 * @method void setMultiPathGatewayCurrentOriginACL(MultiPathGatewayCurrentOriginACL $MultiPathGatewayCurrentOriginACL) Set Currently effective origin-pull IP range.
 * @method MultiPathGatewayNextOriginACL getMultiPathGatewayNextOriginACL() Obtain When the origin-pull IP range is updated, this field will return the origin-pull IP range that will take effect in the next version, including a contrast with the current origin-pull IP range. If there is no update, this field is empty.
 * @method void setMultiPathGatewayNextOriginACL(MultiPathGatewayNextOriginACL $MultiPathGatewayNextOriginACL) Set When the origin-pull IP range is updated, this field will return the origin-pull IP range that will take effect in the next version, including a contrast with the current origin-pull IP range. If there is no update, this field is empty.
 */
class MultiPathGatewayOriginACLInfo extends AbstractModel
{
    /**
     * @var MultiPathGatewayCurrentOriginACL Currently effective origin-pull IP range.
     */
    public $MultiPathGatewayCurrentOriginACL;

    /**
     * @var MultiPathGatewayNextOriginACL When the origin-pull IP range is updated, this field will return the origin-pull IP range that will take effect in the next version, including a contrast with the current origin-pull IP range. If there is no update, this field is empty.
     */
    public $MultiPathGatewayNextOriginACL;

    /**
     * @param MultiPathGatewayCurrentOriginACL $MultiPathGatewayCurrentOriginACL Currently effective origin-pull IP range.
     * @param MultiPathGatewayNextOriginACL $MultiPathGatewayNextOriginACL When the origin-pull IP range is updated, this field will return the origin-pull IP range that will take effect in the next version, including a contrast with the current origin-pull IP range. If there is no update, this field is empty.
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
