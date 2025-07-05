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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBanWhiteList request structure.
 *
 * @method BanWhiteList getRules() Obtain Modify allowlist rule item
 * @method void setRules(BanWhiteList $Rules) Set Modify allowlist rule item
 */
class ModifyBanWhiteListRequest extends AbstractModel
{
    /**
     * @var BanWhiteList Modify allowlist rule item
     */
    public $Rules;

    /**
     * @param BanWhiteList $Rules Modify allowlist rule item
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = new BanWhiteList();
            $this->Rules->deserialize($param["Rules"]);
        }
    }
}
