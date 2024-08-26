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
 * DescribeOrganizationMemberPolicies request structure.
 *
 * @method integer getOffset() Obtain Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method integer getLimit() Obtain Limit. Value range: 1-50. Default value: 10.
 * @method void setLimit(integer $Limit) Set Limit. Value range: 1-50. Default value: 10.
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method string getSearchKey() Obtain Search keyword, which can be the policy name or description.
 * @method void setSearchKey(string $SearchKey) Set Search keyword, which can be the policy name or description.
 */
class DescribeOrganizationMemberPoliciesRequest extends AbstractModel
{
    /**
     * @var integer Offset. Its value must be an integer multiple of the limit. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Limit. Value range: 1-50. Default value: 10.
     */
    public $Limit;

    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var string Search keyword, which can be the policy name or description.
     */
    public $SearchKey;

    /**
     * @param integer $Offset Offset. Its value must be an integer multiple of the limit. Default value: 0.
     * @param integer $Limit Limit. Value range: 1-50. Default value: 10.
     * @param integer $MemberUin Member UIN.
     * @param string $SearchKey Search keyword, which can be the policy name or description.
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

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
