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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibraDBClusterAccountPrivileges request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getAccountName() Obtain Account name.
 * @method void setAccountName(string $AccountName) Set Account name.
 * @method string getHost() Obtain host name
 * @method void setHost(string $Host) Set host name
 * @method string getDb() Obtain Database name
 * @method void setDb(string $Db) Set Database name
 * @method string getType() Obtain Type.
 * @method void setType(string $Type) Set Type.
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 */
class DescribeLibraDBClusterAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Account name.
     */
    public $AccountName;

    /**
     * @var string host name
     */
    public $Host;

    /**
     * @var string Database name
     */
    public $Db;

    /**
     * @var string Type.
     */
    public $Type;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $AccountName Account name.
     * @param string $Host host name
     * @param string $Db Database name
     * @param string $Type Type.
     * @param string $TableName Table name
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
