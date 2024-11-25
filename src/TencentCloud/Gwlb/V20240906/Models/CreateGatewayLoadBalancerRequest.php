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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGatewayLoadBalancer request structure.
 *
 * @method string getVpcId() Obtain ID of the VPC to which the backend target device of the GWLB belongs, such as vpc-12345678. It can be obtained through the DescribeVpcEx interface. If left blank, it defaults to DefaultVPC. This parameter is required when a private network CLB instance is created.
 * @method void setVpcId(string $VpcId) Set ID of the VPC to which the backend target device of the GWLB belongs, such as vpc-12345678. It can be obtained through the DescribeVpcEx interface. If left blank, it defaults to DefaultVPC. This parameter is required when a private network CLB instance is created.
 * @method string getSubnetId() Obtain Subnet ID of the VPC to which the backend target device of the GWLB belongs.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of the VPC to which the backend target device of the GWLB belongs.
 * @method string getLoadBalancerName() Obtain GWLB instance name. It supports input of 1 to 60 characters. If not filled in, it will be generated automatically by default.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set GWLB instance name. It supports input of 1 to 60 characters. If not filled in, it will be generated automatically by default.
 * @method integer getNumber() Obtain Number of GWLBs to create, with a default of 1. The maximum batch creation quantity is 10.
 * @method void setNumber(integer $Number) Set Number of GWLBs to create, with a default of 1. The maximum batch creation quantity is 10.
 * @method array getTags() Obtain While the GWLB is purchased, it is tagged, with a maximum of 20 tag key-value pairs.
 * @method void setTags(array $Tags) Set While the GWLB is purchased, it is tagged, with a maximum of 20 tag key-value pairs.
 * @method string getLBChargeType() Obtain GWLB instance billing type, which currently supports POSTPAID_BY_HOUR only. The default is POSTPAID_BY_HOUR.
 * @method void setLBChargeType(string $LBChargeType) Set GWLB instance billing type, which currently supports POSTPAID_BY_HOUR only. The default is POSTPAID_BY_HOUR.
 */
class CreateGatewayLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string ID of the VPC to which the backend target device of the GWLB belongs, such as vpc-12345678. It can be obtained through the DescribeVpcEx interface. If left blank, it defaults to DefaultVPC. This parameter is required when a private network CLB instance is created.
     */
    public $VpcId;

    /**
     * @var string Subnet ID of the VPC to which the backend target device of the GWLB belongs.
     */
    public $SubnetId;

    /**
     * @var string GWLB instance name. It supports input of 1 to 60 characters. If not filled in, it will be generated automatically by default.
     */
    public $LoadBalancerName;

    /**
     * @var integer Number of GWLBs to create, with a default of 1. The maximum batch creation quantity is 10.
     */
    public $Number;

    /**
     * @var array While the GWLB is purchased, it is tagged, with a maximum of 20 tag key-value pairs.
     */
    public $Tags;

    /**
     * @var string GWLB instance billing type, which currently supports POSTPAID_BY_HOUR only. The default is POSTPAID_BY_HOUR.
     */
    public $LBChargeType;

    /**
     * @param string $VpcId ID of the VPC to which the backend target device of the GWLB belongs, such as vpc-12345678. It can be obtained through the DescribeVpcEx interface. If left blank, it defaults to DefaultVPC. This parameter is required when a private network CLB instance is created.
     * @param string $SubnetId Subnet ID of the VPC to which the backend target device of the GWLB belongs.
     * @param string $LoadBalancerName GWLB instance name. It supports input of 1 to 60 characters. If not filled in, it will be generated automatically by default.
     * @param integer $Number Number of GWLBs to create, with a default of 1. The maximum batch creation quantity is 10.
     * @param array $Tags While the GWLB is purchased, it is tagged, with a maximum of 20 tag key-value pairs.
     * @param string $LBChargeType GWLB instance billing type, which currently supports POSTPAID_BY_HOUR only. The default is POSTPAID_BY_HOUR.
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LBChargeType",$param) and $param["LBChargeType"] !== null) {
            $this->LBChargeType = $param["LBChargeType"];
        }
    }
}
