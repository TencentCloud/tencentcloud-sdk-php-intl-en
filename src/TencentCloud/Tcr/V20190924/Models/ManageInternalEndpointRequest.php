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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ManageInternalEndpoint request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getOperation() Obtain Create/Delete
 * @method void setOperation(string $Operation) Set Create/Delete
 * @method string getVpcId() Obtain ID of the VPC to be connected to
 * @method void setVpcId(string $VpcId) Set ID of the VPC to be connected to
 * @method string getSubnetId() Obtain ID of the subnet to be connected to
 * @method void setSubnetId(string $SubnetId) Set ID of the subnet to be connected to
 * @method integer getRegionId() Obtain ID of the requested region, which is used as the region of the replica instance
 * @method void setRegionId(integer $RegionId) Set ID of the requested region, which is used as the region of the replica instance
 * @method string getRegionName() Obtain Name of the requested region, which is used as the region of the replica instance
 * @method void setRegionName(string $RegionName) Set Name of the requested region, which is used as the region of the replica instance
 */
class ManageInternalEndpointRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Create/Delete
     */
    public $Operation;

    /**
     * @var string ID of the VPC to be connected to
     */
    public $VpcId;

    /**
     * @var string ID of the subnet to be connected to
     */
    public $SubnetId;

    /**
     * @var integer ID of the requested region, which is used as the region of the replica instance
     */
    public $RegionId;

    /**
     * @var string Name of the requested region, which is used as the region of the replica instance
     */
    public $RegionName;

    /**
     * @param string $RegistryId Instance ID
     * @param string $Operation Create/Delete
     * @param string $VpcId ID of the VPC to be connected to
     * @param string $SubnetId ID of the subnet to be connected to
     * @param integer $RegionId ID of the requested region, which is used as the region of the replica instance
     * @param string $RegionName Name of the requested region, which is used as the region of the replica instance
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
