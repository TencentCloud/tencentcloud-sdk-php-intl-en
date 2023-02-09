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
 * @method string getUserId() Obtain The user’s unique ID. Tencent Cloud does not parse the ID. You need to manage your own user IDs. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
 * @method void setUserId(string $UserId) Set The user’s unique ID. Tencent Cloud does not parse the ID. You need to manage your own user IDs. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
 * @method string getUserIp() Obtain Public IP of user’s application client, which is used for nearby scheduling.
 * @method void setUserIp(string $UserIp) Set Public IP of user’s application client, which is used for nearby scheduling.
 * @method string getClientSession() Obtain The client-side session data, which is obtained from the SDK.
 * @method void setClientSession(string $ClientSession) Set The client-side session data, which is obtained from the SDK.
 * @method string getRunMode() Obtain The on-cloud running mode.
`RunWithoutClient`: Keep the application running on the cloud even when there are no client connections.
Empty string (default): Keep the application running on the cloud only when there are client connections.
 * @method void setRunMode(string $RunMode) Set The on-cloud running mode.
`RunWithoutClient`: Keep the application running on the cloud even when there are no client connections.
Empty string (default): Keep the application running on the cloud only when there are client connections.
 */
class CreateSessionRequest extends AbstractModel
{
    /**
     * @var string The user’s unique ID. Tencent Cloud does not parse the ID. You need to manage your own user IDs. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
     */
    public $UserId;

    /**
     * @var string Public IP of user’s application client, which is used for nearby scheduling.
     */
    public $UserIp;

    /**
     * @var string The client-side session data, which is obtained from the SDK.
     */
    public $ClientSession;

    /**
     * @var string The on-cloud running mode.
`RunWithoutClient`: Keep the application running on the cloud even when there are no client connections.
Empty string (default): Keep the application running on the cloud only when there are client connections.
     */
    public $RunMode;

    /**
     * @param string $UserId The user’s unique ID. Tencent Cloud does not parse the ID. You need to manage your own user IDs. Based on your needs, you can either define unique IDs for users or use timestamps to generate random IDs. Make sure the same ID is used when a user reconnects to your application.
     * @param string $UserIp Public IP of user’s application client, which is used for nearby scheduling.
     * @param string $ClientSession The client-side session data, which is obtained from the SDK.
     * @param string $RunMode The on-cloud running mode.
`RunWithoutClient`: Keep the application running on the cloud even when there are no client connections.
Empty string (default): Keep the application running on the cloud only when there are client connections.
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
    }
}
