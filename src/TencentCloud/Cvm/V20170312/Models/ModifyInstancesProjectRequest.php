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
 * @method array getInstanceIds() 获取Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method void setInstanceIds(array $InstanceIds) 设置Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method integer getProjectId() 获取Project ID. You can create a project by calling [AddProject](https://cloud.tencent.com/doc/api/403/4398). When calling [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) to query instances, the project IDs can be used to filter the results.
 * @method void setProjectId(integer $ProjectId) 设置Project ID. You can create a project by calling [AddProject](https://cloud.tencent.com/doc/api/403/4398). When calling [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) to query instances, the project IDs can be used to filter the results.
 */

/**
 *ModifyInstancesProject request structure.
 */
class ModifyInstancesProjectRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     */
    public $InstanceIds;

    /**
     * @var integer Project ID. You can create a project by calling [AddProject](https://cloud.tencent.com/doc/api/403/4398). When calling [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) to query instances, the project IDs can be used to filter the results.
     */
    public $ProjectId;
    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     * @param integer $ProjectId Project ID. You can create a project by calling [AddProject](https://cloud.tencent.com/doc/api/403/4398). When calling [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) to query instances, the project IDs can be used to filter the results.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
