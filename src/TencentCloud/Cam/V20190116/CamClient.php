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
 * @method Models\AddUserResponse AddUser(Models\AddUserRequest $req) This API is used to create a sub-user.
 * @method Models\AddUserToGroupResponse AddUserToGroup(Models\AddUserToGroupRequest $req) This API is used to add users to a user group.
 * @method Models\AttachGroupPolicyResponse AttachGroupPolicy(Models\AttachGroupPolicyRequest $req) This API (AttachGroupPolicy) is used to associate a policy with a user group.
 * @method Models\AttachRolePolicyResponse AttachRolePolicy(Models\AttachRolePolicyRequest $req) This API (AttachRolePolicy) is used to associate a policy with a role.
 * @method Models\AttachUserPolicyResponse AttachUserPolicy(Models\AttachUserPolicyRequest $req) This API (AttachUserPolicy) is used to associates a policy with a user.
 * @method Models\ConsumeCustomMFATokenResponse ConsumeCustomMFAToken(Models\ConsumeCustomMFATokenRequest $req) This API is used to verify a custom multi-factor Token.
 * @method Models\CreateAccessKeyResponse CreateAccessKey(Models\CreateAccessKeyRequest $req) This API is used to create an access key for a CAM user.
 * @method Models\CreateGroupResponse CreateGroup(Models\CreateGroupRequest $req) This API is used to create a user group.
 * @method Models\CreateOIDCConfigResponse CreateOIDCConfig(Models\CreateOIDCConfigRequest $req) This API is used to create role OIDC configurations.
 * @method Models\CreatePolicyResponse CreatePolicy(Models\CreatePolicyRequest $req) This API (CreatePolicy) is used to create a policy.
 * @method Models\CreatePolicyVersionResponse CreatePolicyVersion(Models\CreatePolicyVersionRequest $req) This API is used to add a policy version. After creating a policy version, you can easily change the policy by changing the policy version.
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) This API (CreateRole) is used to create a role.
 * @method Models\CreateSAMLProviderResponse CreateSAMLProvider(Models\CreateSAMLProviderRequest $req) This API is used to create a SAML identity provider.
 * @method Models\CreateServiceLinkedRoleResponse CreateServiceLinkedRole(Models\CreateServiceLinkedRoleRequest $req) This API is used to create a service-linked role.
 * @method Models\CreateUserOIDCConfigResponse CreateUserOIDCConfig(Models\CreateUserOIDCConfigRequest $req) This API is used to create a user OIDC configuration. Only one user OIDC IdP can be created, and the user SAML SSO IdP will be automatically disabled after it is created.
 * @method Models\CreateUserSAMLConfigResponse CreateUserSAMLConfig(Models\CreateUserSAMLConfigRequest $req) This API is used to create user SAML configurations.
 * @method Models\DeleteAccessKeyResponse DeleteAccessKey(Models\DeleteAccessKeyRequest $req) This API is used to delete an access key for a CAM user.
