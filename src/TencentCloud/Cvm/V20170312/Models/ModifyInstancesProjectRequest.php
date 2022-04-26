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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesProject request structure.
 *
 * @method array getInstanceIds() Obtain Instance IDs. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. You can operate up to 100 instances in each request.
 * @method void setInstanceIds(array $InstanceIds) Set Instance IDs. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. You can operate up to 100 instances in each request.
 * @method integer getProjectId() Obtain Project ID. You can use the API `AddProject` to create projects, and obtain the `projectId` field in the response of the `DescribeProject` API. When using the [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) API to query instances later, you can filter the results by the project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID. You can use the API `AddProject` to create projects, and obtain the `projectId` field in the response of the `DescribeProject` API. When using the [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) API to query instances later, you can filter the results by the project ID.
 */
class ModifyInstancesProjectRequest extends AbstractModel
{
    /**
     * @var array Instance IDs. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. You can operate up to 100 instances in each request.
     */
    public $InstanceIds;

    /**
     * @var integer Project ID. You can use the API `AddProject` to create projects, and obtain the `projectId` field in the response of the `DescribeProject` API. When using the [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) API to query instances later, you can filter the results by the project ID.
     */
    public $ProjectId;

    /**
     * @param array $InstanceIds Instance IDs. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. You can operate up to 100 instances in each request.
     * @param integer $ProjectId Project ID. You can use the API `AddProject` to create projects, and obtain the `projectId` field in the response of the `DescribeProject` API. When using the [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) API to query instances later, you can filter the results by the project ID.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
