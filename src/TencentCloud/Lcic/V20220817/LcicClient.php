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
 * @method Models\BindDocumentToRoomResponse BindDocumentToRoom(Models\BindDocumentToRoomRequest $req) This API is used to bind a document to a room.
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) This API is used to create a document to be used in a room.
 * @method Models\CreateRoomResponse CreateRoom(Models\CreateRoomRequest $req) This API is used to create a room.
 * @method Models\CreateSupervisorResponse CreateSupervisor(Models\CreateSupervisorRequest $req) This API is used to create a spectator.
 * @method Models\DeleteRoomResponse DeleteRoom(Models\DeleteRoomRequest $req) This API is used to delete a room.
 * @method Models\DescribeRoomResponse DescribeRoom(Models\DescribeRoomRequest $req) This API is used to get room information.
 * @method Models\DescribeRoomStatisticsResponse DescribeRoomStatistics(Models\DescribeRoomStatisticsRequest $req) This API is used to obtain the statistics of a room. It can be called only after the room is ended.
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) This API is used to obtain user profile.
 * @method Models\LoginOriginIdResponse LoginOriginId(Models\LoginOriginIdRequest $req) This API is used to log in with an origin account, which is the `originId` entered during registration.
 * @method Models\LoginUserResponse LoginUser(Models\LoginUserRequest $req) This API is used to log in.
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) This API is used to modify an application.
 * @method Models\RegisterUserResponse RegisterUser(Models\RegisterUserRequest $req) This API is used to register a user.
 * @method Models\SetAppCustomContentResponse SetAppCustomContent(Models\SetAppCustomContentRequest $req) This API is used to set or update the custom content of an application, including the application icon and custom code. After you update JS and CSS content, you also need to call this API for the updates to take effect.
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
