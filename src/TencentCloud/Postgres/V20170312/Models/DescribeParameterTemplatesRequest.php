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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParameterTemplates request structure.
 *
 * @method array getFilters() Obtain Filter conditions. Valid values: `TemplateName`, `TemplateId`, `DBMajorVersion`, `DBEngine`.
 * @method void setFilters(array $Filters) Set Filter conditions. Valid values: `TemplateName`, `TemplateId`, `DBMajorVersion`, `DBEngine`.
 * @method integer getLimit() Obtain The maximum number of results returned per page. Value range: 0-100. Default: `20`.
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Value range: 0-100. Default: `20`.
 * @method integer getOffset() Obtain Data offset
 * @method void setOffset(integer $Offset) Set Data offset
 * @method string getOrderBy() Obtain Sorting metric. Valid values: `CreateTime`, `TemplateName`, `DBMajorVersion`.
 * @method void setOrderBy(string $OrderBy) Set Sorting metric. Valid values: `CreateTime`, `TemplateName`, `DBMajorVersion`.
 * @method string getOrderByType() Obtain Sorting order. Valid values: `asc` (ascending order),`desc` (descending order).
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: `asc` (ascending order),`desc` (descending order).
 */
class DescribeParameterTemplatesRequest extends AbstractModel
{
    /**
     * @var array Filter conditions. Valid values: `TemplateName`, `TemplateId`, `DBMajorVersion`, `DBEngine`.
     */
    public $Filters;

    /**
     * @var integer The maximum number of results returned per page. Value range: 0-100. Default: `20`.
     */
    public $Limit;

    /**
     * @var integer Data offset
     */
    public $Offset;

    /**
     * @var string Sorting metric. Valid values: `CreateTime`, `TemplateName`, `DBMajorVersion`.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `asc` (ascending order),`desc` (descending order).
     */
    public $OrderByType;

    /**
     * @param array $Filters Filter conditions. Valid values: `TemplateName`, `TemplateId`, `DBMajorVersion`, `DBEngine`.
     * @param integer $Limit The maximum number of results returned per page. Value range: 0-100. Default: `20`.
     * @param integer $Offset Data offset
     * @param string $OrderBy Sorting metric. Valid values: `CreateTime`, `TemplateName`, `DBMajorVersion`.
     * @param string $OrderByType Sorting order. Valid values: `asc` (ascending order),`desc` (descending order).
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
