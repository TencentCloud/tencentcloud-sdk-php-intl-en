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
 * Stored procedure permission information
 *
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getProcedure() Obtain Stored procedure name
 * @method void setProcedure(string $Procedure) Set Stored procedure name
 * @method array getPrivileges() Obtain Permission information
 * @method void setPrivileges(array $Privileges) Set Permission information
 */
class ProcedurePrivilege extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var string Stored procedure name
     */
    public $Procedure;

    /**
     * @var array Permission information
     */
    public $Privileges;

    /**
     * @param string $Database Database name
     * @param string $Procedure Stored procedure name
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

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
