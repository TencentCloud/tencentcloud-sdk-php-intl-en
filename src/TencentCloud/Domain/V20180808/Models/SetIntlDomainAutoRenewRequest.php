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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetIntlDomainAutoRenew request structure.
 *
 * @method string getDomainId() Obtain The domain ID.
 * @method void setDomainId(string $DomainId) Set The domain ID.
 * @method integer getAutoRenew() Obtain Whether to enable auto-renewal. Valid values: `1` (enable), `2` (disable).
 * @method void setAutoRenew(integer $AutoRenew) Set Whether to enable auto-renewal. Valid values: `1` (enable), `2` (disable).
 */
class SetIntlDomainAutoRenewRequest extends AbstractModel
{
    /**
     * @var string The domain ID.
     */
    public $DomainId;

    /**
     * @var integer Whether to enable auto-renewal. Valid values: `1` (enable), `2` (disable).
     */
    public $AutoRenew;

    /**
     * @param string $DomainId The domain ID.
     * @param integer $AutoRenew Whether to enable auto-renewal. Valid values: `1` (enable), `2` (disable).
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }
    }
}
