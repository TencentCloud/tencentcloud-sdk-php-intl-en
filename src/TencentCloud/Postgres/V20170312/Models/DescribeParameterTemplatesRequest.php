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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParameterTemplates request structure.
 *
 * @method array getFilters() Obtain Filter criteria currently supported: TemplateName, TemplateId, DBMajorVersion, DBEngine. fuzzy matching is not supported for TemplateName.
 * @method void setFilters(array $Filters) Set Filter criteria currently supported: TemplateName, TemplateId, DBMajorVersion, DBEngine. fuzzy matching is not supported for TemplateName.
 * @method integer getLimit() Obtain The maximum number of results returned per page. Value range: 0-100. Default: `20`.
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Value range: 0-100. Default: `20`.
 * @method integer getOffset() Obtain Data offset
 * @method void setOffset(integer $Offset) Set Data offset
 * @method string getOrderBy() Obtain Sorting metric, enumeration value, supports: CreateTime, TemplateName, DBMajorVersion. if this parameter is not set, it defaults to sorting by the parameter template number in reverse order, which means that newly added parameter templates appear at the top.
 * @method void setOrderBy(string $OrderBy) Set Sorting metric, enumeration value, supports: CreateTime, TemplateName, DBMajorVersion. if this parameter is not set, it defaults to sorting by the parameter template number in reverse order, which means that newly added parameter templates appear at the top.
 * @method string getOrderByType() Obtain Sorting method, enumeration value, supports: `asc` (ascending) and `desc` (descending). the default value is `asc`. when OrderBy is not specified, this parameter becomes invalid, at which point the sorting method follows the default sorting order provided in the OrderBy parameter description.
 * @method void setOrderByType(string $OrderByType) Set Sorting method, enumeration value, supports: `asc` (ascending) and `desc` (descending). the default value is `asc`. when OrderBy is not specified, this parameter becomes invalid, at which point the sorting method follows the default sorting order provided in the OrderBy parameter description.
 */
class DescribeParameterTemplatesRequest extends AbstractModel
{
    /**
     * @var array Filter criteria currently supported: TemplateName, TemplateId, DBMajorVersion, DBEngine. fuzzy matching is not supported for TemplateName.
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
     * @var string Sorting metric, enumeration value, supports: CreateTime, TemplateName, DBMajorVersion. if this parameter is not set, it defaults to sorting by the parameter template number in reverse order, which means that newly added parameter templates appear at the top.
     */
    public $OrderBy;

    /**
     * @var string Sorting method, enumeration value, supports: `asc` (ascending) and `desc` (descending). the default value is `asc`. when OrderBy is not specified, this parameter becomes invalid, at which point the sorting method follows the default sorting order provided in the OrderBy parameter description.
     */
    public $OrderByType;

    /**
     * @param array $Filters Filter criteria currently supported: TemplateName, TemplateId, DBMajorVersion, DBEngine. fuzzy matching is not supported for TemplateName.
     * @param integer $Limit The maximum number of results returned per page. Value range: 0-100. Default: `20`.
     * @param integer $Offset Data offset
     * @param string $OrderBy Sorting metric, enumeration value, supports: CreateTime, TemplateName, DBMajorVersion. if this parameter is not set, it defaults to sorting by the parameter template number in reverse order, which means that newly added parameter templates appear at the top.
     * @param string $OrderByType Sorting method, enumeration value, supports: `asc` (ascending) and `desc` (descending). the default value is `asc`. when OrderBy is not specified, this parameter becomes invalid, at which point the sorting method follows the default sorting order provided in the OrderBy parameter description.
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
