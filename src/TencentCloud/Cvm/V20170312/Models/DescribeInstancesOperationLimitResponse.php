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
 * @method array getInstanceOperationLimitSet() 获取The maximum number of times you can modify the instance configurations (degrading the configurations)
 * @method void setInstanceOperationLimitSet(array $InstanceOperationLimitSet) 设置The maximum number of times you can modify the instance configurations (degrading the configurations)
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeInstancesOperationLimit response structure.
 */
class DescribeInstancesOperationLimitResponse extends AbstractModel
{
    /**
     * @var array The maximum number of times you can modify the instance configurations (degrading the configurations)
     */
    public $InstanceOperationLimitSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $InstanceOperationLimitSet The maximum number of times you can modify the instance configurations (degrading the configurations)
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceOperationLimitSet",$param) and $param["InstanceOperationLimitSet"] !== null) {
            $this->InstanceOperationLimitSet = [];
            foreach ($param["InstanceOperationLimitSet"] as $key => $value){
                $obj = new OperationCountLimit();
                $obj->deserialize($value);
                array_push($this->InstanceOperationLimitSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
