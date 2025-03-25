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

namespace TencentCloud\Tcsas\V20250106;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcsas\V20250106\Models as Models;

/**
 * @method Models\AddTeamMemberResponse AddTeamMember(Models\AddTeamMemberRequest $req) This API is used to add a team member.
 * @method Models\ConfigureMNPPreviewResponse ConfigureMNPPreview(Models\ConfigureMNPPreviewRequest $req) This API is used to configure the preview of a mini program.
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) This API is used to create an application.
 * @method Models\CreateApplicationSensitiveAPIResponse CreateApplicationSensitiveAPI(Models\CreateApplicationSensitiveAPIRequest $req) This API is used to create a sensitive API of an application.
 * @method Models\CreateGlobalDomainACLResponse CreateGlobalDomainACL(Models\CreateGlobalDomainACLRequest $req) This API is used to create a global domain allowlist or blocklist.
 * @method Models\CreateMNPResponse CreateMNP(Models\CreateMNPRequest $req) This API is used to create a mini program.
 * @method Models\CreateMNPApprovalResponse CreateMNPApproval(Models\CreateMNPApprovalRequest $req) This API is used to create a mini program approval request.
 * @method Models\CreateMNPDomainACLResponse CreateMNPDomainACL(Models\CreateMNPDomainACLRequest $req) This API is used to add a domain name to the allowlist / blocklist of a mini program.
 * @method Models\CreateMNPSensitiveAPIPermissionApprovalResponse CreateMNPSensitiveAPIPermissionApproval(Models\CreateMNPSensitiveAPIPermissionApprovalRequest $req) This API is used to create a permission request to allow a mini program to call sensitive APIs.
 * @method Models\CreateMNPVersionResponse CreateMNPVersion(Models\CreateMNPVersionRequest $req) This API is used to create a mini program version.
 * @method Models\CreatePresetKeyResponse CreatePresetKey(Models\CreatePresetKeyRequest $req) This API is used to obtain the encryption key.
 * @method Models\CreateTeamResponse CreateTeam(Models\CreateTeamRequest $req) This API is used to create a team.
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to create a user.
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) This API is used to delete the applications.
 * @method Models\DeleteApplicationSensitiveAPIResponse DeleteApplicationSensitiveAPI(Models\DeleteApplicationSensitiveAPIRequest $req) This API is used to delete a sensitive API.
 * @method Models\DeleteGlobalDomainResponse DeleteGlobalDomain(Models\DeleteGlobalDomainRequest $req) This API is used to delete domains from the allowlist or blocklist.
 * @method Models\DeleteMNPResponse DeleteMNP(Models\DeleteMNPRequest $req) This API is used to delete a mini program.
 * @method Models\DeleteTeamResponse DeleteTeam(Models\DeleteTeamRequest $req) This API is used to deletes a team.
 * @method Models\DeleteTeamMemberResponse DeleteTeamMember(Models\DeleteTeamMemberRequest $req) This API is used to delete a team member.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a user.
 * @method Models\DescribeApplicationResponse DescribeApplication(Models\DescribeApplicationRequest $req) This API is used to query the application details.
 * @method Models\DescribeApplicationConfigFileResponse DescribeApplicationConfigFile(Models\DescribeApplicationConfigFileRequest $req) This API is used to query the configuration files of an application.
 * @method Models\DescribeApplicationListResponse DescribeApplicationList(Models\DescribeApplicationListRequest $req) This API is used to query the applications.
 * @method Models\DescribeApplicationSensitiveAPIListResponse DescribeApplicationSensitiveAPIList(Models\DescribeApplicationSensitiveAPIListRequest $req) This API is used to list sensitive APIs of an application.
 * @method Models\DescribeGlobalDomainACLResponse DescribeGlobalDomainACL(Models\DescribeGlobalDomainACLRequest $req) This API is used to query the global domain allowlist and blocklist.
 * @method Models\DescribeMNPResponse DescribeMNP(Models\DescribeMNPRequest $req) This API is used to query the mini program details.
 * @method Models\DescribeMNPAllStageVersionsResponse DescribeMNPAllStageVersions(Models\DescribeMNPAllStageVersionsRequest $req) This API is used to query the mini program version management information.
 * @method Models\DescribeMNPApprovalListResponse DescribeMNPApprovalList(Models\DescribeMNPApprovalListRequest $req) This API is used to list the approval requests related with a mini program version.
 * @method Models\DescribeMNPCategoryResponse DescribeMNPCategory(Models\DescribeMNPCategoryRequest $req) This API is used to query the mini program types.
 * @method Models\DescribeMNPDomainACLResponse DescribeMNPDomainACL(Models\DescribeMNPDomainACLRequest $req) This API is used to query the domain allowlist / blocklist of a mini program.
 * @method Models\DescribeMNPListResponse DescribeMNPList(Models\DescribeMNPListRequest $req) This API is used to query the mini programs.
 * @method Models\DescribeMNPOfflinePackageURLResponse DescribeMNPOfflinePackageURL(Models\DescribeMNPOfflinePackageURLRequest $req) DescribeMNPOfflinePackageURL
 * @method Models\DescribeMNPPreviewResponse DescribeMNPPreview(Models\DescribeMNPPreviewRequest $req) This API is used to query the mini program preview details.
 * @method Models\DescribeMNPReleasedVersionHistoryResponse DescribeMNPReleasedVersionHistory(Models\DescribeMNPReleasedVersionHistoryRequest $req) This API is used to list all released versions of a mini program.
 * @method Models\DescribeMNPSensitiveAPIPermissionApprovalResponse DescribeMNPSensitiveAPIPermissionApproval(Models\DescribeMNPSensitiveAPIPermissionApprovalRequest $req) This API is used to query details of a specific permission request to call sensitive APIs.
 * @method Models\DescribeMNPSensitiveAPIPermissionApprovalListResponse DescribeMNPSensitiveAPIPermissionApprovalList(Models\DescribeMNPSensitiveAPIPermissionApprovalListRequest $req) This API is used to query permission requests to allow a mini program calling sensitive APIs.
 * @method Models\DescribeMNPSensitiveAPIPermissionListResponse DescribeMNPSensitiveAPIPermissionList(Models\DescribeMNPSensitiveAPIPermissionListRequest $req) This API is used to query the list of sensitive APIs that available to a mini program.
 * @method Models\DescribeMNPVersionResponse DescribeMNPVersion(Models\DescribeMNPVersionRequest $req) This API is used to query the mini program version creation results.
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) This API is used to query the roles.
 * @method Models\DescribeTeamResponse DescribeTeam(Models\DescribeTeamRequest $req) This API is used to query the team details.
 * @method Models\DescribeTeamListResponse DescribeTeamList(Models\DescribeTeamListRequest $req) This API is used to query the teams.
 * @method Models\DescribeTeamMemberListResponse DescribeTeamMemberList(Models\DescribeTeamMemberListRequest $req) This API is used to query the team members.
 * @method Models\DescribeTempSecret4UploadFile2CosResponse DescribeTempSecret4UploadFile2Cos(Models\DescribeTempSecret4UploadFile2CosRequest $req) This API is used to obtain a temporary key for file uploads.
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) This API is used to query the user details.
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) This API is used to query the users.
 * @method Models\DisableApplicationSensitiveAPIResponse DisableApplicationSensitiveAPI(Models\DisableApplicationSensitiveAPIRequest $req) This API is used to set a sensitive API to restricted.
 * @method Models\EnableApplicationSensitiveAPIResponse EnableApplicationSensitiveAPI(Models\EnableApplicationSensitiveAPIRequest $req) This API is used to set an application sensitive API to public.
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) This API is used to change the application information.
 * @method Models\ModifyGlobalDomainResponse ModifyGlobalDomain(Models\ModifyGlobalDomainRequest $req) This API is used to modify the domain allowlist or blocklist.
 * @method Models\ModifyMNPResponse ModifyMNP(Models\ModifyMNPRequest $req) This API is used to modify the mini program information.
 * @method Models\ModifyMNPDomainResponse ModifyMNPDomain(Models\ModifyMNPDomainRequest $req) This API is used to edit the mini program domain information.
 * @method Models\ModifyTeamResponse ModifyTeam(Models\ModifyTeamRequest $req) This API is used to change the team information.
 * @method Models\ModifyTeamMemberResponse ModifyTeamMember(Models\ModifyTeamMemberRequest $req) This API is used to modify the team member information.
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) This API is used to modify the user information.
 * @method Models\ProcessMNPApprovalResponse ProcessMNPApproval(Models\ProcessMNPApprovalRequest $req) This API is used to approve or reject the release of a mini program version.
 * @method Models\ProcessMNPSensitiveAPIPermissionApprovalResponse ProcessMNPSensitiveAPIPermissionApproval(Models\ProcessMNPSensitiveAPIPermissionApprovalRequest $req) This API is used to approve or reject the sensitive API permission requests.
 * @method Models\ReleaseMNPVersionResponse ReleaseMNPVersion(Models\ReleaseMNPVersionRequest $req) This API is used to release a mini program version.
 * @method Models\RemoveMNPResponse RemoveMNP(Models\RemoveMNPRequest $req) This API is used to remove a mini program.
 * @method Models\RollbackMNPVersionResponse RollbackMNPVersion(Models\RollbackMNPVersionRequest $req) This API is used to rollback a mini program online version.
 */

class TcsasClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcsas.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcsas";

    /**
     * @var string
     */
    protected $version = "2025-01-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcsas")."\\"."V20250106\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
