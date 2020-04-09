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
 * VPN tunnel object.
 *
 * @method string getVpnConnectionId() Obtain Tunnel instance ID.
 * @method void setVpnConnectionId(string $VpnConnectionId) Set Tunnel instance ID.
 * @method string getVpnConnectionName() Obtain Tunnel name.
 * @method void setVpnConnectionName(string $VpnConnectionName) Set Tunnel name.
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getVpnGatewayId() Obtain The ID of the VPN gateway instance.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set The ID of the VPN gateway instance.
 * @method string getCustomerGatewayId() Obtain Customer gateway instance ID.
 * @method void setCustomerGatewayId(string $CustomerGatewayId) Set Customer gateway instance ID.
 * @method string getPreShareKey() Obtain The pre-shared key.
 * @method void setPreShareKey(string $PreShareKey) Set The pre-shared key.
 * @method string getVpnProto() Obtain Tunnel transmission protocol.
 * @method void setVpnProto(string $VpnProto) Set Tunnel transmission protocol.
 * @method string getEncryptProto() Obtain Tunnel encryption protocol.
 * @method void setEncryptProto(string $EncryptProto) Set Tunnel encryption protocol.
 * @method string getRouteType() Obtain Route Type.
 * @method void setRouteType(string $RouteType) Set Route Type.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method string getState() Obtain Production status of the tunnel. PENDING: Creating; AVAILABLE: Running; DELETING: Deleting.
 * @method void setState(string $State) Set Production status of the tunnel. PENDING: Creating; AVAILABLE: Running; DELETING: Deleting.
 * @method string getNetStatus() Obtain Connection status of the tunnel. AVAILABLE: Connected.
 * @method void setNetStatus(string $NetStatus) Set Connection status of the tunnel. AVAILABLE: Connected.
 * @method array getSecurityPolicyDatabaseSet() Obtain SPD.
 * @method void setSecurityPolicyDatabaseSet(array $SecurityPolicyDatabaseSet) Set SPD.
 * @method IKEOptionsSpecification getIKEOptionsSpecification() Obtain IKE options.
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) Set IKE options.
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() Obtain IPSEC options.
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) Set IPSEC options.
 */
class VpnConnection extends AbstractModel
{
    /**
     * @var string Tunnel instance ID.
     */
    public $VpnConnectionId;

    /**
     * @var string Tunnel name.
     */
    public $VpnConnectionName;

    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string The ID of the VPN gateway instance.
     */
    public $VpnGatewayId;

    /**
     * @var string Customer gateway instance ID.
     */
    public $CustomerGatewayId;

    /**
     * @var string The pre-shared key.
     */
    public $PreShareKey;

    /**
     * @var string Tunnel transmission protocol.
     */
    public $VpnProto;

    /**
     * @var string Tunnel encryption protocol.
     */
    public $EncryptProto;

    /**
     * @var string Route Type.
     */
    public $RouteType;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var string Production status of the tunnel. PENDING: Creating; AVAILABLE: Running; DELETING: Deleting.
     */
    public $State;

    /**
     * @var string Connection status of the tunnel. AVAILABLE: Connected.
     */
    public $NetStatus;

    /**
     * @var array SPD.
     */
    public $SecurityPolicyDatabaseSet;

    /**
     * @var IKEOptionsSpecification IKE options.
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification IPSEC options.
     */
    public $IPSECOptionsSpecification;

    /**
     * @param string $VpnConnectionId Tunnel instance ID.
     * @param string $VpnConnectionName Tunnel name.
     * @param string $VpcId VPC instance ID.
     * @param string $VpnGatewayId The ID of the VPN gateway instance.
     * @param string $CustomerGatewayId Customer gateway instance ID.
     * @param string $PreShareKey The pre-shared key.
     * @param string $VpnProto Tunnel transmission protocol.
     * @param string $EncryptProto Tunnel encryption protocol.
     * @param string $RouteType Route Type.
     * @param string $CreatedTime Creation Time.
     * @param string $State Production status of the tunnel. PENDING: Creating; AVAILABLE: Running; DELETING: Deleting.
     * @param string $NetStatus Connection status of the tunnel. AVAILABLE: Connected.
     * @param array $SecurityPolicyDatabaseSet SPD.
     * @param IKEOptionsSpecification $IKEOptionsSpecification IKE options.
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSEC options.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("PreShareKey",$param) and $param["PreShareKey"] !== null) {
            $this->PreShareKey = $param["PreShareKey"];
        }

        if (array_key_exists("VpnProto",$param) and $param["VpnProto"] !== null) {
            $this->VpnProto = $param["VpnProto"];
        }

        if (array_key_exists("EncryptProto",$param) and $param["EncryptProto"] !== null) {
            $this->EncryptProto = $param["EncryptProto"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("NetStatus",$param) and $param["NetStatus"] !== null) {
            $this->NetStatus = $param["NetStatus"];
        }

        if (array_key_exists("SecurityPolicyDatabaseSet",$param) and $param["SecurityPolicyDatabaseSet"] !== null) {
            $this->SecurityPolicyDatabaseSet = [];
            foreach ($param["SecurityPolicyDatabaseSet"] as $key => $value){
                $obj = new SecurityPolicyDatabase();
                $obj->deserialize($value);
                array_push($this->SecurityPolicyDatabaseSet, $obj);
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
    }
}
