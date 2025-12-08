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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibraries request structure.
 *
 * @method array getLibraryIds() Obtain Specifies one or more media library ids for querying, with a maximum of 100 per request.
 * @method void setLibraryIds(array $LibraryIds) Set Specifies one or more media library ids for querying, with a maximum of 100 per request.
 * @method integer getPageNumber() Obtain Page number, int, used in conjunction with PageSize. default value is 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number, int, used in conjunction with PageSize. default value is 1.
 * @method integer getPageSize() Obtain Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
 */
class DescribeLibrariesRequest extends AbstractModel
{
    /**
     * @var array Specifies one or more media library ids for querying, with a maximum of 100 per request.
     */
    public $LibraryIds;

    /**
     * @var integer Page number, int, used in conjunction with PageSize. default value is 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
     */
    public $PageSize;

    /**
     * @param array $LibraryIds Specifies one or more media library ids for querying, with a maximum of 100 per request.
     * @param integer $PageNumber Page number, int, used in conjunction with PageSize. default value is 1.
     * @param integer $PageSize Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
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
        if (array_key_exists("LibraryIds",$param) and $param["LibraryIds"] !== null) {
            $this->LibraryIds = $param["LibraryIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
