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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shared member account information.
 *
 * @method integer getMemberAppId() Obtain Member account appid.

 * @method void setMemberAppId(integer $MemberAppId) Set Member account appid.

 * @method integer getMemberUin() Obtain Member account UIN
 * @method void setMemberUin(integer $MemberUin) Set Member account UIN
 */
class MemberAccount extends AbstractModel
{
    /**
     * @var integer Member account appid.

     */
    public $MemberAppId;

    /**
     * @var integer Member account UIN
     */
    public $MemberUin;

    /**
     * @param integer $MemberAppId Member account appid.

     * @param integer $MemberUin Member account UIN
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
        if (array_key_exists("MemberAppId",$param) and $param["MemberAppId"] !== null) {
            $this->MemberAppId = $param["MemberAppId"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }
    }
}
