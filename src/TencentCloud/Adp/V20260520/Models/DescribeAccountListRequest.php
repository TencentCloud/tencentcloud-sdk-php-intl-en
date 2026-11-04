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
 * DescribeAccountList request structure.
 *
 * @method integer getPageNumber() Obtain <p>Page number</p><p>Starts from 0</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number</p><p>Starts from 0</p>
 * @method integer getPageSize() Obtain <p>Pagination quantity</p><p>Value range: [1, 100]</p><p>Unit: count</p><p>Maximum: 100</p>
 * @method void setPageSize(integer $PageSize) Set <p>Pagination quantity</p><p>Value range: [1, 100]</p><p>Unit: count</p><p>Maximum: 100</p>
 * @method array getFilterList() Obtain <p>Parameter filtering</p><p>Supports filter queries by SpaceId and NIckName</p>
 * @method void setFilterList(array $FilterList) Set <p>Parameter filtering</p><p>Supports filter queries by SpaceId and NIckName</p>
 */
class DescribeAccountListRequest extends AbstractModel
{
    /**
     * @var integer <p>Page number</p><p>Starts from 0</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Pagination quantity</p><p>Value range: [1, 100]</p><p>Unit: count</p><p>Maximum: 100</p>
     */
    public $PageSize;

    /**
     * @var array <p>Parameter filtering</p><p>Supports filter queries by SpaceId and NIckName</p>
     */
    public $FilterList;

    /**
     * @param integer $PageNumber <p>Page number</p><p>Starts from 0</p>
     * @param integer $PageSize <p>Pagination quantity</p><p>Value range: [1, 100]</p><p>Unit: count</p><p>Maximum: 100</p>
     * @param array $FilterList <p>Parameter filtering</p><p>Supports filter queries by SpaceId and NIckName</p>
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
