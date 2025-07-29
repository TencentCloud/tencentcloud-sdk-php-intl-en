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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabases request structure.
 *
 * @method Database getDatabase() Obtain Database parameter.
 * @method void setDatabase(Database $Database) Set Database parameter.
 * @method integer getPageSize() Obtain Pagination size.
 * @method void setPageSize(integer $PageSize) Set Pagination size.
 * @method integer getPageNumber() Obtain Pagination page.
 * @method void setPageNumber(integer $PageNumber) Set Pagination page.
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var Database Database parameter.
     */
    public $Database;

    /**
     * @var integer Pagination size.
     */
    public $PageSize;

    /**
     * @var integer Pagination page.
     */
    public $PageNumber;

    /**
     * @param Database $Database Database parameter.
     * @param integer $PageSize Pagination size.
     * @param integer $PageNumber Pagination page.
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
            $this->Database = new Database();
            $this->Database->deserialize($param["Database"]);
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
