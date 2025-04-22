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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Error log details
 *
 * @method string getUserName() Obtain Username.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabase() Obtain Database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set Database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorTime() Obtain The time an error was reported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorTime(string $ErrorTime) Set The time an error was reported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Error message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Error message.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ErrorLogDetail extends AbstractModel
{
    /**
     * @var string Username.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Database.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var string The time an error was reported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorTime;

    /**
     * @var string Error message.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @param string $UserName Username.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Database Database.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorTime The time an error was reported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Error message.
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("ErrorTime",$param) and $param["ErrorTime"] !== null) {
            $this->ErrorTime = $param["ErrorTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
