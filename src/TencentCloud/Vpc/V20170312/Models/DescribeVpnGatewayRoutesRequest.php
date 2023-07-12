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
 * DescribeVpnGatewayRoutes request structure.
 *
 * @method string getVpnGatewayId() Obtain Instance ID of the VPN gateway
 * @method void setVpnGatewayId(string $VpnGatewayId) Set Instance ID of the VPN gateway
 * @method array getFilters() Obtain Filter condition. Valid values: `DestinationCidr`, `InstanceId`, and `InstanceType`.
 * @method void setFilters(array $Filters) Set Filter condition. Valid values: `DestinationCidr`, `InstanceId`, and `InstanceType`.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Number of returned results per page. Default value: 20; maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of returned results per page. Default value: 20; maximum value: 100
 */
class DescribeVpnGatewayRoutesRequest extends AbstractModel
{
    /**
     * @var string Instance ID of the VPN gateway
     */
    public $VpnGatewayId;

    /**
     * @var array Filter condition. Valid values: `DestinationCidr`, `InstanceId`, and `InstanceType`.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of returned results per page. Default value: 20; maximum value: 100
     */
    public $Limit;

    /**
     * @param string $VpnGatewayId Instance ID of the VPN gateway
     * @param array $Filters Filter condition. Valid values: `DestinationCidr`, `InstanceId`, and `InstanceType`.
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Number of returned results per page. Default value: 20; maximum value: 100
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
