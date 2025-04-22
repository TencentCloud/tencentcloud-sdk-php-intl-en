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
 * user_config
 *
 * @method string getType() Obtain Type.
 * @method void setType(string $Type) Set Type.
 * @method string getDatabase() Obtain Database.
 * @method void setDatabase(string $Database) Set Database.
 * @method string getUser() Obtain User.
 * @method void setUser(string $User) Set User.
 * @method string getAddress() Obtain IP address.
 * @method void setAddress(string $Address) Set IP address.
 * @method string getMethod() Obtain Method.
 * @method void setMethod(string $Method) Set Method.
 * @method string getMask() Obtain Indicates whether to perform overwriting.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMask(string $Mask) Set Indicates whether to perform overwriting.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HbaConfig extends AbstractModel
{
    /**
     * @var string Type.
     */
    public $Type;

    /**
     * @var string Database.
     */
    public $Database;

    /**
     * @var string User.
     */
    public $User;

    /**
     * @var string IP address.
     */
    public $Address;

    /**
     * @var string Method.
     */
    public $Method;

    /**
     * @var string Indicates whether to perform overwriting.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mask;

    /**
     * @param string $Type Type.
     * @param string $Database Database.
     * @param string $User User.
     * @param string $Address IP address.
     * @param string $Method Method.
     * @param string $Mask Indicates whether to perform overwriting.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }
    }
}
