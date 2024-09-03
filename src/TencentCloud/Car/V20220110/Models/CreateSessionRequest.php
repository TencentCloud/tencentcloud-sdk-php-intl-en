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
 * CreateSession request structure.
 *
 * @method string getUserId() Obtain Unique user ID, which is customized by you and is not parsed by CAR. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
 * @method void setUserId(string $UserId) Set Unique user ID, which is customized by you and is not parsed by CAR. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
 * @method string getUserIp() Obtain Public IP address of the user's client, which is used for nearby scheduling.
 * @method void setUserIp(string $UserIp) Set Public IP address of the user's client, which is used for nearby scheduling.
 * @method string getClientSession() Obtain Client-side session information, which is obtained from the SDK. If `RunMode` is `RunWithoutClient`, this parameter can be empty.
 * @method void setClientSession(string $ClientSession) Set Client-side session information, which is obtained from the SDK. If `RunMode` is `RunWithoutClient`, this parameter can be empty.
 * @method string getRunMode() Obtain On-cloud running mode.RunWithoutClient: Keeps the application running on the cloud even when there are no client connections.Empty string (default): Keeps the application running on the cloud only when there are client connections.
 * @method void setRunMode(string $RunMode) Set On-cloud running mode.RunWithoutClient: Keeps the application running on the cloud even when there are no client connections.Empty string (default): Keeps the application running on the cloud only when there are client connections.
 * @method string getApplicationParameters() Obtain Application startup parameters.This parameter is effective for multi-application projects.
This parameter is effective for single-application projects with prelaunch disabled.This parameter is ineffective for single-application projects with prelaunch enabled.
Note: When this parameter is effective, it will be appended to the startup parameters of application or project configuration in the console.
For example, for a single-application project with prelaunch disabled, if its startup parameter `bar` is `0` for project configuration in the console and the `ApplicationParameters` parameter `foo` is `1`, the actual application startup parameters will be `bar=0 and foo=1`.
 * @method void setApplicationParameters(string $ApplicationParameters) Set Application startup parameters.This parameter is effective for multi-application projects.
This parameter is effective for single-application projects with prelaunch disabled.This parameter is ineffective for single-application projects with prelaunch enabled.
Note: When this parameter is effective, it will be appended to the startup parameters of application or project configuration in the console.
For example, for a single-application project with prelaunch disabled, if its startup parameter `bar` is `0` for project configuration in the console and the `ApplicationParameters` parameter `foo` is `1`, the actual application startup parameters will be `bar=0 and foo=1`.
 * @method string getHostUserId() Obtain [Multi-person Interaction] Homeowner's user ID, which is required in multi-person interaction mode.
If the user is the homeowner, HostUserID must be the same as UserID.
If the user is not the homeowner, HostUserID must be the homeowner's HostUserID.
 * @method void setHostUserId(string $HostUserId) Set [Multi-person Interaction] Homeowner's user ID, which is required in multi-person interaction mode.
If the user is the homeowner, HostUserID must be the same as UserID.
If the user is not the homeowner, HostUserID must be the homeowner's HostUserID.
 * @method string getRole() Obtain [Multi-person Interaction] Role.
Player: a user who can operate the application via keyboard, mouse, etc.
Viewer: a user who can only watch the video in the room but cannot operate the application.
 * @method void setRole(string $Role) Set [Multi-person Interaction] Role.
Player: a user who can operate the application via keyboard, mouse, etc.
Viewer: a user who can only watch the video in the room but cannot operate the application.
 */
class CreateSessionRequest extends AbstractModel
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
     * @var string Client-side session information, which is obtained from the SDK. If `RunMode` is `RunWithoutClient`, this parameter can be empty.
     */
    public $ClientSession;

    /**
     * @var string On-cloud running mode.RunWithoutClient: Keeps the application running on the cloud even when there are no client connections.Empty string (default): Keeps the application running on the cloud only when there are client connections.
     */
    public $RunMode;

    /**
     * @var string Application startup parameters.This parameter is effective for multi-application projects.
This parameter is effective for single-application projects with prelaunch disabled.This parameter is ineffective for single-application projects with prelaunch enabled.
Note: When this parameter is effective, it will be appended to the startup parameters of application or project configuration in the console.
For example, for a single-application project with prelaunch disabled, if its startup parameter `bar` is `0` for project configuration in the console and the `ApplicationParameters` parameter `foo` is `1`, the actual application startup parameters will be `bar=0 and foo=1`.
     */
    public $ApplicationParameters;

    /**
     * @var string [Multi-person Interaction] Homeowner's user ID, which is required in multi-person interaction mode.
If the user is the homeowner, HostUserID must be the same as UserID.
If the user is not the homeowner, HostUserID must be the homeowner's HostUserID.
     */
    public $HostUserId;

    /**
     * @var string [Multi-person Interaction] Role.
Player: a user who can operate the application via keyboard, mouse, etc.
Viewer: a user who can only watch the video in the room but cannot operate the application.
     */
    public $Role;

    /**
     * @param string $UserId Unique user ID, which is customized by you and is not parsed by CAR. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
     * @param string $UserIp Public IP address of the user's client, which is used for nearby scheduling.
     * @param string $ClientSession Client-side session information, which is obtained from the SDK. If `RunMode` is `RunWithoutClient`, this parameter can be empty.
     * @param string $RunMode On-cloud running mode.RunWithoutClient: Keeps the application running on the cloud even when there are no client connections.Empty string (default): Keeps the application running on the cloud only when there are client connections.
     * @param string $ApplicationParameters Application startup parameters.This parameter is effective for multi-application projects.
This parameter is effective for single-application projects with prelaunch disabled.This parameter is ineffective for single-application projects with prelaunch enabled.
Note: When this parameter is effective, it will be appended to the startup parameters of application or project configuration in the console.
For example, for a single-application project with prelaunch disabled, if its startup parameter `bar` is `0` for project configuration in the console and the `ApplicationParameters` parameter `foo` is `1`, the actual application startup parameters will be `bar=0 and foo=1`.
     * @param string $HostUserId [Multi-person Interaction] Homeowner's user ID, which is required in multi-person interaction mode.
If the user is the homeowner, HostUserID must be the same as UserID.
If the user is not the homeowner, HostUserID must be the homeowner's HostUserID.
     * @param string $Role [Multi-person Interaction] Role.
Player: a user who can operate the application via keyboard, mouse, etc.
Viewer: a user who can only watch the video in the room but cannot operate the application.
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

        if (array_key_exists("ClientSession",$param) and $param["ClientSession"] !== null) {
            $this->ClientSession = $param["ClientSession"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ApplicationParameters",$param) and $param["ApplicationParameters"] !== null) {
            $this->ApplicationParameters = $param["ApplicationParameters"];
        }

        if (array_key_exists("HostUserId",$param) and $param["HostUserId"] !== null) {
            $this->HostUserId = $param["HostUserId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
