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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpnGatewayCcnRoutes request structure.
 *
 * @method string getVpnGatewayId() Obtain Instance ID of the VPN gateway
 * @method void setVpnGatewayId(string $VpnGatewayId) Set Instance ID of the VPN gateway
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The returned quantity
 * @method void setLimit(integer $Limit) Set The returned quantity
 */
class DescribeVpnGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string Instance ID of the VPN gateway
     */
    public $VpnGatewayId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The returned quantity
     */
    public $Limit;

    /**
     * @param string $VpnGatewayId Instance ID of the VPN gateway
     * @param integer $Offset Offset.
     * @param integer $Limit The returned quantity
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
