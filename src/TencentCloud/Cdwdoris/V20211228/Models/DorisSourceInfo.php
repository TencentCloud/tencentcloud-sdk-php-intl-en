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
 * Connection information of external Doris clusters
 *
 * @method string getHost() Obtain The IP address of fe in the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHost(string $Host) Set The IP address of fe in the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain The fe port number of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set The fe port number of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain Account of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set Account of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain Password of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set Password of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DorisSourceInfo extends AbstractModel
{
    /**
     * @var string The IP address of fe in the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Host;

    /**
     * @var integer The fe port number of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Account of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @var string Password of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @param string $Host The IP address of fe in the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port The fe port number of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $User Account of the Doris cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Password Password of the Doris cluster
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
