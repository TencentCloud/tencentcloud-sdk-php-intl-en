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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationMemberAuthIdentities request structure.
 *
 * @method integer getOffset() Obtain Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
 * @method integer getLimit() Obtain Limit, which defaults to `10`. Value range: 1-50.
 * @method void setLimit(integer $Limit) Set Limit, which defaults to `10`. Value range: 1-50.
 * @method integer getMemberUin() Obtain Organization member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Organization member UIN.
 */
class DescribeOrganizationMemberAuthIdentitiesRequest extends AbstractModel
{
    /**
     * @var integer Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Limit, which defaults to `10`. Value range: 1-50.
     */
    public $Limit;

    /**
     * @var integer Organization member UIN.
     */
    public $MemberUin;

    /**
     * @param integer $Offset Offset, which is an integer multiple of the value of `Limit`. Default value: `0`.
     * @param integer $Limit Limit, which defaults to `10`. Value range: 1-50.
     * @param integer $MemberUin Organization member UIN.
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

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }
    }
}
