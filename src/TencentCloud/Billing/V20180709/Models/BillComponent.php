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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Component type filter list
 *
 * @method string getComponentCode() Obtain Component type code
 * @method void setComponentCode(string $ComponentCode) Set Component type code
 * @method string getComponentCodeName() Obtain Component type: The major component category corresponding to the product or service purchased by the user
 * @method void setComponentCodeName(string $ComponentCodeName) Set Component type: The major component category corresponding to the product or service purchased by the user
 */
class BillComponent extends AbstractModel
{
    /**
     * @var string Component type code
     */
    public $ComponentCode;

    /**
     * @var string Component type: The major component category corresponding to the product or service purchased by the user
     */
    public $ComponentCodeName;

    /**
     * @param string $ComponentCode Component type code
     * @param string $ComponentCodeName Component type: The major component category corresponding to the product or service purchased by the user
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
        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }
    }
}
