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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task parameter description
 *
 * @method string getPKey() Obtain Parameter key
 * @method void setPKey(string $PKey) Set Parameter key
 * @method string getPValue() Obtain Parameter value.
 * @method void setPValue(string $PValue) Set Parameter value.
 */
class FlowParamsDesc extends AbstractModel
{
    /**
     * @var string Parameter key
     */
    public $PKey;

    /**
     * @var string Parameter value.
     */
    public $PValue;

    /**
     * @param string $PKey Parameter key
     * @param string $PValue Parameter value.
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
        if (array_key_exists("PKey",$param) and $param["PKey"] !== null) {
            $this->PKey = $param["PKey"];
        }

        if (array_key_exists("PValue",$param) and $param["PValue"] !== null) {
            $this->PValue = $param["PValue"];
        }
    }
}
