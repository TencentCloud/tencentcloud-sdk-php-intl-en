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
 * @method string getClusterCIDR() Obtain CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC’s CIDR or the CIDRs of other clusters in the same VPC
 * @method void setClusterCIDR(string $ClusterCIDR) Set CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC’s CIDR or the CIDRs of other clusters in the same VPC
 * @method boolean getIgnoreClusterCIDRConflict() Obtain Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
 * @method void setIgnoreClusterCIDRConflict(boolean $IgnoreClusterCIDRConflict) Set Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
 * @method integer getMaxNodePodNum() Obtain Maximum number of pods on each node in the cluster
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) Set Maximum number of pods on each node in the cluster
 * @method integer getMaxClusterServiceNum() Obtain Maximum number of cluster services
 * @method void setMaxClusterServiceNum(integer $MaxClusterServiceNum) Set Maximum number of cluster services
 */

/**
 *Container networking parameters for the cluster
 */
class ClusterCIDRSettings extends AbstractModel
{
    /**
     * @var string CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC’s CIDR or the CIDRs of other clusters in the same VPC
     */
    public $ClusterCIDR;

    /**
     * @var boolean Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
     */
    public $IgnoreClusterCIDRConflict;

    /**
     * @var integer Maximum number of pods on each node in the cluster
     */
    public $MaxNodePodNum;

    /**
     * @var integer Maximum number of cluster services
     */
    public $MaxClusterServiceNum;
    /**
     * @param string $ClusterCIDR CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC’s CIDR or the CIDRs of other clusters in the same VPC
     * @param boolean $IgnoreClusterCIDRConflict Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
     * @param integer $MaxNodePodNum Maximum number of pods on each node in the cluster
     * @param integer $MaxClusterServiceNum Maximum number of cluster services
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
        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("IgnoreClusterCIDRConflict",$param) and $param["IgnoreClusterCIDRConflict"] !== null) {
            $this->IgnoreClusterCIDRConflict = $param["IgnoreClusterCIDRConflict"];
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("MaxClusterServiceNum",$param) and $param["MaxClusterServiceNum"] !== null) {
            $this->MaxClusterServiceNum = $param["MaxClusterServiceNum"];
        }
    }
}
