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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule Execution Configuration
 *
 * @method string getQueueName() Obtain Compute Queue Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQueueName(string $QueueName) Set Compute Queue Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupId() Obtain Execution Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Execution Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEngineType() Obtain The running execution engine, if not specified, the default execution engine under this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEngineType(string $EngineType) Set The running execution engine, if not specified, the default execution engine under this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleExecConfig extends AbstractModel
{
    /**
     * @var string Compute Queue Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QueueName;

    /**
     * @var string Execution Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupId;

    /**
     * @var string The running execution engine, if not specified, the default execution engine under this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EngineType;

    /**
     * @param string $QueueName Compute Queue Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupId Execution Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EngineType The running execution engine, if not specified, the default execution engine under this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
