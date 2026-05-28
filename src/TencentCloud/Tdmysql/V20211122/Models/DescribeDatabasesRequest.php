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
 * DescribeDatabases request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, such as tdsql3-ow7t8lmc.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, such as tdsql3-ow7t8lmc.</p>
 * @method integer getOffset() Obtain <p>Pagination index</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination index</p>
 * @method integer getLimit() Obtain <p>Number of items per page</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page</p>
 * @method string getDatabaseRegexp() Obtain <p>Database name matching expression</p>
 * @method void setDatabaseRegexp(string $DatabaseRegexp) Set <p>Database name matching expression</p>
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, such as tdsql3-ow7t8lmc.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Pagination index</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page</p>
     */
    public $Limit;

    /**
     * @var string <p>Database name matching expression</p>
     */
    public $DatabaseRegexp;

    /**
     * @param string $InstanceId <p>Instance ID, such as tdsql3-ow7t8lmc.</p>
     * @param integer $Offset <p>Pagination index</p>
     * @param integer $Limit <p>Number of items per page</p>
     * @param string $DatabaseRegexp <p>Database name matching expression</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DatabaseRegexp",$param) and $param["DatabaseRegexp"] !== null) {
            $this->DatabaseRegexp = $param["DatabaseRegexp"];
        }
    }
}
