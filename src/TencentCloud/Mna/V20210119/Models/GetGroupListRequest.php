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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetGroupList request structure.
 *
 * @method integer getPageSize() Obtain Number of records displayed per page. When both PageSize and PageNumber are -1, match all devices with no limit on a single page.
Example value: 10.
 * @method void setPageSize(integer $PageSize) Set Number of records displayed per page. When both PageSize and PageNumber are -1, match all devices with no limit on a single page.
Example value: 10.
 * @method integer getPageNumber() Obtain Currently viewed page number. When both PageSize and PageNumber are -1, match all devices as one page with no limit on entries.
Example value: 1.
 * @method void setPageNumber(integer $PageNumber) Set Currently viewed page number. When both PageSize and PageNumber are -1, match all devices as one page with no limit on entries.
Example value: 1.
 * @method string getKeyword() Obtain Search for groups by keyword. Match all groups when empty.
 * @method void setKeyword(string $Keyword) Set Search for groups by keyword. Match all groups when empty.
 */
class GetGroupListRequest extends AbstractModel
{
    /**
     * @var integer Number of records displayed per page. When both PageSize and PageNumber are -1, match all devices with no limit on a single page.
Example value: 10.
     */
    public $PageSize;

    /**
     * @var integer Currently viewed page number. When both PageSize and PageNumber are -1, match all devices as one page with no limit on entries.
Example value: 1.
     */
    public $PageNumber;

    /**
     * @var string Search for groups by keyword. Match all groups when empty.
     */
    public $Keyword;

    /**
     * @param integer $PageSize Number of records displayed per page. When both PageSize and PageNumber are -1, match all devices with no limit on a single page.
Example value: 10.
     * @param integer $PageNumber Currently viewed page number. When both PageSize and PageNumber are -1, match all devices as one page with no limit on entries.
Example value: 1.
     * @param string $Keyword Search for groups by keyword. Match all groups when empty.
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
