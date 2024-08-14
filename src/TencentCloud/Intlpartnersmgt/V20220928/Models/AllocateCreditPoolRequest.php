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
 * AllocateCreditPool request structure.
 *
 * @method integer getSubAgentUin() Obtain Second-level reseller UIN.
 * @method void setSubAgentUin(integer $SubAgentUin) Set Second-level reseller UIN.
 * @method float getCredit() Obtain Allocated amount.
 * @method void setCredit(float $Credit) Set Allocated amount.
 */
class AllocateCreditPoolRequest extends AbstractModel
{
    /**
     * @var integer Second-level reseller UIN.
     */
    public $SubAgentUin;

    /**
     * @var float Allocated amount.
     */
    public $Credit;

    /**
     * @param integer $SubAgentUin Second-level reseller UIN.
     * @param float $Credit Allocated amount.
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
        if (array_key_exists("SubAgentUin",$param) and $param["SubAgentUin"] !== null) {
            $this->SubAgentUin = $param["SubAgentUin"];
        }

        if (array_key_exists("Credit",$param) and $param["Credit"] !== null) {
            $this->Credit = $param["Credit"];
        }
    }
}
