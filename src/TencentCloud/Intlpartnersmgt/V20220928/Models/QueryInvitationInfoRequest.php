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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryInvitationInfo request structure.
 *
 * @method array getInvitationToken() Obtain Invite token. array member quantity value: [1, 100].
 * @method void setInvitationToken(array $InvitationToken) Set Invite token. array member quantity value: [1, 100].
 */
class QueryInvitationInfoRequest extends AbstractModel
{
    /**
     * @var array Invite token. array member quantity value: [1, 100].
     */
    public $InvitationToken;

    /**
     * @param array $InvitationToken Invite token. array member quantity value: [1, 100].
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
        if (array_key_exists("InvitationToken",$param) and $param["InvitationToken"] !== null) {
            $this->InvitationToken = $param["InvitationToken"];
        }
    }
}
