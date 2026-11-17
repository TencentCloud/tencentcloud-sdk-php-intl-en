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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Request content for large model intent detection
 *
 * @method string getAgentTrace() Obtain <p>agent trajectory content. For reference use cases.</p>
 * @method void setAgentTrace(string $AgentTrace) Set <p>agent trajectory content. For reference use cases.</p>
 */
class IntentContent extends AbstractModel
{
    /**
     * @var string <p>agent trajectory content. For reference use cases.</p>
     */
    public $AgentTrace;

    /**
     * @param string $AgentTrace <p>agent trajectory content. For reference use cases.</p>
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
        if (array_key_exists("AgentTrace",$param) and $param["AgentTrace"] !== null) {
            $this->AgentTrace = $param["AgentTrace"];
        }
    }
}
