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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database account permission information, which is set when the database is created
 *
 * @method string getUserName() Obtain Database username
 * @method void setUserName(string $UserName) Set Database username
 * @method string getPrivilege() Obtain Database permissions. ReadWrite: read/write, ReadOnly: read-only
 * @method void setPrivilege(string $Privilege) Set Database permissions. ReadWrite: read/write, ReadOnly: read-only
 */
class AccountPrivilege extends AbstractModel
{
    /**
     * @var string Database username
     */
    public $UserName;

    /**
     * @var string Database permissions. ReadWrite: read/write, ReadOnly: read-only
     */
    public $Privilege;

    /**
     * @param string $UserName Database username
     * @param string $Privilege Database permissions. ReadWrite: read/write, ReadOnly: read-only
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

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
