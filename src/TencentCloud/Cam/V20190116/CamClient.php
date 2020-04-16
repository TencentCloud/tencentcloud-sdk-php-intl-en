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

namespace TencentCloud\Cam\V20190116;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cam\V20190116\Models as Models;

/**
 * @method Models\AddUserResponse AddUser(Models\AddUserRequest $req) This API is used to add sub-users.
 * @method Models\AddUserToGroupResponse AddUserToGroup(Models\AddUserToGroupRequest $req) This API is used to add users to a user group.
 * @method Models\AttachGroupPolicyResponse AttachGroupPolicy(Models\AttachGroupPolicyRequest $req) This API (AttachGroupPolicy) is used to associate a policy with a user group.
 * @method Models\AttachRolePolicyResponse AttachRolePolicy(Models\AttachRolePolicyRequest $req) This API (AttachRolePolicy) is used to associate a policy with a role.
 * @method Models\AttachUserPolicyResponse AttachUserPolicy(Models\AttachUserPolicyRequest $req) This API (AttachUserPolicy) is used to associates a policy with a user.
 * @method Models\ConsumeCustomMFATokenResponse ConsumeCustomMFAToken(Models\ConsumeCustomMFATokenRequest $req) This API is used to verify a custom multi-factor Token.
 * @method Models\CreateGroupResponse CreateGroup(Models\CreateGroupRequest $req) This API is used to create a user group.
 * @method Models\CreatePolicyResponse CreatePolicy(Models\CreatePolicyRequest $req) This API (CreatePolicy) is used to create a policy.
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) This API (CreateRole) is used to create a role.
 * @method Models\CreateSAMLProviderResponse CreateSAMLProvider(Models\CreateSAMLProviderRequest $req) This API is used to create a SAML identity provider.
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) This API is used to delete a user group.
 * @method Models\DeletePolicyResponse DeletePolicy(Models\DeletePolicyRequest $req) This API (DeletePolicy) is used to delete a policy.
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) This API (DeleteRole) is used to delete a specified role.
 * @method Models\DeleteSAMLProviderResponse DeleteSAMLProvider(Models\DeleteSAMLProviderRequest $req) This API is used to delete a SAML identity provider.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a sub-user.
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) This API (DescribeRoleList) is used to get the role list under the account.
 * @method Models\DetachGroupPolicyResponse DetachGroupPolicy(Models\DetachGroupPolicyRequest $req) This API (DetachGroupPolicy) is used to unassociate a policy and a user group.
 * @method Models\DetachRolePolicyResponse DetachRolePolicy(Models\DetachRolePolicyRequest $req) This API (DetachRolePolicy) is used to unassociate a policy and a role.
 * @method Models\DetachUserPolicyResponse DetachUserPolicy(Models\DetachUserPolicyRequest $req) This API (DetachUserPolicy) is used to unassociate a policy and a user.
 * @method Models\GetCustomMFATokenInfoResponse GetCustomMFATokenInfo(Models\GetCustomMFATokenInfoRequest $req) This API is used to get information associated with a custom multi-factor Token
 * @method Models\GetGroupResponse GetGroup(Models\GetGroupRequest $req) This API is used to query user group details.
 * @method Models\GetPolicyResponse GetPolicy(Models\GetPolicyRequest $req) This API (GetPolicy) is used to query and view policy details.
 * @method Models\GetRoleResponse GetRole(Models\GetRoleRequest $req) This API (GetRole) is used to get the details of a specified role.
 * @method Models\GetSAMLProviderResponse GetSAMLProvider(Models\GetSAMLProviderRequest $req) This API is used to query SAML identity provider details.
 * @method Models\GetUserResponse GetUser(Models\GetUserRequest $req) This API is used to query sub-users.
 * @method Models\ListAttachedGroupPoliciesResponse ListAttachedGroupPolicies(Models\ListAttachedGroupPoliciesRequest $req) This API (ListAttachedGroupPolicies) is used to query the list of policies associated with a user group.
 * @method Models\ListAttachedRolePoliciesResponse ListAttachedRolePolicies(Models\ListAttachedRolePoliciesRequest $req) This API (ListAttachedRolePolicies) is used to obtain the list of the policies associated with a role.
 * @method Models\ListAttachedUserPoliciesResponse ListAttachedUserPolicies(Models\ListAttachedUserPoliciesRequest $req) This API (ListAttachedUserPolicies) is used to query the list of policies associated with a sub-account.
 * @method Models\ListEntitiesForPolicyResponse ListEntitiesForPolicy(Models\ListEntitiesForPolicyRequest $req) This API (ListEntitiesForPolicy) is used to query the list of entities associated with a policy.
 * @method Models\ListGroupsResponse ListGroups(Models\ListGroupsRequest $req) This API is used to query the list of user groups.
 * @method Models\ListGroupsForUserResponse ListGroupsForUser(Models\ListGroupsForUserRequest $req) This API is used to list user groups associated with a user.
 * @method Models\ListPoliciesResponse ListPolicies(Models\ListPoliciesRequest $req) This API (ListPolicies) is used to query the list of policies.
 * @method Models\ListSAMLProvidersResponse ListSAMLProviders(Models\ListSAMLProvidersRequest $req) This API is used to query the list of SAML identity providers.
 * @method Models\ListUsersResponse ListUsers(Models\ListUsersRequest $req) This API is used to pull sub-users.
 * @method Models\ListUsersForGroupResponse ListUsersForGroup(Models\ListUsersForGroupRequest $req) This API is used to query the list of users associated with a user group.
 * @method Models\RemoveUserFromGroupResponse RemoveUserFromGroup(Models\RemoveUserFromGroupRequest $req) This API is used to delete users from a user group.
 * @method Models\SetFlagResponse SetFlag(Models\SetFlagRequest $req) This API is used to set account verification for login and sensitive operation protection.
 * @method Models\UpdateAssumeRolePolicyResponse UpdateAssumeRolePolicy(Models\UpdateAssumeRolePolicyRequest $req) This API (UpdateAssumeRolePolicy) is used to modify the trust policy of a role.
 * @method Models\UpdateGroupResponse UpdateGroup(Models\UpdateGroupRequest $req) This API is used to update a user group.
 * @method Models\UpdateRoleDescriptionResponse UpdateRoleDescription(Models\UpdateRoleDescriptionRequest $req) This API (UpdateRoleDescription) is used to modify the description of a role.
 * @method Models\UpdateSAMLProviderResponse UpdateSAMLProvider(Models\UpdateSAMLProviderRequest $req) This API is used to update SAML identity provider information.
 * @method Models\UpdateUserResponse UpdateUser(Models\UpdateUserRequest $req) This API is used to update a sub-user.
 */

class CamClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cam.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-01-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("cam")."\\"."V20190116\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
