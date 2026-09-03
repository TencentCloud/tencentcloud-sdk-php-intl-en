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

namespace TencentCloud\Monitor\V20230616;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Monitor\V20230616\Models as Models;

/**
 * @method Models\CancelAIWorkbenchChatResponse CancelAIWorkbenchChat(Models\CancelAIWorkbenchChatRequest $req) Cancel dialogue execution
 * @method Models\CreateAIWorkbenchAgentResponse CreateAIWorkbenchAgent(Models\CreateAIWorkbenchAgentRequest $req) This API is used to create an Agent.
 * @method Models\CreateAIWorkbenchTaskResponse CreateAIWorkbenchTask(Models\CreateAIWorkbenchTaskRequest $req) Create a task
 * @method Models\DeleteAIWorkbenchAgentResponse DeleteAIWorkbenchAgent(Models\DeleteAIWorkbenchAgentRequest $req) Delete Agent
 * @method Models\DeleteAIWorkbenchTaskResponse DeleteAIWorkbenchTask(Models\DeleteAIWorkbenchTaskRequest $req) This API is used to delete a task.
 * @method Models\DescribeAIWorkbenchAgentResponse DescribeAIWorkbenchAgent(Models\DescribeAIWorkbenchAgentRequest $req) Query Agent details.
 * @method Models\DescribeAIWorkbenchArtifactResponse DescribeAIWorkbenchArtifact(Models\DescribeAIWorkbenchArtifactRequest $req) Query artifact details.
 * @method Models\DescribeAIWorkbenchExecutionResponse DescribeAIWorkbenchExecution(Models\DescribeAIWorkbenchExecutionRequest $req) Query execution details.
 * @method Models\DescribeAIWorkbenchSessionResponse DescribeAIWorkbenchSession(Models\DescribeAIWorkbenchSessionRequest $req) Query session details
 * @method Models\DescribeAIWorkbenchSkillResponse DescribeAIWorkbenchSkill(Models\DescribeAIWorkbenchSkillRequest $req) Query skill details
 * @method Models\DescribeAlarmNotifyHistoriesResponse DescribeAlarmNotifyHistories(Models\DescribeAlarmNotifyHistoriesRequest $req) Query alarm notification history as needed
 * @method Models\GetAIWorkbenchArtifactDownloadURLResponse GetAIWorkbenchArtifactDownloadURL(Models\GetAIWorkbenchArtifactDownloadURLRequest $req) Get the download URL of AI Workbench artifacts.
 * @method Models\ListAIWorkbenchAgentsResponse ListAIWorkbenchAgents(Models\ListAIWorkbenchAgentsRequest $req) Query the Agent list.
 * @method Models\ListAIWorkbenchArtifactsResponse ListAIWorkbenchArtifacts(Models\ListAIWorkbenchArtifactsRequest $req) Query the product list
 * @method Models\ListAIWorkbenchExecutionsResponse ListAIWorkbenchExecutions(Models\ListAIWorkbenchExecutionsRequest $req) Query the execution list
 * @method Models\ListAIWorkbenchMCPsResponse ListAIWorkbenchMCPs(Models\ListAIWorkbenchMCPsRequest $req) Query the MCP list.
 * @method Models\ListAIWorkbenchMessagesResponse ListAIWorkbenchMessages(Models\ListAIWorkbenchMessagesRequest $req) This API is used to query message list.
 * @method Models\ListAIWorkbenchResourceInstancesResponse ListAIWorkbenchResourceInstances(Models\ListAIWorkbenchResourceInstancesRequest $req) List resource instances.
 * @method Models\ListAIWorkbenchResourceMapsResponse ListAIWorkbenchResourceMaps(Models\ListAIWorkbenchResourceMapsRequest $req) Query the list of resource maps
 * @method Models\ListAIWorkbenchSessionsResponse ListAIWorkbenchSessions(Models\ListAIWorkbenchSessionsRequest $req) Query session list
 * @method Models\ListAIWorkbenchSkillsResponse ListAIWorkbenchSkills(Models\ListAIWorkbenchSkillsRequest $req) Query the skill list
 * @method Models\ListAIWorkbenchTasksResponse ListAIWorkbenchTasks(Models\ListAIWorkbenchTasksRequest $req) This API is used to query the task list.
 * @method Models\TriggerAIWorkbenchTaskResponse TriggerAIWorkbenchTask(Models\TriggerAIWorkbenchTaskRequest $req) Manually trigger a task.
 * @method Models\UpdateAIWorkbenchAgentResponse UpdateAIWorkbenchAgent(Models\UpdateAIWorkbenchAgentRequest $req) Update an Agent
 */

class MonitorClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "monitor.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "monitor";

    /**
     * @var string
     */
    protected $version = "2023-06-16";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("monitor")."\\"."V20230616\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
