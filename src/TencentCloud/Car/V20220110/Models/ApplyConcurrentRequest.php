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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyConcurrent request structure.
 *
 * @method string getUserId() Obtain Unique user ID, which is customized by you and is not parsed by CAR. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
 * @method void setUserId(string $UserId) Set Unique user ID, which is customized by you and is not parsed by CAR. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
 * @method string getUserIp() Obtain Public IP address of the user's client, which is used for nearby scheduling.
 * @method void setUserIp(string $UserIp) Set Public IP address of the user's client, which is used for nearby scheduling.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getApplicationVersionId() Obtain Application version ID. If the application of the current version is requested, you do not need to fill in this field. If the application of the other versions is requested, you need to specify the version through this field.
 * @method void setApplicationVersionId(string $ApplicationVersionId) Set Application version ID. If the application of the current version is requested, you do not need to fill in this field. If the application of the other versions is requested, you need to specify the version through this field.
 * @method string getApplicationId() Obtain Application ID, which is used only by the multi-application project to specify applications. For a single-application project, this parameter is ignored, and the application bound to the project will be used.
 * @method void setApplicationId(string $ApplicationId) Set Application ID, which is used only by the multi-application project to specify applications. For a single-application project, this parameter is ignored, and the application bound to the project will be used.
 */
class ApplyConcurrentRequest extends AbstractModel
{
    /**
     * @var string Unique user ID, which is customized by you and is not parsed by CAR. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
     */
    public $UserId;

    /**
     * @var string Public IP address of the user's client, which is used for nearby scheduling.
     */
    public $UserIp;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Application version ID. If the application of the current version is requested, you do not need to fill in this field. If the application of the other versions is requested, you need to specify the version through this field.
     */
    public $ApplicationVersionId;

    /**
     * @var string Application ID, which is used only by the multi-application project to specify applications. For a single-application project, this parameter is ignored, and the application bound to the project will be used.
     */
    public $ApplicationId;

    /**
     * @param string $UserId Unique user ID, which is customized by you and is not parsed by CAR. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
     * @param string $UserIp Public IP address of the user's client, which is used for nearby scheduling.
     * @param string $ProjectId Project ID.
     * @param string $ApplicationVersionId Application version ID. If the application of the current version is requested, you do not need to fill in this field. If the application of the other versions is requested, you need to specify the version through this field.
     * @param string $ApplicationId Application ID, which is used only by the multi-application project to specify applications. For a single-application project, this parameter is ignored, and the application bound to the project will be used.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
