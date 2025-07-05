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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned user entity
 *
 * @method array getUsers() Obtain List of eligible users
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsers(array $Users) Set List of eligible users
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of eligible users
 * @method void setTotalCount(integer $TotalCount) Set Total number of eligible users
 */
class UserResponse extends AbstractModel
{
    /**
     * @var array List of eligible users
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Users;

    /**
     * @var integer Total number of eligible users
     */
    public $TotalCount;

    /**
     * @param array $Users List of eligible users
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of eligible users
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
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
