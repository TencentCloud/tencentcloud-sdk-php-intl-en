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
 * DescribeCategoryList request structure.
 *
 * @method string getKbId() Obtain <p>Associated knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Associated knowledge base ID</p>
 * @method array getFilterList() Obtain <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): CategoryType - classification type, enumeration value, exact match (CATEGORY_TYPE_DOC=1/CATEGORY_TYPE_QA=2); ParentCategoryId - parent category ID, exact match</p>
 * @method void setFilterList(array $FilterList) Set <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): CategoryType - classification type, enumeration value, exact match (CATEGORY_TYPE_DOC=1/CATEGORY_TYPE_QA=2); ParentCategoryId - parent category ID, exact match</p>
 * @method integer getPageNumber() Obtain <p>Pagination page number, starting from 0</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Pagination page number, starting from 0</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Default: 10. Maximum: 100</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Default: 10. Maximum: 100</p>
 * @method string getQuery() Obtain <p>Keyword search</p>
 * @method void setQuery(string $Query) Set <p>Keyword search</p>
 * @method SummaryListSwitch getSummaryListSwitch() Obtain <p>Switch configuration</p>
 * @method void setSummaryListSwitch(SummaryListSwitch $SummaryListSwitch) Set <p>Switch configuration</p>
 */
class DescribeCategoryListRequest extends AbstractModel
{
    /**
     * @var string <p>Associated knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var array <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): CategoryType - classification type, enumeration value, exact match (CATEGORY_TYPE_DOC=1/CATEGORY_TYPE_QA=2); ParentCategoryId - parent category ID, exact match</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Pagination page number, starting from 0</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Default: 10. Maximum: 100</p>
     */
    public $PageSize;

    /**
     * @var string <p>Keyword search</p>
     */
    public $Query;

    /**
     * @var SummaryListSwitch <p>Switch configuration</p>
     */
    public $SummaryListSwitch;

    /**
     * @param string $KbId <p>Associated knowledge base ID</p>
     * @param array $FilterList <p>Filter criteria (multiple Filters are in an AND relationship, and multiple Values of the same Filter are in an OR relationship): CategoryType - classification type, enumeration value, exact match (CATEGORY_TYPE_DOC=1/CATEGORY_TYPE_QA=2); ParentCategoryId - parent category ID, exact match</p>
     * @param integer $PageNumber <p>Pagination page number, starting from 0</p>
     * @param integer $PageSize <p>Number of items per page. Default: 10. Maximum: 100</p>
     * @param string $Query <p>Keyword search</p>
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
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SummaryListSwitch",$param) and $param["SummaryListSwitch"] !== null) {
            $this->SummaryListSwitch = new SummaryListSwitch();
            $this->SummaryListSwitch->deserialize($param["SummaryListSwitch"]);
        }
    }
}
