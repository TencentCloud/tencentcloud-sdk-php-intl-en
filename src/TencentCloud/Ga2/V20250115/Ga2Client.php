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

namespace TencentCloud\Ga2\V20250115;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ga2\V20250115\Models as Models;

/**
 * @method Models\CreateAccelerateAreasResponse CreateAccelerateAreas(Models\CreateAccelerateAreasRequest $req) This API is used to create an acceleration region.
 * @method Models\CreateEndpointGroupResponse CreateEndpointGroup(Models\CreateEndpointGroupRequest $req) This API is used to create a terminal node group.
 * @method Models\CreateForwardingPolicyResponse CreateForwardingPolicy(Models\CreateForwardingPolicyRequest $req) Create a layer-7 forwarding policy.
 * @method Models\CreateForwardingRuleResponse CreateForwardingRule(Models\CreateForwardingRuleRequest $req) Create a Layer 7 forwarding rule
 * @method Models\CreateGlobalAcceleratorResponse CreateGlobalAccelerator(Models\CreateGlobalAcceleratorRequest $req) This API is used to create a global acceleration instance.
 * @method Models\CreateGlobalAcceleratorAccessLogResponse CreateGlobalAcceleratorAccessLog(Models\CreateGlobalAcceleratorAccessLogRequest $req) Create a GA access log
 * @method Models\CreateGlobalAcceleratorAclPolicyResponse CreateGlobalAcceleratorAclPolicy(Models\CreateGlobalAcceleratorAclPolicyRequest $req) Create access control policy
 * @method Models\CreateGlobalAcceleratorAclRuleResponse CreateGlobalAcceleratorAclRule(Models\CreateGlobalAcceleratorAclRuleRequest $req) Create an ACL rule
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) This API is used to create a listener.
 * @method Models\CreateListenerAdditionalCertResponse CreateListenerAdditionalCert(Models\CreateListenerAdditionalCertRequest $req) Add an extension certificate.
 * @method Models\DeleteAccelerateAreasResponse DeleteAccelerateAreas(Models\DeleteAccelerateAreasRequest $req) Delete an acceleration region
 * @method Models\DeleteEndpointGroupsResponse DeleteEndpointGroups(Models\DeleteEndpointGroupsRequest $req) Delete a terminal node group.
 * @method Models\DeleteForwardingPolicyResponse DeleteForwardingPolicy(Models\DeleteForwardingPolicyRequest $req) Delete a layer-7 forwarding policy.
 * @method Models\DeleteForwardingRuleResponse DeleteForwardingRule(Models\DeleteForwardingRuleRequest $req) Delete a Layer 7 forwarding rule
 * @method Models\DeleteGlobalAcceleratorResponse DeleteGlobalAccelerator(Models\DeleteGlobalAcceleratorRequest $req) Deletes a global acceleration instance
 * @method Models\DeleteGlobalAcceleratorAccessLogResponse DeleteGlobalAcceleratorAccessLog(Models\DeleteGlobalAcceleratorAccessLogRequest $req) This API is used to delete a GA log task.
 * @method Models\DeleteGlobalAcceleratorAclPolicyResponse DeleteGlobalAcceleratorAclPolicy(Models\DeleteGlobalAcceleratorAclPolicyRequest $req) Delete access control policy
 * @method Models\DeleteGlobalAcceleratorAclRuleResponse DeleteGlobalAcceleratorAclRule(Models\DeleteGlobalAcceleratorAclRuleRequest $req) Delete ACL rule
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) This API is used to delete a listener.
 * @method Models\DeleteListenerAdditionalCertResponse DeleteListenerAdditionalCert(Models\DeleteListenerAdditionalCertRequest $req) Delete the extension certificate.
 * @method Models\DescribeAccelerateAreasResponse DescribeAccelerateAreas(Models\DescribeAccelerateAreasRequest $req) Queries acceleration regions
 * @method Models\DescribeAccelerateRegionsResponse DescribeAccelerateRegions(Models\DescribeAccelerateRegionsRequest $req) Queries selectable acceleration regions.
 * @method Models\DescribeAccessLogParamResponse DescribeAccessLogParam(Models\DescribeAccessLogParamRequest $req) View access log reporting parameters
 * @method Models\DescribeCrossBorderSettlementResponse DescribeCrossBorderSettlement(Models\DescribeCrossBorderSettlementRequest $req) Querying Cross-Border Bills
 * @method Models\DescribeEndpointGroupsResponse DescribeEndpointGroups(Models\DescribeEndpointGroupsRequest $req) Query a terminal node group.
 * @method Models\DescribeForwardingPolicyResponse DescribeForwardingPolicy(Models\DescribeForwardingPolicyRequest $req) View a layer-7 forwarding policy
 * @method Models\DescribeForwardingRuleResponse DescribeForwardingRule(Models\DescribeForwardingRuleRequest $req) View a Layer 7 forwarding rule
 * @method Models\DescribeGlobalAcceleratorAccessLogResponse DescribeGlobalAcceleratorAccessLog(Models\DescribeGlobalAcceleratorAccessLogRequest $req) Query log tasks
 * @method Models\DescribeGlobalAcceleratorAclPoliciesResponse DescribeGlobalAcceleratorAclPolicies(Models\DescribeGlobalAcceleratorAclPoliciesRequest $req) View the access control policy
 * @method Models\DescribeGlobalAcceleratorAclRulesResponse DescribeGlobalAcceleratorAclRules(Models\DescribeGlobalAcceleratorAclRulesRequest $req) View ACL rules
 * @method Models\DescribeGlobalAcceleratorsResponse DescribeGlobalAccelerators(Models\DescribeGlobalAcceleratorsRequest $req) Modify a global acceleration instance
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) This API is used to query listeners.
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) Query asynchronous task result
 * @method Models\ModifyAccelerateAreasResponse ModifyAccelerateAreas(Models\ModifyAccelerateAreasRequest $req) Modify acceleration region
 * @method Models\ModifyAccessLogStatusResponse ModifyAccessLogStatus(Models\ModifyAccessLogStatusRequest $req) Modify the status of a log task
 * @method Models\ModifyEndpointGroupResponse ModifyEndpointGroup(Models\ModifyEndpointGroupRequest $req) This API is used to modify a terminal node group.
 * @method Models\ModifyForwardingPolicyResponse ModifyForwardingPolicy(Models\ModifyForwardingPolicyRequest $req) Modify a layer-7 forwarding policy
 * @method Models\ModifyForwardingRuleResponse ModifyForwardingRule(Models\ModifyForwardingRuleRequest $req) This API is used to modify a Layer 7 forwarding rule.
 * @method Models\ModifyGlobalAcceleratorResponse ModifyGlobalAccelerator(Models\ModifyGlobalAcceleratorRequest $req) Modify a global acceleration instance
 * @method Models\ModifyGlobalAcceleratorAccessLogResponse ModifyGlobalAcceleratorAccessLog(Models\ModifyGlobalAcceleratorAccessLogRequest $req) Modify GA access logs
 * @method Models\ModifyGlobalAcceleratorAclPolicyResponse ModifyGlobalAcceleratorAclPolicy(Models\ModifyGlobalAcceleratorAclPolicyRequest $req) Modify the status of an access control policy
 * @method Models\ModifyGlobalAcceleratorAclRuleResponse ModifyGlobalAcceleratorAclRule(Models\ModifyGlobalAcceleratorAclRuleRequest $req) Modify ACL rules
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) Modify a listener
 * @method Models\ReplaceListenerAdditionalCertResponse ReplaceListenerAdditionalCert(Models\ReplaceListenerAdditionalCertRequest $req) Replace the extension certificate.
 */

class Ga2Client extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ga2.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ga2";

    /**
     * @var string
     */
    protected $version = "2025-01-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("ga2")."\\"."V20250115\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
