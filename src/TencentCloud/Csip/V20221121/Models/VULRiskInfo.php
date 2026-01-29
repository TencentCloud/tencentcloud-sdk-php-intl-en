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
 * Vulnerability risk information.
 *
 * @method string getFix() Obtain Fixing suggestion
 * @method void setFix(string $Fix) Set Fixing suggestion
 * @method string getReferences() Obtain Technology reference/reference link.
 * @method void setReferences(string $References) Set Technology reference/reference link.
 * @method string getDescribe() Obtain Vulnerability description
 * @method void setDescribe(string $Describe) Set Vulnerability description
 * @method array getImpactComponent() Obtain Affected component.
 * @method void setImpactComponent(array $ImpactComponent) Set Affected component.
 */
class VULRiskInfo extends AbstractModel
{
    /**
     * @var string Fixing suggestion
     */
    public $Fix;

    /**
     * @var string Technology reference/reference link.
     */
    public $References;

    /**
     * @var string Vulnerability description
     */
    public $Describe;

    /**
     * @var array Affected component.
     */
    public $ImpactComponent;

    /**
     * @param string $Fix Fixing suggestion
     * @param string $References Technology reference/reference link.
     * @param string $Describe Vulnerability description
     * @param array $ImpactComponent Affected component.
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
        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("ImpactComponent",$param) and $param["ImpactComponent"] !== null) {
            $this->ImpactComponent = [];
            foreach ($param["ImpactComponent"] as $key => $value){
                $obj = new VulImpactComponentInfo();
                $obj->deserialize($value);
                array_push($this->ImpactComponent, $obj);
            }
        }
    }
}
