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

namespace TencentCloud\Monitor\V20180724;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Monitor\V20180724\Models as Models;

/**
 * @method Models\BindingPolicyObjectResponse BindingPolicyObject(Models\BindingPolicyObjectRequest $req) This API is used to bind an alarm policy to a specific object.
 * @method Models\CreatePolicyGroupResponse CreatePolicyGroup(Models\CreatePolicyGroupRequest $req) This API is used to add a policy group.
 * @method Models\DeletePolicyGroupResponse DeletePolicyGroup(Models\DeletePolicyGroupRequest $req) This API is used to delete an alarm policy group.
 * @method Models\DescribeAccidentEventListResponse DescribeAccidentEventList(Models\DescribeAccidentEventListRequest $req) This API is used to get the platform event list.
 * @method Models\DescribeBaseMetricsResponse DescribeBaseMetrics(Models\DescribeBaseMetricsRequest $req) This API is used to get the details of basic metrics.
 * @method Models\DescribeBasicAlarmListResponse DescribeBasicAlarmList(Models\DescribeBasicAlarmListRequest $req) This API is used to get the basic alarm list.
 * @method Models\DescribeBindingPolicyObjectListResponse DescribeBindingPolicyObjectList(Models\DescribeBindingPolicyObjectListRequest $req) This API is used to get the bound object list.
 * @method Models\DescribePolicyConditionListResponse DescribePolicyConditionList(Models\DescribePolicyConditionListRequest $req) This API is used to get basic alarm policy conditions.
 * @method Models\DescribePolicyGroupInfoResponse DescribePolicyGroupInfo(Models\DescribePolicyGroupInfoRequest $req) This API is used to get details of a basic policy group.
 * @method Models\DescribePolicyGroupListResponse DescribePolicyGroupList(Models\DescribePolicyGroupListRequest $req) This API is used to get the list of basic policy alarm groups.
 * @method Models\DescribeProductEventListResponse DescribeProductEventList(Models\DescribeProductEventListRequest $req) This API is used to get the list of product events by page.
 * @method Models\GetMonitorDataResponse GetMonitorData(Models\GetMonitorDataRequest $req) This API is used to get the monitoring data of a Tencent Cloud product by passing in the product's namespace, object dimension description, and monitoring metric.
API call rate limit: 20 calls/sec, 1,200 calls/min.
If you need to call a lot of metrics and objects, there may be cases where the call fails due to the rate limit. It is recommended to spread the call requests as much as possible over time.
 * @method Models\ModifyAlarmReceiversResponse ModifyAlarmReceivers(Models\ModifyAlarmReceiversRequest $req) This API is used to modify alarm recipients.
 * @method Models\ModifyPolicyGroupResponse ModifyPolicyGroup(Models\ModifyPolicyGroupRequest $req) This API is used to update policy group.
 * @method Models\PutMonitorDataResponse PutMonitorData(Models\PutMonitorDataRequest $req) The default API request rate limit is 50 requests/sec.
The default upper limit on metrics of a single tenant is 100.
A maximum of 30 metric/value pairs can be reported at a time. When an error is returned for a request, no metrics/values in the request will be saved.

The reporting timestamp is the timestamp when you want to save the data. We recommend that you construct a timestamp at integer minutes.
The time range of a timestamp is from 300 seconds before the current time to the current time.
The data of the same IP metric/value pair must be reported by minute in chronological order.
 * @method Models\SendCustomAlarmMsgResponse SendCustomAlarmMsg(Models\SendCustomAlarmMsgRequest $req) This API is used to send a custom alarm notification.
 * @method Models\UnBindingAllPolicyObjectResponse UnBindingAllPolicyObject(Models\UnBindingAllPolicyObjectRequest $req) This API is used to delete all bound objects.
 * @method Models\UnBindingPolicyObjectResponse UnBindingPolicyObject(Models\UnBindingPolicyObjectRequest $req) This API is used to delete an object that is bound to a policy.
 */

class MonitorClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "monitor.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2018-07-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("monitor")."\\"."V20180724\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
