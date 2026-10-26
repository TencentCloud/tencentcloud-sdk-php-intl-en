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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryForbidPlayChannelList request structure.
 *
 * @method string getUserId() Obtain Sub-user uin, which can also be the root user uin.
 * @method void setUserId(string $UserId) Set Sub-user uin, which can also be the root user uin.
 * @method integer getPageSize() Obtain Maximum number of items per page. Maximum value: 200. If the number of items exceeds 200, 200 items are returned.
 * @method void setPageSize(integer $PageSize) Set Maximum number of items per page. Maximum value: 200. If the number of items exceeds 200, 200 items are returned.
 * @method integer getPageNumber() Obtain Which page.
 * @method void setPageNumber(integer $PageNumber) Set Which page.
 */
class QueryForbidPlayChannelListRequest extends AbstractModel
{
    /**
     * @var string Sub-user uin, which can also be the root user uin.
     */
    public $UserId;

    /**
     * @var integer Maximum number of items per page. Maximum value: 200. If the number of items exceeds 200, 200 items are returned.
     */
    public $PageSize;

    /**
     * @var integer Which page.
     */
    public $PageNumber;

    /**
     * @param string $UserId Sub-user uin, which can also be the root user uin.
     * @param integer $PageSize Maximum number of items per page. Maximum value: 200. If the number of items exceeds 200, 200 items are returned.
     * @param integer $PageNumber Which page.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
