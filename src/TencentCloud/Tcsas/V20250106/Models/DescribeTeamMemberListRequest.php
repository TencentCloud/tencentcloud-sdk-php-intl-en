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
 * DescribeTeamMemberList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method string getPlatformId() Obtain Platform ID.
 * @method void setPlatformId(string $PlatformId) Set Platform ID.
 * @method string getTeamId() Obtain Team ID.
 * @method void setTeamId(string $TeamId) Set Team ID.
 * @method string getKeyword() Obtain Search keyword (user name).
 * @method void setKeyword(string $Keyword) Set Search keyword (user name).
 * @method array getRoleIds() Obtain Role ID.
 * @method void setRoleIds(array $RoleIds) Set Role ID.
 */
class DescribeTeamMemberListRequest extends AbstractModel
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
     * @var string Team ID.
     */
    public $TeamId;

    /**
     * @var string Search keyword (user name).
     */
    public $Keyword;

    /**
     * @var array Role ID.
     */
    public $RoleIds;

    /**
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Number of entries per page.
     * @param string $PlatformId Platform ID.
     * @param string $TeamId Team ID.
     * @param string $Keyword Search keyword (user name).
     * @param array $RoleIds Role ID.
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

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
