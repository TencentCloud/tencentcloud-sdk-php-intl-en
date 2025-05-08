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

namespace TencentCloud\Trabbit\V20230418;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trabbit\V20230418\Models as Models;

/**
 * @method Models\CreateRabbitMQServerlessBindingResponse CreateRabbitMQServerlessBinding(Models\CreateRabbitMQServerlessBindingRequest $req) This API is used to create RabbitMQ binding relationships.
 * @method Models\CreateRabbitMQServerlessExchangeResponse CreateRabbitMQServerlessExchange(Models\CreateRabbitMQServerlessExchangeRequest $req) This API is used to create a RabbitMQ exchange.
 * @method Models\CreateRabbitMQServerlessQueueResponse CreateRabbitMQServerlessQueue(Models\CreateRabbitMQServerlessQueueRequest $req) This API is used to create an RabbitMQ queue.
 * @method Models\CreateRabbitMQServerlessUserResponse CreateRabbitMQServerlessUser(Models\CreateRabbitMQServerlessUserRequest $req) This API is used to create a user for RabbitMQ.
 * @method Models\CreateRabbitMQServerlessVirtualHostResponse CreateRabbitMQServerlessVirtualHost(Models\CreateRabbitMQServerlessVirtualHostRequest $req) This API is used to create a vhost for RabbitMQ.
 * @method Models\DeleteRabbitMQServerlessBindingResponse DeleteRabbitMQServerlessBinding(Models\DeleteRabbitMQServerlessBindingRequest $req) This API is used to unbind RabbitMQ binding relationships.
 * @method Models\DeleteRabbitMQServerlessExchangeResponse DeleteRabbitMQServerlessExchange(Models\DeleteRabbitMQServerlessExchangeRequest $req) This API is used to delete the RabbitMQ exchange.
 * @method Models\DeleteRabbitMQServerlessPermissionResponse DeleteRabbitMQServerlessPermission(Models\DeleteRabbitMQServerlessPermissionRequest $req) This API is used to delete the permission of RabbitMQ.
 * @method Models\DeleteRabbitMQServerlessQueueResponse DeleteRabbitMQServerlessQueue(Models\DeleteRabbitMQServerlessQueueRequest $req) This API is used to delete an RabbitMQ queue.
 * @method Models\DeleteRabbitMQServerlessUserResponse DeleteRabbitMQServerlessUser(Models\DeleteRabbitMQServerlessUserRequest $req) This API is used to delete the user of RabbitMQ.
 * @method Models\DeleteRabbitMQServerlessVirtualHostResponse DeleteRabbitMQServerlessVirtualHost(Models\DeleteRabbitMQServerlessVirtualHostRequest $req) This API is used to delete a vhost for RabbitMQ.
 * @method Models\DescribeRabbitMQServerlessBindingsResponse DescribeRabbitMQServerlessBindings(Models\DescribeRabbitMQServerlessBindingsRequest $req) This API is used to retrieve the binding relationship list.
 * @method Models\DescribeRabbitMQServerlessConnectionResponse DescribeRabbitMQServerlessConnection(Models\DescribeRabbitMQServerlessConnectionRequest $req) This API is used to query RabbitMQ connection list.
 * @method Models\DescribeRabbitMQServerlessConsumersResponse DescribeRabbitMQServerlessConsumers(Models\DescribeRabbitMQServerlessConsumersRequest $req) This API is used to query RabbitMQ queue consumer list.
 * @method Models\DescribeRabbitMQServerlessExchangeDetailResponse DescribeRabbitMQServerlessExchangeDetail(Models\DescribeRabbitMQServerlessExchangeDetailRequest $req) This API is used to query RabbitMQ exchange details.
 * @method Models\DescribeRabbitMQServerlessExchangesResponse DescribeRabbitMQServerlessExchanges(Models\DescribeRabbitMQServerlessExchangesRequest $req) This API is used to query the list of RabbitMQ exchanges.
 * @method Models\DescribeRabbitMQServerlessInstanceResponse DescribeRabbitMQServerlessInstance(Models\DescribeRabbitMQServerlessInstanceRequest $req) This API is used to retrieve dedicated instance information for a single RabbitMQ.
 * @method Models\DescribeRabbitMQServerlessPermissionResponse DescribeRabbitMQServerlessPermission(Models\DescribeRabbitMQServerlessPermissionRequest $req) This API is used to query RabbitMQ permission list.
 * @method Models\DescribeRabbitMQServerlessQueueDetailResponse DescribeRabbitMQServerlessQueueDetail(Models\DescribeRabbitMQServerlessQueueDetailRequest $req) This API is used to query RabbitMQ queue details.
 * @method Models\DescribeRabbitMQServerlessQueuesResponse DescribeRabbitMQServerlessQueues(Models\DescribeRabbitMQServerlessQueuesRequest $req) This API is used to query a RabbitMQ queue list.
 * @method Models\DescribeRabbitMQServerlessUserResponse DescribeRabbitMQServerlessUser(Models\DescribeRabbitMQServerlessUserRequest $req) This API is used to query RabbitMQ user list.
 * @method Models\DescribeRabbitMQServerlessVirtualHostResponse DescribeRabbitMQServerlessVirtualHost(Models\DescribeRabbitMQServerlessVirtualHostRequest $req) This API is used to query a RabbitMQ vhost list.
 * @method Models\ListRabbitMQServerlessInstancesResponse ListRabbitMQServerlessInstances(Models\ListRabbitMQServerlessInstancesRequest $req) This API is used to obtain instance lists.
 * @method Models\ModifyRabbitMQServerlessExchangeResponse ModifyRabbitMQServerlessExchange(Models\ModifyRabbitMQServerlessExchangeRequest $req) This API is used to modify the RabbitMQ exchange.
 * @method Models\ModifyRabbitMQServerlessInstanceResponse ModifyRabbitMQServerlessInstance(Models\ModifyRabbitMQServerlessInstanceRequest $req) This API is used to modify cluster information.
 * @method Models\ModifyRabbitMQServerlessPermissionResponse ModifyRabbitMQServerlessPermission(Models\ModifyRabbitMQServerlessPermissionRequest $req) This API is used to modify the permission of RabbitMQ.
 * @method Models\ModifyRabbitMQServerlessQueueResponse ModifyRabbitMQServerlessQueue(Models\ModifyRabbitMQServerlessQueueRequest $req) This API is used to modify an RabbitMQ queue.
 * @method Models\ModifyRabbitMQServerlessUserResponse ModifyRabbitMQServerlessUser(Models\ModifyRabbitMQServerlessUserRequest $req) This API is used to modify the user of RabbitMQ.
 * @method Models\ModifyRabbitMQServerlessVirtualHostResponse ModifyRabbitMQServerlessVirtualHost(Models\ModifyRabbitMQServerlessVirtualHostRequest $req) This API is used to modify a vhost for RabbitMQ.
 */

class TrabbitClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trabbit.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trabbit";

    /**
     * @var string
     */
    protected $version = "2023-04-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("trabbit")."\\"."V20230418\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
