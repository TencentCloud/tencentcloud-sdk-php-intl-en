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
 * NAT gateway object.
 *
 * @method string getNatGatewayId() Obtain NAT gateway ID.
 * @method void setNatGatewayId(string $NatGatewayId) Set NAT gateway ID.
 * @method string getNatGatewayName() Obtain NAT gateway name.
 * @method void setNatGatewayName(string $NatGatewayName) Set NAT gateway name.
 * @method string getCreatedTime() Obtain NAT gateway creation time.
 * @method void setCreatedTime(string $CreatedTime) Set NAT gateway creation time.
 * @method string getState() Obtain The status of the NAT gateway.
 'PENDING': Creating, 'DELETING': Deleting, 'AVAILABLE': Operating, 'UPDATING': Upgrading,
'FAILED': Failed.
 * @method void setState(string $State) Set The status of the NAT gateway.
 'PENDING': Creating, 'DELETING': Deleting, 'AVAILABLE': Operating, 'UPDATING': Upgrading,
'FAILED': Failed.
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth of the gateway. Unit: Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth of the gateway. Unit: Mbps.
 * @method integer getMaxConcurrentConnection() Obtain The concurrent connections cap of the gateway.
 * @method void setMaxConcurrentConnection(integer $MaxConcurrentConnection) Set The concurrent connections cap of the gateway.
 * @method array getPublicIpAddressSet() Obtain The public IP object array of the bound NAT gateway.
 * @method void setPublicIpAddressSet(array $PublicIpAddressSet) Set The public IP object array of the bound NAT gateway.
 * @method string getNetworkState() Obtain The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Account is in arrears and the service is suspended.
 * @method void setNetworkState(string $NetworkState) Set The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Account is in arrears and the service is suspended.
 * @method array getDestinationIpPortTranslationNatRuleSet() Obtain The port forwarding rules of the NAT gateway.
 * @method void setDestinationIpPortTranslationNatRuleSet(array $DestinationIpPortTranslationNatRuleSet) Set The port forwarding rules of the NAT gateway.
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getZone() Obtain The availability zone in which the NAT gateway is located.
 * @method void setZone(string $Zone) Set The availability zone in which the NAT gateway is located.
 */
class NatGateway extends AbstractModel
{
    /**
     * @var string NAT gateway ID.
     */
    public $NatGatewayId;

    /**
     * @var string NAT gateway name.
     */
    public $NatGatewayName;

    /**
     * @var string NAT gateway creation time.
     */
    public $CreatedTime;

    /**
     * @var string The status of the NAT gateway.
 'PENDING': Creating, 'DELETING': Deleting, 'AVAILABLE': Operating, 'UPDATING': Upgrading,
'FAILED': Failed.
     */
    public $State;

    /**
     * @var integer The maximum outbound bandwidth of the gateway. Unit: Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer The concurrent connections cap of the gateway.
     */
    public $MaxConcurrentConnection;

    /**
     * @var array The public IP object array of the bound NAT gateway.
     */
    public $PublicIpAddressSet;

    /**
     * @var string The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Account is in arrears and the service is suspended.
     */
    public $NetworkState;

    /**
     * @var array The port forwarding rules of the NAT gateway.
     */
    public $DestinationIpPortTranslationNatRuleSet;

    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string The availability zone in which the NAT gateway is located.
     */
    public $Zone;

    /**
     * @param string $NatGatewayId NAT gateway ID.
     * @param string $NatGatewayName NAT gateway name.
     * @param string $CreatedTime NAT gateway creation time.
     * @param string $State The status of the NAT gateway.
 'PENDING': Creating, 'DELETING': Deleting, 'AVAILABLE': Operating, 'UPDATING': Upgrading,
'FAILED': Failed.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth of the gateway. Unit: Mbps.
     * @param integer $MaxConcurrentConnection The concurrent connections cap of the gateway.
     * @param array $PublicIpAddressSet The public IP object array of the bound NAT gateway.
     * @param string $NetworkState The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Account is in arrears and the service is suspended.
     * @param array $DestinationIpPortTranslationNatRuleSet The port forwarding rules of the NAT gateway.
     * @param string $VpcId VPC instance ID.
     * @param string $Zone The availability zone in which the NAT gateway is located.
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MaxConcurrentConnection",$param) and $param["MaxConcurrentConnection"] !== null) {
            $this->MaxConcurrentConnection = $param["MaxConcurrentConnection"];
        }

        if (array_key_exists("PublicIpAddressSet",$param) and $param["PublicIpAddressSet"] !== null) {
            $this->PublicIpAddressSet = [];
            foreach ($param["PublicIpAddressSet"] as $key => $value){
                $obj = new NatGatewayAddress();
                $obj->deserialize($value);
                array_push($this->PublicIpAddressSet, $obj);
            }
        }

        if (array_key_exists("NetworkState",$param) and $param["NetworkState"] !== null) {
            $this->NetworkState = $param["NetworkState"];
        }

        if (array_key_exists("DestinationIpPortTranslationNatRuleSet",$param) and $param["DestinationIpPortTranslationNatRuleSet"] !== null) {
            $this->DestinationIpPortTranslationNatRuleSet = [];
            foreach ($param["DestinationIpPortTranslationNatRuleSet"] as $key => $value){
                $obj = new DestinationIpPortTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->DestinationIpPortTranslationNatRuleSet, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
