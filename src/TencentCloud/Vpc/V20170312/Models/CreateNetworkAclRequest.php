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
 * CreateNetworkAcl request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
 * @method void setVpcId(string $VpcId) Set VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
 * @method string getNetworkAclName() Obtain Network ACL name, which can contain up to 60 bytes.
 * @method void setNetworkAclName(string $NetworkAclName) Set Network ACL name, which can contain up to 60 bytes.
 * @method string getNetworkAclType() Obtain Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
 * @method void setNetworkAclType(string $NetworkAclType) Set Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateNetworkAclRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
     */
    public $VpcId;

    /**
     * @var string Network ACL name, which can contain up to 60 bytes.
     */
    public $NetworkAclName;

    /**
     * @var string Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
     */
    public $NetworkAclType;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $VpcId VPC instance ID, which can be obtained from the `VpcId` field in the response of the [`DescribeVpcs`](https://intl.cloud.tencent.com/document/product/215/15778?from_cn_redirect=1) API.
     * @param string $NetworkAclName Network ACL name, which can contain up to 60 bytes.
     * @param string $NetworkAclType Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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

        if (array_key_exists("NetworkAclName",$param) and $param["NetworkAclName"] !== null) {
            $this->NetworkAclName = $param["NetworkAclName"];
        }

        if (array_key_exists("NetworkAclType",$param) and $param["NetworkAclType"] !== null) {
            $this->NetworkAclType = $param["NetworkAclType"];
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
