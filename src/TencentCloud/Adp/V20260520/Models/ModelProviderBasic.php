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
 * <p>Basic model provider info (deprecated, please use ModelProviderProfile)</p>
 *
 * @method string getAlias() Obtain <p>Model provider alias</p>
 * @method void setAlias(string $Alias) Set <p>Model provider alias</p>
 * @method string getName() Obtain <p>Model provider name</p>
 * @method void setName(string $Name) Set <p>Model provider name</p>
 * @method integer getProviderType() Obtain <p>Model provider type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>Self-owned provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>Custom model provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>Third-party model provider</td></tr></table>
 * @method void setProviderType(integer $ProviderType) Set <p>Model provider type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>Self-owned provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>Custom model provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>Third-party model provider</td></tr></table>
 */
class ModelProviderBasic extends AbstractModel
{
    /**
     * @var string <p>Model provider alias</p>
     */
    public $Alias;

    /**
     * @var string <p>Model provider name</p>
     */
    public $Name;

    /**
     * @var integer <p>Model provider type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>Self-owned provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>Custom model provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>Third-party model provider</td></tr></table>
     */
    public $ProviderType;

    /**
     * @param string $Alias <p>Model provider alias</p>
     * @param string $Name <p>Model provider name</p>
     * @param integer $ProviderType <p>Model provider type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>Self-owned provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>Custom model provider</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>Third-party model provider</td></tr></table>
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }
    }
}
