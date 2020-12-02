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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PostgreSQL for Serverless instance account description
 *
 * @method string getDBUser() Obtain Username
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBUser(string $DBUser) Set Username
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDBPassword() Obtain Password
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBPassword(string $DBPassword) Set Password
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDBConnLimit() Obtain The maximum number of connections
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBConnLimit(integer $DBConnLimit) Set The maximum number of connections
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ServerlessDBAccount extends AbstractModel
{
    /**
     * @var string Username
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBUser;

    /**
     * @var string Password
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBPassword;

    /**
     * @var integer The maximum number of connections
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBConnLimit;

    /**
     * @param string $DBUser Username
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DBPassword Password
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DBConnLimit The maximum number of connections
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("DBUser",$param) and $param["DBUser"] !== null) {
            $this->DBUser = $param["DBUser"];
        }

        if (array_key_exists("DBPassword",$param) and $param["DBPassword"] !== null) {
            $this->DBPassword = $param["DBPassword"];
        }

        if (array_key_exists("DBConnLimit",$param) and $param["DBConnLimit"] !== null) {
            $this->DBConnLimit = $param["DBConnLimit"];
        }
    }
}
