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
 * ScanBaselinePolicyList request structure.
 *
 * @method string getPolicyType() Obtain <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method void setPolicyType(string $PolicyType) Set <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method array getPolicyIDList() Obtain <p>List of baseline policy IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
 * @method void setPolicyIDList(array $PolicyIDList) Set <p>List of baseline policy IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ScanBaselinePolicyListRequest extends AbstractModel
{
    /**
     * @var string <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     */
    public $PolicyType;

    /**
     * @var array <p>List of baseline policy IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
     */
    public $PolicyIDList;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param string $PolicyType <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     * @param array $PolicyIDList <p>List of baseline policy IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyIDList",$param) and $param["PolicyIDList"] !== null) {
            $this->PolicyIDList = $param["PolicyIDList"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
