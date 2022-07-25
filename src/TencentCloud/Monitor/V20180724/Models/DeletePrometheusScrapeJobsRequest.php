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
 * DeletePrometheusScrapeJobs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getAgentId() Obtain Agent ID
 * @method void setAgentId(string $AgentId) Set Agent ID
 * @method array getJobIds() Obtain List of task IDs
 * @method void setJobIds(array $JobIds) Set List of task IDs
 */
class DeletePrometheusScrapeJobsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Agent ID
     */
    public $AgentId;

    /**
     * @var array List of task IDs
     */
    public $JobIds;

    /**
     * @param string $InstanceId Instance ID
     * @param string $AgentId Agent ID
     * @param array $JobIds List of task IDs
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

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }
    }
}
