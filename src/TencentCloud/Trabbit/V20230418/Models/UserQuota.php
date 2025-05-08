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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Number of users quota.
 *
 * @method integer getMaxUser() Obtain Maximum number of users.
 * @method void setMaxUser(integer $MaxUser) Set Maximum number of users.
 * @method integer getUsedUser() Obtain Used number of users.
 * @method void setUsedUser(integer $UsedUser) Set Used number of users.
 */
class UserQuota extends AbstractModel
{
    /**
     * @var integer Maximum number of users.
     */
    public $MaxUser;

    /**
     * @var integer Used number of users.
     */
    public $UsedUser;

    /**
     * @param integer $MaxUser Maximum number of users.
     * @param integer $UsedUser Used number of users.
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
