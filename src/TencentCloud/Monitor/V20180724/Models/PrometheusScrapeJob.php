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
 * Prometheus scrape task
 *
 * @method string getName() Obtain Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAgentId() Obtain Agent ID
 * @method void setAgentId(string $AgentId) Set Agent ID
 * @method string getJobId() Obtain Task ID
 * @method void setJobId(string $JobId) Set Task ID
 * @method string getConfig() Obtain Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfig(string $Config) Set Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusScrapeJob extends AbstractModel
{
    /**
     * @var string Task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Agent ID
     */
    public $AgentId;

    /**
     * @var string Task ID
     */
    public $JobId;

    /**
     * @var string Configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Config;

    /**
     * @param string $Name Task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AgentId Agent ID
     * @param string $JobId Task ID
     * @param string $Config Configuration
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
