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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseObjects request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, such as tdsql3-42f40429.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, such as tdsql3-42f40429.</p>
 * @method string getDbName() Obtain <p>Database name, obtained via the DescribeDatabases API.</p>
 * @method void setDbName(string $DbName) Set <p>Database name, obtained via the DescribeDatabases API.</p>
 * @method integer getOffset() Obtain <p>Pagination index</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination index</p>
 * @method integer getLimit() Obtain <p>Number of items per page</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page</p>
 * @method string getTableRegexp() Obtain <p>Table name matching expression</p>
 * @method void setTableRegexp(string $TableRegexp) Set <p>Table name matching expression</p>
 */
class DescribeDatabaseObjectsRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, such as tdsql3-42f40429.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Database name, obtained via the DescribeDatabases API.</p>
     */
    public $DbName;

    /**
     * @var integer <p>Pagination index</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page</p>
     */
    public $Limit;

    /**
     * @var string <p>Table name matching expression</p>
     */
    public $TableRegexp;

    /**
     * @param string $InstanceId <p>Instance ID, such as tdsql3-42f40429.</p>
     * @param string $DbName <p>Database name, obtained via the DescribeDatabases API.</p>
     * @param integer $Offset <p>Pagination index</p>
     * @param integer $Limit <p>Number of items per page</p>
     * @param string $TableRegexp <p>Table name matching expression</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TableRegexp",$param) and $param["TableRegexp"] !== null) {
            $this->TableRegexp = $param["TableRegexp"];
        }
    }
}