Calling this API is a high-risk operation because the key cannot be recovered once deleted and Tencent Cloud will deny all requests that use this key. Proceed with caution.
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) This API is used to delete a user group.
 * @method Models\DeleteOIDCConfigResponse DeleteOIDCConfig(Models\DeleteOIDCConfigRequest $req) This API is used to delete OIDC IdPs.
 * @method Models\DeletePolicyResponse DeletePolicy(Models\DeletePolicyRequest $req) This API (DeletePolicy) is used to delete a policy.
 * @method Models\DeletePolicyVersionResponse DeletePolicyVersion(Models\DeletePolicyVersionRequest $req) This API is used to delete a policy version of a policy.
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) This API (DeleteRole) is used to delete a specified role.
 * @method Models\DeleteRolePermissionsBoundaryResponse DeleteRolePermissionsBoundary(Models\DeleteRolePermissionsBoundaryRequest $req) This API is used to delete a role permission boundary.
 * @method Models\DeleteSAMLProviderResponse DeleteSAMLProvider(Models\DeleteSAMLProviderRequest $req) This API is used to delete a SAML identity provider.
 * @method Models\DeleteServiceLinkedRoleResponse DeleteServiceLinkedRole(Models\DeleteServiceLinkedRoleRequest $req) This API is used to delete a service-linked role.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a sub-user.
 * @method Models\DeleteUserPermissionsBoundaryResponse DeleteUserPermissionsBoundary(Models\DeleteUserPermissionsBoundaryRequest $req) This API is used to delete a user permission boundary.
 * @method Models\DescribeOIDCConfigResponse DescribeOIDCConfig(Models\DescribeOIDCConfigRequest $req) This API is used to query role OIDC configurations.
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) This API (DescribeRoleList) is used to get the role list under the account.
 * @method Models\DescribeSafeAuthFlagCollResponse DescribeSafeAuthFlagColl(Models\DescribeSafeAuthFlagCollRequest $req) This API is used to get a sub-account’s security settings.
 * @method Models\DescribeSafeAuthFlagIntlResponse DescribeSafeAuthFlagIntl(Models\DescribeSafeAuthFlagIntlRequest $req) This API is used to query security settings.
 * @method Models\DescribeSubAccountsResponse DescribeSubAccounts(Models\DescribeSubAccountsRequest $req) This API is used to query sub-users through the sub-user UIN list.
 * @method Models\DescribeUserOIDCConfigResponse DescribeUserOIDCConfig(Models\DescribeUserOIDCConfigRequest $req) This API is used to query the user OIDC configuration.
 * @method Models\DescribeUserSAMLConfigResponse DescribeUserSAMLConfig(Models\DescribeUserSAMLConfigRequest $req) This API is used to query user SAML configurations.
 * @method Models\DetachGroupPolicyResponse DetachGroupPolicy(Models\DetachGroupPolicyRequest $req) This API (DetachGroupPolicy) is used to unassociate a policy and a user group.
 * @method Models\DetachRolePolicyResponse DetachRolePolicy(Models\DetachRolePolicyRequest $req) This API (DetachRolePolicy) is used to unassociate a policy and a role.
 * @method Models\DetachUserPolicyResponse DetachUserPolicy(Models\DetachUserPolicyRequest $req) This API (DetachUserPolicy) is used to unassociate a policy and a user.
 * @method Models\DisableUserSSOResponse DisableUserSSO(Models\DisableUserSSORequest $req) This API is used to disable user SSO.
 * @method Models\GetAccountSummaryResponse GetAccountSummary(Models\GetAccountSummaryRequest $req) This API is used to query account summary. 
 * @method Models\GetCustomMFATokenInfoResponse GetCustomMFATokenInfo(Models\GetCustomMFATokenInfoRequest $req) This API is used to get information associated with a custom multi-factor Token
 * @method Models\GetGroupResponse GetGroup(Models\GetGroupRequest $req) This API is used to query user group details.
 * @method Models\GetPolicyResponse GetPolicy(Models\GetPolicyRequest $req) This API (GetPolicy) is used to query and view policy details.
 * @method Models\GetPolicyVersionResponse GetPolicyVersion(Models\GetPolicyVersionRequest $req) This API is used to query policy version details.
 * @method Models\GetRoleResponse GetRole(Models\GetRoleRequest $req) This API (GetRole) is used to get the details of a specified role.
 * @method Models\GetSAMLProviderResponse GetSAMLProvider(Models\GetSAMLProviderRequest $req) This API is used to query SAML identity provider details.
 * @method Models\GetSecurityLastUsedResponse GetSecurityLastUsed(Models\GetSecurityLastUsedRequest $req) This API is used to get a key’s recent usage details.
 * @method Models\GetServiceLinkedRoleDeletionStatusResponse GetServiceLinkedRoleDeletionStatus(Models\GetServiceLinkedRoleDeletionStatusRequest $req) This API is used to get the status of the service-linked role deletion based on the `TaskId`
 * @method Models\GetUserResponse GetUser(Models\GetUserRequest $req) This API is used to query sub-users.
 * @method Models\GetUserAppIdResponse GetUserAppId(Models\GetUserAppIdRequest $req) This API is used to get the user AppId.
 * @method Models\ListAccessKeysResponse ListAccessKeys(Models\ListAccessKeysRequest $req) This API is used to list the access keys associated with a specified CAM user.
 * @method Models\ListAttachedGroupPoliciesResponse ListAttachedGroupPolicies(Models\ListAttachedGroupPoliciesRequest $req) This API (ListAttachedGroupPolicies) is used to query the list of policies associated with a user group.
 * @method Models\ListAttachedRolePoliciesResponse ListAttachedRolePolicies(Models\ListAttachedRolePoliciesRequest $req) This API (ListAttachedRolePolicies) is used to obtain the list of the policies associated with a role.
 * @method Models\ListAttachedUserAllPoliciesResponse ListAttachedUserAllPolicies(Models\ListAttachedUserAllPoliciesRequest $req) This API is used to list policies associated with the user (including those inherited from the user group).
 * @method Models\ListAttachedUserPoliciesResponse ListAttachedUserPolicies(Models\ListAttachedUserPoliciesRequest $req) This API (ListAttachedUserPolicies) is used to query the list of policies associated with a sub-account.
 * @method Models\ListCollaboratorsResponse ListCollaborators(Models\ListCollaboratorsRequest $req) This API is used to get the collaborator list.
 * @method Models\ListEntitiesForPolicyResponse ListEntitiesForPolicy(Models\ListEntitiesForPolicyRequest $req) This API (ListEntitiesForPolicy) is used to query the list of entities associated with a policy.
 * @method Models\ListGroupsResponse ListGroups(Models\ListGroupsRequest $req) This API is used to query the list of user groups.
 * @method Models\ListGroupsForUserResponse ListGroupsForUser(Models\ListGroupsForUserRequest $req) This API is used to list user groups associated with a user.
 * @method Models\ListPoliciesResponse ListPolicies(Models\ListPoliciesRequest $req) This API is used to query the policy list.
 * @method Models\ListPolicyVersionsResponse ListPolicyVersions(Models\ListPolicyVersionsRequest $req) This API is used to get the list of policy versions.
 * @method Models\ListSAMLProvidersResponse ListSAMLProviders(Models\ListSAMLProvidersRequest $req) This API is used to query the list of SAML identity providers.
 * @method Models\ListUsersResponse ListUsers(Models\ListUsersRequest $req) This API is used to pull sub-users.
 * @method Models\ListUsersForGroupResponse ListUsersForGroup(Models\ListUsersForGroupRequest $req) This API is used to query the list of users associated with a user group.
 * @method Models\PutRolePermissionsBoundaryResponse PutRolePermissionsBoundary(Models\PutRolePermissionsBoundaryRequest $req) This API is used to set a role permission boundary.
 * @method Models\PutUserPermissionsBoundaryResponse PutUserPermissionsBoundary(Models\PutUserPermissionsBoundaryRequest $req) This API is used to set a user permission boundary.
 * @method Models\RemoveUserFromGroupResponse RemoveUserFromGroup(Models\RemoveUserFromGroupRequest $req) This API is used to delete users from a user group.
 * @method Models\SetDefaultPolicyVersionResponse SetDefaultPolicyVersion(Models\SetDefaultPolicyVersionRequest $req) This API is used to set the operative policy version.
 * @method Models\SetMfaFlagResponse SetMfaFlag(Models\SetMfaFlagRequest $req) This API is used to set account verification for login and sensitive operations for sub-users.
 * @method Models\TagRoleResponse TagRole(Models\TagRoleRequest $req) This API is used to bind tags to a role.
 * @method Models\UntagRoleResponse UntagRole(Models\UntagRoleRequest $req) This API is used to unbind tags from a role.
 * @method Models\UpdateAccessKeyResponse UpdateAccessKey(Models\UpdateAccessKeyRequest $req) This API is used to update an access key for a CAM user.
 * @method Models\UpdateAssumeRolePolicyResponse UpdateAssumeRolePolicy(Models\UpdateAssumeRolePolicyRequest $req) This API (UpdateAssumeRolePolicy) is used to modify the trust policy of a role.
 * @method Models\UpdateGroupResponse UpdateGroup(Models\UpdateGroupRequest $req) This API is used to update a user group.
 * @method Models\UpdateOIDCConfigResponse UpdateOIDCConfig(Models\UpdateOIDCConfigRequest $req) This API is used to modify role OIDC configurations.
 * @method Models\UpdatePolicyResponse UpdatePolicy(Models\UpdatePolicyRequest $req) This API is used to update a policy.
This API will update the default version of an existing policy instead of creating a new one. If no policy exists, a default version will be created.
 * @method Models\UpdateRoleConsoleLoginResponse UpdateRoleConsoleLogin(Models\UpdateRoleConsoleLoginRequest $req) This API is used to modify a role's login permissions.
 * @method Models\UpdateRoleDescriptionResponse UpdateRoleDescription(Models\UpdateRoleDescriptionRequest $req) This API (UpdateRoleDescription) is used to modify the description of a role.
 * @method Models\UpdateSAMLProviderResponse UpdateSAMLProvider(Models\UpdateSAMLProviderRequest $req) This API is used to update SAML identity provider information.
 * @method Models\UpdateUserResponse UpdateUser(Models\UpdateUserRequest $req) This API is used to update a sub-user.
 * @method Models\UpdateUserOIDCConfigResponse UpdateUserOIDCConfig(Models\UpdateUserOIDCConfigRequest $req) This API is used to modify the user OIDC configuration.
 * @method Models\UpdateUserSAMLConfigResponse UpdateUserSAMLConfig(Models\UpdateUserSAMLConfigRequest $req) This API is used to modify user SAML configurations.
 */

class CamClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cam.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cam";

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
