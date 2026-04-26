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
 * Cost analysis payment method complex type
 *
 * @method string getPayMode() Obtain Billing mode code
 * @method void setPayMode(string $PayMode) Set Billing mode code
 * @method string getPayModeName() Obtain Billing mode Name
 * @method void setPayModeName(string $PayModeName) Set Billing mode Name
 */
class AnalysePayModeDetail extends AbstractModel
{
    /**
     * @var string Billing mode code
     */
    public $PayMode;

    /**
     * @var string Billing mode Name
     */
    public $PayModeName;

    /**
     * @param string $PayMode Billing mode code
     * @param string $PayModeName Billing mode Name
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }
    }
}
