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
 * Resource type and tag key-value pair
 *
 * @method string getKey() Obtain Tag key
 * @method void setKey(string $Key) Set Tag key
 * @method string getValue() Obtain Tag value
 * @method void setValue(string $Value) Set Tag value
 * @method string getResourceType() Obtain Specifies the resource type bound to the tag. type currently supported: "auto-scaling-group", "launch-configuration". valid values: scaling group resources and launch configuration resources respectively.
 * @method void setResourceType(string $ResourceType) Set Specifies the resource type bound to the tag. type currently supported: "auto-scaling-group", "launch-configuration". valid values: scaling group resources and launch configuration resources respectively.
 */
class Tag extends AbstractModel
{
    /**
     * @var string Tag key
     */
    public $Key;

    /**
     * @var string Tag value
     */
    public $Value;

    /**
     * @var string Specifies the resource type bound to the tag. type currently supported: "auto-scaling-group", "launch-configuration". valid values: scaling group resources and launch configuration resources respectively.
     */
    public $ResourceType;

    /**
     * @param string $Key Tag key
     * @param string $Value Tag value
     * @param string $ResourceType Specifies the resource type bound to the tag. type currently supported: "auto-scaling-group", "launch-configuration". valid values: scaling group resources and launch configuration resources respectively.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
