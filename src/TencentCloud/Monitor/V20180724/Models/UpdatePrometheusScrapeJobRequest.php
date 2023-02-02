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
 * UpdatePrometheusScrapeJob request structure.
 *
 * @method string getInstanceId() Obtain TMP instance ID, such as “prom-abcd1234”.
 * @method void setInstanceId(string $InstanceId) Set TMP instance ID, such as “prom-abcd1234”.
 * @method string getAgentId() Obtain Agent ID such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console
 * @method void setAgentId(string $AgentId) Set Agent ID such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console
 * @method string getJobId() Obtain Scrape task ID such as “job-abcd1234”. You can go to the **Agent Management** page and obtain the ID in the pop-up **Create Scrape Task** window.
 * @method void setJobId(string $JobId) Set Scrape task ID such as “job-abcd1234”. You can go to the **Agent Management** page and obtain the ID in the pop-up **Create Scrape Task** window.
 * @method string getConfig() Obtain Scrape task ID in the format of “job_name:xx”
 * @method void setConfig(string $Config) Set Scrape task ID in the format of “job_name:xx”
 */
class UpdatePrometheusScrapeJobRequest extends AbstractModel
{
    /**
     * @var string TMP instance ID, such as “prom-abcd1234”.
     */
    public $InstanceId;

    /**
     * @var string Agent ID such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console
     */
    public $AgentId;

    /**
     * @var string Scrape task ID such as “job-abcd1234”. You can go to the **Agent Management** page and obtain the ID in the pop-up **Create Scrape Task** window.
     */
    public $JobId;

    /**
     * @var string Scrape task ID in the format of “job_name:xx”
     */
    public $Config;

    /**
     * @param string $InstanceId TMP instance ID, such as “prom-abcd1234”.
     * @param string $AgentId Agent ID such as “agent-abcd1234”, which can be obtained on the **Agent Management** page in the console
     * @param string $JobId Scrape task ID such as “job-abcd1234”. You can go to the **Agent Management** page and obtain the ID in the pop-up **Create Scrape Task** window.
     * @param string $Config Scrape task ID in the format of “job_name:xx”
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
