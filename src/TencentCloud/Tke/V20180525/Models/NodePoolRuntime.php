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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodePool Runtime Configuration
 *
 * @method string getNodePoolId() Obtain Node pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodePoolId(string $NodePoolId) Set Node pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getRuntimeType() Obtain Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRuntimeType(string $RuntimeType) Set Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getRuntimeVersion() Obtain Runtime version

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRuntimeVersion(string $RuntimeVersion) Set Runtime version

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getNodePoolName() Obtain Node pool name

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodePoolName(string $NodePoolName) Set Node pool name

Note: This field may return "null", indicating that no valid value can be obtained.
 */
class NodePoolRuntime extends AbstractModel
{
    /**
     * @var string Node pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodePoolId;

    /**
     * @var string Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $RuntimeType;

    /**
     * @var string Runtime version

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $RuntimeVersion;

    /**
     * @var string Node pool name

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodePoolName;

    /**
     * @param string $NodePoolId Node pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $RuntimeType Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $RuntimeVersion Runtime version

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $NodePoolName Node pool name

Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("RuntimeType",$param) and $param["RuntimeType"] !== null) {
            $this->RuntimeType = $param["RuntimeType"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("NodePoolName",$param) and $param["NodePoolName"] !== null) {
            $this->NodePoolName = $param["NodePoolName"];
        }
    }
}
