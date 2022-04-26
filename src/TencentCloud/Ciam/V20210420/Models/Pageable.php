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
namespace TencentCloud\Ciam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pagination object
 *
 * @method integer getPageSize() Obtain Number of entries per page
 * @method void setPageSize(integer $PageSize) Set Number of entries per page
 * @method integer getPageNumber() Obtain Current page number
 * @method void setPageNumber(integer $PageNumber) Set Current page number
 */
class Pageable extends AbstractModel
{
    /**
     * @var integer Number of entries per page
     */
    public $PageSize;

    /**
     * @var integer Current page number
     */
    public $PageNumber;

    /**
     * @param integer $PageSize Number of entries per page
     * @param integer $PageNumber Current page number
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
    }
}
