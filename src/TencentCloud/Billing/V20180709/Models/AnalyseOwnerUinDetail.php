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
 * Cost analysis user UIN complex type
 *
 * @method string getOwnerUin() Obtain User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseOwnerUinDetail extends AbstractModel
{
    /**
     * @var string User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @param string $OwnerUin User UIN
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
