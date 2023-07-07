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
 * DescribeAccountPrivileges request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getAccountName() Obtain Account name
 * @method void setAccountName(string $AccountName) Set Account name
 * @method string getHost() Obtain Host
 * @method void setHost(string $Host) Set Host
 * @method string getDb() Obtain When the database name is “*”, the value specified in `Type` and `TableName` will be ignored, indicating that the user's global permissions are being modified.
 * @method void setDb(string $Db) Set When the database name is “*”, the value specified in `Type` and `TableName` will be ignored, indicating that the user's global permissions are being modified.
 * @method string getType() Obtain Object type in a specified database. Valid values: `table`, `*`.
 * @method void setType(string $Type) Set Object type in a specified database. Valid values: `table`, `*`.
 * @method string getTableName() Obtain The database name can be specified when `Type` is 'table'.
 * @method void setTableName(string $TableName) Set The database name can be specified when `Type` is 'table'.
 */
class DescribeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Account name
     */
    public $AccountName;

    /**
     * @var string Host
     */
    public $Host;

    /**
     * @var string When the database name is “*”, the value specified in `Type` and `TableName` will be ignored, indicating that the user's global permissions are being modified.
     */
    public $Db;

    /**
     * @var string Object type in a specified database. Valid values: `table`, `*`.
     */
    public $Type;

    /**
     * @var string The database name can be specified when `Type` is 'table'.
     */
    public $TableName;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $AccountName Account name
     * @param string $Host Host
     * @param string $Db When the database name is “*”, the value specified in `Type` and `TableName` will be ignored, indicating that the user's global permissions are being modified.
     * @param string $Type Object type in a specified database. Valid values: `table`, `*`.
     * @param string $TableName The database name can be specified when `Type` is 'table'.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
