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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VIP information
 *
 * @method string getVip() Obtain Virtual IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set Virtual IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain WAF Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set WAF Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 */
class VipInfo extends AbstractModel
{
    /**
     * @var string Virtual IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var string WAF Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @param string $Vip Virtual IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId WAF Instance ID

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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
