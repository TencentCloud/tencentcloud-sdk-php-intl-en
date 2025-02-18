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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectList request structure.
 *
 * @method integer getPageSize() Obtain The maximum number of projects returned per page. the default value is 10 if it is not filled in.
 * @method void setPageSize(integer $PageSize) Set The maximum number of projects returned per page. the default value is 10 if it is not filled in.
 * @method integer getPageNumber() Obtain The current page number. the default value is 1 (homepage) if it is not filled in.
 * @method void setPageNumber(integer $PageNumber) Set The current page number. the default value is 1 (homepage) if it is not filled in.
 */
class DescribeProjectListRequest extends AbstractModel
{
    /**
     * @var integer The maximum number of projects returned per page. the default value is 10 if it is not filled in.
     */
    public $PageSize;

    /**
     * @var integer The current page number. the default value is 1 (homepage) if it is not filled in.
     */
    public $PageNumber;

    /**
     * @param integer $PageSize The maximum number of projects returned per page. the default value is 10 if it is not filled in.
     * @param integer $PageNumber The current page number. the default value is 1 (homepage) if it is not filled in.
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
