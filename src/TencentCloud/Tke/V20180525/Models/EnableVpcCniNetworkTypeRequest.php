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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableVpcCniNetworkType request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getVpcCniType() Obtain The VPC-CNI mode. `tke-route-eni`: Multi-IP ENI, `tke-direct-eni`: Independent ENI
 * @method void setVpcCniType(string $VpcCniType) Set The VPC-CNI mode. `tke-route-eni`: Multi-IP ENI, `tke-direct-eni`: Independent ENI
 * @method boolean getEnableStaticIp() Obtain Whether to enable static IP address
 * @method void setEnableStaticIp(boolean $EnableStaticIp) Set Whether to enable static IP address
 * @method array getSubnets() Obtain The container subnet being used
 * @method void setSubnets(array $Subnets) Set The container subnet being used
 * @method integer getExpiredSeconds() Obtain Specifies when to release the IP after the Pod termination in static IP mode. It must be longer than 300 seconds. If this parameter is left empty, the IP address will never be released.
 * @method void setExpiredSeconds(integer $ExpiredSeconds) Set Specifies when to release the IP after the Pod termination in static IP mode. It must be longer than 300 seconds. If this parameter is left empty, the IP address will never be released.
 * @method boolean getSkipAddingNonMasqueradeCIDRs() Obtain Whether to skip adding the VPC IP range to `NonMasqueradeCIDRs` field of `ip-masq-agent-config`. Default value: `false`
 * @method void setSkipAddingNonMasqueradeCIDRs(boolean $SkipAddingNonMasqueradeCIDRs) Set Whether to skip adding the VPC IP range to `NonMasqueradeCIDRs` field of `ip-masq-agent-config`. Default value: `false`
 */
class EnableVpcCniNetworkTypeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string The VPC-CNI mode. `tke-route-eni`: Multi-IP ENI, `tke-direct-eni`: Independent ENI
     */
    public $VpcCniType;

    /**
     * @var boolean Whether to enable static IP address
     */
    public $EnableStaticIp;

    /**
     * @var array The container subnet being used
     */
    public $Subnets;

    /**
     * @var integer Specifies when to release the IP after the Pod termination in static IP mode. It must be longer than 300 seconds. If this parameter is left empty, the IP address will never be released.
     */
    public $ExpiredSeconds;

    /**
     * @var boolean Whether to skip adding the VPC IP range to `NonMasqueradeCIDRs` field of `ip-masq-agent-config`. Default value: `false`
     */
    public $SkipAddingNonMasqueradeCIDRs;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $VpcCniType The VPC-CNI mode. `tke-route-eni`: Multi-IP ENI, `tke-direct-eni`: Independent ENI
     * @param boolean $EnableStaticIp Whether to enable static IP address
     * @param array $Subnets The container subnet being used
     * @param integer $ExpiredSeconds Specifies when to release the IP after the Pod termination in static IP mode. It must be longer than 300 seconds. If this parameter is left empty, the IP address will never be released.
     * @param boolean $SkipAddingNonMasqueradeCIDRs Whether to skip adding the VPC IP range to `NonMasqueradeCIDRs` field of `ip-masq-agent-config`. Default value: `false`
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VpcCniType",$param) and $param["VpcCniType"] !== null) {
            $this->VpcCniType = $param["VpcCniType"];
        }

        if (array_key_exists("EnableStaticIp",$param) and $param["EnableStaticIp"] !== null) {
            $this->EnableStaticIp = $param["EnableStaticIp"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = $param["Subnets"];
        }

        if (array_key_exists("ExpiredSeconds",$param) and $param["ExpiredSeconds"] !== null) {
            $this->ExpiredSeconds = $param["ExpiredSeconds"];
        }

        if (array_key_exists("SkipAddingNonMasqueradeCIDRs",$param) and $param["SkipAddingNonMasqueradeCIDRs"] !== null) {
            $this->SkipAddingNonMasqueradeCIDRs = $param["SkipAddingNonMasqueradeCIDRs"];
        }
    }
}
