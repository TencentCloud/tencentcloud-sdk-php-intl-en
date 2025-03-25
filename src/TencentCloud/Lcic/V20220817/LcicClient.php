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
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\BatchAddGroupMemberResponse BatchAddGroupMember(Models\BatchAddGroupMemberRequest $req) This API is used to add users to multiple groups at a time.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\BatchCreateGroupWithMembersResponse BatchCreateGroupWithMembers(Models\BatchCreateGroupWithMembersRequest $req) This API is used to create multiple groups at a time.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\BatchCreateRoomResponse BatchCreateRoom(Models\BatchCreateRoomRequest $req) This API is used to create multiple rooms at a time.
 * @method Models\BatchDeleteGroupMemberResponse BatchDeleteGroupMember(Models\BatchDeleteGroupMemberRequest $req) This API is used to remove users from multiple groups at a time.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\BatchDeleteRecordResponse BatchDeleteRecord(Models\BatchDeleteRecordRequest $req) This API is used to delete the recordings of multiple rooms.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\BatchDescribeDocumentResponse BatchDescribeDocument(Models\BatchDescribeDocumentRequest $req) This API is used to get courseware information.
 * @method Models\BatchRegisterResponse BatchRegister(Models\BatchRegisterRequest $req) This API is used to register multiple users (up to 1,000) at a time. If a user ID already exists, the existing one will be overwritten.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\BindDocumentToRoomResponse BindDocumentToRoom(Models\BindDocumentToRoomRequest $req) This API is used to bind a document to a room.
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) This API is used to create a document to be used in a room.
 * @method Models\CreateGroupWithMembersResponse CreateGroupWithMembers(Models\CreateGroupWithMembersRequest $req) his API is used to create a group and specify its members.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\CreateGroupWithSubGroupResponse CreateGroupWithSubGroup(Models\CreateGroupWithSubGroupRequest $req) This API is used to merge groups.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\CreateRoomResponse CreateRoom(Models\CreateRoomRequest $req) This API is used to create a room.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\CreateSupervisorResponse CreateSupervisor(Models\CreateSupervisorRequest $req) This API is used to create a spectator.
 * @method Models\DeleteAppCustomContentResponse DeleteAppCustomContent(Models\DeleteAppCustomContentRequest $req) This API is used to delete the custom elements. The `Scenes` parameter specifies the custom elements to delete. If `Scenes` is empty, all custom elements will be deleted.
 * @method Models\DeleteDocumentResponse DeleteDocument(Models\DeleteDocumentRequest $req) This API is used to delete a document.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) This API is used to delete one or multiple groups.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DeleteGroupMemberResponse DeleteGroupMember(Models\DeleteGroupMemberRequest $req) This API is used to remove users from a group.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) This example shows you how to delete the recording files of a specific room.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DeleteRoomResponse DeleteRoom(Models\DeleteRoomRequest $req) This API is used to delete a room.
 * @method Models\DeleteSupervisorResponse DeleteSupervisor(Models\DeleteSupervisorRequest $req) This API is used to delete spectators.
 * @method Models\DescribeAnswerListResponse DescribeAnswerList(Models\DescribeAnswerListRequest $req) This API is used to get the answers to a quiz question in a room.
 * @method Models\DescribeCurrentMemberListResponse DescribeCurrentMemberList(Models\DescribeCurrentMemberListRequest $req) This API is used to get the user list of a room. This API will not work if a room has ended or expired.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeDeveloperResponse DescribeDeveloper(Models\DescribeDeveloperRequest $req) This API is used to get developer information.
 * @method Models\DescribeDocumentResponse DescribeDocument(Models\DescribeDocumentRequest $req) This API is used to get the information of a specific document.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeDocumentsResponse DescribeDocuments(Models\DescribeDocumentsRequest $req) A new API is offered for this action now.

