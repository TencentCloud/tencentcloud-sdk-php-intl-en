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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input statistics.
 *
 * @method array getPipeline0() Obtain Input statistics of pipeline 0.
 * @method void setPipeline0(array $Pipeline0) Set Input statistics of pipeline 0.
 * @method array getPipeline1() Obtain Input statistics of pipeline 1.
 * @method void setPipeline1(array $Pipeline1) Set Input statistics of pipeline 1.
 */
class InputStatistics extends AbstractModel
{
    /**
     * @var array Input statistics of pipeline 0.
     */
    public $Pipeline0;

    /**
     * @var array Input statistics of pipeline 1.
     */
    public $Pipeline1;

    /**
     * @param array $Pipeline0 Input statistics of pipeline 0.
     * @param array $Pipeline1 Input statistics of pipeline 1.
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
        if (array_key_exists("Pipeline0",$param) and $param["Pipeline0"] !== null) {
            $this->Pipeline0 = [];
            foreach ($param["Pipeline0"] as $key => $value){
                $obj = new PipelineInputStatistics();
                $obj->deserialize($value);
                array_push($this->Pipeline0, $obj);
            }
        }

        if (array_key_exists("Pipeline1",$param) and $param["Pipeline1"] !== null) {
            $this->Pipeline1 = [];
            foreach ($param["Pipeline1"] as $key => $value){
                $obj = new PipelineInputStatistics();
                $obj->deserialize($value);
                array_push($this->Pipeline1, $obj);
            }
        }
    }
}
