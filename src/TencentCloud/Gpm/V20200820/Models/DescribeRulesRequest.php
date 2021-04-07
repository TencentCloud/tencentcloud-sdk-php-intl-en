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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRules request structure.
 *
 * @method integer getPageNumber() Obtain The current page number. The first page will be returned if this parameter is left empty.
 * @method void setPageNumber(integer $PageNumber) Set The current page number. The first page will be returned if this parameter is left empty.
 * @method integer getPageSize() Obtain The number of rules per page. If this parameter is left empty, 30 rules are displayed per page by default. Maximum value: 30
 * @method void setPageSize(integer $PageSize) Set The number of rules per page. If this parameter is left empty, 30 rules are displayed per page by default. Maximum value: 30
 * @method string getSearchType() Obtain Query type (optional). Valid values: match (query by matchCode or matchName), rule (query by ruleCode or ruleName), and other types (not filtered)
 * @method void setSearchType(string $SearchType) Set Query type (optional). Valid values: match (query by matchCode or matchName), rule (query by ruleCode or ruleName), and other types (not filtered)
 * @method string getKeyword() Obtain Keyword. Enter a keyword about SearchType to query.
 * @method void setKeyword(string $Keyword) Set Keyword. Enter a keyword about SearchType to query.
 * @method array getTags() Obtain Tags. Enter a tag for querying.
 * @method void setTags(array $Tags) Set Tags. Enter a tag for querying.
 */
class DescribeRulesRequest extends AbstractModel
{
    /**
     * @var integer The current page number. The first page will be returned if this parameter is left empty.
     */
    public $PageNumber;

    /**
     * @var integer The number of rules per page. If this parameter is left empty, 30 rules are displayed per page by default. Maximum value: 30
     */
    public $PageSize;

    /**
     * @var string Query type (optional). Valid values: match (query by matchCode or matchName), rule (query by ruleCode or ruleName), and other types (not filtered)
     */
    public $SearchType;

    /**
     * @var string Keyword. Enter a keyword about SearchType to query.
     */
    public $Keyword;

    /**
     * @var array Tags. Enter a tag for querying.
     */
    public $Tags;

    /**
     * @param integer $PageNumber The current page number. The first page will be returned if this parameter is left empty.
     * @param integer $PageSize The number of rules per page. If this parameter is left empty, 30 rules are displayed per page by default. Maximum value: 30
     * @param string $SearchType Query type (optional). Valid values: match (query by matchCode or matchName), rule (query by ruleCode or ruleName), and other types (not filtered)
     * @param string $Keyword Keyword. Enter a keyword about SearchType to query.
     * @param array $Tags Tags. Enter a tag for querying.
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

        if (array_key_exists("SearchType",$param) and $param["SearchType"] !== null) {
            $this->SearchType = $param["SearchType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
