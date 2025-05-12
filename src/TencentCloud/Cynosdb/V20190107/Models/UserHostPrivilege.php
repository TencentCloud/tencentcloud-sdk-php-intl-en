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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User host permissions
 *
 * @method string getDbUserName() Obtain Authorized user
 * @method void setDbUserName(string $DbUserName) Set Authorized user
 * @method string getDbHost() Obtain Client IP
 * @method void setDbHost(string $DbHost) Set Client IP
 * @method string getDbPrivilege() Obtain User permission
 * @method void setDbPrivilege(string $DbPrivilege) Set User permission
 */
class UserHostPrivilege extends AbstractModel
{
    /**
     * @var string Authorized user
     */
    public $DbUserName;

    /**
     * @var string Client IP
     */
    public $DbHost;

    /**
     * @var string User permission
     */
    public $DbPrivilege;

    /**
     * @param string $DbUserName Authorized user
     * @param string $DbHost Client IP
     * @param string $DbPrivilege User permission
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
        if (array_key_exists("DbUserName",$param) and $param["DbUserName"] !== null) {
            $this->DbUserName = $param["DbUserName"];
        }

        if (array_key_exists("DbHost",$param) and $param["DbHost"] !== null) {
            $this->DbHost = $param["DbHost"];
        }

        if (array_key_exists("DbPrivilege",$param) and $param["DbPrivilege"] !== null) {
            $this->DbPrivilege = $param["DbPrivilege"];
        }
    }
}
