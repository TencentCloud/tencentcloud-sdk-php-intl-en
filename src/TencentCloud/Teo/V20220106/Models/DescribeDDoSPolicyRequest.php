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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSPolicy request structure.
 *
 * @method integer getPolicyId() Obtain Policy group ID
 * @method void setPolicyId(integer $PolicyId) Set Policy group ID
 * @method string getZoneId() Obtain Top-level domain name (site)
 * @method void setZoneId(string $ZoneId) Set Top-level domain name (site)
 */
class DescribeDDoSPolicyRequest extends AbstractModel
{
    /**
     * @var integer Policy group ID
     */
    public $PolicyId;

    /**
     * @var string Top-level domain name (site)
     */
    public $ZoneId;

    /**
     * @param integer $PolicyId Policy group ID
     * @param string $ZoneId Top-level domain name (site)
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
