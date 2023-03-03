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

namespace TencentCloud\Lcic\V20220817;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lcic\V20220817\Models as Models;

/**
 * @method Models\AddGroupMemberResponse AddGroupMember(Models\AddGroupMemberRequest $req) This API is used to add users to a group.
 * @method Models\BatchAddGroupMemberResponse BatchAddGroupMember(Models\BatchAddGroupMemberRequest $req) This API is used to add users to multiple groups at a time.
 * @method Models\BatchCreateGroupWithMembersResponse BatchCreateGroupWithMembers(Models\BatchCreateGroupWithMembersRequest $req) This API is used to create multiple groups at a time.
 * @method Models\BatchCreateRoomResponse BatchCreateRoom(Models\BatchCreateRoomRequest $req) This API is used to create multiple rooms at a time.
 * @method Models\BatchDeleteGroupMemberResponse BatchDeleteGroupMember(Models\BatchDeleteGroupMemberRequest $req) This API is used to remove users from multiple groups at a time.
 * @method Models\BatchDeleteRecordResponse BatchDeleteRecord(Models\BatchDeleteRecordRequest $req) This API is used to delete the recordings of multiple rooms.
 * @method Models\BatchRegisterResponse BatchRegister(Models\BatchRegisterRequest $req) This API is used to register multiple users (up to 1,000) at a time. If a user ID already exists, the existing one will be overwritten.
 * @method Models\BindDocumentToRoomResponse BindDocumentToRoom(Models\BindDocumentToRoomRequest $req) This API is used to bind a document to a room.
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) This API is used to create a document to be used in a room.
 * @method Models\CreateGroupWithMembersResponse CreateGroupWithMembers(Models\CreateGroupWithMembersRequest $req) This API is used to create a group and specify its members.
 * @method Models\CreateGroupWithSubGroupResponse CreateGroupWithSubGroup(Models\CreateGroupWithSubGroupRequest $req) This API is used to merge groups.
 * @method Models\CreateRoomResponse CreateRoom(Models\CreateRoomRequest $req) This API is used to create a room.
 * @method Models\CreateSupervisorResponse CreateSupervisor(Models\CreateSupervisorRequest $req) This API is used to create a spectator.
 * @method Models\DeleteDocumentResponse DeleteDocument(Models\DeleteDocumentRequest $req) This API is used to delete a document.
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) This API is used to delete one or multiple groups.
 * @method Models\DeleteGroupMemberResponse DeleteGroupMember(Models\DeleteGroupMemberRequest $req) This API is used to remove users from a group.
 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) This example shows you how to delete the recording files of a specific room.
 * @method Models\DeleteRoomResponse DeleteRoom(Models\DeleteRoomRequest $req) This API is used to delete a room.
 * @method Models\DescribeCurrentMemberListResponse DescribeCurrentMemberList(Models\DescribeCurrentMemberListRequest $req) This API is used to get the user list of a room. This API will not work if a room has ended or expired.
 * @method Models\DescribeDocumentResponse DescribeDocument(Models\DescribeDocumentRequest $req) This API is used to get the information of a specific document.
 * @method Models\DescribeDocumentsByRoomResponse DescribeDocumentsByRoom(Models\DescribeDocumentsByRoomRequest $req) This API is used to get the document list of a specific room.
 * @method Models\DescribeGroupResponse DescribeGroup(Models\DescribeGroupRequest $req) This API is used to get the details of a group.
 * @method Models\DescribeGroupListResponse DescribeGroupList(Models\DescribeGroupListRequest $req) This API is used to query groups.
 * @method Models\DescribeGroupMemberListResponse DescribeGroupMemberList(Models\DescribeGroupMemberListRequest $req) This API is used to get the members of a group.
 * @method Models\DescribeRoomResponse DescribeRoom(Models\DescribeRoomRequest $req) This API is used to get room information.
 * @method Models\DescribeRoomStatisticsResponse DescribeRoomStatistics(Models\DescribeRoomStatisticsRequest $req) This API is used to obtain the statistics of a room. It can be called only after the room is ended.
 * @method Models\DescribeSdkAppIdUsersResponse DescribeSdkAppIdUsers(Models\DescribeSdkAppIdUsersRequest $req) This API is used to get the user list of a specific application.
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) This API is used to obtain user profile.
 * @method Models\GetWatermarkResponse GetWatermark(Models\GetWatermarkRequest $req) This API is used to get watermark settings.
 * @method Models\LoginOriginIdResponse LoginOriginId(Models\LoginOriginIdRequest $req) This API is used to log in with an origin account, which is the `originId` entered during registration.
 * @method Models\LoginUserResponse LoginUser(Models\LoginUserRequest $req) This API is used to log in.
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) This API is used to modify an application.
 * @method Models\ModifyGroupResponse ModifyGroup(Models\ModifyGroupRequest $req) This API is used to modify a group.
 * @method Models\ModifyRoomResponse ModifyRoom(Models\ModifyRoomRequest $req) This API is used to modify a room.
 * @method Models\ModifyUserProfileResponse ModifyUserProfile(Models\ModifyUserProfileRequest $req) This API is used to modify a user profile such as the nickname and profile photo.
 * @method Models\RegisterUserResponse RegisterUser(Models\RegisterUserRequest $req) This API is used to register a user.
 * @method Models\SetAppCustomContentResponse SetAppCustomContent(Models\SetAppCustomContentRequest $req) This API is used to set or update the custom content of an application, including the application icon and custom code. After you update JS and CSS content, you also need to call this API for the updates to take effect.
 * @method Models\SetWatermarkResponse SetWatermark(Models\SetWatermarkRequest $req) This API is used to configure watermarks.
 * @method Models\UnbindDocumentFromRoomResponse UnbindDocumentFromRoom(Models\UnbindDocumentFromRoomRequest $req) This API is used to unbind a document from a room.
 */

class LcicClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lcic.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lcic";

    /**
     * @var string
     */
    protected $version = "2022-08-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("lcic")."\\"."V20220817\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
