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

namespace TencentCloud\Mqtt\V20240516;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mqtt\V20240516\Models as Models;

/**
 * @method Models\AddClientSubscriptionResponse AddClientSubscription(Models\AddClientSubscriptionRequest $req) This API is used to add a subscription for an MQTT client.
 * @method Models\CreateAuthorizationPolicyResponse CreateAuthorizationPolicy(Models\CreateAuthorizationPolicyRequest $req) This API is used to create a performance test task for an MQTT instance.
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to purchase a new MQTT instance.
 * @method Models\CreateMessageEnrichmentRuleResponse CreateMessageEnrichmentRule(Models\CreateMessageEnrichmentRuleRequest $req) This API is used to create a message enrichment rule.
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to add an MQTT role.
 * @method Models\DeleteAuthorizationPolicyResponse DeleteAuthorizationPolicy(Models\DeleteAuthorizationPolicyRequest $req) This API is used to delete policy rules.
 * @method Models\DeleteClientSubscriptionResponse DeleteClientSubscription(Models\DeleteClientSubscriptionRequest $req) This API is used to delete a subscription of an MQTT client.
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) This API is used to delete an MQTT instance.
 * @method Models\DeleteMessageEnrichmentRuleResponse DeleteMessageEnrichmentRule(Models\DeleteMessageEnrichmentRuleRequest $req) This API is used to delete the message enrichment rule.
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) This API is used to delete an MQTT topic.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete an MQTT user.
 * @method Models\DescribeAuthorizationPoliciesResponse DescribeAuthorizationPolicies(Models\DescribeAuthorizationPoliciesRequest $req) This API is used to query authorization rules.
 * @method Models\DescribeClientListResponse DescribeClientList(Models\DescribeClientListRequest $req) This API is used to query the MQTT client details.
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) This API is used to query instance information.
 * @method Models\DescribeMessageByTopicResponse DescribeMessageByTopic(Models\DescribeMessageByTopicRequest $req) This API is used to query messages based on subscription.
 * @method Models\DescribeMessageDetailsResponse DescribeMessageDetails(Models\DescribeMessageDetailsRequest $req) This API is used to query the MQTT message details.
 * @method Models\DescribeMessageEnrichmentRulesResponse DescribeMessageEnrichmentRules(Models\DescribeMessageEnrichmentRulesRequest $req) This API is used to query message enrichment rules.
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) This API is used to query the MQTT topic details.
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) This API is used to query the user list. Filter parameter usage instructions are as follows:.

This API is used to perform Username fuzzy search.
 * @method Models\KickOutClientResponse KickOutClient(Models\KickOutClientRequest $req) This API is used to kick out a client.
 * @method Models\ModifyAuthorizationPolicyResponse ModifyAuthorizationPolicy(Models\ModifyAuthorizationPolicyRequest $req) This API is used to modify policy rules. See the data plane authorization policy description (https://www.tencentcloud.comom/document/product/1778/109715?from_cn_redirect=1).
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify instance attributes. Only running clusters can call this API to perform configuration change.
 * @method Models\ModifyMessageEnrichmentRuleResponse ModifyMessageEnrichmentRule(Models\ModifyMessageEnrichmentRuleRequest $req) This API is used to modify message enrichment rules.
Note: All attributes of the current rule must be submitted, even if specific fields are not modified.
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) This API is used to modify an MQTT role.
 * @method Models\UpdateAuthorizationPolicyPriorityResponse UpdateAuthorizationPolicyPriority(Models\UpdateAuthorizationPolicyPriorityRequest $req) This API is used to modify policy rule priority.
 * @method Models\UpdateMessageEnrichmentRulePriorityResponse UpdateMessageEnrichmentRulePriority(Models\UpdateMessageEnrichmentRulePriorityRequest $req) This API is used to modify the priority for message enrichment rule.
 */

class MqttClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mqtt.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mqtt";

    /**
     * @var string
     */
    protected $version = "2024-05-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("mqtt")."\\"."V20240516\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
