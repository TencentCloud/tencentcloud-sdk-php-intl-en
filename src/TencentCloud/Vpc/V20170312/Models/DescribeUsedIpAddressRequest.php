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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsedIpAddress request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getSubnetId() Obtain Subnet instance ID
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID
 * @method array getIpAddresses() Obtain List of IPs to be queried. The IPs must be within the VPC or subnet. Up to 100 IPs can be queried at a time.
 * @method void setIpAddresses(array $IpAddresses) Set List of IPs to be queried. The IPs must be within the VPC or subnet. Up to 100 IPs can be queried at a time.
 * @method integer getOffset() Obtain The offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The offset. Default value: 0
 * @method integer getLimit() Obtain The number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of returned results. Default value: 20. Maximum value: 100.
 */
class DescribeUsedIpAddressRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string Subnet instance ID
     */
    public $SubnetId;

    /**
     * @var array List of IPs to be queried. The IPs must be within the VPC or subnet. Up to 100 IPs can be queried at a time.
     */
    public $IpAddresses;

    /**
     * @var integer The offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $VpcId VPC instance ID.
     * @param string $SubnetId Subnet instance ID
     * @param array $IpAddresses List of IPs to be queried. The IPs must be within the VPC or subnet. Up to 100 IPs can be queried at a time.
     * @param integer $Offset The offset. Default value: 0
     * @param integer $Limit The number of returned results. Default value: 20. Maximum value: 100.
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

        if (array_key_exists("IpAddresses",$param) and $param["IpAddresses"] !== null) {
            $this->IpAddresses = $param["IpAddresses"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
