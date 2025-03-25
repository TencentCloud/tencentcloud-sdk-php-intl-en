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
 * @method Models\AcceptJoinShareUnitInvitationResponse AcceptJoinShareUnitInvitation(Models\AcceptJoinShareUnitInvitationRequest $req) This API is used to accept an invitation to join a shared unit.
 * @method Models\AddExternalSAMLIdPCertificateResponse AddExternalSAMLIdPCertificate(Models\AddExternalSAMLIdPCertificateRequest $req) This API is used to add SAML signing certificates.
 * @method Models\AddOrganizationMemberEmailResponse AddOrganizationMemberEmail(Models\AddOrganizationMemberEmailRequest $req) This API is used to add an organization member's mailbox.
 * @method Models\AddOrganizationNodeResponse AddOrganizationNode(Models\AddOrganizationNodeRequest $req) This API is used to add an organization node.
 * @method Models\AddPermissionPolicyToRoleConfigurationResponse AddPermissionPolicyToRoleConfiguration(Models\AddPermissionPolicyToRoleConfigurationRequest $req) This API is used to add policies to permission configurations.
 * @method Models\AddShareUnitResponse AddShareUnit(Models\AddShareUnitRequest $req) This API is used to create a shared unit.
 * @method Models\AddShareUnitMembersResponse AddShareUnitMembers(Models\AddShareUnitMembersRequest $req) This API is used to add a shared unit member.
 * @method Models\AddShareUnitResourcesResponse AddShareUnitResources(Models\AddShareUnitResourcesRequest $req) This API is used to add resources to a shared unit.
 * @method Models\AddUserToGroupResponse AddUserToGroup(Models\AddUserToGroupRequest $req) This API is used to add users to a user group.
 * @method Models\BindOrganizationMemberAuthAccountResponse BindOrganizationMemberAuthAccount(Models\BindOrganizationMemberAuthAccountRequest $req) This API is used to bind an organization member to a sub-account of the organization admin.
 * @method Models\CancelOrganizationMemberAuthAccountResponse CancelOrganizationMemberAuthAccount(Models\CancelOrganizationMemberAuthAccountRequest $req) This API is used to unbind an organization member from a sub-account of the organization admin.
 * @method Models\ClearExternalSAMLIdentityProviderResponse ClearExternalSAMLIdentityProvider(Models\ClearExternalSAMLIdentityProviderRequest $req) This API is used to clear the SAML identity provider configuration information.
 * @method Models\CreateGroupResponse CreateGroup(Models\CreateGroupRequest $req) This API is used to create user groups.
 * @method Models\CreateOrgServiceAssignResponse CreateOrgServiceAssign(Models\CreateOrgServiceAssignRequest $req) This API is used to add a delegated admin of the organization service.
 * @method Models\CreateOrganizationResponse CreateOrganization(Models\CreateOrganizationRequest $req) This API is used to create an organization.
 * @method Models\CreateOrganizationIdentityResponse CreateOrganizationIdentity(Models\CreateOrganizationIdentityRequest $req) This API is used to add an organization identity.
 * @method Models\CreateOrganizationMemberResponse CreateOrganizationMember(Models\CreateOrganizationMemberRequest $req) This API is used to create an organization member.
 * @method Models\CreateOrganizationMemberAuthIdentityResponse CreateOrganizationMemberAuthIdentity(Models\CreateOrganizationMemberAuthIdentityRequest $req) This API is used to add organization member access authorization.
 * @method Models\CreateOrganizationMemberPolicyResponse CreateOrganizationMemberPolicy(Models\CreateOrganizationMemberPolicyRequest $req) This API is used to create an organization member access authorization policy.
 * @method Models\CreateOrganizationMembersPolicyResponse CreateOrganizationMembersPolicy(Models\CreateOrganizationMembersPolicyRequest $req) This API is used to create an organization member access policy.
 * @method Models\CreateRoleAssignmentResponse CreateRoleAssignment(Models\CreateRoleAssignmentRequest $req) This API is used to grant authorizations on member accounts.
 * @method Models\CreateRoleConfigurationResponse CreateRoleConfiguration(Models\CreateRoleConfigurationRequest $req) This API is used to create permission configurations.
 * @method Models\CreateSCIMCredentialResponse CreateSCIMCredential(Models\CreateSCIMCredentialRequest $req) This API is used to create a SCIM key.
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to create a user.
 * @method Models\CreateUserSyncProvisioningResponse CreateUserSyncProvisioning(Models\CreateUserSyncProvisioningRequest $req) This API is used to create sub-user synchronization tasks.
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) This API is used to delete user groups.
 * @method Models\DeleteOrgServiceAssignResponse DeleteOrgServiceAssign(Models\DeleteOrgServiceAssignRequest $req) This API is used to delete a delegated admin of the organization service.
 * @method Models\DeleteOrganizationResponse DeleteOrganization(Models\DeleteOrganizationRequest $req) This API is used to delete an organization.
 * @method Models\DeleteOrganizationIdentityResponse DeleteOrganizationIdentity(Models\DeleteOrganizationIdentityRequest $req) This API is used to delete an organization identity.
 * @method Models\DeleteOrganizationMemberAuthIdentityResponse DeleteOrganizationMemberAuthIdentity(Models\DeleteOrganizationMemberAuthIdentityRequest $req) This API is used to delete organization member access authorization.
 * @method Models\DeleteOrganizationMembersResponse DeleteOrganizationMembers(Models\DeleteOrganizationMembersRequest $req) This API is used to remove a member account from the organization, rather than delete the account.
 * @method Models\DeleteOrganizationMembersPolicyResponse DeleteOrganizationMembersPolicy(Models\DeleteOrganizationMembersPolicyRequest $req) This API is used to delete an organization member access policy.
 * @method Models\DeleteOrganizationNodesResponse DeleteOrganizationNodes(Models\DeleteOrganizationNodesRequest $req) This API is used to batch delete organization nodes.
 * @method Models\DeleteRoleAssignmentResponse DeleteRoleAssignment(Models\DeleteRoleAssignmentRequest $req) This API is used to remove authorizations on member accounts.
 * @method Models\DeleteRoleConfigurationResponse DeleteRoleConfiguration(Models\DeleteRoleConfigurationRequest $req) This API is used to delete the permission configuration information.
 * @method Models\DeleteSCIMCredentialResponse DeleteSCIMCredential(Models\DeleteSCIMCredentialRequest $req) This API is used to delete a SCIM key.
 * @method Models\DeleteShareUnitResponse DeleteShareUnit(Models\DeleteShareUnitRequest $req) This API is used to delete a shared unit.
 * @method Models\DeleteShareUnitMembersResponse DeleteShareUnitMembers(Models\DeleteShareUnitMembersRequest $req) This API is used to delete a shared unit member.
 * @method Models\DeleteShareUnitResourcesResponse DeleteShareUnitResources(Models\DeleteShareUnitResourcesRequest $req) This API is used to delete shared unit resources.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a user.
 * @method Models\DeleteUserSyncProvisioningResponse DeleteUserSyncProvisioning(Models\DeleteUserSyncProvisioningRequest $req) This API is used to delete sub-user synchronization tasks.
 * @method Models\DescribeIdentityCenterResponse DescribeIdentityCenter(Models\DescribeIdentityCenterRequest $req) This API is used to obtain TCO Identity Center service information.
 * @method Models\DescribeOrganizationResponse DescribeOrganization(Models\DescribeOrganizationRequest $req) This API is used to get the organization information.
 * @method Models\DescribeOrganizationMemberAuthAccountsResponse DescribeOrganizationMemberAuthAccounts(Models\DescribeOrganizationMemberAuthAccountsRequest $req) This API is used to get the list of sub-accounts bound to an organization member.
 * @method Models\DescribeOrganizationMemberAuthIdentitiesResponse DescribeOrganizationMemberAuthIdentities(Models\DescribeOrganizationMemberAuthIdentitiesRequest $req) This API is used to obtain the list of organization member access authorization.
 * @method Models\DescribeOrganizationMemberEmailBindResponse DescribeOrganizationMemberEmailBind(Models\DescribeOrganizationMemberEmailBindRequest $req) This API is used to query detailed information about member mailbox binding.
 * @method Models\DescribeOrganizationMemberPoliciesResponse DescribeOrganizationMemberPolicies(Models\DescribeOrganizationMemberPoliciesRequest $req) This API is used to get the list of authorization policies of an organization member.
 * @method Models\DescribeOrganizationMembersResponse DescribeOrganizationMembers(Models\DescribeOrganizationMembersRequest $req) This API is used to get the list of organization members.
 * @method Models\DescribeOrganizationNodesResponse DescribeOrganizationNodes(Models\DescribeOrganizationNodesRequest $req) This API is used to get the list of organization nodes.
 * @method Models\DescribeShareAreasResponse DescribeShareAreas(Models\DescribeShareAreasRequest $req) This API is used to obtain a list of shareable regions.
 * @method Models\DescribeShareUnitMembersResponse DescribeShareUnitMembers(Models\DescribeShareUnitMembersRequest $req) This API is used to obtain the member list of a shared unit.
 * @method Models\DescribeShareUnitResourcesResponse DescribeShareUnitResources(Models\DescribeShareUnitResourcesRequest $req) This API is used to obtain the resource list of a shared unit.
 * @method Models\DescribeShareUnitsResponse DescribeShareUnits(Models\DescribeShareUnitsRequest $req) This API is used to obtain a list of shared units.
 * @method Models\DismantleRoleConfigurationResponse DismantleRoleConfiguration(Models\DismantleRoleConfigurationRequest $req) This API is used to undeploy permission configurations on member accounts.
 * @method Models\GetExternalSAMLIdentityProviderResponse GetExternalSAMLIdentityProvider(Models\GetExternalSAMLIdentityProviderRequest $req) This API is used to query the SAML identity provider configuration information.
 * @method Models\GetGroupResponse GetGroup(Models\GetGroupRequest $req) This API is used to query the user group information.
 * @method Models\GetProvisioningTaskStatusResponse GetProvisioningTaskStatus(Models\GetProvisioningTaskStatusRequest $req) This API is used to query the status of async tasks of user synchronization.
 * @method Models\GetRoleConfigurationResponse GetRoleConfiguration(Models\GetRoleConfigurationRequest $req) This API is used to query the permission configuration information.
 * @method Models\GetSCIMSynchronizationStatusResponse GetSCIMSynchronizationStatus(Models\GetSCIMSynchronizationStatusRequest $req) This API is used to query SCIM synchronization status.
 * @method Models\GetTaskStatusResponse GetTaskStatus(Models\GetTaskStatusRequest $req) This API is used to query the status of async tasks.
 * @method Models\GetUserResponse GetUser(Models\GetUserRequest $req) This API is used to query the user information.
 * @method Models\GetUserSyncProvisioningResponse GetUserSyncProvisioning(Models\GetUserSyncProvisioningRequest $req) This API is used to query the CAM user synchronization.
 * @method Models\GetZoneSAMLServiceProviderInfoResponse GetZoneSAMLServiceProviderInfo(Models\GetZoneSAMLServiceProviderInfoRequest $req) This API is used to query the SAML service provider configuration information.
 * @method Models\GetZoneStatisticsResponse GetZoneStatistics(Models\GetZoneStatisticsRequest $req) This API is used to query space statistics.
 * @method Models\InviteOrganizationMemberResponse InviteOrganizationMember(Models\InviteOrganizationMemberRequest $req) This API is used to invite a member.
 * @method Models\ListExternalSAMLIdPCertificatesResponse ListExternalSAMLIdPCertificates(Models\ListExternalSAMLIdPCertificatesRequest $req) This API is used to query the SAML signing certificate list.
 * @method Models\ListGroupMembersResponse ListGroupMembers(Models\ListGroupMembersRequest $req) This API is used to query the user list of the user group.
 * @method Models\ListGroupsResponse ListGroups(Models\ListGroupsRequest $req) This API is used to query the user group list.
 * @method Models\ListJoinedGroupsForUserResponse ListJoinedGroupsForUser(Models\ListJoinedGroupsForUserRequest $req) This API is used to query the user group joined by users.
 * @method Models\ListOrgServiceAssignMemberResponse ListOrgServiceAssignMember(Models\ListOrgServiceAssignMemberRequest $req) This API is used to obtain the list of delegated admins of the organization service.
 * @method Models\ListOrganizationIdentityResponse ListOrganizationIdentity(Models\ListOrganizationIdentityRequest $req) This API is used to get the list of access identities of an organization member.
 * @method Models\ListOrganizationServiceResponse ListOrganizationService(Models\ListOrganizationServiceRequest $req) This API is used to obtain the list of organization service settings.
 * @method Models\ListPermissionPoliciesInRoleConfigurationResponse ListPermissionPoliciesInRoleConfiguration(Models\ListPermissionPoliciesInRoleConfigurationRequest $req) This API is used to obtain the policy list in permission configurations.
 * @method Models\ListRoleAssignmentsResponse ListRoleAssignments(Models\ListRoleAssignmentsRequest $req) This API is used to query the authorization list.
 * @method Models\ListRoleConfigurationProvisioningsResponse ListRoleConfigurationProvisionings(Models\ListRoleConfigurationProvisioningsRequest $req) This API is used to query the permission configuration deployment list.
 * @method Models\ListRoleConfigurationsResponse ListRoleConfigurations(Models\ListRoleConfigurationsRequest $req) This API is used to query the permission configuration list.
 * @method Models\ListSCIMCredentialsResponse ListSCIMCredentials(Models\ListSCIMCredentialsRequest $req) This API is used to query the user SCIM key list.
 * @method Models\ListTasksResponse ListTasks(Models\ListTasksRequest $req) This API is used to query the async task list.
 * @method Models\ListUserSyncProvisioningsResponse ListUserSyncProvisionings(Models\ListUserSyncProvisioningsRequest $req) This API is used to query the CAM user synchronization list.
 * @method Models\ListUsersResponse ListUsers(Models\ListUsersRequest $req) This API is used to query the user list.
 * @method Models\MoveOrganizationNodeMembersResponse MoveOrganizationNodeMembers(Models\MoveOrganizationNodeMembersRequest $req) This API is used to move a member to the specified organization node.
 * @method Models\OpenIdentityCenterResponse OpenIdentityCenter(Models\OpenIdentityCenterRequest $req) This API is used to activate Identity Center service (CIC).
 * @method Models\ProvisionRoleConfigurationResponse ProvisionRoleConfiguration(Models\ProvisionRoleConfigurationRequest $req) This API is used to deploy permission configurations on member accounts.
 * @method Models\QuitOrganizationResponse QuitOrganization(Models\QuitOrganizationRequest $req) This API is used to exit an organization.
 * @method Models\RejectJoinShareUnitInvitationResponse RejectJoinShareUnitInvitation(Models\RejectJoinShareUnitInvitationRequest $req) This API is used to reject an invitation to join a shared unit.
 * @method Models\RemoveExternalSAMLIdPCertificateResponse RemoveExternalSAMLIdPCertificate(Models\RemoveExternalSAMLIdPCertificateRequest $req) This API is used to remove SAML signing certificates.
 * @method Models\RemovePermissionPolicyFromRoleConfigurationResponse RemovePermissionPolicyFromRoleConfiguration(Models\RemovePermissionPolicyFromRoleConfigurationRequest $req) This API is used to remove policies from permission configurations.
 * @method Models\RemoveUserFromGroupResponse RemoveUserFromGroup(Models\RemoveUserFromGroupRequest $req) This API is used to removes users from a user group.
 * @method Models\SendOrgMemberAccountBindEmailResponse SendOrgMemberAccountBindEmail(Models\SendOrgMemberAccountBindEmailRequest $req) This API is used to resend an email for activating the member's bound mailbox.
 * @method Models\SetExternalSAMLIdentityProviderResponse SetExternalSAMLIdentityProvider(Models\SetExternalSAMLIdentityProviderRequest $req) This API is used to configure the SAML identity provider information.
 * @method Models\UpdateCustomPolicyForRoleConfigurationResponse UpdateCustomPolicyForRoleConfiguration(Models\UpdateCustomPolicyForRoleConfigurationRequest $req) This API is used to modify a custom policy for permission configurations.
 * @method Models\UpdateGroupResponse UpdateGroup(Models\UpdateGroupRequest $req) This API is used to modify user group information.
 * @method Models\UpdateOrganizationIdentityResponse UpdateOrganizationIdentity(Models\UpdateOrganizationIdentityRequest $req) This API is used to update an organization identity.
 * @method Models\UpdateOrganizationMemberResponse UpdateOrganizationMember(Models\UpdateOrganizationMemberRequest $req) This API is used to update organization member information.
 * @method Models\UpdateOrganizationMemberEmailBindResponse UpdateOrganizationMemberEmailBind(Models\UpdateOrganizationMemberEmailBindRequest $req) This API is used to modify the mailbox of a bound member.
 * @method Models\UpdateOrganizationNodeResponse UpdateOrganizationNode(Models\UpdateOrganizationNodeRequest $req) This API is used to update an organization node.
 * @method Models\UpdateRoleConfigurationResponse UpdateRoleConfiguration(Models\UpdateRoleConfigurationRequest $req) This API is used to modify the permission configuration information.
 * @method Models\UpdateSCIMCredentialStatusResponse UpdateSCIMCredentialStatus(Models\UpdateSCIMCredentialStatusRequest $req) This API is used to enable or disable a SCIM key.
 * @method Models\UpdateSCIMSynchronizationStatusResponse UpdateSCIMSynchronizationStatus(Models\UpdateSCIMSynchronizationStatusRequest $req) This API is used to enable or disable user SCIM synchronization.
 * @method Models\UpdateShareUnitResponse UpdateShareUnit(Models\UpdateShareUnitRequest $req) This API is used to update a shared unit.
 * @method Models\UpdateUserResponse UpdateUser(Models\UpdateUserRequest $req) This API is used to modify user information.
 * @method Models\UpdateUserStatusResponse UpdateUserStatus(Models\UpdateUserStatusRequest $req) This API is used to modify the user status.
 * @method Models\UpdateUserSyncProvisioningResponse UpdateUserSyncProvisioning(Models\UpdateUserSyncProvisioningRequest $req) This API is used to create sub-user synchronization tasks.
 * @method Models\UpdateZoneResponse UpdateZone(Models\UpdateZoneRequest $req) This API is used to update the user's space name.
 */

class OrganizationClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "organization.intl.tencentcloudapi.com";

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
