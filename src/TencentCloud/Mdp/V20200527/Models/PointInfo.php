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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel input and output.
 *
 * @method array getInputs() Obtain Channel input list.
 * @method void setInputs(array $Inputs) Set Channel input list.
 * @method array getEndpoints() Obtain Channel output list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndpoints(array $Endpoints) Set Channel output list.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class PointInfo extends AbstractModel
{
    /**
     * @var array Channel input list.
     */
    public $Inputs;

    /**
     * @var array Channel output list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Endpoints;

    /**
     * @param array $Inputs Channel input list.
     * @param array $Endpoints Channel output list.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = [];
            foreach ($param["Inputs"] as $key => $value){
                $obj = new InputInfo();
                $obj->deserialize($value);
                array_push($this->Inputs, $obj);
            }
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new EndpointInfo();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }
    }
}
