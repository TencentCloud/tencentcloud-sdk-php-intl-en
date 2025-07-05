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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Primary Industry Information
 *
 * @method string getId() Obtain Layer-1 industry id.
 * @method void setId(string $Id) Set Layer-1 industry id.
 * @method string getName() Obtain Layer-1 industry name.
 * @method void setName(string $Name) Set Layer-1 industry name.
 * @method array getChildren() Obtain Layer-2 industries corresponding to the layer-1 industry.
 * @method void setChildren(array $Children) Set Layer-2 industries corresponding to the layer-1 industry.
 */
class TradeOneNode extends AbstractModel
{
    /**
     * @var string Layer-1 industry id.
     */
    public $Id;

    /**
     * @var string Layer-1 industry name.
     */
    public $Name;

    /**
     * @var array Layer-2 industries corresponding to the layer-1 industry.
     */
    public $Children;

    /**
     * @param string $Id Layer-1 industry id.
     * @param string $Name Layer-1 industry name.
     * @param array $Children Layer-2 industries corresponding to the layer-1 industry.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new TradeTwoNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
