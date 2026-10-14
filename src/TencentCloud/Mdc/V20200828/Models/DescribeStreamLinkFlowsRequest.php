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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlows request structure.
 *
 * @method integer getPageNum() Obtain Current page number. Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Current page number. Default value: 1.
 * @method integer getPageSize() Obtain Size per page. Default value: 10.
 * @method void setPageSize(integer $PageSize) Set Size per page. Default value: 10.
 */
class DescribeStreamLinkFlowsRequest extends AbstractModel
{
    /**
     * @var integer Current page number. Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Size per page. Default value: 10.
     */
    public $PageSize;

    /**
     * @param integer $PageNum Current page number. Default value: 1.
     * @param integer $PageSize Size per page. Default value: 10.
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
