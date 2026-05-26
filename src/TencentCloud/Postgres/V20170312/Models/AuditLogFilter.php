<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Audit log filter criteria
 *
 * @method integer getAffectRows() Obtain <p>Impact function</p>
 * @method void setAffectRows(integer $AffectRows) Set <p>Impact function</p>
 * @method array getDBName() Obtain <p>Database name</p>
 * @method void setDBName(array $DBName) Set <p>Database name</p>
 * @method integer getExecTime() Obtain <p>Execution time</p>
 * @method void setExecTime(integer $ExecTime) Set <p>Execution time</p>
 * @method array getHost() Obtain <p>Host</p>
 * @method void setHost(array $Host) Set <p>Host</p>
 * @method string getSql() Obtain <p>sql statement</p>
 * @method void setSql(string $Sql) Set <p>sql statement</p>
 * @method array getUser() Obtain <p>Login name</p>
 * @method void setUser(array $User) Set <p>Login name</p>
 * @method array getSqlType() Obtain <p>Audit type</p>
 * @method void setSqlType(array $SqlType) Set <p>Audit type</p>
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var integer <p>Impact function</p>
     */
    public $AffectRows;

    /**
     * @var array <p>Database name</p>
     */
    public $DBName;

    /**
     * @var integer <p>Execution time</p>
     */
    public $ExecTime;

    /**
     * @var array <p>Host</p>
     */
    public $Host;

    /**
     * @var string <p>sql statement</p>
     */
    public $Sql;

    /**
     * @var array <p>Login name</p>
     */
    public $User;

    /**
     * @var array <p>Audit type</p>
     */
    public $SqlType;

    /**
     * @param integer $AffectRows <p>Impact function</p>
     * @param array $DBName <p>Database name</p>
     * @param integer $ExecTime <p>Execution time</p>
     * @param array $Host <p>Host</p>
     * @param string $Sql <p>sql statement</p>
     * @param array $User <p>Login name</p>
     * @param array $SqlType <p>Audit type</p>
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
        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }
    }
}
