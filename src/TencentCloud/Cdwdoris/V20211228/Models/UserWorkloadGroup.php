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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource group information bound to the user
 *
 * @method string getUserName() Obtain test
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set test
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkloadGroupName() Obtain normal
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkloadGroupName(string $WorkloadGroupName) Set normal
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserWorkloadGroup extends AbstractModel
{
    /**
     * @var string test
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string normal
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkloadGroupName;

    /**
     * @param string $UserName test
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkloadGroupName normal
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("WorkloadGroupName",$param) and $param["WorkloadGroupName"] !== null) {
            $this->WorkloadGroupName = $param["WorkloadGroupName"];
        }
    }
}
