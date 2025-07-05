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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Algorithm name and ID
 *
 * @method string getKeyUsage() Obtain Algorithm ID
 * @method void setKeyUsage(string $KeyUsage) Set Algorithm ID
 * @method string getAlgorithm() Obtain Algorithm name
 * @method void setAlgorithm(string $Algorithm) Set Algorithm name
 */
class AlgorithmInfo extends AbstractModel
{
    /**
     * @var string Algorithm ID
     */
    public $KeyUsage;

    /**
     * @var string Algorithm name
     */
    public $Algorithm;

    /**
     * @param string $KeyUsage Algorithm ID
     * @param string $Algorithm Algorithm name
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
        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }
    }
}
