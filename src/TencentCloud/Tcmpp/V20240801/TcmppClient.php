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

namespace TencentCloud\Tcmpp\V20240801;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcmpp\V20240801\Models as Models;

/**
 * @method Models\AddTeamMemberResponse AddTeamMember(Models\AddTeamMemberRequest $req) This API is used to add a team member.
 * @method Models\CheckGlobalDomainResponse CheckGlobalDomain(Models\CheckGlobalDomainRequest $req) This API is used to query if the domain is in the allowlist or blocklist
 * @method Models\ConfigureMNPPreviewResponse ConfigureMNPPreview(Models\ConfigureMNPPreviewRequest $req) This API is used to configure the preview version of a mini program.
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) This API is used to create an application.
 * @method Models\CreateApplicationSensitiveAPIResponse CreateApplicationSensitiveAPI(Models\CreateApplicationSensitiveAPIRequest $req) This API is used to create a sensitive API of an application.
 * @method Models\CreateConsoleMNPVersionCompileTaskResponse CreateConsoleMNPVersionCompileTask(Models\CreateConsoleMNPVersionCompileTaskRequest $req) This API is used to add a new mini program version
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) This API is used to create a mini program service domain
 * @method Models\CreateGlobalDomainResponse CreateGlobalDomain(Models\CreateGlobalDomainRequest $req) This API is used to add domains to allowlist or blocklist
 * @method Models\CreateGlobalDomainACLResponse CreateGlobalDomainACL(Models\CreateGlobalDomainACLRequest $req) This API is used to create a global domain allowlist or blocklist.
 * @method Models\CreateMNPResponse CreateMNP(Models\CreateMNPRequest $req) This API is used to create a mini program
 * @method Models\CreateMNPApprovalResponse CreateMNPApproval(Models\CreateMNPApprovalRequest $req) This API is used to create a mini program approval request.
 * @method Models\CreateMNPDomainACLResponse CreateMNPDomainACL(Models\CreateMNPDomainACLRequest $req) This API is used to add a domain name to the allowlist/blocklist of a mini program.
 * @method Models\CreateMNPSensitiveAPIPermissionApprovalResponse CreateMNPSensitiveAPIPermissionApproval(Models\CreateMNPSensitiveAPIPermissionApprovalRequest $req) This API is used to create a permission request to allow a mini program calling sensitive APIs.
 * @method Models\CreateMNPVersionResponse CreateMNPVersion(Models\CreateMNPVersionRequest $req) This API is used to create a mini program version.
 * @method Models\CreateOnlineApplyResponse CreateOnlineApply(Models\CreateOnlineApplyRequest $req) This API is used to release the mini program
 * @method Models\CreatePlatformAuditResponse CreatePlatformAudit(Models\CreatePlatformAuditRequest $req) This API is used to submit mini program version for approval
 * @method Models\CreatePresetKeyResponse CreatePresetKey(Models\CreatePresetKeyRequest $req) This API is used to obtain the encryption key
 * @method Models\CreateSensitiveAPIResponse CreateSensitiveAPI(Models\CreateSensitiveAPIRequest $req) This API is used to add a sensitive API
 * @method Models\CreateSensitiveApiApplyResponse CreateSensitiveApiApply(Models\CreateSensitiveApiApplyRequest $req) This API is used to apply for sensitive API permissions
 * @method Models\CreateTeamResponse CreateTeam(Models\CreateTeamRequest $req) This API is used to create a team.
 * @method Models\CreateTeamMemberResponse CreateTeamMember(Models\CreateTeamMemberRequest $req) This API is used to add team members
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to create a user
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) This API is used to delete applications
 * @method Models\DeleteApplicationSensitiveAPIResponse DeleteApplicationSensitiveAPI(Models\DeleteApplicationSensitiveAPIRequest $req) This API is used to delete a sensitive API.
 * @method Models\DeleteGlobalDomainResponse DeleteGlobalDomain(Models\DeleteGlobalDomainRequest $req) This API is used to delete domains from allowlist or blocklist
 * @method Models\DeleteMNPResponse DeleteMNP(Models\DeleteMNPRequest $req) This API is used to delete the mini program
 * @method Models\DeleteSensitiveAPIResponse DeleteSensitiveAPI(Models\DeleteSensitiveAPIRequest $req) This API is used to delete sensitive API
 * @method Models\DeleteTeamResponse DeleteTeam(Models\DeleteTeamRequest $req) This API is used to delete a team
 * @method Models\DeleteTeamMemberResponse DeleteTeamMember(Models\DeleteTeamMemberRequest $req) This API is used to delete a team member
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a user
 * @method Models\DescribeApplicationResponse DescribeApplication(Models\DescribeApplicationRequest $req) This API is used to query details of an application. 
 * @method Models\DescribeApplicationConfigResponse DescribeApplicationConfig(Models\DescribeApplicationConfigRequest $req) This API is used to query application configuration information
 * @method Models\DescribeApplicationConfigFileResponse DescribeApplicationConfigFile(Models\DescribeApplicationConfigFileRequest $req) This API is used to query the configuration files of an application.
 * @method Models\DescribeApplicationListResponse DescribeApplicationList(Models\DescribeApplicationListRequest $req) This API is used to query the list of application. 
 * @method Models\DescribeApplicationMNPVersionAuditListResponse DescribeApplicationMNPVersionAuditList(Models\DescribeApplicationMNPVersionAuditListRequest $req) This API is used to query the approval list of the mini program versions
 * @method Models\DescribeApplicationSensitiveAPIListResponse DescribeApplicationSensitiveAPIList(Models\DescribeApplicationSensitiveAPIListRequest $req) This API is used to list sensitive APIs of an application. 
 * @method Models\DescribeConsoleMNPVersionCompileTaskResponse DescribeConsoleMNPVersionCompileTask(Models\DescribeConsoleMNPVersionCompileTaskRequest $req) This API is used to query if the mini program version is created successfully
 * @method Models\DescribeDomainInfoResponse DescribeDomainInfo(Models\DescribeDomainInfoRequest $req) This API is used to query the domain name list configured for the mini program
 * @method Models\DescribeDomainTeamListResponse DescribeDomainTeamList(Models\DescribeDomainTeamListRequest $req) This API is used to query the list of teams with domains that obtained the ICP filing
 * @method Models\DescribeGlobalDomainACLResponse DescribeGlobalDomainACL(Models\DescribeGlobalDomainACLRequest $req) This API is used to query the global domain allowlist and blocklist.
 * @method Models\DescribeGlobalDomainListResponse DescribeGlobalDomainList(Models\DescribeGlobalDomainListRequest $req) This API is used to query domain allowlist and blocklist
 * @method Models\DescribeMNPResponse DescribeMNP(Models\DescribeMNPRequest $req) This API is used to query details of a mini program. 
 * @method Models\DescribeMNPAllStageVersionsResponse DescribeMNPAllStageVersions(Models\DescribeMNPAllStageVersionsRequest $req) This API is used to query the mini program version management information
 * @method Models\DescribeMNPApprovalListResponse DescribeMNPApprovalList(Models\DescribeMNPApprovalListRequest $req) This API is used to list the approval requests related with a mini program version.
 * @method Models\DescribeMNPBoardResponse DescribeMNPBoard(Models\DescribeMNPBoardRequest $req) This API is used to query the mini program version management information
 * @method Models\DescribeMNPCategoryResponse DescribeMNPCategory(Models\DescribeMNPCategoryRequest $req) This API is used to query the list of mini program types.
 * @method Models\DescribeMNPDetailResponse DescribeMNPDetail(Models\DescribeMNPDetailRequest $req) This API is used to query mini program details
 * @method Models\DescribeMNPDomainACLResponse DescribeMNPDomainACL(Models\DescribeMNPDomainACLRequest $req) This API is used to query the domain name allowlist / blocklist of a mini program. 
 * @method Models\DescribeMNPListResponse DescribeMNPList(Models\DescribeMNPListRequest $req) This API is used to query the list of mini programs.
 * @method Models\DescribeMNPManagerDetailResponse DescribeMNPManagerDetail(Models\DescribeMNPManagerDetailRequest $req) This API is used to query mini program details in the mini program list
 * @method Models\DescribeMNPManagerListResponse DescribeMNPManagerList(Models\DescribeMNPManagerListRequest $req) This API is used to query the mini program list
 * @method Models\DescribeMNPOfflinePackageURLResponse DescribeMNPOfflinePackageURL(Models\DescribeMNPOfflinePackageURLRequest $req) DescribeMNPOfflinePackageURL
 * @method Models\DescribeMNPPreviewResponse DescribeMNPPreview(Models\DescribeMNPPreviewRequest $req) This API is used to query the details of a mini program preview version.
 * @method Models\DescribeMNPPrivacyResponse DescribeMNPPrivacy(Models\DescribeMNPPrivacyRequest $req) This API is used to query the details filled in the service description
 * @method Models\DescribeMNPReleasedVersionHistoryResponse DescribeMNPReleasedVersionHistory(Models\DescribeMNPReleasedVersionHistoryRequest $req) This API is used to list all released versions of a mini program.
 * @method Models\DescribeMNPSensitiveAPIPermissionApprovalResponse DescribeMNPSensitiveAPIPermissionApproval(Models\DescribeMNPSensitiveAPIPermissionApprovalRequest $req) This API is used to query details of a specific permission request to call sensitive APIs.
 * @method Models\DescribeMNPSensitiveAPIPermissionApprovalListResponse DescribeMNPSensitiveAPIPermissionApprovalList(Models\DescribeMNPSensitiveAPIPermissionApprovalListRequest $req) This API is used to query permission requests to allow a mini program calling sensitive APIs.
 * @method Models\DescribeMNPSensitiveAPIPermissionListResponse DescribeMNPSensitiveAPIPermissionList(Models\DescribeMNPSensitiveAPIPermissionListRequest $req) This API is used to query the list of sensitive APIs that available to a mini program.
 * @method Models\DescribeMNPTypeResponse DescribeMNPType(Models\DescribeMNPTypeRequest $req) This API is used to query the mini program type list
 * @method Models\DescribeMNPVersionResponse DescribeMNPVersion(Models\DescribeMNPVersionRequest $req) This API is used to query the result of the task to create a mini program version.
 * @method Models\DescribeMNPVersionPreviewResponse DescribeMNPVersionPreview(Models\DescribeMNPVersionPreviewRequest $req) This API is used to query the details of the mini program preview version
 * @method Models\DescribeOfflineMNPPackageResponse DescribeOfflineMNPPackage(Models\DescribeOfflineMNPPackageRequest $req) This API is used to query offline mini program packages
 * @method Models\DescribeOnlineVersionResponse DescribeOnlineVersion(Models\DescribeOnlineVersionRequest $req) This API is used to query the release version history
 * @method Models\DescribeRoleDetailResponse DescribeRoleDetail(Models\DescribeRoleDetailRequest $req) This API is used to query role permission information
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) This API is used to query the list of roles. 
 * @method Models\DescribeSensitiveAPIAuditListResponse DescribeSensitiveAPIAuditList(Models\DescribeSensitiveAPIAuditListRequest $req) This API is used to query sensitive API approval list
 * @method Models\DescribeSensitiveAPIListResponse DescribeSensitiveAPIList(Models\DescribeSensitiveAPIListRequest $req) This API is used to query all sensitive APIs list
 * @method Models\DescribeSensitiveApiApplyDetailResponse DescribeSensitiveApiApplyDetail(Models\DescribeSensitiveApiApplyDetailRequest $req) This API is used to query sensitive API permission approval details
 * @method Models\DescribeSensitiveApiAuthListResponse DescribeSensitiveApiAuthList(Models\DescribeSensitiveApiAuthListRequest $req) This API is used to query the sensitive API permission list
 * @method Models\DescribeSimpleApplicationInfoListResponse DescribeSimpleApplicationInfoList(Models\DescribeSimpleApplicationInfoListRequest $req) This API is used to query application list information
 * @method Models\DescribeSimpleTeamListResponse DescribeSimpleTeamList(Models\DescribeSimpleTeamListRequest $req) This API is used to query the team information list
 * @method Models\DescribeTeamResponse DescribeTeam(Models\DescribeTeamRequest $req) This API is used to query details of a team. 
 * @method Models\DescribeTeamDomainListResponse DescribeTeamDomainList(Models\DescribeTeamDomainListRequest $req) This API is used to query a specified team’s domains that obtained ICP filing
 * @method Models\DescribeTeamListResponse DescribeTeamList(Models\DescribeTeamListRequest $req) This API is used to query the list of teams. 
 * @method Models\DescribeTeamMemberListResponse DescribeTeamMemberList(Models\DescribeTeamMemberListRequest $req) This API is used to query team member list
 * @method Models\DescribeTeamMembersResponse DescribeTeamMembers(Models\DescribeTeamMembersRequest $req) This API is used to query the member list of a specified team
 * @method Models\DescribeTempSecret4UploadFile2CosResponse DescribeTempSecret4UploadFile2Cos(Models\DescribeTempSecret4UploadFile2CosRequest $req) This API is used to obtain a temporary key for file uploads
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) This API is used to query details of a user. 
 * @method Models\DescribeUserDetailResponse DescribeUserDetail(Models\DescribeUserDetailRequest $req) This API is used to query user details
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) This API is used to query the user list
 * @method Models\DisableApplicationSensitiveAPIResponse DisableApplicationSensitiveAPI(Models\DisableApplicationSensitiveAPIRequest $req) This API is used to set a sensitive API to Restricted.
 * @method Models\DisableTeamDomainResponse DisableTeamDomain(Models\DisableTeamDomainRequest $req) This API is used to disable the company’s domain name that obtained the ICP filing
 * @method Models\EnableApplicationSensitiveAPIResponse EnableApplicationSensitiveAPI(Models\EnableApplicationSensitiveAPIRequest $req) This API is used to set an application sensitive API to public.
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) This API is used to change application information
 * @method Models\ModifyApplicationAppKeyResponse ModifyApplicationAppKey(Models\ModifyApplicationAppKeyRequest $req) This API is used to modify the application package name
 * @method Models\ModifyApplicationAppUrlResponse ModifyApplicationAppUrl(Models\ModifyApplicationAppUrlRequest $req) This API is used to change the app download address
 * @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) This API is used to edit the mini program domain information
 * @method Models\ModifyGlobalDomainResponse ModifyGlobalDomain(Models\ModifyGlobalDomainRequest $req) This API is used to modify domain allowlist or blocklist
 * @method Models\ModifyMNPResponse ModifyMNP(Models\ModifyMNPRequest $req) This API is used to modify mini program information
 * @method Models\ModifyMNPDomainResponse ModifyMNPDomain(Models\ModifyMNPDomainRequest $req) This API is used to edit the mini program domain information.
 * @method Models\ModifyMNPStatusOfflineResponse ModifyMNPStatusOffline(Models\ModifyMNPStatusOfflineRequest $req) This API is used to remove the mini program
 * @method Models\ModifyMNPVersionPreviewResponse ModifyMNPVersionPreview(Models\ModifyMNPVersionPreviewRequest $req) This API is used to configure the mini program preview version
 * @method Models\ModifyOnlineVersionResponse ModifyOnlineVersion(Models\ModifyOnlineVersionRequest $req) This API is used to rollback a mini program release version
 * @method Models\ModifyPlatformAuditStatusResponse ModifyPlatformAuditStatus(Models\ModifyPlatformAuditStatusRequest $req) This API is used to approve or reject the release of the mini program version
 * @method Models\ModifySensitiveAPIAuditStatusResponse ModifySensitiveAPIAuditStatus(Models\ModifySensitiveAPIAuditStatusRequest $req) This API is used to approve or reject the sensitive API permission application
 * @method Models\ModifyTeamResponse ModifyTeam(Models\ModifyTeamRequest $req) This API is used to change team information
 * @method Models\ModifyTeamMemberResponse ModifyTeamMember(Models\ModifyTeamMemberRequest $req) This API is used to modify team member information.
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) This API is used to modify user information.
 * @method Models\ModifyUserPasswordResponse ModifyUserPassword(Models\ModifyUserPasswordRequest $req) This API is used to reset user password
 * @method Models\ProcessMNPApprovalResponse ProcessMNPApproval(Models\ProcessMNPApprovalRequest $req) This API is used to approve or reject the release of a mini program version.
 * @method Models\ProcessMNPSensitiveAPIPermissionApprovalResponse ProcessMNPSensitiveAPIPermissionApproval(Models\ProcessMNPSensitiveAPIPermissionApprovalRequest $req) This API is used to approve or reject the sensitive API permission application. 
 * @method Models\ReleaseMNPVersionResponse ReleaseMNPVersion(Models\ReleaseMNPVersionRequest $req) This API is used to release a mini program version.
 * @method Models\RemoveMNPResponse RemoveMNP(Models\RemoveMNPRequest $req) This API is used to remove a mini program.
 * @method Models\RollbackMNPVersionResponse RollbackMNPVersion(Models\RollbackMNPVersionRequest $req) This API is used to rollback a mini program online version.
 */

class TcmppClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcmpp.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcmpp";

    /**
     * @var string
     */
    protected $version = "2024-08-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcmpp")."\\"."V20240801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
