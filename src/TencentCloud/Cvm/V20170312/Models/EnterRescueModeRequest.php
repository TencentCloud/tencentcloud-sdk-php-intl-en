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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnterRescueMode request structure.
 *
 * @method string getInstanceId() Obtain Instance ID Needs to Enter Rescue Mode
 * @method void setInstanceId(string $InstanceId) Set Instance ID Needs to Enter Rescue Mode
 * @method string getPassword() Obtain System Password in Rescue Mode
 * @method void setPassword(string $Password) Set System Password in Rescue Mode
 * @method string getUsername() Obtain System Username in Rescue Mode
 * @method void setUsername(string $Username) Set System Username in Rescue Mode
 * @method boolean getForceStop() Obtain Whether to perform forced shutdown.
 * @method void setForceStop(boolean $ForceStop) Set Whether to perform forced shutdown.
 */
class EnterRescueModeRequest extends AbstractModel
{
    /**
     * @var string Instance ID Needs to Enter Rescue Mode
     */
    public $InstanceId;

    /**
     * @var string System Password in Rescue Mode
     */
    public $Password;

    /**
     * @var string System Username in Rescue Mode
     */
    public $Username;

    /**
     * @var boolean Whether to perform forced shutdown.
     */
    public $ForceStop;

    /**
     * @param string $InstanceId Instance ID Needs to Enter Rescue Mode
     * @param string $Password System Password in Rescue Mode
     * @param string $Username System Username in Rescue Mode
     * @param boolean $ForceStop Whether to perform forced shutdown.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
