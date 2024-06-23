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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * map
 *
 * @method string getK() Obtain k
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setK(string $K) Set k
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getV() Obtain v
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setV(string $V) Set v
Note: This field may return null, indicating that no valid value can be obtained.
 */
class StrToStrMap extends AbstractModel
{
    /**
     * @var string k
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $K;

    /**
     * @var string v
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $V;

    /**
     * @param string $K k
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $V v
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("K",$param) and $param["K"] !== null) {
            $this->K = $param["K"];
        }

        if (array_key_exists("V",$param) and $param["V"] !== null) {
            $this->V = $param["V"];
        }
    }
}
