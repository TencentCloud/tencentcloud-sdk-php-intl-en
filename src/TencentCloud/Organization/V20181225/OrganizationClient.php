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

namespace TencentCloud\Organization\V20181225;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Organization\V20181225\Models as Models;

/**
 * @method Models\AcceptOrganizationInvitationResponse AcceptOrganizationInvitation(Models\AcceptOrganizationInvitationRequest $req) This API is used to accept an invitation to an organization.
 * @method Models\AddOrganizationNodeResponse AddOrganizationNode(Models\AddOrganizationNodeRequest $req) This API is used to add an organizational unit.
 * @method Models\CancelOrganizationInvitationResponse CancelOrganizationInvitation(Models\CancelOrganizationInvitationRequest $req) This API is used to cancel an invitation to an organization.
 * @method Models\CreateOrganizationResponse CreateOrganization(Models\CreateOrganizationRequest $req) This API is used to create an organization.
 * @method Models\DeleteOrganizationResponse DeleteOrganization(Models\DeleteOrganizationRequest $req) This API is used to delete an organization.
 * @method Models\DeleteOrganizationMemberFromNodeResponse DeleteOrganizationMemberFromNode(Models\DeleteOrganizationMemberFromNodeRequest $req) This API is used to delete an organization member.
 * @method Models\DeleteOrganizationMembersResponse DeleteOrganizationMembers(Models\DeleteOrganizationMembersRequest $req) This API is used to delete multiple organization members in a single request.
 * @method Models\DeleteOrganizationNodesResponse DeleteOrganizationNodes(Models\DeleteOrganizationNodesRequest $req) This API is used to delete multiple organizational units in a single request.
 * @method Models\DenyOrganizationInvitationResponse DenyOrganizationInvitation(Models\DenyOrganizationInvitationRequest $req) This API is used to decline an invitation to an organization.
 * @method Models\GetOrganizationResponse GetOrganization(Models\GetOrganizationRequest $req) This API is used to obtain information on organizations.
 * @method Models\GetOrganizationMemberResponse GetOrganizationMember(Models\GetOrganizationMemberRequest $req) This API is used to obtain information on organization members.
 * @method Models\ListOrganizationInvitationsResponse ListOrganizationInvitations(Models\ListOrganizationInvitationsRequest $req) This API is used to obtain an invitation list.
 * @method Models\ListOrganizationMembersResponse ListOrganizationMembers(Models\ListOrganizationMembersRequest $req) This API is used to obtain a list of organization members.
 * @method Models\ListOrganizationNodeMembersResponse ListOrganizationNodeMembers(Models\ListOrganizationNodeMembersRequest $req) This API is used to obtain a list of organizational unit members.
 * @method Models\ListOrganizationNodesResponse ListOrganizationNodes(Models\ListOrganizationNodesRequest $req) This API is used to obtain a list of organizational units.
 * @method Models\MoveOrganizationMembersToNodeResponse MoveOrganizationMembersToNode(Models\MoveOrganizationMembersToNodeRequest $req) This API is used to move members to a specified organizational unit.
 * @method Models\QuitOrganizationResponse QuitOrganization(Models\QuitOrganizationRequest $req) This API is used to quit an organization.
 * @method Models\SendOrganizationInvitationResponse SendOrganizationInvitation(Models\SendOrganizationInvitationRequest $req) This API is used to send an invitation to join an organization.
 * @method Models\UpdateOrganizationMemberResponse UpdateOrganizationMember(Models\UpdateOrganizationMemberRequest $req) This API is used to update information on organization members.
 * @method Models\UpdateOrganizationNodeResponse UpdateOrganizationNode(Models\UpdateOrganizationNodeRequest $req) This API is used to update organizational units.
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
    protected $version = "2018-12-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("organization")."\\"."V20181225\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
