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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Salt location
 *
 * @method string getSaltLocationTypeEnum() Obtain Password salt type. Valid values: `HEAD`, `TAIL`, `OTHER`.
 * @method void setSaltLocationTypeEnum(string $SaltLocationTypeEnum) Set Password salt type. Valid values: `HEAD`, `TAIL`, `OTHER`.
 * @method SaltLocationRule getSaltLocationRule() Obtain Salting rule
 * @method void setSaltLocationRule(SaltLocationRule $SaltLocationRule) Set Salting rule
 */
class SaltLocation extends AbstractModel
{
    /**
     * @var string Password salt type. Valid values: `HEAD`, `TAIL`, `OTHER`.
     */
    public $SaltLocationTypeEnum;

    /**
     * @var SaltLocationRule Salting rule
     */
    public $SaltLocationRule;

    /**
     * @param string $SaltLocationTypeEnum Password salt type. Valid values: `HEAD`, `TAIL`, `OTHER`.
     * @param SaltLocationRule $SaltLocationRule Salting rule
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
        if (array_key_exists("SaltLocationTypeEnum",$param) and $param["SaltLocationTypeEnum"] !== null) {
            $this->SaltLocationTypeEnum = $param["SaltLocationTypeEnum"];
        }

        if (array_key_exists("SaltLocationRule",$param) and $param["SaltLocationRule"] !== null) {
            $this->SaltLocationRule = new SaltLocationRule();
            $this->SaltLocationRule->deserialize($param["SaltLocationRule"]);
        }
    }
}
