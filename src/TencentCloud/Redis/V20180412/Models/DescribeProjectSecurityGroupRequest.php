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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectSecurityGroup request structure.
 *
 * @method integer getProjectId() Obtain Project ID for query.
- 0: default project.
- -1: all projects.
- Greater than 0: specific project. Log in to the [project management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
 * @method void setProjectId(integer $ProjectId) Set Project ID for query.
- 0: default project.
- -1: all projects.
- Greater than 0: specific project. Log in to the [project management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
 * @method string getSecurityGroupId() Obtain Security group ID, which can be obtained through the sub-parameter **SecurityGroupId** of the response parameter **InstanceSecurityGroupsDetail** of the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID, which can be obtained through the sub-parameter **SecurityGroupId** of the response parameter **InstanceSecurityGroupsDetail** of the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
 */
class DescribeProjectSecurityGroupRequest extends AbstractModel
{
    /**
     * @var integer Project ID for query.
- 0: default project.
- -1: all projects.
- Greater than 0: specific project. Log in to the [project management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
     */
    public $ProjectId;

    /**
     * @var string Security group ID, which can be obtained through the sub-parameter **SecurityGroupId** of the response parameter **InstanceSecurityGroupsDetail** of the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
     */
    public $SecurityGroupId;

    /**
     * @param integer $ProjectId Project ID for query.
- 0: default project.
- -1: all projects.
- Greater than 0: specific project. Log in to the [project management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
     * @param string $SecurityGroupId Security group ID, which can be obtained through the sub-parameter **SecurityGroupId** of the response parameter **InstanceSecurityGroupsDetail** of the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
    }
}
