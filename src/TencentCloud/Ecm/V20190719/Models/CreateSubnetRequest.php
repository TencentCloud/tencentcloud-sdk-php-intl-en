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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubnet request structure.
 *
 * @method string getVpcId() Obtain ID of the VPC instance to be manipulated, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
 * @method void setVpcId(string $VpcId) Set ID of the VPC instance to be manipulated, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
 * @method string getSubnetName() Obtain Subnet name, which can contain up to 60 bytes.
 * @method void setSubnetName(string $SubnetName) Set Subnet name, which can contain up to 60 bytes.
 * @method string getCidrBlock() Obtain Subnet IP address range. It must be within the VPC IP address range. Subnet IP address ranges cannot overlap with each other within the same VPC.
 * @method void setCidrBlock(string $CidrBlock) Set Subnet IP address range. It must be within the VPC IP address range. Subnet IP address ranges cannot overlap with each other within the same VPC.
 * @method string getZone() Obtain AZ ID of the subnet. You can select different AZs for different subnets for cross-AZ disaster recovery.
 * @method void setZone(string $Zone) Set AZ ID of the subnet. You can select different AZs for different subnets for cross-AZ disaster recovery.
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method array getTags() Obtain List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateSubnetRequest extends AbstractModel
{
    /**
     * @var string ID of the VPC instance to be manipulated, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
     */
    public $VpcId;

    /**
     * @var string Subnet name, which can contain up to 60 bytes.
     */
    public $SubnetName;

    /**
     * @var string Subnet IP address range. It must be within the VPC IP address range. Subnet IP address ranges cannot overlap with each other within the same VPC.
     */
    public $CidrBlock;

    /**
     * @var string AZ ID of the subnet. You can select different AZs for different subnets for cross-AZ disaster recovery.
     */
    public $Zone;

    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var array List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $VpcId ID of the VPC instance to be manipulated, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
     * @param string $SubnetName Subnet name, which can contain up to 60 bytes.
     * @param string $CidrBlock Subnet IP address range. It must be within the VPC IP address range. Subnet IP address ranges cannot overlap with each other within the same VPC.
     * @param string $Zone AZ ID of the subnet. You can select different AZs for different subnets for cross-AZ disaster recovery.
     * @param string $EcmRegion ECM region
     * @param array $Tags List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
