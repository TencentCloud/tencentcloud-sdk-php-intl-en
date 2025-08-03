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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token deferral request
 *
 * @method boolean getResult() Obtain Request result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(boolean $Result) Set Request result.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApplyEmbedTokenInfo extends AbstractModel
{
    /**
     * @var boolean Request result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @param boolean $Result Request result.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
