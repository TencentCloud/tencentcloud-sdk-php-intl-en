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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset tag tree node
 *
 * @method string getKey() Obtain Tag key.
 * @method void setKey(string $Key) Set Tag key.
 * @method string getValue() Obtain Tag value.
 * @method void setValue(string $Value) Set Tag value.
 * @method array getChildren() Obtain Child node.
 * @method void setChildren(array $Children) Set Child node.
 * @method string getColor() Obtain Color
 * @method void setColor(string $Color) Set Color
 */
class AssetTagTreeNode extends AbstractModel
{
    /**
     * @var string Tag key.
     */
    public $Key;

    /**
     * @var string Tag value.
     */
    public $Value;

    /**
     * @var array Child node.
     */
    public $Children;

    /**
     * @var string Color
     */
    public $Color;

    /**
     * @param string $Key Tag key.
     * @param string $Value Tag value.
     * @param array $Children Child node.
     * @param string $Color Color
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

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new AssetTagTreeNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
