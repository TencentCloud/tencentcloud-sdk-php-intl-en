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

namespace TencentCloud\Ciam\V20220331;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ciam\V20220331\Models as Models;

/**
 * @method Models\CreateApiImportUserJobResponse CreateApiImportUserJob(Models\CreateApiImportUserJobRequest $req) This API is used to create an API for user import task.
 * @method Models\CreateFileExportUserJobResponse CreateFileExportUserJob(Models\CreateFileExportUserJobRequest $req) This API is used to create a file for user export task.
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) This API is used to create a user.
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) This API is used to delete users in batches.
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) This API is used to query the user information with multiple conditions.
 * @method Models\DescribeUserByIdResponse DescribeUserById(Models\DescribeUserByIdRequest $req) This API is used to query a user by ID.
 * @method Models\LinkAccountResponse LinkAccount(Models\LinkAccountRequest $req) This API is used to merge accounts.
 * @method Models\ListJobsResponse ListJobs(Models\ListJobsRequest $req) This API is used to query the details of a task.
 * @method Models\ListLogMessageByConditionResponse ListLogMessageByCondition(Models\ListLogMessageByConditionRequest $req) This API is used to query a specified log.
 * @method Models\ListUserResponse ListUser(Models\ListUserRequest $req) This API is used to query the list of users.
 * @method Models\ListUserByPropertyResponse ListUserByProperty(Models\ListUserByPropertyRequest $req) This API is used to query the list of users by attribute.
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) This API is used to reset the password for a user.
 * @method Models\SetPasswordResponse SetPassword(Models\SetPasswordRequest $req) This API is used to set the password for a user.
 * @method Models\UpdateUserResponse UpdateUser(Models\UpdateUserRequest $req) This API is used to update a user.
 * @method Models\UpdateUserStatusResponse UpdateUserStatus(Models\UpdateUserStatusRequest $req) This API is used to update the status of a user.
 */

class CiamClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ciam.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ciam";

    /**
     * @var string
     */
    protected $version = "2022-03-31";

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
        $respClass = "TencentCloud"."\\".ucfirst("ciam")."\\"."V20220331\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
