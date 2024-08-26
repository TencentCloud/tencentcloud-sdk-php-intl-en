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
 * User information bound to the resource group requires username and host information for authorization.
 *
 * @method string getUserName() Obtain Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHost() Obtain Host information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHost(string $Host) Set Host information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BindUser extends AbstractModel
{
    /**
     * @var string Username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Host information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Host;

    /**
     * @param string $UserName Username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Host Host information
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
