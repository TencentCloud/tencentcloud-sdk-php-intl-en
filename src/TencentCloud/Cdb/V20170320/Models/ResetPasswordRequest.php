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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetPassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
 * @method string getUser() Obtain Instance account name with manually refreshed rotation password, such as root
 * @method void setUser(string $User) Set Instance account name with manually refreshed rotation password, such as root
 * @method string getHost() Obtain Manually refresh the domain name of the instance account with a rotated password, such as %
 * @method void setHost(string $Host) Set Manually refresh the domain name of the instance account with a rotated password, such as %
 */
class ResetPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var string Instance account name with manually refreshed rotation password, such as root
     */
    public $User;

    /**
     * @var string Manually refresh the domain name of the instance account with a rotated password, such as %
     */
    public $Host;

    /**
     * @param string $InstanceId Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
     * @param string $User Instance account name with manually refreshed rotation password, such as root
     * @param string $Host Manually refresh the domain name of the instance account with a rotated password, such as %
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
