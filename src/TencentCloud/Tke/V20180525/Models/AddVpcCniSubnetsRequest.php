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
 * AddVpcCniSubnets request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getSubnetIds() Obtain The subnets added for the cluster container network
 * @method void setSubnetIds(array $SubnetIds) Set The subnets added for the cluster container network
 * @method string getVpcId() Obtain ID of the VPC where the cluster resides
 * @method void setVpcId(string $VpcId) Set ID of the VPC where the cluster resides
 * @method boolean getSkipAddingNonMasqueradeCIDRs() Obtain Whether to skip adding the VPC IP range to `NonMasqueradeCIDRs` field of `ip-masq-agent-config`. Default value: `false`
 * @method void setSkipAddingNonMasqueradeCIDRs(boolean $SkipAddingNonMasqueradeCIDRs) Set Whether to skip adding the VPC IP range to `NonMasqueradeCIDRs` field of `ip-masq-agent-config`. Default value: `false`
 */
class AddVpcCniSubnetsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array The subnets added for the cluster container network
     */
    public $SubnetIds;

    /**
     * @var string ID of the VPC where the cluster resides
     */
    public $VpcId;

    /**
     * @var boolean Whether to skip adding the VPC IP range to `NonMasqueradeCIDRs` field of `ip-masq-agent-config`. Default value: `false`
     */
    public $SkipAddingNonMasqueradeCIDRs;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $SubnetIds The subnets added for the cluster container network
     * @param string $VpcId ID of the VPC where the cluster resides
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

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SkipAddingNonMasqueradeCIDRs",$param) and $param["SkipAddingNonMasqueradeCIDRs"] !== null) {
            $this->SkipAddingNonMasqueradeCIDRs = $param["SkipAddingNonMasqueradeCIDRs"];
        }
    }
}
