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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource group specification.
 *
 * @method string getSpecification() Obtain Resource group specification.
 * @method void setSpecification(string $Specification) Set Resource group specification.
 * @method integer getNumber() Obtain Quantity.
 * @method void setNumber(integer $Number) Set Quantity.
 */
class ResourceGroupSpecification extends AbstractModel
{
    /**
     * @var string Resource group specification.
     */
    public $Specification;

    /**
     * @var integer Quantity.
     */
    public $Number;

    /**
     * @param string $Specification Resource group specification.
     * @param integer $Number Quantity.
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
        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
