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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a split zone
 *
 * @method string getName() Obtain Split zone name
 * @method void setName(string $Name) Set Split zone name
 * @method string getLineId() Obtain Split zone ID
 * @method void setLineId(string $LineId) Set Split zone ID
 */
class LineInfo extends AbstractModel
{
    /**
     * @var string Split zone name
     */
    public $Name;

    /**
     * @var string Split zone ID
     */
    public $LineId;

    /**
     * @param string $Name Split zone name
     * @param string $LineId Split zone ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }
    }
}
