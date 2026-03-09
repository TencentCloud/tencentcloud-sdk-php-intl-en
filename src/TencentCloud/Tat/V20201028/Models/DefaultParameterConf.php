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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom parameter.
 *
 * @method string getParameterName() Obtain Parameter name.
 * @method void setParameterName(string $ParameterName) Set Parameter name.
 * @method string getParameterValue() Obtain Default parameter value.
 * @method void setParameterValue(string $ParameterValue) Set Default parameter value.
 * @method string getParameterDescription() Obtain Parameter description.
 * @method void setParameterDescription(string $ParameterDescription) Set Parameter description.
 */
class DefaultParameterConf extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $ParameterName;

    /**
     * @var string Default parameter value.
     */
    public $ParameterValue;

    /**
     * @var string Parameter description.
     */
    public $ParameterDescription;

    /**
     * @param string $ParameterName Parameter name.
     * @param string $ParameterValue Default parameter value.
     * @param string $ParameterDescription Parameter description.
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
        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }

        if (array_key_exists("ParameterValue",$param) and $param["ParameterValue"] !== null) {
            $this->ParameterValue = $param["ParameterValue"];
        }

        if (array_key_exists("ParameterDescription",$param) and $param["ParameterDescription"] !== null) {
            $this->ParameterDescription = $param["ParameterDescription"];
        }
    }
}
