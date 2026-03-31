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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpcEndPoint request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID. obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/1108/43663?from_cn_redirect=1).
 * @method void setVpcId(string $VpcId) Set VPC instance ID. obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/1108/43663?from_cn_redirect=1).
 * @method string getSubnetId() Obtain Subnet instance ID. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
 * @method string getEndPointName() Obtain Endpoint name. limited to 60 characters.
 * @method void setEndPointName(string $EndPointName) Set Endpoint name. limited to 60 characters.
 * @method string getEndPointServiceId() Obtain Endpoint service ID, which can be obtained through the [DescribeVpcEndPointService](https://www.tencentcloud.comom/document/product/215/54678?from_cn_redirect=1) api.
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID, which can be obtained through the [DescribeVpcEndPointService](https://www.tencentcloud.comom/document/product/215/54678?from_cn_redirect=1) api.
 * @method string getEndPointVip() Obtain Endpoint VIP. You can apply for a specified IP.
 * @method void setEndPointVip(string $EndPointVip) Set Endpoint VIP. You can apply for a specified IP.
 * @method string getSecurityGroupId() Obtain Security group ID. can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.comom/document/product/215/15808?from_cn_redirect=1).
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID. can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.comom/document/product/215/15808?from_cn_redirect=1).
 * @method array getTags() Obtain List of tags to be bound, for example, [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set List of tags to be bound, for example, [{"Key": "city", "Value": "shanghai"}].
 * @method string getIpAddressType() Obtain Protocol type. supports Ipv4 and Ipv6. default is Ipv4.
 * @method void setIpAddressType(string $IpAddressType) Set Protocol type. supports Ipv4 and Ipv6. default is Ipv4.
 */
class CreateVpcEndPointRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID. obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/1108/43663?from_cn_redirect=1).
     */
    public $VpcId;

    /**
     * @var string Subnet instance ID. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
     */
    public $SubnetId;

    /**
     * @var string Endpoint name. limited to 60 characters.
     */
    public $EndPointName;

    /**
     * @var string Endpoint service ID, which can be obtained through the [DescribeVpcEndPointService](https://www.tencentcloud.comom/document/product/215/54678?from_cn_redirect=1) api.
     */
    public $EndPointServiceId;

    /**
     * @var string Endpoint VIP. You can apply for a specified IP.
     */
    public $EndPointVip;

    /**
     * @var string Security group ID. can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.comom/document/product/215/15808?from_cn_redirect=1).
     */
    public $SecurityGroupId;

    /**
     * @var array List of tags to be bound, for example, [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @var string Protocol type. supports Ipv4 and Ipv6. default is Ipv4.
     */
    public $IpAddressType;

    /**
     * @param string $VpcId VPC instance ID. obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/1108/43663?from_cn_redirect=1).
     * @param string $SubnetId Subnet instance ID. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
     * @param string $EndPointName Endpoint name. limited to 60 characters.
     * @param string $EndPointServiceId Endpoint service ID, which can be obtained through the [DescribeVpcEndPointService](https://www.tencentcloud.comom/document/product/215/54678?from_cn_redirect=1) api.
     * @param string $EndPointVip Endpoint VIP. You can apply for a specified IP.
     * @param string $SecurityGroupId Security group ID. can be obtained through the API [DescribeSecurityGroups](https://www.tencentcloud.comom/document/product/215/15808?from_cn_redirect=1).
     * @param array $Tags List of tags to be bound, for example, [{"Key": "city", "Value": "shanghai"}].
     * @param string $IpAddressType Protocol type. supports Ipv4 and Ipv6. default is Ipv4.
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

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IpAddressType",$param) and $param["IpAddressType"] !== null) {
            $this->IpAddressType = $param["IpAddressType"];
        }
    }
}
