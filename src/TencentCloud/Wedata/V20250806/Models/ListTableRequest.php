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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTable request structure.
 *
 * @method integer getPageNumber() Obtain Page number, starting from 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number, starting from 1.
 * @method integer getPageSize() Obtain Pagination size. maximum 500.
 * @method void setPageSize(integer $PageSize) Set Pagination size. maximum 500.
 * @method string getCatalogName() Obtain Directory name.
 * @method void setCatalogName(string $CatalogName) Set Directory name.
 * @method integer getDatasourceId() Obtain Data source ID.
 * @method void setDatasourceId(integer $DatasourceId) Set Data source ID.
 * @method string getDatabaseName() Obtain Database name.
 * @method void setDatabaseName(string $DatabaseName) Set Database name.
 * @method string getSchemaName() Obtain Schema name.
 * @method void setSchemaName(string $SchemaName) Set Schema name.
 * @method string getKeyword() Obtain Search keywords table.
 * @method void setKeyword(string $Keyword) Set Search keywords table.
 */
class ListTableRequest extends AbstractModel
{
    /**
     * @var integer Page number, starting from 1.
     */
    public $PageNumber;

    /**
     * @var integer Pagination size. maximum 500.
     */
    public $PageSize;

    /**
     * @var string Directory name.
     */
    public $CatalogName;

    /**
     * @var integer Data source ID.
     */
    public $DatasourceId;

    /**
     * @var string Database name.
     */
    public $DatabaseName;

    /**
     * @var string Schema name.
     */
    public $SchemaName;

    /**
     * @var string Search keywords table.
     */
    public $Keyword;

    /**
     * @param integer $PageNumber Page number, starting from 1.
     * @param integer $PageSize Pagination size. maximum 500.
     * @param string $CatalogName Directory name.
     * @param integer $DatasourceId Data source ID.
     * @param string $DatabaseName Database name.
     * @param string $SchemaName Schema name.
     * @param string $Keyword Search keywords table.
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
