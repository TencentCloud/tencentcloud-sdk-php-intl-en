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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListCatalog request structure.
 *
 * @method integer getPageNumber() Obtain Page number, starting from 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number, starting from 1.
 * @method integer getPageSize() Obtain Pagination size. maximum 500.
 * @method void setPageSize(integer $PageSize) Set Pagination size. maximum 500.
 * @method string getParentCatalogId() Obtain Parent directory ID (this parameter is not supported).
 * @method void setParentCatalogId(string $ParentCatalogId) Set Parent directory ID (this parameter is not supported).
 */
class ListCatalogRequest extends AbstractModel
{
    /**
     * @var integer Page number, starting from 1.
     */
    public $PageNumber;

    /**
     * @var integer Pagination size. maximum 500.
     */
    public $PageSize;

    /**
     * @var string Parent directory ID (this parameter is not supported).
     */
    public $ParentCatalogId;

    /**
     * @param integer $PageNumber Page number, starting from 1.
     * @param integer $PageSize Pagination size. maximum 500.
     * @param string $ParentCatalogId Parent directory ID (this parameter is not supported).
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

        if (array_key_exists("ParentCatalogId",$param) and $param["ParentCatalogId"] !== null) {
            $this->ParentCatalogId = $param["ParentCatalogId"];
        }
    }
}
