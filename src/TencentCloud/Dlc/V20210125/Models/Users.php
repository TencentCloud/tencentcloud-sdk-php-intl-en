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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection of user information
 *
 * @method array getUserSet() Obtain Collection of user information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserSet(array $UserSet) Set Collection of user information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total users
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Users extends AbstractModel
{
    /**
     * @var array Collection of user information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserSet;

    /**
     * @var integer Total users
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @param array $UserSet Collection of user information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total users
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("UserSet",$param) and $param["UserSet"] !== null) {
            $this->UserSet = [];
            foreach ($param["UserSet"] as $key => $value){
                $obj = new UserMessage();
                $obj->deserialize($value);
                array_push($this->UserSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
