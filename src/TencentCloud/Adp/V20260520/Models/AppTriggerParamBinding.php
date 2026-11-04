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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppTriggerParamBinding
 *
 * @method string getParamName() Obtain <p>Parameter name.</p>
 * @method void setParamName(string $ParamName) Set <p>Parameter name.</p>
 * @method integer getParamType() Obtain <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>4: object</li><li>5: string array</li><li>6: integer array</li><li>7: floating-point number array</li><li>8: boolean value array</li><li>3: boolean value</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: nested array</li><li>22: key</li><li>99: null</li><li>100: unspecified type, for OneOf and AnyOf scenarios</li></ul>
 * @method void setParamType(integer $ParamType) Set <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>4: object</li><li>5: string array</li><li>6: integer array</li><li>7: floating-point number array</li><li>8: boolean value array</li><li>3: boolean value</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: nested array</li><li>22: key</li><li>99: null</li><li>100: unspecified type, for OneOf and AnyOf scenarios</li></ul>
 * @method AppTriggerParamBindingValue getValue() Obtain <p>Parameter value</p>
 * @method void setValue(AppTriggerParamBindingValue $Value) Set <p>Parameter value</p>
 */
class AppTriggerParamBinding extends AbstractModel
{
    /**
     * @var string <p>Parameter name.</p>
     */
    public $ParamName;

    /**
     * @var integer <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>4: object</li><li>5: string array</li><li>6: integer array</li><li>7: floating-point number array</li><li>8: boolean value array</li><li>3: boolean value</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: nested array</li><li>22: key</li><li>99: null</li><li>100: unspecified type, for OneOf and AnyOf scenarios</li></ul>
     */
    public $ParamType;

    /**
     * @var AppTriggerParamBindingValue <p>Parameter value</p>
     */
    public $Value;

    /**
     * @param string $ParamName <p>Parameter name.</p>
     * @param integer $ParamType <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>4: object</li><li>5: string array</li><li>6: integer array</li><li>7: floating-point number array</li><li>8: boolean value array</li><li>3: boolean value</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: nested array</li><li>22: key</li><li>99: null</li><li>100: unspecified type, for OneOf and AnyOf scenarios</li></ul>
     * @param AppTriggerParamBindingValue $Value <p>Parameter value</p>
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new AppTriggerParamBindingValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
