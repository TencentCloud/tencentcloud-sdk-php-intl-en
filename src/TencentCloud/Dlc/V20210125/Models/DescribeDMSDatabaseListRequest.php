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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDMSDatabaseList request structure.
 *
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getSchemaName() Obtain Schema name
 * @method void setSchemaName(string $SchemaName) Set Schema name
 * @method string getPattern() Obtain Match rules
 * @method void setPattern(string $Pattern) Set Match rules
 * @method integer getLimit() Obtain Pagination parameters, indicating the size of a single page.
 * @method void setLimit(integer $Limit) Set Pagination parameters, indicating the size of a single page.
 * @method integer getOffset() Obtain Pagination parameters
 * @method void setOffset(integer $Offset) Set Pagination parameters
 * @method string getSort() Obtain Sorting fields
 * @method void setSort(string $Sort) Set Sorting fields
 * @method boolean getAsc() Obtain Sorting fields: true for ascending order; false for descending order
 * @method void setAsc(boolean $Asc) Set Sorting fields: true for ascending order; false for descending order
 */
class DescribeDMSDatabaseListRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Schema name
     */
    public $SchemaName;

    /**
     * @var string Match rules
     */
    public $Pattern;

    /**
     * @var integer Pagination parameters, indicating the size of a single page.
     */
    public $Limit;

    /**
     * @var integer Pagination parameters
     */
    public $Offset;

    /**
     * @var string Sorting fields
     */
    public $Sort;

    /**
     * @var boolean Sorting fields: true for ascending order; false for descending order
     */
    public $Asc;

    /**
     * @param string $Name Database name
     * @param string $SchemaName Schema name
     * @param string $Pattern Match rules
     * @param integer $Limit Pagination parameters, indicating the size of a single page.
     * @param integer $Offset Pagination parameters
     * @param string $Sort Sorting fields
     * @param boolean $Asc Sorting fields: true for ascending order; false for descending order
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
