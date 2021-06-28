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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Function permission information
 *
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method array getPrivileges() Obtain Permission information
 * @method void setPrivileges(array $Privileges) Set Permission information
 */
class FunctionPrivilege extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var array Permission information
     */
    public $Privileges;

    /**
     * @param string $Database Database name
     * @param string $FunctionName Function name
     * @param array $Privileges Permission information
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
