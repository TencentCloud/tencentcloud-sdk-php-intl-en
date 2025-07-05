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
 * Shared member information
 *
 * @method integer getShareMemberUin() Obtain Shared member UIN.
 * @method void setShareMemberUin(integer $ShareMemberUin) Set Shared member UIN.
 */
class ShareMember extends AbstractModel
{
    /**
     * @var integer Shared member UIN.
     */
    public $ShareMemberUin;

    /**
     * @param integer $ShareMemberUin Shared member UIN.
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
        if (array_key_exists("ShareMemberUin",$param) and $param["ShareMemberUin"] !== null) {
            $this->ShareMemberUin = $param["ShareMemberUin"];
        }
    }
}
