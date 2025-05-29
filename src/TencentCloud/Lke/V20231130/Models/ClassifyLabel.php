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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Label information.
 *
 * @method string getName() Obtain Label name.
 * @method void setName(string $Name) Set Label name.
 * @method string getDescription() Obtain Label description.
 * @method void setDescription(string $Description) Set Label description.
 * @method array getValues() Obtain Label value range.
 * @method void setValues(array $Values) Set Label value range.
 */
class ClassifyLabel extends AbstractModel
{
    /**
     * @var string Label name.
     */
    public $Name;

    /**
     * @var string Label description.
     */
    public $Description;

    /**
     * @var array Label value range.
     */
    public $Values;

    /**
     * @param string $Name Label name.
     * @param string $Description Label description.
     * @param array $Values Label value range.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
