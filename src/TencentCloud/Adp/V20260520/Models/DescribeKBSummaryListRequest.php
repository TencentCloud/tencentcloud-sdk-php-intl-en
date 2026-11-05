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
 * DescribeKBSummaryList request structure.
 *
 * @method string getSpaceId() Obtain <p>Workspace ID</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Workspace ID</p>
 * @method array getFilterList() Obtain <p>Common filter</p>
 * @method void setFilterList(array $FilterList) Set <p>Common filter</p>
 * @method integer getPageNumber() Obtain <p>Page number, starting from 0</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number, starting from 0</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Default value: 10. Maximum value: 100.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Default value: 10. Maximum value: 100.</p>
 * @method string getQuery() Obtain <p>Keyword</p>
 * @method void setQuery(string $Query) Set <p>Keyword</p>
 */
class DescribeKBSummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID</p>
     */
    public $SpaceId;

    /**
     * @var array <p>Common filter</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Page number, starting from 0</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Default value: 10. Maximum value: 100.</p>
     */
    public $PageSize;

    /**
     * @var string <p>Keyword</p>
     */
    public $Query;

    /**
     * @param string $SpaceId <p>Workspace ID</p>
     * @param array $FilterList <p>Common filter</p>
     * @param integer $PageNumber <p>Page number, starting from 0</p>
     * @param integer $PageSize <p>Number of items per page. Default value: 10. Maximum value: 100.</p>
     * @param string $Query <p>Keyword</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
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
    }
}
