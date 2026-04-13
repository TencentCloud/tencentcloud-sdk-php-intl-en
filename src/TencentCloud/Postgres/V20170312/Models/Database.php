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
 * Describes the database detailed information, including owner and character encoding.
 *
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getDatabaseOwner() Obtain Specifies the database owner.
 * @method void setDatabaseOwner(string $DatabaseOwner) Set Specifies the database owner.
 * @method string getEncoding() Obtain Specifies the database character encoding.
 * @method void setEncoding(string $Encoding) Set Specifies the database character encoding.
 * @method string getCollate() Obtain Specifies the database sorting rule.
 * @method void setCollate(string $Collate) Set Specifies the database sorting rule.
 * @method string getCtype() Obtain Specifies the character category of the database.
 * @method void setCtype(string $Ctype) Set Specifies the character category of the database.
 * @method boolean getAllowConn() Obtain Specifies whether the database allows connections.
 * @method void setAllowConn(boolean $AllowConn) Set Specifies whether the database allows connections.
 * @method integer getConnLimit() Obtain Maximum number of connections for the database. -1 indicates unlimited.
 * @method void setConnLimit(integer $ConnLimit) Set Maximum number of connections for the database. -1 indicates unlimited.
 * @method string getPrivileges() Obtain Specifies the database permission list.
 * @method void setPrivileges(string $Privileges) Set Specifies the database permission list.
 */
class Database extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Specifies the database owner.
     */
    public $DatabaseOwner;

    /**
     * @var string Specifies the database character encoding.
     */
    public $Encoding;

    /**
     * @var string Specifies the database sorting rule.
     */
    public $Collate;

    /**
     * @var string Specifies the character category of the database.
     */
    public $Ctype;

    /**
     * @var boolean Specifies whether the database allows connections.
     */
    public $AllowConn;

    /**
     * @var integer Maximum number of connections for the database. -1 indicates unlimited.
     */
    public $ConnLimit;

    /**
     * @var string Specifies the database permission list.
     */
    public $Privileges;

    /**
     * @param string $DatabaseName Database name
     * @param string $DatabaseOwner Specifies the database owner.
     * @param string $Encoding Specifies the database character encoding.
     * @param string $Collate Specifies the database sorting rule.
     * @param string $Ctype Specifies the character category of the database.
     * @param boolean $AllowConn Specifies whether the database allows connections.
     * @param integer $ConnLimit Maximum number of connections for the database. -1 indicates unlimited.
     * @param string $Privileges Specifies the database permission list.
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseOwner",$param) and $param["DatabaseOwner"] !== null) {
            $this->DatabaseOwner = $param["DatabaseOwner"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Collate",$param) and $param["Collate"] !== null) {
            $this->Collate = $param["Collate"];
        }

        if (array_key_exists("Ctype",$param) and $param["Ctype"] !== null) {
            $this->Ctype = $param["Ctype"];
        }

        if (array_key_exists("AllowConn",$param) and $param["AllowConn"] !== null) {
            $this->AllowConn = $param["AllowConn"];
        }

        if (array_key_exists("ConnLimit",$param) and $param["ConnLimit"] !== null) {
            $this->ConnLimit = $param["ConnLimit"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
