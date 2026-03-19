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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListNonCompliantResource request structure.
 *
 * @method integer getMaxResults() Obtain Limit. Value range: 1–50.
 * @method void setMaxResults(integer $MaxResults) Set Limit. Value range: 1–50.
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method string getPaginationToken() Obtain Token value obtained from the previous page response.
If it is the first request, set to empty.
 * @method void setPaginationToken(string $PaginationToken) Set Token value obtained from the previous page response.
If it is the first request, set to empty.
 * @method string getTagKey() Obtain Tag key.
 * @method void setTagKey(string $TagKey) Set Tag key.
 */
class ListNonCompliantResourceRequest extends AbstractModel
{
    /**
     * @var integer Limit. Value range: 1–50.
     */
    public $MaxResults;

    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var string Token value obtained from the previous page response.
If it is the first request, set to empty.
     */
    public $PaginationToken;

    /**
     * @var string Tag key.
     */
    public $TagKey;

    /**
     * @param integer $MaxResults Limit. Value range: 1–50.
     * @param integer $MemberUin Member UIN.
     * @param string $PaginationToken Token value obtained from the previous page response.
If it is the first request, set to empty.
     * @param string $TagKey Tag key.
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("PaginationToken",$param) and $param["PaginationToken"] !== null) {
            $this->PaginationToken = $param["PaginationToken"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }
    }
}
