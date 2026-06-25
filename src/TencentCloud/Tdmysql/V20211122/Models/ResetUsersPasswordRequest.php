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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetUsersPassword request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method array getUsers() Obtain <p>Reset user password list</p>
 * @method void setUsers(array $Users) Set <p>Reset user password list</p>
 */
class ResetUsersPasswordRequest extends AbstractModel
{
    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Reset user password list</p>
     */
    public $Users;

    /**
     * @param string $InstanceId <p>Instance id</p>
     * @param array $Users <p>Reset user password list</p>
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

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new ResetUserPasswordInfo();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }
    }
}
