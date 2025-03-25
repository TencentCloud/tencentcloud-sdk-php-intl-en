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

namespace TencentCloud\Cmq\V20190304;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cmq\V20190304\Models as Models;

/**
 * @method Models\ClearQueueResponse ClearQueue(Models\ClearQueueRequest $req) This API is used to clear all messages in a queue.
 * @method Models\ClearSubscriptionFilterTagsResponse ClearSubscriptionFilterTags(Models\ClearSubscriptionFilterTagsRequest $req) This API is used to clear the message tags of a subscriber.
 * @method Models\CreateQueueResponse CreateQueue(Models\CreateQueueRequest $req) This API is used to create a queue.
 * @method Models\CreateSubscribeResponse CreateSubscribe(Models\CreateSubscribeRequest $req) This API is used to create a subscription.
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) This API is used to create a topic.
 * @method Models\DeleteQueueResponse DeleteQueue(Models\DeleteQueueRequest $req) This API is used to delete a queue.
 * @method Models\DeleteSubscribeResponse DeleteSubscribe(Models\DeleteSubscribeRequest $req) This API is used to delete a subscription.
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) This API is used to delete a topic.
 * @method Models\DescribeDeadLetterSourceQueuesResponse DescribeDeadLetterSourceQueues(Models\DescribeDeadLetterSourceQueuesRequest $req) This API is used to enumerate the source queues of a dead letter queue.
 * @method Models\DescribeQueueDetailResponse DescribeQueueDetail(Models\DescribeQueueDetailRequest $req) This API is used to enumerate queues.
 * @method Models\DescribeSubscriptionDetailResponse DescribeSubscriptionDetail(Models\DescribeSubscriptionDetailRequest $req) This API is used to query subscription details.
 * @method Models\DescribeTopicDetailResponse DescribeTopicDetail(Models\DescribeTopicDetailRequest $req) This API is used to query topic details.
 * @method Models\ModifyQueueAttributeResponse ModifyQueueAttribute(Models\ModifyQueueAttributeRequest $req) This API is used to modify queue attributes.
 * @method Models\ModifySubscriptionAttributeResponse ModifySubscriptionAttribute(Models\ModifySubscriptionAttributeRequest $req) This API is used to modify subscription attributes.
 * @method Models\ModifyTopicAttributeResponse ModifyTopicAttribute(Models\ModifyTopicAttributeRequest $req) This API is used to modify topic attributes.
 * @method Models\RewindQueueResponse RewindQueue(Models\RewindQueueRequest $req) This API is used to rewind a queue.
 * @method Models\UnbindDeadLetterResponse UnbindDeadLetter(Models\UnbindDeadLetterRequest $req) This API is used to unbind a dead letter queue.
 */

class CmqClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cmq.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cmq";

    /**
     * @var string
     */
    protected $version = "2019-03-04";

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
        $respClass = "TencentCloud"."\\".ucfirst("cmq")."\\"."V20190304\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
