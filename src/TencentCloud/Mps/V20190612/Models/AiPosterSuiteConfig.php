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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent image set configuration.
 *
 * @method string getMode() Obtain <p>Image output mode.</p><p>Enumeration values:</p><ul><li>auto: fully automatic mode. CustomVariables can be passed in this mode.</li><li>modify: modification mode. The corresponding description needs to be provided in the AddOnParameter.ExtPrompt field in this mode. CustomVariables cannot be passed in this mode.</li></ul><p>Default value: auto.</p>
 * @method void setMode(string $Mode) Set <p>Image output mode.</p><p>Enumeration values:</p><ul><li>auto: fully automatic mode. CustomVariables can be passed in this mode.</li><li>modify: modification mode. The corresponding description needs to be provided in the AddOnParameter.ExtPrompt field in this mode. CustomVariables cannot be passed in this mode.</li></ul><p>Default value: auto.</p>
 * @method integer getDefinition() Obtain <p>Ecommerce platform visual template ID.</p><p>If you need a personalized visual template, submit a ticket.</p>
 * @method void setDefinition(integer $Definition) Set <p>Ecommerce platform visual template ID.</p><p>If you need a personalized visual template, submit a ticket.</p>
 * @method array getRecipe() Obtain <p>Sub-image configuration.</p>
 * @method void setRecipe(array $Recipe) Set <p>Sub-image configuration.</p>
 * @method string getLanguage() Obtain <p>Sub-image text language.</p><p>Enumeration values:</p><ul><li>zh-CN: Simplified Chinese.</li><li>en-US: American English.</li></ul><p>Default value: zh-CN.</p><p>If you need more languages, submit a ticket.</p>
 * @method void setLanguage(string $Language) Set <p>Sub-image text language.</p><p>Enumeration values:</p><ul><li>zh-CN: Simplified Chinese.</li><li>en-US: American English.</li></ul><p>Default value: zh-CN.</p><p>If you need more languages, submit a ticket.</p>
 * @method string getPanelRatio() Obtain <p>Sub-image aspect ratio.</p><p>Enumeration values:</p><ul><li>1:1: 1:1.</li><li>3:4: 3:4.</li><li>4:3: 4:3.</li><li>9:16: 9:16.</li><li>16:9: 16:9.</li></ul><p>Default value: 1:1.</p>
 * @method void setPanelRatio(string $PanelRatio) Set <p>Sub-image aspect ratio.</p><p>Enumeration values:</p><ul><li>1:1: 1:1.</li><li>3:4: 3:4.</li><li>4:3: 4:3.</li><li>9:16: 9:16.</li><li>16:9: 16:9.</li></ul><p>Default value: 1:1.</p>
 * @method string getPanelResolution() Obtain <p>Sub-image resolution.</p><p>Enumeration values:</p><ul><li>720: 720.</li><li>1K: 1K.</li><li>2K: 2K.</li><li>4K: 4K.</li></ul><p>Default value: 1K.</p>
 * @method void setPanelResolution(string $PanelResolution) Set <p>Sub-image resolution.</p><p>Enumeration values:</p><ul><li>720: 720.</li><li>1K: 1K.</li><li>2K: 2K.</li><li>4K: 4K.</li></ul><p>Default value: 1K.</p>
 * @method array getCustomVariables() Obtain <p>User-defined variable.</p>
 * @method void setCustomVariables(array $CustomVariables) Set <p>User-defined variable.</p>
 * @method string getModel() Obtain <p>Model name.</p><p>Enumeration value:</p><ul><li>WAND-suite-1.0-flash: WAND-suite-1.0-flash.</li></ul>
 * @method void setModel(string $Model) Set <p>Model name.</p><p>Enumeration value:</p><ul><li>WAND-suite-1.0-flash: WAND-suite-1.0-flash.</li></ul>
 */
class AiPosterSuiteConfig extends AbstractModel
{
    /**
     * @var string <p>Image output mode.</p><p>Enumeration values:</p><ul><li>auto: fully automatic mode. CustomVariables can be passed in this mode.</li><li>modify: modification mode. The corresponding description needs to be provided in the AddOnParameter.ExtPrompt field in this mode. CustomVariables cannot be passed in this mode.</li></ul><p>Default value: auto.</p>
     */
    public $Mode;

