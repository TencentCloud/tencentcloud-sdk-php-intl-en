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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInstancesDisasterRecoverGroups request structure.
 *
 * @method array getInstanceIds() Obtain One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [`DescribeInstances`](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [`DescribeInstances`](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
 * @method array getDisasterRecoverGroupIds() Obtain ID list of placement groups, obtainable via the [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261) API. 
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set ID list of placement groups, obtainable via the [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261) API. 
 */
class DeleteInstancesDisasterRecoverGroupsRequest extends AbstractModel
{
    /**
     * @var array One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [`DescribeInstances`](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
     */
    public $InstanceIds;

    /**
     * @var array ID list of placement groups, obtainable via the [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261) API. 
     */
    public $DisasterRecoverGroupIds;

    /**
     * @param array $InstanceIds One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [`DescribeInstances`](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
     * @param array $DisasterRecoverGroupIds ID list of placement groups, obtainable via the [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261) API. 
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

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }
    }
}
