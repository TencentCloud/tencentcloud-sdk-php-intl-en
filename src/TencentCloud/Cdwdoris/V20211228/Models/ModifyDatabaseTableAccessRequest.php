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
 * ModifyDatabaseTableAccess request structure.
 *
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method array getPrivileges() Obtain Permission list
 * @method void setPrivileges(array $Privileges) Set Permission list
 * @method string getGrantOrRevoke() Obtain Operation type: GRANT or REVOKE
 * @method void setGrantOrRevoke(string $GrantOrRevoke) Set Operation type: GRANT or REVOKE
 * @method string getInstanceId() Obtain InstanceId
 * @method void setInstanceId(string $InstanceId) Set InstanceId
 * @method string getTable() Obtain Table name. If it is null, it indicates that the entire database is authorized.
 * @method void setTable(string $Table) Set Table name. If it is null, it indicates that the entire database is authorized.
 * @method string getRole() Obtain Role name, if authorized to the role
 * @method void setRole(string $Role) Set Role name, if authorized to the role
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getCatalogName() Obtain Catalog name, defaults to internal if not specified.
 * @method void setCatalogName(string $CatalogName) Set Catalog name, defaults to internal if not specified.
 * @method string getWhiteHost() Obtain Machine Group, defaults to % if not specified.
 * @method void setWhiteHost(string $WhiteHost) Set Machine Group, defaults to % if not specified.
 */
class ModifyDatabaseTableAccessRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var array Permission list
     */
    public $Privileges;

    /**
     * @var string Operation type: GRANT or REVOKE
     */
    public $GrantOrRevoke;

    /**
     * @var string InstanceId
     */
    public $InstanceId;

    /**
     * @var string Table name. If it is null, it indicates that the entire database is authorized.
     */
    public $Table;

    /**
     * @var string Role name, if authorized to the role
     */
    public $Role;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var string Catalog name, defaults to internal if not specified.
     */
    public $CatalogName;

    /**
     * @var string Machine Group, defaults to % if not specified.
     */
    public $WhiteHost;

    /**
     * @param string $Database Database name
     * @param array $Privileges Permission list
     * @param string $GrantOrRevoke Operation type: GRANT or REVOKE
     * @param string $InstanceId InstanceId
     * @param string $Table Table name. If it is null, it indicates that the entire database is authorized.
     * @param string $Role Role name, if authorized to the role
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $CatalogName Catalog name, defaults to internal if not specified.
     * @param string $WhiteHost Machine Group, defaults to % if not specified.
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

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }

        if (array_key_exists("GrantOrRevoke",$param) and $param["GrantOrRevoke"] !== null) {
            $this->GrantOrRevoke = $param["GrantOrRevoke"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }
    }
}
