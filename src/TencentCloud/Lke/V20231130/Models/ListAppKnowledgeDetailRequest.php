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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAppKnowledgeDetail request structure.
 *
 * @method integer getPageNumber() Obtain Page number.
 * @method void setPageNumber(integer $PageNumber) Set Page number.
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 * @method array getAppBizIds() Obtain Application ID list.
 * @method void setAppBizIds(array $AppBizIds) Set Application ID list.
 */
class ListAppKnowledgeDetailRequest extends AbstractModel
{
    /**
     * @var integer Page number.
     */
    public $PageNumber;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @var array Application ID list.
     */
    public $AppBizIds;

    /**
     * @param integer $PageNumber Page number.
     * @param integer $PageSize Page size.
     * @param array $AppBizIds Application ID list.
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

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }
    }
}
