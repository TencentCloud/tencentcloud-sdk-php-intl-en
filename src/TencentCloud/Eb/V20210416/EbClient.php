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

namespace TencentCloud\Eb\V20210416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Eb\V20210416\Models as Models;

/**
 * @method Models\CheckRuleResponse CheckRule(Models\CheckRuleRequest $req) This API is used to check a rule.
 * @method Models\CheckTransformationResponse CheckTransformation(Models\CheckTransformationRequest $req) This API is used to test rules and data on the ETL configuration page.
 * @method Models\CreateConnectionResponse CreateConnection(Models\CreateConnectionRequest $req) This API is used to create an event connector.
 * @method Models\CreateEventBusResponse CreateEventBus(Models\CreateEventBusRequest $req) This API is used to create an event bus.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API is used to create an event rule.
 * @method Models\CreateTargetResponse CreateTarget(Models\CreateTargetRequest $req) This API is used to create a delivery target.
 * @method Models\CreateTransformationResponse CreateTransformation(Models\CreateTransformationRequest $req) This API is used to create a transformer.
 * @method Models\DeleteConnectionResponse DeleteConnection(Models\DeleteConnectionRequest $req) This API is used to delete an event connector.
 * @method Models\DeleteEventBusResponse DeleteEventBus(Models\DeleteEventBusRequest $req) This API is used to delete an event bus.
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) This API is used to delete an event rule.
 * @method Models\DeleteTargetResponse DeleteTarget(Models\DeleteTargetRequest $req) This API is used to delete a delivery target.
 * @method Models\DeleteTransformationResponse DeleteTransformation(Models\DeleteTransformationRequest $req) This API is used to delete a transformer.
 * @method Models\DescribeLogTagValueResponse DescribeLogTagValue(Models\DescribeLogTagValueRequest $req) This API is used to query log searching metric values.
 * @method Models\GetEventBusResponse GetEventBus(Models\GetEventBusRequest $req) This API is used to get the details of an event bus.
 * @method Models\GetRuleResponse GetRule(Models\GetRuleRequest $req) This API is used to get the details of an event rule.
 * @method Models\GetTransformationResponse GetTransformation(Models\GetTransformationRequest $req) This API is used to get the details of a transformer.
 * @method Models\ListConnectionsResponse ListConnections(Models\ListConnectionsRequest $req) This API is used to get the list of event connectors.
 * @method Models\ListEventBusesResponse ListEventBuses(Models\ListEventBusesRequest $req) This API is used to get the list of event buses.
 * @method Models\ListRulesResponse ListRules(Models\ListRulesRequest $req) This API is used to get the list of event rules.
 * @method Models\ListTargetsResponse ListTargets(Models\ListTargetsRequest $req) This API is used to get the list delivery targets.
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) This API is used to query logs. 
 * @method Models\UpdateConnectionResponse UpdateConnection(Models\UpdateConnectionRequest $req) This API is used to update an event connector.
 * @method Models\UpdateEventBusResponse UpdateEventBus(Models\UpdateEventBusRequest $req) This API is used to update an event bus.
 * @method Models\UpdateRuleResponse UpdateRule(Models\UpdateRuleRequest $req) This API is used to update an event rule.
 * @method Models\UpdateTargetResponse UpdateTarget(Models\UpdateTargetRequest $req) This API is used to update a delivery target.
 * @method Models\UpdateTransformationResponse UpdateTransformation(Models\UpdateTransformationRequest $req) This API is used to update a transformer.
 */

class EbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "eb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "eb";

    /**
     * @var string
     */
    protected $version = "2021-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("eb")."\\"."V20210416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
