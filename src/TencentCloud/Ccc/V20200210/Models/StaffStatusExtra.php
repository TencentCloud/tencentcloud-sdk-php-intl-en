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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supplementary Information on Agent Status
 *
 * @method string getType() Obtain IM - text | tel - cell phone | all - full media.
 * @method void setType(string $Type) Set IM - text | tel - cell phone | all - full media.
 * @method string getDirect() Obtain IN - inbound | out - outbound.
 * @method void setDirect(string $Direct) Set IN - inbound | out - outbound.
 */
class StaffStatusExtra extends AbstractModel
{
    /**
     * @var string IM - text | tel - cell phone | all - full media.
     */
    public $Type;

    /**
     * @var string IN - inbound | out - outbound.
     */
    public $Direct;

    /**
     * @param string $Type IM - text | tel - cell phone | all - full media.
     * @param string $Direct IN - inbound | out - outbound.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Direct",$param) and $param["Direct"] !== null) {
            $this->Direct = $param["Direct"];
        }
    }
}
