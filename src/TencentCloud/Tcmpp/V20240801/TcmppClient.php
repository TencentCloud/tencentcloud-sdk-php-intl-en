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
 * @method Models\AddTeamMemberResponse AddTeamMember(Models\AddTeamMemberRequest $req) This API is used to add users to a team
 * @method Models\CheckGlobalDomainResponse CheckGlobalDomain(Models\CheckGlobalDomainRequest $req) This API is used to query if the domain is in the allowlist or blocklist
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) This API is used to add an application
 * @method Models\CreateConsoleMNPVersionCompileTaskResponse CreateConsoleMNPVersionCompileTask(Models\CreateConsoleMNPVersionCompileTaskRequest $req) This API is used to add new mini program version to the console
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) This API is used to create a mini program service domain
 * @method Models\CreateGlobalDomainResponse CreateGlobalDomain(Models\CreateGlobalDomainRequest $req) This API is used to add domains to allowlist or blocklist
 * @method Models\CreateMNPResponse CreateMNP(Models\CreateMNPRequest $req) This API is used to create a mini program
 * @method Models\CreateOnlineApplyResponse CreateOnlineApply(Models\CreateOnlineApplyRequest $req) This API is used to release the mini program
 * @method Models\CreatePlatformAuditResponse CreatePlatformAudit(Models\CreatePlatformAuditRequest $req) This API is used to submit mini program version for approval
 * @method Models\CreatePresetKeyResponse CreatePresetKey(Models\CreatePresetKeyRequest $req) This API is used to obtain the encryption key
 * @method Models\CreateSensitiveAPIResponse CreateSensitiveAPI(Models\CreateSensitiveAPIRequest $req) This API is used to add a sensitive API
 * @method Models\CreateSensitiveApiApplyResponse CreateSensitiveApiApply(Models\CreateSensitiveApiApplyRequest $req) This API is used to apply for sensitive API call permissions
 * @method Models\CreateTeamResponse CreateTeam(Models\CreateTeamRequest $req) This API is used to create a team
 * @method Models\CreateTeamMemberResponse CreateTeamMember(Models\CreateTeamMemberRequest $req) This API is used to add team members
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to create a user
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) This API is used to delete applications
 * @method Models\DeleteGlobalDomainResponse DeleteGlobalDomain(Models\DeleteGlobalDomainRequest $req) This API is used to delete domains from allowlist or blocklist
 * @method Models\DeleteMNPResponse DeleteMNP(Models\DeleteMNPRequest $req) This API is used to delete the mini program
 * @method Models\DeleteSensitiveAPIResponse DeleteSensitiveAPI(Models\DeleteSensitiveAPIRequest $req) This API is used to delete a sensitive API
 * @method Models\DeleteTeamResponse DeleteTeam(Models\DeleteTeamRequest $req) This API is used to delete a team
 * @method Models\DeleteTeamMemberResponse DeleteTeamMember(Models\DeleteTeamMemberRequest $req) This API is used to delete a team member
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a user
 * @method Models\DescribeApplicationResponse DescribeApplication(Models\DescribeApplicationRequest $req) This API is used to query application details
 * @method Models\DescribeApplicationConfigResponse DescribeApplicationConfig(Models\DescribeApplicationConfigRequest $req) This API is used to query application configuration information
 * @method Models\DescribeApplicationListResponse DescribeApplicationList(Models\DescribeApplicationListRequest $req) This API is used to query application list data
 * @method Models\DescribeApplicationMNPVersionAuditListResponse DescribeApplicationMNPVersionAuditList(Models\DescribeApplicationMNPVersionAuditListRequest $req) This API is used to query the approval list of the mini program versions
 * @method Models\DescribeConsoleMNPVersionCompileTaskResponse DescribeConsoleMNPVersionCompileTask(Models\DescribeConsoleMNPVersionCompileTaskRequest $req) This API is used to query if the mini program version is uploaded successfully
 * @method Models\DescribeDomainInfoResponse DescribeDomainInfo(Models\DescribeDomainInfoRequest $req) This API is used to query the domain name list configured for the mini program
 * @method Models\DescribeDomainTeamListResponse DescribeDomainTeamList(Models\DescribeDomainTeamListRequest $req) This API is used to query the list of teams with domains that obtained the ICP filing
 * @method Models\DescribeGlobalDomainListResponse DescribeGlobalDomainList(Models\DescribeGlobalDomainListRequest $req) This API is used to query domain allowlist and blocklist
 * @method Models\DescribeMNPBoardResponse DescribeMNPBoard(Models\DescribeMNPBoardRequest $req) This API is used to query the mini program version management information
 * @method Models\DescribeMNPDetailResponse DescribeMNPDetail(Models\DescribeMNPDetailRequest $req) This API is used to query mini program details
 * @method Models\DescribeMNPManagerDetailResponse DescribeMNPManagerDetail(Models\DescribeMNPManagerDetailRequest $req) This API is used to query mini program details in the mini program list
 * @method Models\DescribeMNPManagerListResponse DescribeMNPManagerList(Models\DescribeMNPManagerListRequest $req) This API is used to query the mini program list
 * @method Models\DescribeMNPPrivacyResponse DescribeMNPPrivacy(Models\DescribeMNPPrivacyRequest $req) This API is used to query the details filled in the service description
 * @method Models\DescribeMNPTypeResponse DescribeMNPType(Models\DescribeMNPTypeRequest $req) This API is used to query the mini program type list
 * @method Models\DescribeMNPVersionPreviewResponse DescribeMNPVersionPreview(Models\DescribeMNPVersionPreviewRequest $req) This API is used to query the details of the mini program trial version
 * @method Models\DescribeOfflineMNPPackageResponse DescribeOfflineMNPPackage(Models\DescribeOfflineMNPPackageRequest $req) This API is used to query offline mini program packages
 * @method Models\DescribeOnlineVersionResponse DescribeOnlineVersion(Models\DescribeOnlineVersionRequest $req) This API is used to query the current release version of the mini program
 * @method Models\DescribeRoleDetailResponse DescribeRoleDetail(Models\DescribeRoleDetailRequest $req) This API is used to query role permission information
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) This API is used to query role list data
 * @method Models\DescribeSensitiveAPIAuditListResponse DescribeSensitiveAPIAuditList(Models\DescribeSensitiveAPIAuditListRequest $req) This API is used to query sensitive API approval list
 * @method Models\DescribeSensitiveAPIListResponse DescribeSensitiveAPIList(Models\DescribeSensitiveAPIListRequest $req) This API is used to query all sensitive APIs list
 * @method Models\DescribeSensitiveApiApplyDetailResponse DescribeSensitiveApiApplyDetail(Models\DescribeSensitiveApiApplyDetailRequest $req) This API is used to query sensitive API call details
 * @method Models\DescribeSensitiveApiAuthListResponse DescribeSensitiveApiAuthList(Models\DescribeSensitiveApiAuthListRequest $req) This API is used to query the sensitive APIs that require permission
 * @method Models\DescribeSimpleApplicationInfoListResponse DescribeSimpleApplicationInfoList(Models\DescribeSimpleApplicationInfoListRequest $req) This API is used to query application list information
 * @method Models\DescribeSimpleTeamListResponse DescribeSimpleTeamList(Models\DescribeSimpleTeamListRequest $req) This API is used to query the team information list
 * @method Models\DescribeTeamResponse DescribeTeam(Models\DescribeTeamRequest $req) This API is used to query team details
 * @method Models\DescribeTeamDomainListResponse DescribeTeamDomainList(Models\DescribeTeamDomainListRequest $req) This API is used to query a specified team’s domains that obtained ICP filing
 * @method Models\DescribeTeamListResponse DescribeTeamList(Models\DescribeTeamListRequest $req) This API is used to query the team list that can be viewed by the current role permissions
 * @method Models\DescribeTeamMemberListResponse DescribeTeamMemberList(Models\DescribeTeamMemberListRequest $req) This API is used to query team member list
 * @method Models\DescribeTeamMembersResponse DescribeTeamMembers(Models\DescribeTeamMembersRequest $req) This API is used to query the member list of a specified team
 * @method Models\DescribeTempSecret4UploadFile2CosResponse DescribeTempSecret4UploadFile2Cos(Models\DescribeTempSecret4UploadFile2CosRequest $req) This API is used to obtain a temporary key for file uploads
 * @method Models\DescribeUserDetailResponse DescribeUserDetail(Models\DescribeUserDetailRequest $req) This API is used to query user details
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) This API is used to query the user list
 * @method Models\DisableTeamDomainResponse DisableTeamDomain(Models\DisableTeamDomainRequest $req) This API is used to disable the company’s domain name that obtained the ICP filing
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) This API is used to change application information
 * @method Models\ModifyApplicationAppKeyResponse ModifyApplicationAppKey(Models\ModifyApplicationAppKeyRequest $req) This API is used to modify the application package name
 * @method Models\ModifyApplicationAppUrlResponse ModifyApplicationAppUrl(Models\ModifyApplicationAppUrlRequest $req) This API is used to change the app download address
 * @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) This API is used to edit the mini program domain information
 * @method Models\ModifyGlobalDomainResponse ModifyGlobalDomain(Models\ModifyGlobalDomainRequest $req) This API is used to modify domain allowlist or blocklist
 * @method Models\ModifyMNPResponse ModifyMNP(Models\ModifyMNPRequest $req) This API is used to modify mini program information
 * @method Models\ModifyMNPStatusOfflineResponse ModifyMNPStatusOffline(Models\ModifyMNPStatusOfflineRequest $req) This API is used to remove the mini program
 * @method Models\ModifyMNPVersionPreviewResponse ModifyMNPVersionPreview(Models\ModifyMNPVersionPreviewRequest $req) This API is used to configure the mini program trial version
 * @method Models\ModifyOnlineVersionResponse ModifyOnlineVersion(Models\ModifyOnlineVersionRequest $req) This API is used to rollback a mini program release version
 * @method Models\ModifyPlatformAuditStatusResponse ModifyPlatformAuditStatus(Models\ModifyPlatformAuditStatusRequest $req) This API is used to approve the release of the mini program version
 * @method Models\ModifySensitiveAPIAuditStatusResponse ModifySensitiveAPIAuditStatus(Models\ModifySensitiveAPIAuditStatusRequest $req) This API is used to approve sensitive API call permission
 * @method Models\ModifyTeamResponse ModifyTeam(Models\ModifyTeamRequest $req) This API is used to change team information
 * @method Models\ModifyTeamMemberResponse ModifyTeamMember(Models\ModifyTeamMemberRequest $req) This API is used to change team member roles
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) This API is used to edit user information
 * @method Models\ModifyUserPasswordResponse ModifyUserPassword(Models\ModifyUserPasswordRequest $req) This API is used to reset user password
 */

class TcmppClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcmpp.tencentcloudapi.com";

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
