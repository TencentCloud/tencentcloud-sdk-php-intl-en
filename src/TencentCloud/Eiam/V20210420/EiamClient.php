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

namespace TencentCloud\Eiam\V20210420;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Eiam\V20210420\Models as Models;

/**
 * @method Models\AddAccountToAccountGroupResponse AddAccountToAccountGroup(Models\AddAccountToAccountGroupRequest $req) This API is used to add an account to an account group.
 * @method Models\AddUserToUserGroupResponse AddUserToUserGroup(Models\AddUserToUserGroupRequest $req) This API is used to add a user to a user group.
 * @method Models\CreateAccountGroupResponse CreateAccountGroup(Models\CreateAccountGroupRequest $req) This API is used to create an account group.
 * @method Models\CreateAppAccountResponse CreateAppAccount(Models\CreateAppAccountRequest $req) This API is used to create an application account.
 * @method Models\CreateOrgNodeResponse CreateOrgNode(Models\CreateOrgNodeRequest $req) This API is used to create an organization node.
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to create a user.
 * @method Models\CreateUserGroupResponse CreateUserGroup(Models\CreateUserGroupRequest $req) This API is used to create a user group.
 * @method Models\DeleteAccountGroupResponse DeleteAccountGroup(Models\DeleteAccountGroupRequest $req) This API is used to delete an account group.
 * @method Models\DeleteAppAccountResponse DeleteAppAccount(Models\DeleteAppAccountRequest $req) This API is used to delete an application account.
 * @method Models\DeleteOrgNodeResponse DeleteOrgNode(Models\DeleteOrgNodeRequest $req) This API is used to delete an organization node.
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) This API is used to delete a user by username or user ID.
 * @method Models\DeleteUserGroupResponse DeleteUserGroup(Models\DeleteUserGroupRequest $req) This API is used to delete a user group.
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) This API is used to batch delete the users under the current node. If an error occurs when a user is deleted, the deletion of other selected users will not be affected, and the username/ID of the user who fails to be deleted will be prompted.
 * @method Models\DescribeAccountGroupResponse DescribeAccountGroup(Models\DescribeAccountGroupRequest $req) This API is used to query the list of account groups.
 * @method Models\DescribeAppAccountResponse DescribeAppAccount(Models\DescribeAppAccountRequest $req) This API is used to query the list of application accounts.
 * @method Models\DescribeApplicationResponse DescribeApplication(Models\DescribeApplicationRequest $req) This API is used to get the information of an application.
 * @method Models\DescribeOrgNodeResponse DescribeOrgNode(Models\DescribeOrgNodeRequest $req) This API is used to read the information of an organization node by organization node ID.
 * @method Models\DescribePublicKeyResponse DescribePublicKey(Models\DescribePublicKeyRequest $req) This API is used to get the information of a JWT public key.
 * @method Models\DescribeUserGroupResponse DescribeUserGroup(Models\DescribeUserGroupRequest $req) This API is used to get the information of a user group.
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) This API is used to search for a user by username or user ID.
 * @method Models\DescribeUserResourcesAuthorizationResponse DescribeUserResourcesAuthorization(Models\DescribeUserResourcesAuthorizationRequest $req) This API is used to query the list of resource authorizations under the specified user.
 * @method Models\DescribeUserThirdPartyAccountInfoResponse DescribeUserThirdPartyAccountInfo(Models\DescribeUserThirdPartyAccountInfoRequest $req) This API is used to get the third-party account binding information by username or user ID.
 * @method Models\ListAccountInAccountGroupResponse ListAccountInAccountGroup(Models\ListAccountInAccountGroupRequest $req)  This API is used to get the list of accounts in an account group.
 * @method Models\ListApplicationAuthorizationsResponse ListApplicationAuthorizations(Models\ListApplicationAuthorizationsRequest $req) This API is used to get the list of authorization relationships of an application (including search criteria-based match).
 * @method Models\ListApplicationsResponse ListApplications(Models\ListApplicationsRequest $req) This API is used to get the list of applications.
 * @method Models\ListAuthorizedApplicationsToOrgNodeResponse ListAuthorizedApplicationsToOrgNode(Models\ListAuthorizedApplicationsToOrgNodeRequest $req) This API is used to get the list of accessible applications by organization node ID.
 * @method Models\ListAuthorizedApplicationsToUserResponse ListAuthorizedApplicationsToUser(Models\ListAuthorizedApplicationsToUserRequest $req) This API is used to get the list of accessible applications by user ID.
 * @method Models\ListAuthorizedApplicationsToUserGroupResponse ListAuthorizedApplicationsToUserGroup(Models\ListAuthorizedApplicationsToUserGroupRequest $req) This API is used to get the list of accessible applications by user group ID.
 * @method Models\ListUserGroupsResponse ListUserGroups(Models\ListUserGroupsRequest $req) This API is used to get the information of the user group list (including query conditions).
 * @method Models\ListUserGroupsOfUserResponse ListUserGroupsOfUser(Models\ListUserGroupsOfUserRequest $req) This API is used to get the list of a user's user groups.
 * @method Models\ListUsersResponse ListUsers(Models\ListUsersRequest $req) This API is used to get the information of the user list.
 * @method Models\ListUsersInOrgNodeResponse ListUsersInOrgNode(Models\ListUsersInOrgNodeRequest $req) This API is used to read the users under an organization node by organization node ID.
 * @method Models\ListUsersInUserGroupResponse ListUsersInUserGroup(Models\ListUsersInUserGroupRequest $req) This API is used to get the list of the users in a user group.
 * @method Models\ModifyAccountGroupResponse ModifyAccountGroup(Models\ModifyAccountGroupRequest $req) This API is used to modify an account group.
 * @method Models\ModifyAppAccountResponse ModifyAppAccount(Models\ModifyAppAccountRequest $req) This API is used to modify an application account.
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) This API is used to update the information of an application.
 * @method Models\ModifyUserInfoResponse ModifyUserInfo(Models\ModifyUserInfoRequest $req) This API is used to modify the information of a user by username or user ID.
 * @method Models\RemoveAccountFromAccountGroupResponse RemoveAccountFromAccountGroup(Models\RemoveAccountFromAccountGroupRequest $req) This API is used to remove an account from an account group.
 * @method Models\RemoveUserFromUserGroupResponse RemoveUserFromUserGroup(Models\RemoveUserFromUserGroupRequest $req) This API is used to remove a user from a user group.
 * @method Models\UpdateOrgNodeResponse UpdateOrgNode(Models\UpdateOrgNodeRequest $req) This API is used to create an organization node.
 */

class EiamClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "eiam.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "eiam";

    /**
     * @var string
     */
    protected $version = "2021-04-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("eiam")."\\"."V20210420\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
