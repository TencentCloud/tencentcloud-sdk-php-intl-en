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

namespace TencentCloud\Tat\V20201028;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tat\V20201028\Models as Models;

/**
 * @method Models\CancelInvocationResponse CancelInvocation(Models\CancelInvocationRequest $req) This API is used to cancel the command executed on one or more CVM instances.

* If the command has not been delivered to the TAT agent, the task status is `PENDING`, `DELIVERING`, or `DELIVER_DELAYED`, and will be `CANCELLED` after the command is canceled.
* If the command has been delivered to the TAT agent, the task status is `RUNNING`, and will be `TERMINATED` after the command is canceled.
 * @method Models\CreateCommandResponse CreateCommand(Models\CreateCommandRequest $req) This API is used to create a command.
 * @method Models\CreateInvokerResponse CreateInvoker(Models\CreateInvokerRequest $req) This API is used to create an invoker.
 * @method Models\DeleteCommandResponse DeleteCommand(Models\DeleteCommandRequest $req) This API is used to delete a command.
Commands bound to an invoker cannot be deleted.
 * @method Models\DeleteInvokerResponse DeleteInvoker(Models\DeleteInvokerRequest $req) This API is used to delete an invoker.
 * @method Models\DescribeAutomationAgentStatusResponse DescribeAutomationAgentStatus(Models\DescribeAutomationAgentStatusRequest $req) This API is used to query the status of the TAT agent.
 * @method Models\DescribeCommandsResponse DescribeCommands(Models\DescribeCommandsRequest $req) This API is used to query command details.
 * @method Models\DescribeInvocationTasksResponse DescribeInvocationTasks(Models\DescribeInvocationTasksRequest $req) This API is used to query execution task details.
 * @method Models\DescribeInvocationsResponse DescribeInvocations(Models\DescribeInvocationsRequest $req) This API is used to query execution activity details.
 * @method Models\DescribeInvokerRecordsResponse DescribeInvokerRecords(Models\DescribeInvokerRecordsRequest $req) This API is used to query the execution history of an invoker.
 * @method Models\DescribeInvokersResponse DescribeInvokers(Models\DescribeInvokersRequest $req) This API is used to query invoker details.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query the list of regions that supports TAT.
If the `RegionState` is `AVAILABLE`, it means that TAT is available in the region. If no value is returned, TAT is not available in the region.
 * @method Models\DisableInvokerResponse DisableInvoker(Models\DisableInvokerRequest $req) This API is used to disable an invoker.
 * @method Models\EnableInvokerResponse EnableInvoker(Models\EnableInvokerRequest $req) This API is used to enable an invoker.
 * @method Models\InvokeCommandResponse InvokeCommand(Models\InvokeCommandRequest $req) This API is used to trigger a command on the specified instance and returns the execution activity ID (inv-xxxxxxxx) on success. Each execution activity has one or more execution tasks (invt-xxxxxxxx) and each execution task indicates an execution record on a CVM or Lighthouse instance.

* If the agent is not installed on the instance or is offline, an error is returned.
* If the command type is not supported by the agent runtime environment, an error is returned.
* The specified instance needs to be in a VPC network.
* The specified instance needs to be in the RUNNING status.
* Only one type of instances (CVM or Lighthouse) can be specified in a single request.
 * @method Models\ModifyCommandResponse ModifyCommand(Models\ModifyCommandRequest $req) This API is used to modify a command.
 * @method Models\ModifyInvokerResponse ModifyInvoker(Models\ModifyInvokerRequest $req) This API is used to modify an invoker.
 * @method Models\PreviewReplacedCommandContentResponse PreviewReplacedCommandContent(Models\PreviewReplacedCommandContentRequest $req) This API is used to preview the command with custom parameters. The command is not executed.
 * @method Models\RunCommandResponse RunCommand(Models\RunCommandRequest $req) This API is used to execute a command and returns the execution activity ID (inv-xxxxxxxx) on success. Each execution has one or more execution tasks (invt-xxxxxxxx) and each execution task indicates an execution record on a CVM or Lighthouse instance.

* If the agent is not installed on the instance or is offline, an error is returned.
* If the command type is not supported by the agent runtime environment, an error is returned.
* The specified instance needs to be in a VPC network.
* The specified instance needs to be in the `RUNNING` status.
* Only one type of instances (CVM or Lighthouse) can be specified in a single request.
 */

class TatClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tat.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tat";

    /**
     * @var string
     */
    protected $version = "2020-10-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("tat")."\\"."V20201028\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
