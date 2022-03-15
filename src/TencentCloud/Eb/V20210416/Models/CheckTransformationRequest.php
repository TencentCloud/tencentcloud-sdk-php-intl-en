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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckTransformation request structure.
 *
 * @method string getInput() Obtain JSON string to be processed
 * @method void setInput(string $Input) Set JSON string to be processed
 * @method array getTransformations() Obtain Transformation rule list
 * @method void setTransformations(array $Transformations) Set Transformation rule list
 */
class CheckTransformationRequest extends AbstractModel
{
    /**
     * @var string JSON string to be processed
     */
    public $Input;

    /**
     * @var array Transformation rule list
     */
    public $Transformations;

    /**
     * @param string $Input JSON string to be processed
     * @param array $Transformations Transformation rule list
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Transformations",$param) and $param["Transformations"] !== null) {
            $this->Transformations = [];
            foreach ($param["Transformations"] as $key => $value){
                $obj = new Transformation();
                $obj->deserialize($value);
                array_push($this->Transformations, $obj);
            }
        }
    }
}
