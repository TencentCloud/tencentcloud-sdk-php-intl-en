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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pagination request parameters
 *
 * @method integer getPerPage() Obtain Number of items per page.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPerPage(integer $PerPage) Set Number of items per page.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPageNo() Obtain Page number, starting from 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNo(string $PageNo) Set Page number, starting from 1.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PageByNoParams extends AbstractModel
{
    /**
     * @var integer Number of items per page.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PerPage;

    /**
     * @var string Page number, starting from 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNo;

    /**
     * @param integer $PerPage Number of items per page.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PageNo Page number, starting from 1.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }
    }
}
