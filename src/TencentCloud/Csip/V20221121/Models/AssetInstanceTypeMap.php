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
 * Mapping of asset type and instance type.
 *
 * @method string getText() Obtain Asset type.
 * @method void setText(string $Text) Set Asset type.
 * @method string getValue() Obtain Asset type.
 * @method void setValue(string $Value) Set Asset type.
 * @method array getInstanceTypeList() Obtain Mapping of asset type and instance type.
 * @method void setInstanceTypeList(array $InstanceTypeList) Set Mapping of asset type and instance type.
 */
class AssetInstanceTypeMap extends AbstractModel
{
    /**
     * @var string Asset type.
     */
    public $Text;

    /**
     * @var string Asset type.
     */
    public $Value;

    /**
     * @var array Mapping of asset type and instance type.
     */
    public $InstanceTypeList;

    /**
     * @param string $Text Asset type.
     * @param string $Value Asset type.
     * @param array $InstanceTypeList Mapping of asset type and instance type.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("InstanceTypeList",$param) and $param["InstanceTypeList"] !== null) {
            $this->InstanceTypeList = [];
            foreach ($param["InstanceTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->InstanceTypeList, $obj);
            }
        }
    }
}
