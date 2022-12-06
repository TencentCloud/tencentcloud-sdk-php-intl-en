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
 * DescribeParamTemplates request structure.
 *
 * @method array getEngineVersions() Obtain Database engine version number
 * @method void setEngineVersions(array $EngineVersions) Set Database engine version number
 * @method array getTemplateNames() Obtain Template name
 * @method void setTemplateNames(array $TemplateNames) Set Template name
 * @method array getTemplateIds() Obtain Template ID
 * @method void setTemplateIds(array $TemplateIds) Set Template ID
 * @method array getDbModes() Obtain Database Type. Valid values: `NORMAL`, `SERVERLESS`.
 * @method void setDbModes(array $DbModes) Set Database Type. Valid values: `NORMAL`, `SERVERLESS`.
 * @method integer getOffset() Obtain Offset for query
 * @method void setOffset(integer $Offset) Set Offset for query
 * @method integer getLimit() Obtain Limit on queries
 * @method void setLimit(integer $Limit) Set Limit on queries
 * @method array getProducts() Obtain Product type of the queried template
 * @method void setProducts(array $Products) Set Product type of the queried template
 * @method array getTemplateTypes() Obtain Template type
 * @method void setTemplateTypes(array $TemplateTypes) Set Template type
 * @method array getEngineTypes() Obtain Version type
 * @method void setEngineTypes(array $EngineTypes) Set Version type
 * @method string getOrderBy() Obtain The sorting order of the returned results
 * @method void setOrderBy(string $OrderBy) Set The sorting order of the returned results
 * @method string getOrderDirection() Obtain Sorting order. Valid values: `desc`, `asc `.
 * @method void setOrderDirection(string $OrderDirection) Set Sorting order. Valid values: `desc`, `asc `.
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array Database engine version number
     */
    public $EngineVersions;

    /**
     * @var array Template name
     */
    public $TemplateNames;

    /**
     * @var array Template ID
     */
    public $TemplateIds;

    /**
     * @var array Database Type. Valid values: `NORMAL`, `SERVERLESS`.
     */
    public $DbModes;

    /**
     * @var integer Offset for query
     */
    public $Offset;

    /**
     * @var integer Limit on queries
     */
    public $Limit;

    /**
     * @var array Product type of the queried template
     */
    public $Products;

    /**
     * @var array Template type
     */
    public $TemplateTypes;

    /**
     * @var array Version type
     */
    public $EngineTypes;

    /**
     * @var string The sorting order of the returned results
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `desc`, `asc `.
     */
    public $OrderDirection;

    /**
     * @param array $EngineVersions Database engine version number
     * @param array $TemplateNames Template name
     * @param array $TemplateIds Template ID
     * @param array $DbModes Database Type. Valid values: `NORMAL`, `SERVERLESS`.
     * @param integer $Offset Offset for query
     * @param integer $Limit Limit on queries
     * @param array $Products Product type of the queried template
     * @param array $TemplateTypes Template type
     * @param array $EngineTypes Version type
     * @param string $OrderBy The sorting order of the returned results
     * @param string $OrderDirection Sorting order. Valid values: `desc`, `asc `.
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
        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("TemplateNames",$param) and $param["TemplateNames"] !== null) {
            $this->TemplateNames = $param["TemplateNames"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }

        if (array_key_exists("DbModes",$param) and $param["DbModes"] !== null) {
            $this->DbModes = $param["DbModes"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Products",$param) and $param["Products"] !== null) {
            $this->Products = $param["Products"];
        }

        if (array_key_exists("TemplateTypes",$param) and $param["TemplateTypes"] !== null) {
            $this->TemplateTypes = $param["TemplateTypes"];
        }

        if (array_key_exists("EngineTypes",$param) and $param["EngineTypes"] !== null) {
            $this->EngineTypes = $param["EngineTypes"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
