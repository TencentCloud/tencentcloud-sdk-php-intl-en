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
 * DescribeQASummaryList request structure.
 *
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 * @method array getFilterList() Obtain <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): Status-QA status, enumeration value, exact match; CategoryId-category ID, exact match; SourceType-QA source type, enumeration value, exact match; EffectiveDomain-application scope, exact match; DocId-associated document ID, exact match; CreateTime-creation time, Unix seconds, BETWEEN passes [start second, end second]; UpdateTime-update time, Unix seconds, BETWEEN passes [start second, end second]</p>
 * @method void setFilterList(array $FilterList) Set <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): Status-QA status, enumeration value, exact match; CategoryId-category ID, exact match; SourceType-QA source type, enumeration value, exact match; EffectiveDomain-application scope, exact match; DocId-associated document ID, exact match; CreateTime-creation time, Unix seconds, BETWEEN passes [start second, end second]; UpdateTime-update time, Unix seconds, BETWEEN passes [start second, end second]</p>
 * @method integer getPageNumber() Obtain <p>Page number for pagination, starting from 0.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number for pagination, starting from 0.</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Default 10, maximum 100</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Default 10, maximum 100</p>
 * @method QAQuery getQuery() Obtain <p>Query condition (keyword + query scope)</p>
 * @method void setQuery(QAQuery $Query) Set <p>Query condition (keyword + query scope)</p>
 * @method SummaryListSwitch getSummaryListSwitch() Obtain <p>Switch configuration</p>
 * @method void setSummaryListSwitch(SummaryListSwitch $SummaryListSwitch) Set <p>Switch configuration</p>
 */
class DescribeQASummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @var array <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): Status-QA status, enumeration value, exact match; CategoryId-category ID, exact match; SourceType-QA source type, enumeration value, exact match; EffectiveDomain-application scope, exact match; DocId-associated document ID, exact match; CreateTime-creation time, Unix seconds, BETWEEN passes [start second, end second]; UpdateTime-update time, Unix seconds, BETWEEN passes [start second, end second]</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Page number for pagination, starting from 0.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Default 10, maximum 100</p>
     */
    public $PageSize;

    /**
     * @var QAQuery <p>Query condition (keyword + query scope)</p>
     */
    public $Query;

    /**
     * @var SummaryListSwitch <p>Switch configuration</p>
     */
    public $SummaryListSwitch;

    /**
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
     * @param array $FilterList <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): Status-QA status, enumeration value, exact match; CategoryId-category ID, exact match; SourceType-QA source type, enumeration value, exact match; EffectiveDomain-application scope, exact match; DocId-associated document ID, exact match; CreateTime-creation time, Unix seconds, BETWEEN passes [start second, end second]; UpdateTime-update time, Unix seconds, BETWEEN passes [start second, end second]</p>
     * @param integer $PageNumber <p>Page number for pagination, starting from 0.</p>
     * @param integer $PageSize <p>Number of items per page. Default 10, maximum 100</p>
     * @param QAQuery $Query <p>Query condition (keyword + query scope)</p>
     * @param SummaryListSwitch $SummaryListSwitch <p>Switch configuration</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = new QAQuery();
            $this->Query->deserialize($param["Query"]);
        }

        if (array_key_exists("SummaryListSwitch",$param) and $param["SummaryListSwitch"] !== null) {
            $this->SummaryListSwitch = new SummaryListSwitch();
            $this->SummaryListSwitch->deserialize($param["SummaryListSwitch"]);
        }
    }
}
