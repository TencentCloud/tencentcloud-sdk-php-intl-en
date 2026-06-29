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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGlossaryEntries request structure.
 *
 * @method string getGlossaryId() Obtain Termbase ID. Obtain through the API DescribeGlossaries.
 * @method void setGlossaryId(string $GlossaryId) Set Termbase ID. Obtain through the API DescribeGlossaries.
 * @method integer getPage() Obtain Page number. Default is 1.
 * @method void setPage(integer $Page) Set Page number. Default is 1.
 * @method integer getPageSize() Obtain Size per page. The default value is 20, and the maximum value is 200.
 * @method void setPageSize(integer $PageSize) Set Size per page. The default value is 20, and the maximum value is 200.
 */
class DescribeGlossaryEntriesRequest extends AbstractModel
{
    /**
     * @var string Termbase ID. Obtain through the API DescribeGlossaries.
     */
    public $GlossaryId;

    /**
     * @var integer Page number. Default is 1.
     */
    public $Page;

    /**
     * @var integer Size per page. The default value is 20, and the maximum value is 200.
     */
    public $PageSize;

    /**
     * @param string $GlossaryId Termbase ID. Obtain through the API DescribeGlossaries.
     * @param integer $Page Page number. Default is 1.
     * @param integer $PageSize Size per page. The default value is 20, and the maximum value is 200.
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
        if (array_key_exists("GlossaryId",$param) and $param["GlossaryId"] !== null) {
            $this->GlossaryId = $param["GlossaryId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
