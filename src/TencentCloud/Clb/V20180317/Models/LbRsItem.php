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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Querying the input data types
 *
 * @method string getVpcId() Obtain VPC ID in string format. Only string format is supported.
Can be queried through the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api.
 * @method void setVpcId(string $VpcId) Set VPC ID in string format. Only string format is supported.
Can be queried through the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api.
 * @method string getPrivateIp() Obtain Specifies the private IP address for backend querying, which can be CVM or eni.
Can be queried through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1) api.
 * @method void setPrivateIp(string $PrivateIp) Set Specifies the private IP address for backend querying, which can be CVM or eni.
Can be queried through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1) api.
 */
class LbRsItem extends AbstractModel
{
    /**
     * @var string VPC ID in string format. Only string format is supported.
Can be queried through the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api.
     */
    public $VpcId;

    /**
     * @var string Specifies the private IP address for backend querying, which can be CVM or eni.
Can be queried through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1) api.
     */
    public $PrivateIp;

    /**
     * @param string $VpcId VPC ID in string format. Only string format is supported.
Can be queried through the [DescribeVpcs](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) api.
     * @param string $PrivateIp Specifies the private IP address for backend querying, which can be CVM or eni.
Can be queried through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702?from_cn_redirect=1) api.
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

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }
    }
}
