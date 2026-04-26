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
 * Subproduct filtering under cost allocation conditions
 *
 * @method string getProductCode() Obtain Subproduct code
 * @method void setProductCode(string $ProductCode) Set Subproduct code
 * @method string getProductCodeName() Obtain Subproduct name
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name
 * @method array getChildren() Obtain Component name
 * @method void setChildren(array $Children) Set Component name
 */
class BillProductLink extends AbstractModel
{
    /**
     * @var string Subproduct code
     */
    public $ProductCode;

    /**
     * @var string Subproduct name
     */
    public $ProductCodeName;

    /**
     * @var array Component name
     */
    public $Children;

    /**
     * @param string $ProductCode Subproduct code
     * @param string $ProductCodeName Subproduct name
     * @param array $Children Component name
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new BillItem();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