This API is used to query courseware. It has been deprecated. Please use `BatchDescribeDocument` instead.
 * @method Models\DescribeDocumentsByRoomResponse DescribeDocumentsByRoom(Models\DescribeDocumentsByRoomRequest $req) This API is used to get the document list of a specific room.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeGroupResponse DescribeGroup(Models\DescribeGroupRequest $req) This API is used to get the details of a group.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeGroupListResponse DescribeGroupList(Models\DescribeGroupListRequest $req) This API is used to query groups.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeGroupMemberListResponse DescribeGroupMemberList(Models\DescribeGroupMemberListRequest $req) This API is used to get the members of a group.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeQuestionListResponse DescribeQuestionList(Models\DescribeQuestionListRequest $req) This API is used to get the quiz details of a room.
 * @method Models\DescribeRoomResponse DescribeRoom(Models\DescribeRoomRequest $req) This API is used to get room information.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeRoomStatisticsResponse DescribeRoomStatistics(Models\DescribeRoomStatisticsRequest $req) This API is used to obtain the statistics of a room. It can be called only after the room is ended.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeSdkAppIdUsersResponse DescribeSdkAppIdUsers(Models\DescribeSdkAppIdUsersRequest $req) This API is used to get the user list of a specific application.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\DescribeSupervisorsResponse DescribeSupervisors(Models\DescribeSupervisorsRequest $req) This API is used to get the spectators of a room.
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) This API is used to obtain user profile.
 * @method Models\EndRoomResponse EndRoom(Models\EndRoomRequest $req) This API is used to end a room.
 * @method Models\GetRoomEventResponse GetRoomEvent(Models\GetRoomEventRequest $req) This API is used to get the events of a room. It only works within one hour after a class ends.
 * @method Models\GetRoomMessageResponse GetRoomMessage(Models\GetRoomMessageRequest $req) This API is used to get the message history of a room (room messages are retained for seven days).
 * @method Models\GetRoomsResponse GetRooms(Models\GetRoomsRequest $req) This API is used to get the room list.
 * @method Models\GetWatermarkResponse GetWatermark(Models\GetWatermarkRequest $req) This API is used to get watermark settings.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\KickUserFromRoomResponse KickUserFromRoom(Models\KickUserFromRoomRequest $req) This API is used to remove a user from the room.
 * @method Models\LoginOriginIdResponse LoginOriginId(Models\LoginOriginIdRequest $req) This API is used to log in with an origin account, which is the `originId` entered during registration.
 * @method Models\LoginUserResponse LoginUser(Models\LoginUserRequest $req) This API is used to log in.
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) This API is used to modify an application.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\ModifyGroupResponse ModifyGroup(Models\ModifyGroupRequest $req) This API is used to modify a group.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\ModifyRoomResponse ModifyRoom(Models\ModifyRoomRequest $req) This API is used to modify a room.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\ModifyUserProfileResponse ModifyUserProfile(Models\ModifyUserProfileRequest $req) This API is used to modify a user profile such as the nickname and profile photo.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\RegisterUserResponse RegisterUser(Models\RegisterUserRequest $req) This API is used to register a user.
 * @method Models\SetAppCustomContentResponse SetAppCustomContent(Models\SetAppCustomContentRequest $req) This API is used to set or update the custom content of an application, including the application icon and custom code. After you update JS and CSS content, you also need to call this API for the updates to take effect.
 * @method Models\SetWatermarkResponse SetWatermark(Models\SetWatermarkRequest $req) This API is used to configure watermarks.
A maximum of 20 requests can be initiated per second for this API.
 * @method Models\StartRoomResponse StartRoom(Models\StartRoomRequest $req) This API is used to start a room. Before you call this API, make sure a user has entered the room so that the class is initialized.
 * @method Models\UnbindDocumentFromRoomResponse UnbindDocumentFromRoom(Models\UnbindDocumentFromRoomRequest $req) This API is used to unbind a document from a room.
 */

class LcicClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lcic.intl.tencentcloudapi.com";

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
