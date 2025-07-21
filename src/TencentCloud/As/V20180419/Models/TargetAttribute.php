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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load balancer target attribute
 *
 * @method integer getPort() Obtain Port. value range: [1,65535]. as an input parameter, this parameter is required.
 * @method void setPort(integer $Port) Set Port. value range: [1,65535]. as an input parameter, this parameter is required.
 * @method integer getWeight() Obtain Weight. value range: [0,100]. this parameter is required as an input parameter.
 * @method void setWeight(integer $Weight) Set Weight. value range: [0,100]. this parameter is required as an input parameter.
 */
class TargetAttribute extends AbstractModel
{
    /**
     * @var integer Port. value range: [1,65535]. as an input parameter, this parameter is required.
     */
    public $Port;

    /**
     * @var integer Weight. value range: [0,100]. this parameter is required as an input parameter.
     */
    public $Weight;

    /**
     * @param integer $Port Port. value range: [1,65535]. as an input parameter, this parameter is required.
     * @param integer $Weight Weight. value range: [0,100]. this parameter is required as an input parameter.
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
