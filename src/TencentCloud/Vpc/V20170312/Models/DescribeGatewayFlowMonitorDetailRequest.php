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
 * DescribeGatewayFlowMonitorDetail request structure.
 *
 * @method string getTimePoint() Obtain The point in time. This indicates details of this minute will be queried. For example, in `2019-02-28 18:15:20`, details at `18:15` will be queried.
 * @method void setTimePoint(string $TimePoint) Set The point in time. This indicates details of this minute will be queried. For example, in `2019-02-28 18:15:20`, details at `18:15` will be queried.
 * @method string getVpnId() Obtain The instance ID of the VPN gateway, such as `vpn-ltjahce6`.
 * @method void setVpnId(string $VpnId) Set The instance ID of the VPN gateway, such as `vpn-ltjahce6`.
 * @method string getDirectConnectGatewayId() Obtain The instance ID of the Direct Connect gateway, such as `dcg-ltjahce6`.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The instance ID of the Direct Connect gateway, such as `dcg-ltjahce6`.
 * @method string getPeeringConnectionId() Obtain The instance ID of the peering connection, such as `pcx-ltjahce6`.
 * @method void setPeeringConnectionId(string $PeeringConnectionId) Set The instance ID of the peering connection, such as `pcx-ltjahce6`.
 * @method string getNatId() Obtain The instance ID of the NAT gateway, such as `nat-ltjahce6`.
 * @method void setNatId(string $NatId) Set The instance ID of the NAT gateway, such as `nat-ltjahce6`.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The returned quantity.
 * @method void setLimit(integer $Limit) Set The returned quantity.
 * @method string getOrderField() Obtain The order field supports `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`.
 * @method void setOrderField(string $OrderField) Set The order field supports `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`.
 * @method string getOrderDirection() Obtain Order methods. Ascending: `ASC`, Descending: `DESC`.
 * @method void setOrderDirection(string $OrderDirection) Set Order methods. Ascending: `ASC`, Descending: `DESC`.
 */
class DescribeGatewayFlowMonitorDetailRequest extends AbstractModel
{
    /**
     * @var string The point in time. This indicates details of this minute will be queried. For example, in `2019-02-28 18:15:20`, details at `18:15` will be queried.
     */
    public $TimePoint;

    /**
     * @var string The instance ID of the VPN gateway, such as `vpn-ltjahce6`.
     */
    public $VpnId;

    /**
     * @var string The instance ID of the Direct Connect gateway, such as `dcg-ltjahce6`.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string The instance ID of the peering connection, such as `pcx-ltjahce6`.
     */
    public $PeeringConnectionId;

    /**
     * @var string The instance ID of the NAT gateway, such as `nat-ltjahce6`.
     */
    public $NatId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The returned quantity.
     */
    public $Limit;

    /**
     * @var string The order field supports `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`.
     */
    public $OrderField;

    /**
     * @var string Order methods. Ascending: `ASC`, Descending: `DESC`.
     */
    public $OrderDirection;

    /**
     * @param string $TimePoint The point in time. This indicates details of this minute will be queried. For example, in `2019-02-28 18:15:20`, details at `18:15` will be queried.
     * @param string $VpnId The instance ID of the VPN gateway, such as `vpn-ltjahce6`.
     * @param string $DirectConnectGatewayId The instance ID of the Direct Connect gateway, such as `dcg-ltjahce6`.
     * @param string $PeeringConnectionId The instance ID of the peering connection, such as `pcx-ltjahce6`.
     * @param string $NatId The instance ID of the NAT gateway, such as `nat-ltjahce6`.
     * @param integer $Offset Offset.
     * @param integer $Limit The returned quantity.
     * @param string $OrderField The order field supports `InPkg`, `OutPkg`, `InTraffic`, and `OutTraffic`.
     * @param string $OrderDirection Order methods. Ascending: `ASC`, Descending: `DESC`.
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
        if (array_key_exists("TimePoint",$param) and $param["TimePoint"] !== null) {
            $this->TimePoint = $param["TimePoint"];
        }

        if (array_key_exists("VpnId",$param) and $param["VpnId"] !== null) {
            $this->VpnId = $param["VpnId"];
        }

        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("PeeringConnectionId",$param) and $param["PeeringConnectionId"] !== null) {
            $this->PeeringConnectionId = $param["PeeringConnectionId"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
