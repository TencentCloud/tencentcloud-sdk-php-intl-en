<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getInstanceGroupId() Obtain Instance group ID
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Instance group ID
 * @method string getUniqVpcId() Obtain VPC information
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC information
 * @method string getUniqSubnetId() Obtain Subnet information.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet information.
 * @method string getVip() Obtain vip information.
 * @method void setVip(string $Vip) Set vip information.
 * @method integer getVport() Obtain Specifies the vport information.
 * @method void setVport(integer $Vport) Set Specifies the vport information.
 */
class RollbackRoGroupInfo extends AbstractModel
{
    /**
     * @var string Instance group ID
     */
    public $InstanceGroupId;

    /**
     * @var string VPC information
     */
    public $UniqVpcId;

    /**
     * @var string Subnet information.
     */
    public $UniqSubnetId;

    /**
     * @var string vip information.
     */
    public $Vip;

    /**
     * @var integer Specifies the vport information.
     */
    public $Vport;

    /**
     * @param string $InstanceGroupId Instance group ID
     * @param string $UniqVpcId VPC information
     * @param string $UniqSubnetId Subnet information.
     * @param string $Vip vip information.
     * @param integer $Vport Specifies the vport information.
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
        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
