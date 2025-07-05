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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDDoSAI request structure.
 *
 * @method array getInstanceIdList() Obtain List of Anti-DDoS instance IDs
 * @method void setInstanceIdList(array $InstanceIdList) Set List of Anti-DDoS instance IDs
 * @method string getDDoSAI() Obtain AI protection switch. Valid values:
`on`: enabled
`off`: disabled
]
 * @method void setDDoSAI(string $DDoSAI) Set AI protection switch. Valid values:
`on`: enabled
`off`: disabled
]
 */
class CreateDDoSAIRequest extends AbstractModel
{
    /**
     * @var array List of Anti-DDoS instance IDs
     */
    public $InstanceIdList;

    /**
     * @var string AI protection switch. Valid values:
`on`: enabled
`off`: disabled
]
     */
    public $DDoSAI;

    /**
     * @param array $InstanceIdList List of Anti-DDoS instance IDs
     * @param string $DDoSAI AI protection switch. Valid values:
`on`: enabled
`off`: disabled
]
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
        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("DDoSAI",$param) and $param["DDoSAI"] !== null) {
            $this->DDoSAI = $param["DDoSAI"];
        }
    }
}
