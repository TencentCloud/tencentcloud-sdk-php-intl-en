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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output parameters of the DescribeResourceConfig API.
 *
 * @method string getResourceType() Obtain Specification management type.
 * @method void setResourceType(string $ResourceType) Set Specification management type.
 * @method array getResourceData() Obtain Specification management data.
 * @method void setResourceData(array $ResourceData) Set Specification management data.
 */
class DescribeResourceConfig extends AbstractModel
{
    /**
     * @var string Specification management type.
     */
    public $ResourceType;

    /**
     * @var array Specification management data.
     */
    public $ResourceData;

    /**
     * @param string $ResourceType Specification management type.
     * @param array $ResourceData Specification management data.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceData",$param) and $param["ResourceData"] !== null) {
            $this->ResourceData = [];
            foreach ($param["ResourceData"] as $key => $value){
                $obj = new NodeResource();
                $obj->deserialize($value);
                array_push($this->ResourceData, $obj);
            }
        }
    }
}
