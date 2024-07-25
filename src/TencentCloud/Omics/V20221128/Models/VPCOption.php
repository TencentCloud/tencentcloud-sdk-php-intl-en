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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC configuration
 *
 * @method string getVPCId() Obtain VPC ID (Either VPCId or VPCCIDRBlock must be selected. If VPCId is selected, the existing VPCs will be used; if VPCCIDRBlock is selected, a new VPC will be created.)
 * @method void setVPCId(string $VPCId) Set VPC ID (Either VPCId or VPCCIDRBlock must be selected. If VPCId is selected, the existing VPCs will be used; if VPCCIDRBlock is selected, a new VPC will be created.)
 * @method string getSubnetId() Obtain Subnet ID (Either SubnetId or SubnetZone&SubnetCIDRBlock must be selected. If SubnetId is selected, the existing subnet will be used; if SubnetZone&SubnetCIDRBlock is selected, a new subnet will be created.)
 * @method void setSubnetId(string $SubnetId) Set Subnet ID (Either SubnetId or SubnetZone&SubnetCIDRBlock must be selected. If SubnetId is selected, the existing subnet will be used; if SubnetZone&SubnetCIDRBlock is selected, a new subnet will be created.)
 * @method string getSubnetZone() Obtain Subnet availability zone
 * @method void setSubnetZone(string $SubnetZone) Set Subnet availability zone
 * @method string getVPCCIDRBlock() Obtain  VPC CIDR.
 * @method void setVPCCIDRBlock(string $VPCCIDRBlock) Set  VPC CIDR.
 * @method string getSubnetCIDRBlock() Obtain Subnet CIDR
 * @method void setSubnetCIDRBlock(string $SubnetCIDRBlock) Set Subnet CIDR
 */
class VPCOption extends AbstractModel
{
    /**
     * @var string VPC ID (Either VPCId or VPCCIDRBlock must be selected. If VPCId is selected, the existing VPCs will be used; if VPCCIDRBlock is selected, a new VPC will be created.)
     */
    public $VPCId;

    /**
     * @var string Subnet ID (Either SubnetId or SubnetZone&SubnetCIDRBlock must be selected. If SubnetId is selected, the existing subnet will be used; if SubnetZone&SubnetCIDRBlock is selected, a new subnet will be created.)
     */
    public $SubnetId;

    /**
     * @var string Subnet availability zone
     */
    public $SubnetZone;

    /**
     * @var string  VPC CIDR.
     */
    public $VPCCIDRBlock;

    /**
     * @var string Subnet CIDR
     */
    public $SubnetCIDRBlock;

    /**
     * @param string $VPCId VPC ID (Either VPCId or VPCCIDRBlock must be selected. If VPCId is selected, the existing VPCs will be used; if VPCCIDRBlock is selected, a new VPC will be created.)
     * @param string $SubnetId Subnet ID (Either SubnetId or SubnetZone&SubnetCIDRBlock must be selected. If SubnetId is selected, the existing subnet will be used; if SubnetZone&SubnetCIDRBlock is selected, a new subnet will be created.)
     * @param string $SubnetZone Subnet availability zone
     * @param string $VPCCIDRBlock  VPC CIDR.
     * @param string $SubnetCIDRBlock Subnet CIDR
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
        if (array_key_exists("VPCId",$param) and $param["VPCId"] !== null) {
            $this->VPCId = $param["VPCId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetZone",$param) and $param["SubnetZone"] !== null) {
            $this->SubnetZone = $param["SubnetZone"];
        }

        if (array_key_exists("VPCCIDRBlock",$param) and $param["VPCCIDRBlock"] !== null) {
            $this->VPCCIDRBlock = $param["VPCCIDRBlock"];
        }

        if (array_key_exists("SubnetCIDRBlock",$param) and $param["SubnetCIDRBlock"] !== null) {
            $this->SubnetCIDRBlock = $param["SubnetCIDRBlock"];
        }
    }
}
