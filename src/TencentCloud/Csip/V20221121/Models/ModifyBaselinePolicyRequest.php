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
 * ModifyBaselinePolicy request structure.
 *
 * @method BaselinePolicy getPolicy() Obtain <p>Baseline policy details to be created or edited.</p>
 * @method void setPolicy(BaselinePolicy $Policy) Set <p>Baseline policy details to be created or edited.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ModifyBaselinePolicyRequest extends AbstractModel
{
    /**
     * @var BaselinePolicy <p>Baseline policy details to be created or edited.</p>
     */
    public $Policy;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param BaselinePolicy $Policy <p>Baseline policy details to be created or edited.</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new BaselinePolicy();
            $this->Policy->deserialize($param["Policy"]);
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
