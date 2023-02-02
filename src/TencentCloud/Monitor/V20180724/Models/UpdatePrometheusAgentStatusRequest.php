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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePrometheusAgentStatus request structure.
 *
 * @method string getInstanceId() Obtain TMP instance ID, such as “prom-abcd1234”.
 * @method void setInstanceId(string $InstanceId) Set TMP instance ID, such as “prom-abcd1234”.
 * @method array getAgentIds() Obtain List of agent IDs such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console.
 * @method void setAgentIds(array $AgentIds) Set List of agent IDs such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console.
 * @method integer getStatus() Obtain Status to update
<li> 1 = enabled </li>
<li> 2 = disabled </li>
 * @method void setStatus(integer $Status) Set Status to update
<li> 1 = enabled </li>
<li> 2 = disabled </li>
 */
class UpdatePrometheusAgentStatusRequest extends AbstractModel
{
    /**
     * @var string TMP instance ID, such as “prom-abcd1234”.
     */
    public $InstanceId;

    /**
     * @var array List of agent IDs such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console.
     */
    public $AgentIds;

    /**
     * @var integer Status to update
<li> 1 = enabled </li>
<li> 2 = disabled </li>
     */
    public $Status;

    /**
     * @param string $InstanceId TMP instance ID, such as “prom-abcd1234”.
     * @param array $AgentIds List of agent IDs such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console.
     * @param integer $Status Status to update
<li> 1 = enabled </li>
<li> 2 = disabled </li>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AgentIds",$param) and $param["AgentIds"] !== null) {
            $this->AgentIds = $param["AgentIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
