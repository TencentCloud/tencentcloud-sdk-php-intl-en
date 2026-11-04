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
 * Variable information
 *
 * @method string getDefaultFileName() Obtain <p>Default file name.</p>
 * @method void setDefaultFileName(string $DefaultFileName) Set <p>Default file name.</p>
 * @method string getDefaultValue() Obtain <p>Default value.</p>
 * @method void setDefaultValue(string $DefaultValue) Set <p>Default value.</p>
 * @method string getDescription() Obtain <p>Variable description</p>
 * @method void setDescription(string $Description) Set <p>Variable description</p>
 * @method integer getModuleType() Obtain <p>Variable module type</p><p>Enumeration values:</p><ul><li>0: API parameter</li><li>1: environment parameter</li><li>2: application parameter</li><li>3: system parameter</li></ul>
 * @method void setModuleType(integer $ModuleType) Set <p>Variable module type</p><p>Enumeration values:</p><ul><li>0: API parameter</li><li>1: environment parameter</li><li>2: application parameter</li><li>3: system parameter</li></ul>
 * @method string getName() Obtain <p>Variable name</p>
 * @method void setName(string $Name) Set <p>Variable name</p>
 * @method integer getType() Obtain <p>Variable type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>3: boolean value</li><li>4: object</li><li>5: array of strings</li><li>6: array of integers</li><li>7: array of floating-point numbers</li><li>8: array of boolean values</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: array of arrays</li><li>21: key</li></ul>
 * @method void setType(integer $Type) Set <p>Variable type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>3: boolean value</li><li>4: object</li><li>5: array of strings</li><li>6: array of integers</li><li>7: array of floating-point numbers</li><li>8: array of boolean values</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: array of arrays</li><li>21: key</li></ul>
 * @method string getVariableId() Obtain <p>Variable ID</p>
 * @method void setVariableId(string $VariableId) Set <p>Variable ID</p>
 * @method boolean getEnableEndpoints() Obtain <p>Whether to enable network policy (only effective for environment variables)</p>
 * @method void setEnableEndpoints(boolean $EnableEndpoints) Set <p>Whether to enable network policy (only effective for environment variables)</p>
 * @method array getEndpointList() Obtain <p>Network policy list (Supported: precise domain name, *.wildcard domain, with optional protocol/port/path prefix)</p>
 * @method void setEndpointList(array $EndpointList) Set <p>Network policy list (Supported: precise domain name, *.wildcard domain, with optional protocol/port/path prefix)</p>
 * @method boolean getIsBuiltin() Obtain <p>Whether it is a built-in variable.</p>
 * @method void setIsBuiltin(boolean $IsBuiltin) Set <p>Whether it is a built-in variable.</p>
 * @method boolean getEnableSandbox() Obtain <p>Whether it can be injected into the sandbox environment.</p>
 * @method void setEnableSandbox(boolean $EnableSandbox) Set <p>Whether it can be injected into the sandbox environment.</p>
 */
class Variable extends AbstractModel
{
    /**
     * @var string <p>Default file name.</p>
     */
    public $DefaultFileName;

    /**
     * @var string <p>Default value.</p>
     */
    public $DefaultValue;

    /**
     * @var string <p>Variable description</p>
     */
    public $Description;

    /**
     * @var integer <p>Variable module type</p><p>Enumeration values:</p><ul><li>0: API parameter</li><li>1: environment parameter</li><li>2: application parameter</li><li>3: system parameter</li></ul>
     */
    public $ModuleType;

    /**
     * @var string <p>Variable name</p>
     */
    public $Name;

    /**
     * @var integer <p>Variable type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>3: boolean value</li><li>4: object</li><li>5: array of strings</li><li>6: array of integers</li><li>7: array of floating-point numbers</li><li>8: array of boolean values</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: array of arrays</li><li>21: key</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Variable ID</p>
     */
    public $VariableId;

    /**
     * @var boolean <p>Whether to enable network policy (only effective for environment variables)</p>
     */
    public $EnableEndpoints;

    /**
     * @var array <p>Network policy list (Supported: precise domain name, *.wildcard domain, with optional protocol/port/path prefix)</p>
     */
    public $EndpointList;

    /**
     * @var boolean <p>Whether it is a built-in variable.</p>
     */
    public $IsBuiltin;

    /**
     * @var boolean <p>Whether it can be injected into the sandbox environment.</p>
     */
    public $EnableSandbox;

    /**
     * @param string $DefaultFileName <p>Default file name.</p>
     * @param string $DefaultValue <p>Default value.</p>
     * @param string $Description <p>Variable description</p>
     * @param integer $ModuleType <p>Variable module type</p><p>Enumeration values:</p><ul><li>0: API parameter</li><li>1: environment parameter</li><li>2: application parameter</li><li>3: system parameter</li></ul>
     * @param string $Name <p>Variable name</p>
     * @param integer $Type <p>Variable type</p><p>Enumeration values:</p><ul><li>0: string</li><li>1: integer</li><li>2: floating-point number</li><li>3: boolean value</li><li>4: object</li><li>5: array of strings</li><li>6: array of integers</li><li>7: array of floating-point numbers</li><li>8: array of boolean values</li><li>9: object array</li><li>10: file</li><li>11: document</li><li>12: image</li><li>13: audio</li><li>14: video</li><li>15: file array</li><li>16: document array</li><li>17: image array</li><li>18: audio array</li><li>19: video array</li><li>20: array of arrays</li><li>21: key</li></ul>
     * @param string $VariableId <p>Variable ID</p>
     * @param boolean $EnableEndpoints <p>Whether to enable network policy (only effective for environment variables)</p>
     * @param array $EndpointList <p>Network policy list (Supported: precise domain name, *.wildcard domain, with optional protocol/port/path prefix)</p>
     * @param boolean $IsBuiltin <p>Whether it is a built-in variable.</p>
     * @param boolean $EnableSandbox <p>Whether it can be injected into the sandbox environment.</p>
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
        if (array_key_exists("DefaultFileName",$param) and $param["DefaultFileName"] !== null) {
            $this->DefaultFileName = $param["DefaultFileName"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VariableId",$param) and $param["VariableId"] !== null) {
            $this->VariableId = $param["VariableId"];
        }

        if (array_key_exists("EnableEndpoints",$param) and $param["EnableEndpoints"] !== null) {
            $this->EnableEndpoints = $param["EnableEndpoints"];
        }

        if (array_key_exists("EndpointList",$param) and $param["EndpointList"] !== null) {
            $this->EndpointList = $param["EndpointList"];
        }

        if (array_key_exists("IsBuiltin",$param) and $param["IsBuiltin"] !== null) {
            $this->IsBuiltin = $param["IsBuiltin"];
        }

        if (array_key_exists("EnableSandbox",$param) and $param["EnableSandbox"] !== null) {
            $this->EnableSandbox = $param["EnableSandbox"];
        }
    }
}
