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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Performance test host source.
 *
 * @method string getIP() Obtain Pressure machine IP.

Note: This field may return null, indicating that no valid value is found.
 * @method void setIP(string $IP) Set Pressure machine IP.

Note: This field may return null, indicating that no valid value is found.
 * @method string getPodName() Obtain Pressure machine pod.

Note: This field may return null, indicating that no valid value is found.
 * @method void setPodName(string $PodName) Set Pressure machine pod.

Note: This field may return null, indicating that no valid value is found.
 * @method string getRegion() Obtain Region.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRegion(string $Region) Set Region.

Note: This field may return null, indicating that no valid value is found.
 */
class LoadSource extends AbstractModel
{
    /**
     * @var string Pressure machine IP.

Note: This field may return null, indicating that no valid value is found.
     */
    public $IP;

    /**
     * @var string Pressure machine pod.

Note: This field may return null, indicating that no valid value is found.
     */
    public $PodName;

    /**
     * @var string Region.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Region;

    /**
     * @param string $IP Pressure machine IP.

Note: This field may return null, indicating that no valid value is found.
     * @param string $PodName Pressure machine pod.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Region Region.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
