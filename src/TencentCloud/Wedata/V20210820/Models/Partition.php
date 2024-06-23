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
 * Partition Parameter
 *
 * @method string getTransform() Obtain Partition Conversion Strategy
 * @method void setTransform(string $Transform) Set Partition Conversion Strategy
 * @method string getName() Obtain Partition Field Name
 * @method void setName(string $Name) Set Partition Field Name
 * @method array getTransformArgs() Obtain Policy Parameter
 * @method void setTransformArgs(array $TransformArgs) Set Policy Parameter
 */
class Partition extends AbstractModel
{
    /**
     * @var string Partition Conversion Strategy
     */
    public $Transform;

    /**
     * @var string Partition Field Name
     */
    public $Name;

    /**
     * @var array Policy Parameter
     */
    public $TransformArgs;

    /**
     * @param string $Transform Partition Conversion Strategy
     * @param string $Name Partition Field Name
     * @param array $TransformArgs Policy Parameter
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
        if (array_key_exists("Transform",$param) and $param["Transform"] !== null) {
            $this->Transform = $param["Transform"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TransformArgs",$param) and $param["TransformArgs"] !== null) {
            $this->TransformArgs = $param["TransformArgs"];
        }
    }
}
