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
 * @method string getVpcId() Obtain The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
 * @method void setVpcId(string $VpcId) Set The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
 * @method string getVpnGatewayId() Obtain The ID of the VPN gateway instance.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set The ID of the VPN gateway instance.
 * @method string getCustomerGatewayId() Obtain The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the `DescribeCustomerGateways` API.
 * @method void setCustomerGatewayId(string $CustomerGatewayId) Set The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the `DescribeCustomerGateways` API.
 * @method string getVpnConnectionName() Obtain Gateway can be named freely, but the maximum length is 60 characters.
 * @method void setVpnConnectionName(string $VpnConnectionName) Set Gateway can be named freely, but the maximum length is 60 characters.
 * @method string getPreShareKey() Obtain The pre-shared key.
 * @method void setPreShareKey(string $PreShareKey) Set The pre-shared key.
 * @method array getSecurityPolicyDatabases() Obtain The SPD policy group, for example: {"10.0.0.5/24":["172.123.10.5/16"]}. 10.0.0.5/24 is the VPC internal IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
 * @method void setSecurityPolicyDatabases(array $SecurityPolicyDatabases) Set The SPD policy group, for example: {"10.0.0.5/24":["172.123.10.5/16"]}. 10.0.0.5/24 is the VPC internal IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
 * @method IKEOptionsSpecification getIKEOptionsSpecification() Obtain Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) Set Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() Obtain IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) Set IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
 */
class CreateVpnConnectionRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
     */
    public $VpcId;

    /**
     * @var string The ID of the VPN gateway instance.
     */
    public $VpnGatewayId;

    /**
     * @var string The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the `DescribeCustomerGateways` API.
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
     * @param string $VpcId The ID of the VPC instance. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
     * @param string $VpnGatewayId The ID of the VPN gateway instance.
     * @param string $CustomerGatewayId The ID of the customer gateway, such as `cgw-2wqq41m9`. You can query the customer gateway by using the `DescribeCustomerGateways` API.
     * @param string $VpnConnectionName Gateway can be named freely, but the maximum length is 60 characters.
     * @param string $PreShareKey The pre-shared key.
     * @param array $SecurityPolicyDatabases The SPD policy group, for example: {"10.0.0.5/24":["172.123.10.5/16"]}. 10.0.0.5/24 is the VPC internal IP range, and 172.123.10.5/16 is the IDC IP range. The user specifies the IP range in the VPC that can communicate with the IP range in the IDC.
     * @param IKEOptionsSpecification $IKEOptionsSpecification Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
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
    }
}
