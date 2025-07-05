<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent running mode
 *
 * @method string getScene() Obtain Scenario type. Windows is supported
 * @method void setScene(string $Scene) Set Scenario type. Windows is supported
 * @method string getUser() Obtain The user that runs the Agent
 * @method void setUser(string $User) Set The user that runs the Agent
 * @method string getSession() Obtain The session that runs the Agent
 * @method void setSession(string $Session) Set The session that runs the Agent
 */
class AgentRunningMode extends AbstractModel
{
    /**
     * @var string Scenario type. Windows is supported
     */
    public $Scene;

    /**
     * @var string The user that runs the Agent
     */
    public $User;

    /**
     * @var string The session that runs the Agent
     */
    public $Session;

    /**
     * @param string $Scene Scenario type. Windows is supported
     * @param string $User The user that runs the Agent
     * @param string $Session The session that runs the Agent
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Session",$param) and $param["Session"] !== null) {
            $this->Session = $param["Session"];
        }
    }
}
