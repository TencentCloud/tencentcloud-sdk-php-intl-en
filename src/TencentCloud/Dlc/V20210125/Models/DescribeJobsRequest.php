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
 * DescribeJobs request structure.
 *
 * @method string getKeyword() Obtain Query keywords
 * @method void setKeyword(string $Keyword) Set Query keywords
 * @method string getPattern() Obtain Matching mode
 * @method void setPattern(string $Pattern) Set Matching mode
 * @method integer getLimit() Obtain Pagination parameters
 * @method void setLimit(integer $Limit) Set Pagination parameters
 * @method integer getOffset() Obtain Pagination parameters
 * @method void setOffset(integer $Offset) Set Pagination parameters
 * @method string getSort() Obtain Sorting fields
 * @method void setSort(string $Sort) Set Sorting fields
 * @method boolean getAsc() Obtain Sorting fields, and true means the ascending order (by default) while false means the descending order.
 * @method void setAsc(boolean $Asc) Set Sorting fields, and true means the ascending order (by default) while false means the descending order.
 */
class DescribeJobsRequest extends AbstractModel
{
    /**
     * @var string Query keywords
     */
    public $Keyword;

    /**
     * @var string Matching mode
     */
    public $Pattern;

    /**
     * @var integer Pagination parameters
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
     * @var boolean Sorting fields, and true means the ascending order (by default) while false means the descending order.
     */
    public $Asc;

    /**
     * @param string $Keyword Query keywords
     * @param string $Pattern Matching mode
     * @param integer $Limit Pagination parameters
     * @param integer $Offset Pagination parameters
     * @param string $Sort Sorting fields
     * @param boolean $Asc Sorting fields, and true means the ascending order (by default) while false means the descending order.
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
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
