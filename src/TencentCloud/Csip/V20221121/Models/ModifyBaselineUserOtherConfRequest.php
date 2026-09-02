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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBaselineUserOtherConf request structure.
 *
 * @method BaselineUserOtherConf getUserConf() Obtain <p>Other configuration of the user to be updated; AgentScanTimeout must be within the range of [60, 86400] seconds.</p>
 * @method void setUserConf(BaselineUserOtherConf $UserConf) Set <p>Other configuration of the user to be updated; AgentScanTimeout must be within the range of [60, 86400] seconds.</p>
 * @method array getMemberId() Obtain List of member account Appids in the group account scenario. Leave this empty for non-group accounts or when querying only the current account.
 * @method void setMemberId(array $MemberId) Set List of member account Appids in the group account scenario. Leave this empty for non-group accounts or when querying only the current account.
 */
class ModifyBaselineUserOtherConfRequest extends AbstractModel
{
    /**
     * @var BaselineUserOtherConf <p>Other configuration of the user to be updated; AgentScanTimeout must be within the range of [60, 86400] seconds.</p>
     */
    public $UserConf;

    /**
     * @var array List of member account Appids in the group account scenario. Leave this empty for non-group accounts or when querying only the current account.
     */
    public $MemberId;

    /**
     * @param BaselineUserOtherConf $UserConf <p>Other configuration of the user to be updated; AgentScanTimeout must be within the range of [60, 86400] seconds.</p>
     * @param array $MemberId List of member account Appids in the group account scenario. Leave this empty for non-group accounts or when querying only the current account.
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
        if (array_key_exists("UserConf",$param) and $param["UserConf"] !== null) {
            $this->UserConf = new BaselineUserOtherConf();
            $this->UserConf->deserialize($param["UserConf"]);
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
