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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Fixed IP configuration for public network access
 *
 * @method string getEipStatus() Obtain Whether it is a fixed IP. Valid values: ["ENABLE","DISABLE"]
 * @method void setEipStatus(string $EipStatus) Set Whether it is a fixed IP. Valid values: ["ENABLE","DISABLE"]
 * @method array getEipAddress() Obtain IP list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEipAddress(array $EipAddress) Set IP list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EipConfigOut extends AbstractModel
{
    /**
     * @var string Whether it is a fixed IP. Valid values: ["ENABLE","DISABLE"]
     */
    public $EipStatus;

    /**
     * @var array IP list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EipAddress;

    /**
     * @param string $EipStatus Whether it is a fixed IP. Valid values: ["ENABLE","DISABLE"]
     * @param array $EipAddress IP list
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
        if (array_key_exists("EipStatus",$param) and $param["EipStatus"] !== null) {
            $this->EipStatus = $param["EipStatus"];
        }

        if (array_key_exists("EipAddress",$param) and $param["EipAddress"] !== null) {
            $this->EipAddress = $param["EipAddress"];
        }
    }
}
