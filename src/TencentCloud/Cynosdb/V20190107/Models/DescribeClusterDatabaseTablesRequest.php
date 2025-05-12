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
 * DescribeClusterDatabaseTables request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getDb() Obtain Database name
 * @method void setDb(string $Db) Set Database name
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Number
 * @method void setLimit(integer $Limit) Set Number
 * @method string getTableType() Obtain Specifies the table type.
Specifies that "view" only returns the view, "base_table" only returns the basic table, and "all" returns both the view and the table. the default value is all.
 * @method void setTableType(string $TableType) Set Specifies the table type.
Specifies that "view" only returns the view, "base_table" only returns the basic table, and "all" returns both the view and the table. the default value is all.
 */
class DescribeClusterDatabaseTablesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Database name
     */
    public $Db;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Number
     */
    public $Limit;

    /**
     * @var string Specifies the table type.
Specifies that "view" only returns the view, "base_table" only returns the basic table, and "all" returns both the view and the table. the default value is all.
     */
    public $TableType;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $Db Database name
     * @param integer $Offset Offset
     * @param integer $Limit Number
     * @param string $TableType Specifies the table type.
Specifies that "view" only returns the view, "base_table" only returns the basic table, and "all" returns both the view and the table. the default value is all.
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

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }
    }
}
