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
 * DescribeAgentReleasePreviewList request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method integer getPageNumber() Obtain <p>Page number.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number.</p>
 * @method integer getPageSize() Obtain <p>Number of items per page: between 1 and 200</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page: between 1 and 200</p>
 * @method string getQuery() Obtain <p>Query keyword, used for fuzzy matching of heading</p>
 * @method void setQuery(string $Query) Set <p>Query keyword, used for fuzzy matching of heading</p>
 * @method array getFilterList() Obtain <p>Filter criteria</p><p>Input parameter limits: supports StartTime, EndTime, ActionList, ReleaseStatusList</p>
 * @method void setFilterList(array $FilterList) Set <p>Filter criteria</p><p>Input parameter limits: supports StartTime, EndTime, ActionList, ReleaseStatusList</p>
 */
class DescribeAgentReleasePreviewListRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var integer <p>Page number.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page: between 1 and 200</p>
     */
    public $PageSize;

    /**
     * @var string <p>Query keyword, used for fuzzy matching of heading</p>
     */
    public $Query;

    /**
     * @var array <p>Filter criteria</p><p>Input parameter limits: supports StartTime, EndTime, ActionList, ReleaseStatusList</p>
     */
    public $FilterList;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param integer $PageNumber <p>Page number.</p>
     * @param integer $PageSize <p>Number of items per page: between 1 and 200</p>
     * @param string $Query <p>Query keyword, used for fuzzy matching of heading</p>
     * @param array $FilterList <p>Filter criteria</p><p>Input parameter limits: supports StartTime, EndTime, ActionList, ReleaseStatusList</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
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

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
