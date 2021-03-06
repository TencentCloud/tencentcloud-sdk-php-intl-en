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

namespace TencentCloud\Ckafka\V20190819;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ckafka\V20190819\Models as Models;

/**
 * @method Models\CreateAclResponse CreateAcl(Models\CreateAclRequest $req) This API is used to add an ACL policy.
 * @method Models\CreatePartitionResponse CreatePartition(Models\CreatePartitionRequest $req) This API is used to add a partition in a topic.
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) This API is used to create a CKafka topic.
 * @method Models\CreateTopicIpWhiteListResponse CreateTopicIpWhiteList(Models\CreateTopicIpWhiteListRequest $req) This API is used to create a topic IP allowlist.
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to add a user.
 * @method Models\DeleteAclResponse DeleteAcl(Models\DeleteAclRequest $req) This API is used to delete an ACL.
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) This API is used to delete a CKafka topic.
 * @method Models\DeleteTopicIpWhiteListResponse DeleteTopicIpWhiteList(Models\DeleteTopicIpWhiteListRequest $req) This API is used to delete a topic IP allowlist.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a user.
 * @method Models\DescribeACLResponse DescribeACL(Models\DescribeACLRequest $req) This API is used to enumerate ACLs.
 * @method Models\DescribeAppInfoResponse DescribeAppInfo(Models\DescribeAppInfoRequest $req) This API is used to query the user list.
 * @method Models\DescribeCkafkaZoneResponse DescribeCkafkaZone(Models\DescribeCkafkaZoneRequest $req) This API is used to view the AZ list of Ckafka.
 * @method Models\DescribeConsumerGroupResponse DescribeConsumerGroup(Models\DescribeConsumerGroupRequest $req) This API is used to query consumer group information.
 * @method Models\DescribeGroupResponse DescribeGroup(Models\DescribeGroupRequest $req) This API is used to enumerate consumer groups (simplified).
 * @method Models\DescribeGroupInfoResponse DescribeGroupInfo(Models\DescribeGroupInfoRequest $req) This API is used to get consumer group information.
 * @method Models\DescribeGroupOffsetsResponse DescribeGroupOffsets(Models\DescribeGroupOffsetsRequest $req) This API is used to get the consumer group offset.
 * @method Models\DescribeInstanceAttributesResponse DescribeInstanceAttributes(Models\DescribeInstanceAttributesRequest $req) This API is used to get instance attributes.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to get the list of CKafka instances under a user account.
 * @method Models\DescribeInstancesDetailResponse DescribeInstancesDetail(Models\DescribeInstancesDetailRequest $req) This API is used to get instance list details under a user account.
 * @method Models\DescribeRegionResponse DescribeRegion(Models\DescribeRegionRequest $req) This API is used to enumerate regions, and can be called only in Guangzhou.
 * @method Models\DescribeRouteResponse DescribeRoute(Models\DescribeRouteRequest $req) This API is used to view route information.
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) API domain name: https://ckafka.tencentcloudapi.com
This API is used to get the list of topics in a CKafka instance of a user.
 * @method Models\DescribeTopicAttributesResponse DescribeTopicAttributes(Models\DescribeTopicAttributesRequest $req) This API is used to get topic attributes.

 * @method Models\DescribeTopicDetailResponse DescribeTopicDetail(Models\DescribeTopicDetailRequest $req) This API is used to get topic list details (only for call in the console).
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) This API is used to query user information.
 * @method Models\ModifyGroupOffsetsResponse ModifyGroupOffsets(Models\ModifyGroupOffsetsRequest $req) This API is used to set the consumer group (Groups) offset.
 * @method Models\ModifyInstanceAttributesResponse ModifyInstanceAttributes(Models\ModifyInstanceAttributesRequest $req) This API is used to set instance attributes.
 * @method Models\ModifyPasswordResponse ModifyPassword(Models\ModifyPasswordRequest $req) This API is used to change the password.
 * @method Models\ModifyTopicAttributesResponse ModifyTopicAttributes(Models\ModifyTopicAttributesRequest $req) This API is used to modify topic attributes.
 */

class CkafkaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ckafka.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ckafka";

    /**
     * @var string
     */
    protected $version = "2019-08-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("ckafka")."\\"."V20190819\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