    /**
     * @var integer <p>Ecommerce platform visual template ID.</p><p>If you need a personalized visual template, submit a ticket.</p>
     */
    public $Definition;

    /**
     * @var array <p>Sub-image configuration.</p>
     */
    public $Recipe;

    /**
     * @var string <p>Sub-image text language.</p><p>Enumeration values:</p><ul><li>zh-CN: Simplified Chinese.</li><li>en-US: American English.</li></ul><p>Default value: zh-CN.</p><p>If you need more languages, submit a ticket.</p>
     */
    public $Language;

    /**
     * @var string <p>Sub-image aspect ratio.</p><p>Enumeration values:</p><ul><li>1:1: 1:1.</li><li>3:4: 3:4.</li><li>4:3: 4:3.</li><li>9:16: 9:16.</li><li>16:9: 16:9.</li></ul><p>Default value: 1:1.</p>
     */
    public $PanelRatio;

    /**
     * @var string <p>Sub-image resolution.</p><p>Enumeration values:</p><ul><li>720: 720.</li><li>1K: 1K.</li><li>2K: 2K.</li><li>4K: 4K.</li></ul><p>Default value: 1K.</p>
     */
    public $PanelResolution;

    /**
     * @var array <p>User-defined variable.</p>
     */
    public $CustomVariables;

    /**
     * @var string <p>Model name.</p><p>Enumeration value:</p><ul><li>WAND-suite-1.0-flash: WAND-suite-1.0-flash.</li></ul>
     */
    public $Model;

    /**
     * @param string $Mode <p>Image output mode.</p><p>Enumeration values:</p><ul><li>auto: fully automatic mode. CustomVariables can be passed in this mode.</li><li>modify: modification mode. The corresponding description needs to be provided in the AddOnParameter.ExtPrompt field in this mode. CustomVariables cannot be passed in this mode.</li></ul><p>Default value: auto.</p>
     * @param integer $Definition <p>Ecommerce platform visual template ID.</p><p>If you need a personalized visual template, submit a ticket.</p>
     * @param array $Recipe <p>Sub-image configuration.</p>
     * @param string $Language <p>Sub-image text language.</p><p>Enumeration values:</p><ul><li>zh-CN: Simplified Chinese.</li><li>en-US: American English.</li></ul><p>Default value: zh-CN.</p><p>If you need more languages, submit a ticket.</p>
     * @param string $PanelRatio <p>Sub-image aspect ratio.</p><p>Enumeration values:</p><ul><li>1:1: 1:1.</li><li>3:4: 3:4.</li><li>4:3: 4:3.</li><li>9:16: 9:16.</li><li>16:9: 16:9.</li></ul><p>Default value: 1:1.</p>
     * @param string $PanelResolution <p>Sub-image resolution.</p><p>Enumeration values:</p><ul><li>720: 720.</li><li>1K: 1K.</li><li>2K: 2K.</li><li>4K: 4K.</li></ul><p>Default value: 1K.</p>
     * @param array $CustomVariables <p>User-defined variable.</p>
     * @param string $Model <p>Model name.</p><p>Enumeration value:</p><ul><li>WAND-suite-1.0-flash: WAND-suite-1.0-flash.</li></ul>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Recipe",$param) and $param["Recipe"] !== null) {
            $this->Recipe = [];
            foreach ($param["Recipe"] as $key => $value){
                $obj = new RecipeItem();
                $obj->deserialize($value);
                array_push($this->Recipe, $obj);
            }
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("PanelRatio",$param) and $param["PanelRatio"] !== null) {
            $this->PanelRatio = $param["PanelRatio"];
        }

        if (array_key_exists("PanelResolution",$param) and $param["PanelResolution"] !== null) {
            $this->PanelResolution = $param["PanelResolution"];
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = [];
            foreach ($param["CustomVariables"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariables, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
