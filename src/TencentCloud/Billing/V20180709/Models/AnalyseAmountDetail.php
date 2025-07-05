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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis amount return data model
 *
 * @method string getKey() Obtain Fee typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Fee typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDisplay() Obtain Whether to displayNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisplay(integer $Display) Set Whether to displayNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseAmountDetail extends AbstractModel
{
    /**
     * @var string Fee typeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var integer Whether to displayNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Display;

    /**
     * @param string $Key Fee typeNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Display Whether to displayNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }
    }
}
