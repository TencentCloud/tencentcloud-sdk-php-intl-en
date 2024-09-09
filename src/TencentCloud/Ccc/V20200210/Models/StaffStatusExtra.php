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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supplementary Information on Agent Status
 *
 * @method string getType() Obtain IM - Text | TEL - Cell phone | ALL - Full media.
 * @method void setType(string $Type) Set IM - Text | TEL - Cell phone | ALL - Full media.
 * @method string getDirect() Obtain IN - Inbound | OUT - Outbound.
 * @method void setDirect(string $Direct) Set IN - Inbound | OUT - Outbound.
 */
class StaffStatusExtra extends AbstractModel
{
    /**
     * @var string IM - Text | TEL - Cell phone | ALL - Full media.
     */
    public $Type;

    /**
     * @var string IN - Inbound | OUT - Outbound.
     */
    public $Direct;

    /**
     * @param string $Type IM - Text | TEL - Cell phone | ALL - Full media.
     * @param string $Direct IN - Inbound | OUT - Outbound.
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
