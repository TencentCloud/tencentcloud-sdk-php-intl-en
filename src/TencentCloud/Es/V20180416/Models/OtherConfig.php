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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional EsConfig and JvmHeapConfig used by updateInstance
 *
 * @method string getEsConfig() Obtain Additional yml configuration for es
 * @method void setEsConfig(string $EsConfig) Set Additional yml configuration for es
 * @method string getJvmHeapConfig() Obtain jvm heap configuration of es
 * @method void setJvmHeapConfig(string $JvmHeapConfig) Set jvm heap configuration of es
 */
class OtherConfig extends AbstractModel
{
    /**
     * @var string Additional yml configuration for es
     */
    public $EsConfig;

    /**
     * @var string jvm heap configuration of es
     */
    public $JvmHeapConfig;

    /**
     * @param string $EsConfig Additional yml configuration for es
     * @param string $JvmHeapConfig jvm heap configuration of es
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
        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("JvmHeapConfig",$param) and $param["JvmHeapConfig"] !== null) {
            $this->JvmHeapConfig = $param["JvmHeapConfig"];
        }
    }
}
