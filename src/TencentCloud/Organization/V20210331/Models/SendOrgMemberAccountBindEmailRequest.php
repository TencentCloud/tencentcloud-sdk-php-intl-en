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
 * SendOrgMemberAccountBindEmail request structure.
 *
 * @method integer getMemberUin() Obtain Member uin.
 * @method void setMemberUin(integer $MemberUin) Set Member uin.
 * @method integer getBindId() Obtain Bound ID, which can be obtained through describeorganizationmemberemailbind (https://intl.cloud.tencent.com/document/product/850/93332?from_cn_redirect=1).
 * @method void setBindId(integer $BindId) Set Bound ID, which can be obtained through describeorganizationmemberemailbind (https://intl.cloud.tencent.com/document/product/850/93332?from_cn_redirect=1).
 */
class SendOrgMemberAccountBindEmailRequest extends AbstractModel
{
    /**
     * @var integer Member uin.
     */
    public $MemberUin;

    /**
     * @var integer Bound ID, which can be obtained through describeorganizationmemberemailbind (https://intl.cloud.tencent.com/document/product/850/93332?from_cn_redirect=1).
     */
    public $BindId;

    /**
     * @param integer $MemberUin Member uin.
     * @param integer $BindId Bound ID, which can be obtained through describeorganizationmemberemailbind (https://intl.cloud.tencent.com/document/product/850/93332?from_cn_redirect=1).
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("BindId",$param) and $param["BindId"] !== null) {
            $this->BindId = $param["BindId"];
        }
    }
}
