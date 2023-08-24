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
 * CloneSecurityGroup request structure.
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the <a href="https://intl.cloud.tencent.com/document/product/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the <a href="https://intl.cloud.tencent.com/document/product/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API.
 * @method string getGroupName() Obtain The name of security group clone. You can enter any name within 60 characters. If this parameter is left empty, the security group clone will use the name of the source security group.
 * @method void setGroupName(string $GroupName) Set The name of security group clone. You can enter any name within 60 characters. If this parameter is left empty, the security group clone will use the name of the source security group.
 * @method string getGroupDescription() Obtain Description of the security group clone. You can enter up to 100 characters. If this parameter is left empty, the security group clone will use the description of the source security group.
 * @method void setGroupDescription(string $GroupDescription) Set Description of the security group clone. You can enter up to 100 characters. If this parameter is left empty, the security group clone will use the description of the source security group.
 * @method string getProjectId() Obtain Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
 * @method void setProjectId(string $ProjectId) Set Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
 * @method string getRemoteRegion() Obtain The region of the source security group for a cross-region clone. For example, to clone the security group in Guangzhou to Shanghai, set it to `ap-guangzhou`.
 * @method void setRemoteRegion(string $RemoteRegion) Set The region of the source security group for a cross-region clone. For example, to clone the security group in Guangzhou to Shanghai, set it to `ap-guangzhou`.
 */
class CloneSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the <a href="https://intl.cloud.tencent.com/document/product/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API.
     */
    public $SecurityGroupId;

    /**
     * @var string The name of security group clone. You can enter any name within 60 characters. If this parameter is left empty, the security group clone will use the name of the source security group.
     */
    public $GroupName;

    /**
     * @var string Description of the security group clone. You can enter up to 100 characters. If this parameter is left empty, the security group clone will use the description of the source security group.
     */
    public $GroupDescription;

    /**
     * @var string Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
     */
    public $ProjectId;

    /**
     * @var string The region of the source security group for a cross-region clone. For example, to clone the security group in Guangzhou to Shanghai, set it to `ap-guangzhou`.
     */
    public $RemoteRegion;

    /**
     * @param string $SecurityGroupId Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the <a href="https://intl.cloud.tencent.com/document/product/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API.
     * @param string $GroupName The name of security group clone. You can enter any name within 60 characters. If this parameter is left empty, the security group clone will use the name of the source security group.
     * @param string $GroupDescription Description of the security group clone. You can enter up to 100 characters. If this parameter is left empty, the security group clone will use the description of the source security group.
     * @param string $ProjectId Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
     * @param string $RemoteRegion The region of the source security group for a cross-region clone. For example, to clone the security group in Guangzhou to Shanghai, set it to `ap-guangzhou`.
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupDescription",$param) and $param["GroupDescription"] !== null) {
            $this->GroupDescription = $param["GroupDescription"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            $this->RemoteRegion = $param["RemoteRegion"];
        }
    }
}
