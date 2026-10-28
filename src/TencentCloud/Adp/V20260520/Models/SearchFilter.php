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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Search filter
 *
 * @method integer getFilterType() Obtain <p>Search filter type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>User-customized tag value</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>User-customized tag value ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>Retrieve by specified document ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>Retrieve by specified document classification ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>Retrieve by specified database table ID</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>Specified knowledge base schema ID</td></tr></tbody></table></p>
 * @method void setFilterType(integer $FilterType) Set <p>Search filter type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>User-customized tag value</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>User-customized tag value ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>Retrieve by specified document ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>Retrieve by specified document classification ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>Retrieve by specified database table ID</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>Specified knowledge base schema ID</td></tr></tbody></table></p>
 * @method array getFilterValueList() Obtain <p>Filter value list. According to SearchFilterType, take value 1: pass a custom tag value; 2: pass a custom tag value ID; 3: pass a document ID; 4: pass a category ID</p>
 * @method void setFilterValueList(array $FilterValueList) Set <p>Filter value list. According to SearchFilterType, take value 1: pass a custom tag value; 2: pass a custom tag value ID; 3: pass a document ID; 4: pass a category ID</p>
 * @method string getLabelId() Obtain <p>User-customized tag ID</p>
 * @method void setLabelId(string $LabelId) Set <p>User-customized tag ID</p>
 * @method integer getLogicOp() Obtain <p>Logical operator: AND or OR<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
 * @method void setLogicOp(integer $LogicOp) Set <p>Logical operator: AND or OR<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
 * @method array getSearchFilterList() Obtain <p>Nested search filter</p>
 * @method void setSearchFilterList(array $SearchFilterList) Set <p>Nested search filter</p>
 */
class SearchFilter extends AbstractModel
{
    /**
     * @var integer <p>Search filter type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>User-customized tag value</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>User-customized tag value ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>Retrieve by specified document ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>Retrieve by specified document classification ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>Retrieve by specified database table ID</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>Specified knowledge base schema ID</td></tr></tbody></table></p>
     */
    public $FilterType;

    /**
     * @var array <p>Filter value list. According to SearchFilterType, take value 1: pass a custom tag value; 2: pass a custom tag value ID; 3: pass a document ID; 4: pass a category ID</p>
     */
    public $FilterValueList;

    /**
     * @var string <p>User-customized tag ID</p>
     */
    public $LabelId;

    /**
     * @var integer <p>Logical operator: AND or OR<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
     */
    public $LogicOp;

    /**
     * @var array <p>Nested search filter</p>
     */
    public $SearchFilterList;

    /**
     * @param integer $FilterType <p>Search filter type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>User-customized tag value</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>User-customized tag value ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>Retrieve by specified document ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>Retrieve by specified document classification ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>Retrieve by specified database table ID</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>Specified knowledge base schema ID</td></tr></tbody></table></p>
     * @param array $FilterValueList <p>Filter value list. According to SearchFilterType, take value 1: pass a custom tag value; 2: pass a custom tag value ID; 3: pass a document ID; 4: pass a category ID</p>
     * @param string $LabelId <p>User-customized tag ID</p>
     * @param integer $LogicOp <p>Logical operator: AND or OR<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
     * @param array $SearchFilterList <p>Nested search filter</p>
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("FilterValueList",$param) and $param["FilterValueList"] !== null) {
            $this->FilterValueList = $param["FilterValueList"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LogicOp",$param) and $param["LogicOp"] !== null) {
            $this->LogicOp = $param["LogicOp"];
        }

        if (array_key_exists("SearchFilterList",$param) and $param["SearchFilterList"] !== null) {
            $this->SearchFilterList = [];
            foreach ($param["SearchFilterList"] as $key => $value){
                $obj = new SearchFilter();
                $obj->deserialize($value);
                array_push($this->SearchFilterList, $obj);
            }
        }
    }
}
