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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset. 
 * @method void setOffset(integer $Offset) Set Pagination offset. 
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method string getPlatformId() Obtain Platform ID.
 * @method void setPlatformId(string $PlatformId) Set Platform ID.
 * @method string getKeyword() Obtain Search keyword (username or account).
 * @method void setKeyword(string $Keyword) Set Search keyword (username or account).
 * @method integer getAccountType() Obtain User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned. 
 * @method void setAccountType(integer $AccountType) Set User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned. 
 * @method string getTeamId() Obtain Team ID. If left empty, all teams are returned.
 * @method void setTeamId(string $TeamId) Set Team ID. If left empty, all teams are returned.
 */
class DescribeUserListRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset. 
     */
    public $Offset;

    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @var string Platform ID.
     */
    public $PlatformId;

    /**
     * @var string Search keyword (username or account).
     */
    public $Keyword;

    /**
     * @var integer User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned. 
     */
    public $AccountType;

    /**
     * @var string Team ID. If left empty, all teams are returned.
     */
    public $TeamId;

    /**
     * @param integer $Offset Pagination offset. 
     * @param integer $Limit Number of entries per page.
     * @param string $PlatformId Platform ID.
     * @param string $Keyword Search keyword (username or account).
     * @param integer $AccountType User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned. 
     * @param string $TeamId Team ID. If left empty, all teams are returned.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }
    }
}
