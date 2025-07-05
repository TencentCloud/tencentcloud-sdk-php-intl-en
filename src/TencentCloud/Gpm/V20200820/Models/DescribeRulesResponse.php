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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRules response structure.
 *
 * @method array getRuleInfoList() Obtain Rule information list
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRuleInfoList(array $RuleInfoList) Set Rule information list
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getTotalCount() Obtain Total number of results
 * @method void setTotalCount(integer $TotalCount) Set Total number of results
 * @method integer getPageNumber() Obtain The current page number
 * @method void setPageNumber(integer $PageNumber) Set The current page number
 * @method integer getPageSize() Obtain Number of rules per page
 * @method void setPageSize(integer $PageSize) Set Number of rules per page
 * @method string getSearchType() Obtain Query type (optional). Valid values: matchName (query by match name), matchCode (query by matchCode), ruleName (query by rule name), and tag (query by tag key/value)
 * @method void setSearchType(string $SearchType) Set Query type (optional). Valid values: matchName (query by match name), matchCode (query by matchCode), ruleName (query by rule name), and tag (query by tag key/value)
 * @method string getKeyword() Obtain Keyword for querying (optional)
 * @method void setKeyword(string $Keyword) Set Keyword for querying (optional)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRulesResponse extends AbstractModel
{
    /**
     * @var array Rule information list
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $RuleInfoList;

    /**
     * @var integer Total number of results
     */
    public $TotalCount;

    /**
     * @var integer The current page number
     */
    public $PageNumber;

    /**
     * @var integer Number of rules per page
     */
    public $PageSize;

    /**
     * @var string Query type (optional). Valid values: matchName (query by match name), matchCode (query by matchCode), ruleName (query by rule name), and tag (query by tag key/value)
     */
    public $SearchType;

    /**
     * @var string Keyword for querying (optional)
     */
    public $Keyword;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $RuleInfoList Rule information list
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $TotalCount Total number of results
     * @param integer $PageNumber The current page number
     * @param integer $PageSize Number of rules per page
     * @param string $SearchType Query type (optional). Valid values: matchName (query by match name), matchCode (query by matchCode), ruleName (query by rule name), and tag (query by tag key/value)
     * @param string $Keyword Keyword for querying (optional)
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("RuleInfoList",$param) and $param["RuleInfoList"] !== null) {
            $this->RuleInfoList = [];
            foreach ($param["RuleInfoList"] as $key => $value){
                $obj = new RuleBriefInfo();
                $obj->deserialize($value);
                array_push($this->RuleInfoList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
