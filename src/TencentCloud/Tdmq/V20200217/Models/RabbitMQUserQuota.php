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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ instance user quota information.
 *
 * @method integer getMaxUser() Obtain Maximum creation number of users.
 * @method void setMaxUser(integer $MaxUser) Set Maximum creation number of users.
 * @method integer getUsedUser() Obtain Indicates the number of users in use.
 * @method void setUsedUser(integer $UsedUser) Set Indicates the number of users in use.
 */
class RabbitMQUserQuota extends AbstractModel
{
    /**
     * @var integer Maximum creation number of users.
     */
    public $MaxUser;

    /**
     * @var integer Indicates the number of users in use.
     */
    public $UsedUser;

    /**
     * @param integer $MaxUser Maximum creation number of users.
     * @param integer $UsedUser Indicates the number of users in use.
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
        if (array_key_exists("MaxUser",$param) and $param["MaxUser"] !== null) {
            $this->MaxUser = $param["MaxUser"];
        }

        if (array_key_exists("UsedUser",$param) and $param["UsedUser"] !== null) {
            $this->UsedUser = $param["UsedUser"];
        }
    }
}
