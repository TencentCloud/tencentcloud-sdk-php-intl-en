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
 * Container networking parameters for the cluster
 *
 * @method string getClusterCIDR() Obtain CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC
 * @method void setClusterCIDR(string $ClusterCIDR) Set CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC
 * @method boolean getIgnoreClusterCIDRConflict() Obtain Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
 * @method void setIgnoreClusterCIDRConflict(boolean $IgnoreClusterCIDRConflict) Set Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
 * @method integer getMaxNodePodNum() Obtain Maximum number of Pods on each node. Value range: 16 to 256. When its power is not 2, it will round upward to the closest power of 2.
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) Set Maximum number of Pods on each node. Value range: 16 to 256. When its power is not 2, it will round upward to the closest power of 2.
 * @method integer getMaxClusterServiceNum() Obtain The maximum number of services in a cluster. The range is from 32 to 32768. When its power is not 2, it will round upward to the closest power of 2. Default value is 256.
 * @method void setMaxClusterServiceNum(integer $MaxClusterServiceNum) Set The maximum number of services in a cluster. The range is from 32 to 32768. When its power is not 2, it will round upward to the closest power of 2. Default value is 256.
 * @method string getServiceCIDR() Obtain The CIDR block used to assign cluster service IP addresses. It must conflict with neither the VPC CIDR block nor with CIDR blocks of other clusters in the same VPC instance. The IP range must be within the private network IP range, such as 10.1.0.0/14, 192.168.0.1/18, and 172.16.0.0/16.
 * @method void setServiceCIDR(string $ServiceCIDR) Set The CIDR block used to assign cluster service IP addresses. It must conflict with neither the VPC CIDR block nor with CIDR blocks of other clusters in the same VPC instance. The IP range must be within the private network IP range, such as 10.1.0.0/14, 192.168.0.1/18, and 172.16.0.0/16.
 * @method array getEniSubnetIds() Obtain Subnet ID of the ENI in VPC-CNI network mode
 * @method void setEniSubnetIds(array $EniSubnetIds) Set Subnet ID of the ENI in VPC-CNI network mode
 * @method integer getClaimExpiredSeconds() Obtain Repossession time of ENI IP addresses in VPC-CNI network mode, whose range is [300,15768000)
 * @method void setClaimExpiredSeconds(integer $ClaimExpiredSeconds) Set Repossession time of ENI IP addresses in VPC-CNI network mode, whose range is [300,15768000)
 * @method boolean getIgnoreServiceCIDRConflict() Obtain Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
 * @method void setIgnoreServiceCIDRConflict(boolean $IgnoreServiceCIDRConflict) Set Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
 */
class ClusterCIDRSettings extends AbstractModel
{
    /**
     * @var string CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC
     */
    public $ClusterCIDR;

    /**
     * @var boolean Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
     */
    public $IgnoreClusterCIDRConflict;

    /**
     * @var integer Maximum number of Pods on each node. Value range: 16 to 256. When its power is not 2, it will round upward to the closest power of 2.
     */
    public $MaxNodePodNum;

    /**
     * @var integer The maximum number of services in a cluster. The range is from 32 to 32768. When its power is not 2, it will round upward to the closest power of 2. Default value is 256.
     */
    public $MaxClusterServiceNum;

    /**
     * @var string The CIDR block used to assign cluster service IP addresses. It must conflict with neither the VPC CIDR block nor with CIDR blocks of other clusters in the same VPC instance. The IP range must be within the private network IP range, such as 10.1.0.0/14, 192.168.0.1/18, and 172.16.0.0/16.
     */
    public $ServiceCIDR;

    /**
     * @var array Subnet ID of the ENI in VPC-CNI network mode
     */
    public $EniSubnetIds;

    /**
     * @var integer Repossession time of ENI IP addresses in VPC-CNI network mode, whose range is [300,15768000)
     */
    public $ClaimExpiredSeconds;

    /**
     * @var boolean Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
     */
    public $IgnoreServiceCIDRConflict;

    /**
     * @param string $ClusterCIDR CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC
     * @param boolean $IgnoreClusterCIDRConflict Whether to ignore ClusterCIDR conflict errors, which are not ignored by default
     * @param integer $MaxNodePodNum Maximum number of Pods on each node. Value range: 16 to 256. When its power is not 2, it will round upward to the closest power of 2.
     * @param integer $MaxClusterServiceNum The maximum number of services in a cluster. The range is from 32 to 32768. When its power is not 2, it will round upward to the closest power of 2. Default value is 256.
     * @param string $ServiceCIDR The CIDR block used to assign cluster service IP addresses. It must conflict with neither the VPC CIDR block nor with CIDR blocks of other clusters in the same VPC instance. The IP range must be within the private network IP range, such as 10.1.0.0/14, 192.168.0.1/18, and 172.16.0.0/16.
     * @param array $EniSubnetIds Subnet ID of the ENI in VPC-CNI network mode
     * @param integer $ClaimExpiredSeconds Repossession time of ENI IP addresses in VPC-CNI network mode, whose range is [300,15768000)
     * @param boolean $IgnoreServiceCIDRConflict Whether to ignore ServiceCIDR conflict errors. It is only valid in VPC-CNI mode. Default value: `false`.
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

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("EniSubnetIds",$param) and $param["EniSubnetIds"] !== null) {
            $this->EniSubnetIds = $param["EniSubnetIds"];
        }

        if (array_key_exists("ClaimExpiredSeconds",$param) and $param["ClaimExpiredSeconds"] !== null) {
            $this->ClaimExpiredSeconds = $param["ClaimExpiredSeconds"];
        }

        if (array_key_exists("IgnoreServiceCIDRConflict",$param) and $param["IgnoreServiceCIDRConflict"] !== null) {
            $this->IgnoreServiceCIDRConflict = $param["IgnoreServiceCIDRConflict"];
        }
    }
}
