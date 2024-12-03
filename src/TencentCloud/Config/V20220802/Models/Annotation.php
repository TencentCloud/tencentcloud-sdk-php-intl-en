<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compliance details
 *
 * @method string getConfiguration() Obtain Current actual configuration of the resource. It can contain 0 to 256 characters, which is the non-compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
 * @method void setConfiguration(string $Configuration) Set Current actual configuration of the resource. It can contain 0 to 256 characters, which is the non-compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
 * @method string getDesiredValue() Obtain Desired configuration of the resource. It can contain 0 to 256 characters, which is the compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDesiredValue(string $DesiredValue) Set Desired configuration of the resource. It can contain 0 to 256 characters, which is the compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
 * @method string getOperator() Obtain Comparison operator between current and desired configuration of the resource. Length is 0-16 characters. This field may be empty when custom rule reporting evaluation result.
 * @method void setOperator(string $Operator) Set Comparison operator between current and desired configuration of the resource. Length is 0-16 characters. This field may be empty when custom rule reporting evaluation result.
 * @method string getProperty() Obtain JSON path of current configuration in resource attribute structure. Length is 0-256 characters. This field may be empty when custom rule reporting evaluation result.
 * @method void setProperty(string $Property) Set JSON path of current configuration in resource attribute structure. Length is 0-256 characters. This field may be empty when custom rule reporting evaluation result.
 */
class Annotation extends AbstractModel
{
    /**
     * @var string Current actual configuration of the resource. It can contain 0 to 256 characters, which is the non-compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Configuration;

    /**
     * @var string Desired configuration of the resource. It can contain 0 to 256 characters, which is the compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DesiredValue;

    /**
     * @var string Comparison operator between current and desired configuration of the resource. Length is 0-16 characters. This field may be empty when custom rule reporting evaluation result.
     */
    public $Operator;

    /**
     * @var string JSON path of current configuration in resource attribute structure. Length is 0-256 characters. This field may be empty when custom rule reporting evaluation result.
     */
    public $Property;

    /**
     * @param string $Configuration Current actual configuration of the resource. It can contain 0 to 256 characters, which is the non-compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
     * @param string $DesiredValue Desired configuration of the resource. It can contain 0 to 256 characters, which is the compliant configuration of the resource.
Note: This field may return null, indicating that no valid value is found.
     * @param string $Operator Comparison operator between current and desired configuration of the resource. Length is 0-16 characters. This field may be empty when custom rule reporting evaluation result.
     * @param string $Property JSON path of current configuration in resource attribute structure. Length is 0-256 characters. This field may be empty when custom rule reporting evaluation result.
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
        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = $param["Configuration"];
        }

        if (array_key_exists("DesiredValue",$param) and $param["DesiredValue"] !== null) {
            $this->DesiredValue = $param["DesiredValue"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }
    }
}
