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
 * CreateVpnConnection request structure.
 *
 * @method string getVpnGatewayId() Obtain The ID of the VPN gateway instance.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set The ID of the VPN gateway instance.
 * @method string getCustomerGatewayId() Obtain The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/product/215/17516?from_cn_redirect=1) API.
 * @method void setCustomerGatewayId(string $CustomerGatewayId) Set The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/product/215/17516?from_cn_redirect=1) API.
 * @method string getVpnConnectionName() Obtain Gateway can be named freely, but the maximum length is 60 characters.
 * @method void setVpnConnectionName(string $VpnConnectionName) Set Gateway can be named freely, but the maximum length is 60 characters.
 * @method string getPreShareKey() Obtain The pre-shared key.
 * @method void setPreShareKey(string $PreShareKey) Set The pre-shared key.
 * @method string getVpcId() Obtain VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
This parameter is optional for a CCN-based VPN tunnel.
 * @method void setVpcId(string $VpcId) Set VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
This parameter is optional for a CCN-based VPN tunnel.
 * @method array getSecurityPolicyDatabases() Obtain The SPD policy group, for example: {"10.0.0.5/24":["172.123.10.5/16"]}. 10.0.0.5/24 is the VPC internal IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
 * @method void setSecurityPolicyDatabases(array $SecurityPolicyDatabases) Set The SPD policy group, for example: {"10.0.0.5/24":["172.123.10.5/16"]}. 10.0.0.5/24 is the VPC internal IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
 * @method IKEOptionsSpecification getIKEOptionsSpecification() Obtain Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) Set Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() Obtain IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) Set IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method boolean getEnableHealthCheck() Obtain Whether the tunnel health check is supported. The default value is `False`.
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) Set Whether the tunnel health check is supported. The default value is `False`.
 * @method string getHealthCheckLocalIp() Obtain Local IP of health check. It defaults to a random IP within 169.254.128.0/17.
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) Set Local IP of health check. It defaults to a random IP within 169.254.128.0/17.
 * @method string getHealthCheckRemoteIp() Obtain Peer IP of health check. It defaults to a random IP within 169.254.128.0/17.
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) Set Peer IP of health check. It defaults to a random IP within 169.254.128.0/17.
 * @method string getRouteType() Obtain Tunnel type. Valid values: `STATIC`, `StaticRoute`, and `Policy`.
 * @method void setRouteType(string $RouteType) Set Tunnel type. Valid values: `STATIC`, `StaticRoute`, and `Policy`.
 * @method string getNegotiationType() Obtain Negotiation type. Valid values: `active` (default value), `passive` and `flowTrigger`.
 * @method void setNegotiationType(string $NegotiationType) Set Negotiation type. Valid values: `active` (default value), `passive` and `flowTrigger`.
 * @method integer getDpdEnable() Obtain Specifies whether to enable DPD. Valid values: `0` (disable) and `1` (enable)
 * @method void setDpdEnable(integer $DpdEnable) Set Specifies whether to enable DPD. Valid values: `0` (disable) and `1` (enable)
 * @method string getDpdTimeout() Obtain DPD timeout period. Default: 30; unit: second. If the request is not responded within this period, the peer end is considered not exists. This parameter is valid when the value of `DpdEnable` is 1. 
 * @method void setDpdTimeout(string $DpdTimeout) Set DPD timeout period. Default: 30; unit: second. If the request is not responded within this period, the peer end is considered not exists. This parameter is valid when the value of `DpdEnable` is 1. 
 * @method string getDpdAction() Obtain The action after DPD timeout. Valid values: `clear` (disconnect) and `restart` (try again). It’s valid when `DpdEnable` is `1`. 
 * @method void setDpdAction(string $DpdAction) Set The action after DPD timeout. Valid values: `clear` (disconnect) and `restart` (try again). It’s valid when `DpdEnable` is `1`. 
 */
class CreateVpnConnectionRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPN gateway instance.
     */
    public $VpnGatewayId;

    /**
     * @var string The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/product/215/17516?from_cn_redirect=1) API.
     */
    public $CustomerGatewayId;

    /**
     * @var string Gateway can be named freely, but the maximum length is 60 characters.
     */
    public $VpnConnectionName;

    /**
     * @var string The pre-shared key.
     */
    public $PreShareKey;

    /**
     * @var string VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
This parameter is optional for a CCN-based VPN tunnel.
     */
    public $VpcId;

    /**
     * @var array The SPD policy group, for example: {"10.0.0.5/24":["172.123.10.5/16"]}. 10.0.0.5/24 is the VPC internal IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
     */
    public $SecurityPolicyDatabases;

    /**
     * @var IKEOptionsSpecification Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
     */
    public $IPSECOptionsSpecification;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @var boolean Whether the tunnel health check is supported. The default value is `False`.
     */
    public $EnableHealthCheck;

    /**
     * @var string Local IP of health check. It defaults to a random IP within 169.254.128.0/17.
     */
    public $HealthCheckLocalIp;

    /**
     * @var string Peer IP of health check. It defaults to a random IP within 169.254.128.0/17.
     */
    public $HealthCheckRemoteIp;

    /**
     * @var string Tunnel type. Valid values: `STATIC`, `StaticRoute`, and `Policy`.
     */
    public $RouteType;

    /**
     * @var string Negotiation type. Valid values: `active` (default value), `passive` and `flowTrigger`.
     */
    public $NegotiationType;

    /**
     * @var integer Specifies whether to enable DPD. Valid values: `0` (disable) and `1` (enable)
     */
    public $DpdEnable;

    /**
     * @var string DPD timeout period. Default: 30; unit: second. If the request is not responded within this period, the peer end is considered not exists. This parameter is valid when the value of `DpdEnable` is 1. 
     */
    public $DpdTimeout;

    /**
     * @var string The action after DPD timeout. Valid values: `clear` (disconnect) and `restart` (try again). It’s valid when `DpdEnable` is `1`. 
     */
    public $DpdAction;

    /**
     * @param string $VpnGatewayId The ID of the VPN gateway instance.
     * @param string $CustomerGatewayId The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the [DescribeCustomerGateways](https://intl.cloud.tencent.com/document/product/215/17516?from_cn_redirect=1) API.
     * @param string $VpnConnectionName Gateway can be named freely, but the maximum length is 60 characters.
     * @param string $PreShareKey The pre-shared key.
     * @param string $VpcId VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
This parameter is optional for a CCN-based VPN tunnel.
     * @param array $SecurityPolicyDatabases The SPD policy group, for example: {"10.0.0.5/24":["172.123.10.5/16"]}. 10.0.0.5/24 is the VPC internal IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
     * @param IKEOptionsSpecification $IKEOptionsSpecification Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     * @param boolean $EnableHealthCheck Whether the tunnel health check is supported. The default value is `False`.
     * @param string $HealthCheckLocalIp Local IP of health check. It defaults to a random IP within 169.254.128.0/17.
     * @param string $HealthCheckRemoteIp Peer IP of health check. It defaults to a random IP within 169.254.128.0/17.
     * @param string $RouteType Tunnel type. Valid values: `STATIC`, `StaticRoute`, and `Policy`.
     * @param string $NegotiationType Negotiation type. Valid values: `active` (default value), `passive` and `flowTrigger`.
     * @param integer $DpdEnable Specifies whether to enable DPD. Valid values: `0` (disable) and `1` (enable)
     * @param string $DpdTimeout DPD timeout period. Default: 30; unit: second. If the request is not responded within this period, the peer end is considered not exists. This parameter is valid when the value of `DpdEnable` is 1. 
     * @param string $DpdAction The action after DPD timeout. Valid values: `clear` (disconnect) and `restart` (try again). It’s valid when `DpdEnable` is `1`. 
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

        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("VpnConnectionName",$param) and $param["VpnConnectionName"] !== null) {
            $this->VpnConnectionName = $param["VpnConnectionName"];
        }

        if (array_key_exists("PreShareKey",$param) and $param["PreShareKey"] !== null) {
            $this->PreShareKey = $param["PreShareKey"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SecurityPolicyDatabases",$param) and $param["SecurityPolicyDatabases"] !== null) {
            $this->SecurityPolicyDatabases = [];
            foreach ($param["SecurityPolicyDatabases"] as $key => $value){
                $obj = new SecurityPolicyDatabase();
                $obj->deserialize($value);
                array_push($this->SecurityPolicyDatabases, $obj);
            }
        }

        if (array_key_exists("IKEOptionsSpecification",$param) and $param["IKEOptionsSpecification"] !== null) {
            $this->IKEOptionsSpecification = new IKEOptionsSpecification();
            $this->IKEOptionsSpecification->deserialize($param["IKEOptionsSpecification"]);
        }

        if (array_key_exists("IPSECOptionsSpecification",$param) and $param["IPSECOptionsSpecification"] !== null) {
            $this->IPSECOptionsSpecification = new IPSECOptionsSpecification();
            $this->IPSECOptionsSpecification->deserialize($param["IPSECOptionsSpecification"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckLocalIp",$param) and $param["HealthCheckLocalIp"] !== null) {
            $this->HealthCheckLocalIp = $param["HealthCheckLocalIp"];
        }

        if (array_key_exists("HealthCheckRemoteIp",$param) and $param["HealthCheckRemoteIp"] !== null) {
            $this->HealthCheckRemoteIp = $param["HealthCheckRemoteIp"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("NegotiationType",$param) and $param["NegotiationType"] !== null) {
            $this->NegotiationType = $param["NegotiationType"];
        }

        if (array_key_exists("DpdEnable",$param) and $param["DpdEnable"] !== null) {
            $this->DpdEnable = $param["DpdEnable"];
        }

        if (array_key_exists("DpdTimeout",$param) and $param["DpdTimeout"] !== null) {
            $this->DpdTimeout = $param["DpdTimeout"];
        }

        if (array_key_exists("DpdAction",$param) and $param["DpdAction"] !== null) {
            $this->DpdAction = $param["DpdAction"];
        }
    }
}
