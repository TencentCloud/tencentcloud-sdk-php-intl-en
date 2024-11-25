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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binding relationship between health check policy and node pool
 *
 * @method string getName() Obtain Health check policy name
 * @method void setName(string $Name) Set Health check policy name
 * @method string getCreatedAt() Obtain Rule creation time
 * @method void setCreatedAt(string $CreatedAt) Set Rule creation time
 * @method array getNodePools() Obtain Associated node pool array
 * @method void setNodePools(array $NodePools) Set Associated node pool array
 */
class HealthCheckPolicyBinding extends AbstractModel
{
    /**
     * @var string Health check policy name
     */
    public $Name;

    /**
     * @var string Rule creation time
     */
    public $CreatedAt;

    /**
     * @var array Associated node pool array
     */
    public $NodePools;

    /**
     * @param string $Name Health check policy name
     * @param string $CreatedAt Rule creation time
     * @param array $NodePools Associated node pool array
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("NodePools",$param) and $param["NodePools"] !== null) {
            $this->NodePools = $param["NodePools"];
        }
    }
}
