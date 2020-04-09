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
 * DescribeInstancesOperationLimit request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID(s). To obtain the instance IDs, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The instance ID format is `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688)). The maximum number of instance IDs in each request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID(s). To obtain the instance IDs, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The instance ID format is `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688)). The maximum number of instance IDs in each request is 100.
 * @method string getOperation() Obtain Operation on the instance(s).
<li> INSTANCE_DEGRADE: downgrade the instance configurations</li>
 * @method void setOperation(string $Operation) Set Operation on the instance(s).
<li> INSTANCE_DEGRADE: downgrade the instance configurations</li>
 */
class DescribeInstancesOperationLimitRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The instance ID format is `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688)). The maximum number of instance IDs in each request is 100.
     */
    public $InstanceIds;

    /**
     * @var string Operation on the instance(s).
<li> INSTANCE_DEGRADE: downgrade the instance configurations</li>
     */
    public $Operation;

    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The instance ID format is `ins-xxxxxxxx`. For more information on the format of this parameter, see the `id.N` section of [API Introduction](https://cloud.tencent.com/document/api/213/15688)). The maximum number of instance IDs in each request is 100.
     * @param string $Operation Operation on the instance(s).
<li> INSTANCE_DEGRADE: downgrade the instance configurations</li>
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
