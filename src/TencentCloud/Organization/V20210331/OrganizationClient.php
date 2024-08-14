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

namespace TencentCloud\Organization\V20210331;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Organization\V20210331\Models as Models;

/**
 * @method Models\AddOrganizationNodeResponse AddOrganizationNode(Models\AddOrganizationNodeRequest $req) This API is used to add an organization node.
 * @method Models\BindOrganizationMemberAuthAccountResponse BindOrganizationMemberAuthAccount(Models\BindOrganizationMemberAuthAccountRequest $req) This API is used to bind an organization member to a sub-account of the organization admin.
 * @method Models\CancelOrganizationMemberAuthAccountResponse CancelOrganizationMemberAuthAccount(Models\CancelOrganizationMemberAuthAccountRequest $req) This API is used to unbind an organization member from a sub-account of the organization admin.

 * @method Models\CreateOrgServiceAssignResponse CreateOrgServiceAssign(Models\CreateOrgServiceAssignRequest $req) This API is used to add a delegated admin of the organization service.
 * @method Models\CreateOrganizationMemberResponse CreateOrganizationMember(Models\CreateOrganizationMemberRequest $req) This API is used to create an organization member.
 * @method Models\CreateOrganizationMemberPolicyResponse CreateOrganizationMemberPolicy(Models\CreateOrganizationMemberPolicyRequest $req) This API is used to create an organization member access policy.
 * @method Models\DeleteOrgServiceAssignResponse DeleteOrgServiceAssign(Models\DeleteOrgServiceAssignRequest $req) This API is used to delete a delegated admin of the organization service.
 * @method Models\DeleteOrganizationMembersResponse DeleteOrganizationMembers(Models\DeleteOrganizationMembersRequest $req) This API is used to batch delete organization members.
 * @method Models\DeleteOrganizationNodesResponse DeleteOrganizationNodes(Models\DeleteOrganizationNodesRequest $req) This API is used to batch delete organization nodes.
 * @method Models\DescribeOrganizationResponse DescribeOrganization(Models\DescribeOrganizationRequest $req) This API is used to get the organization information.
 * @method Models\DescribeOrganizationMemberAuthAccountsResponse DescribeOrganizationMemberAuthAccounts(Models\DescribeOrganizationMemberAuthAccountsRequest $req) This API is used to get the list of sub-accounts bound to an organization member.
 * @method Models\DescribeOrganizationMemberAuthIdentitiesResponse DescribeOrganizationMemberAuthIdentities(Models\DescribeOrganizationMemberAuthIdentitiesRequest $req) This API is used to get the list of manageable identities of an organization member.
 * @method Models\DescribeOrganizationMemberPoliciesResponse DescribeOrganizationMemberPolicies(Models\DescribeOrganizationMemberPoliciesRequest $req) This API is used to get the list of authorization policies of an organization member.
 * @method Models\DescribeOrganizationMembersResponse DescribeOrganizationMembers(Models\DescribeOrganizationMembersRequest $req) This API is used to get the list of organization members.
 * @method Models\DescribeOrganizationNodesResponse DescribeOrganizationNodes(Models\DescribeOrganizationNodesRequest $req) This API is used to get the list of organization nodes.
 * @method Models\ListOrgServiceAssignMemberResponse ListOrgServiceAssignMember(Models\ListOrgServiceAssignMemberRequest $req) This API is used to obtain the list of delegated admins of the organization service.
 * @method Models\ListOrganizationIdentityResponse ListOrganizationIdentity(Models\ListOrganizationIdentityRequest $req) This API is used to get the list of access identities of an organization member.
 * @method Models\ListOrganizationServiceResponse ListOrganizationService(Models\ListOrganizationServiceRequest $req) This API is used to obtain the list of organization service settings.
 * @method Models\MoveOrganizationNodeMembersResponse MoveOrganizationNodeMembers(Models\MoveOrganizationNodeMembersRequest $req) This API is used to move a member to the specified organization node.
 * @method Models\UpdateOrganizationNodeResponse UpdateOrganizationNode(Models\UpdateOrganizationNodeRequest $req) This API is used to update an organization node.
 */

class OrganizationClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "organization.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "organization";

    /**
     * @var string
     */
    protected $version = "2021-03-31";

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
        $respClass = "TencentCloud"."\\".ucfirst("organization")."\\"."V20210331\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
