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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReleaseList request structure.
 *
 * @method string getAppId() Obtain Application ID
 * @method void setAppId(string $AppId) Set Application ID
 * @method integer getPageNumber() Obtain Page number, starting from 0.
 * @method void setPageNumber(integer $PageNumber) Set Page number, starting from 0.
 * @method integer getPageSize() Obtain Number of items per page. Maximum: 100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. Maximum: 100.
 */
class DescribeReleaseListRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $AppId;

    /**
     * @var integer Page number, starting from 0.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. Maximum: 100.
     */
    public $PageSize;

    /**
     * @param string $AppId Application ID
     * @param integer $PageNumber Page number, starting from 0.
     * @param integer $PageSize Number of items per page. Maximum: 100.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
