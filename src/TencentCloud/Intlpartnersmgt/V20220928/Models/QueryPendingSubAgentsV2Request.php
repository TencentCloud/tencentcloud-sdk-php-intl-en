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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryPendingSubAgentsV2 request structure.
 *
 * @method integer getPage() Obtain Page number. starts from 1.
 * @method void setPage(integer $Page) Set Page number. starts from 1.
 * @method integer getPageSize() Obtain Specifies the number of items per page. value range: supports up to 100.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of items per page. value range: supports up to 100.
 */
class QueryPendingSubAgentsV2Request extends AbstractModel
{
    /**
     * @var integer Page number. starts from 1.
     */
    public $Page;

    /**
     * @var integer Specifies the number of items per page. value range: supports up to 100.
     */
    public $PageSize;

    /**
     * @param integer $Page Page number. starts from 1.
     * @param integer $PageSize Specifies the number of items per page. value range: supports up to 100.
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
