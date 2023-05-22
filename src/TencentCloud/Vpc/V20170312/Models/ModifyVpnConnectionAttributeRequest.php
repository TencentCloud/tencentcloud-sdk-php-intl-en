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
 * ModifyVpnConnectionAttribute request structure.
 *
 * @method string getVpnConnectionId() Obtain The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
 * @method void setVpnConnectionId(string $VpnConnectionId) Set The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
 * @method string getVpnConnectionName() Obtain VPN tunnel can be named freely, but the maximum length is 60 characters.
 * @method void setVpnConnectionName(string $VpnConnectionName) Set VPN tunnel can be named freely, but the maximum length is 60 characters.
 * @method string getPreShareKey() Obtain The pre-shared key.
 * @method void setPreShareKey(string $PreShareKey) Set The pre-shared key.
 * @method array getSecurityPolicyDatabases() Obtain SPD policy group. Taking {"10.0.0.5/24":["172.123.10.5/16"]} as an example, 10.0.0.5/24 is the VPC private IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
 * @method void setSecurityPolicyDatabases(array $SecurityPolicyDatabases) Set SPD policy group. Taking {"10.0.0.5/24":["172.123.10.5/16"]} as an example, 10.0.0.5/24 is the VPC private IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
 * @method IKEOptionsSpecification getIKEOptionsSpecification() Obtain IKE (Internet Key Exchange) configuration. IKE comes with a self-protection mechanism. The network security protocol is configured by the user.
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) Set IKE (Internet Key Exchange) configuration. IKE comes with a self-protection mechanism. The network security protocol is configured by the user.
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() Obtain IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) Set IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
 * @method boolean getEnableHealthCheck() Obtain Whether to enable the tunnel health check. The default value is `False`.
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) Set Whether to enable the tunnel health check. The default value is `False`.
 * @method string getHealthCheckLocalIp() Obtain Local IP address for the tunnel health check
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) Set Local IP address for the tunnel health check
 * @method string getHealthCheckRemoteIp() Obtain Peer IP address for the tunnel health check
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) Set Peer IP address for the tunnel health check
 * @method string getNegotiationType() Obtain Negotiation type. Valid values: `active` (default value), `passive` and `flowTrigger`.
 * @method void setNegotiationType(string $NegotiationType) Set Negotiation type. Valid values: `active` (default value), `passive` and `flowTrigger`.
 * @method integer getDpdEnable() Obtain Specifies whether to enable DPD. Valid values: `0` (disable) and `1` (enable)
 * @method void setDpdEnable(integer $DpdEnable) Set Specifies whether to enable DPD. Valid values: `0` (disable) and `1` (enable)
 * @method string getDpdTimeout() Obtain DPD timeout period. Default: 30; unit: second. If the request is not responded within this period, the peer end is considered not exists. This parameter is valid when the value of `DpdEnable` is 1. 
 * @method void setDpdTimeout(string $DpdTimeout) Set DPD timeout period. Default: 30; unit: second. If the request is not responded within this period, the peer end is considered not exists. This parameter is valid when the value of `DpdEnable` is 1. 
 * @method string getDpdAction() Obtain The action after DPD timeout. Valid values: `clear` (disconnect) and `restart` (try again). It’s valid when `DpdEnable` is `1`. 
 * @method void setDpdAction(string $DpdAction) Set The action after DPD timeout. Valid values: `clear` (disconnect) and `restart` (try again). It’s valid when `DpdEnable` is `1`. 
 * @method string getCustomerGatewayId() Obtain Peer gateway ID. You can update tunnels of V4.0 and later gateways.
 * @method void setCustomerGatewayId(string $CustomerGatewayId) Set Peer gateway ID. You can update tunnels of V4.0 and later gateways.
 */
class ModifyVpnConnectionAttributeRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
     */
    public $VpnConnectionId;

    /**
     * @var string VPN tunnel can be named freely, but the maximum length is 60 characters.
     */
    public $VpnConnectionName;

    /**
     * @var string The pre-shared key.
     */
    public $PreShareKey;

    /**
     * @var array SPD policy group. Taking {"10.0.0.5/24":["172.123.10.5/16"]} as an example, 10.0.0.5/24 is the VPC private IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
     */
    public $SecurityPolicyDatabases;

    /**
     * @var IKEOptionsSpecification IKE (Internet Key Exchange) configuration. IKE comes with a self-protection mechanism. The network security protocol is configured by the user.
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
     */
    public $IPSECOptionsSpecification;

    /**
     * @var boolean Whether to enable the tunnel health check. The default value is `False`.
     */
    public $EnableHealthCheck;

    /**
     * @var string Local IP address for the tunnel health check
     */
    public $HealthCheckLocalIp;

    /**
     * @var string Peer IP address for the tunnel health check
     */
    public $HealthCheckRemoteIp;

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
     * @var string Peer gateway ID. You can update tunnels of V4.0 and later gateways.
     */
    public $CustomerGatewayId;

    /**
     * @param string $VpnConnectionId The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
     * @param string $VpnConnectionName VPN tunnel can be named freely, but the maximum length is 60 characters.
     * @param string $PreShareKey The pre-shared key.
     * @param array $SecurityPolicyDatabases SPD policy group. Taking {"10.0.0.5/24":["172.123.10.5/16"]} as an example, 10.0.0.5/24 is the VPC private IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
     * @param IKEOptionsSpecification $IKEOptionsSpecification IKE (Internet Key Exchange) configuration. IKE comes with a self-protection mechanism. The network security protocol is configured by the user.
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
     * @param boolean $EnableHealthCheck Whether to enable the tunnel health check. The default value is `False`.
     * @param string $HealthCheckLocalIp Local IP address for the tunnel health check
     * @param string $HealthCheckRemoteIp Peer IP address for the tunnel health check
     * @param string $NegotiationType Negotiation type. Valid values: `active` (default value), `passive` and `flowTrigger`.
     * @param integer $DpdEnable Specifies whether to enable DPD. Valid values: `0` (disable) and `1` (enable)
     * @param string $DpdTimeout DPD timeout period. Default: 30; unit: second. If the request is not responded within this period, the peer end is considered not exists. This parameter is valid when the value of `DpdEnable` is 1. 
     * @param string $DpdAction The action after DPD timeout. Valid values: `clear` (disconnect) and `restart` (try again). It’s valid when `DpdEnable` is `1`. 
     * @param string $CustomerGatewayId Peer gateway ID. You can update tunnels of V4.0 and later gateways.
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
        if (array_key_exists("VpnConnectionId",$param) and $param["VpnConnectionId"] !== null) {
            $this->VpnConnectionId = $param["VpnConnectionId"];
        }

        if (array_key_exists("VpnConnectionName",$param) and $param["VpnConnectionName"] !== null) {
            $this->VpnConnectionName = $param["VpnConnectionName"];
        }

        if (array_key_exists("PreShareKey",$param) and $param["PreShareKey"] !== null) {
            $this->PreShareKey = $param["PreShareKey"];
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

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckLocalIp",$param) and $param["HealthCheckLocalIp"] !== null) {
            $this->HealthCheckLocalIp = $param["HealthCheckLocalIp"];
        }

        if (array_key_exists("HealthCheckRemoteIp",$param) and $param["HealthCheckRemoteIp"] !== null) {
            $this->HealthCheckRemoteIp = $param["HealthCheckRemoteIp"];
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

        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }
    }
}
