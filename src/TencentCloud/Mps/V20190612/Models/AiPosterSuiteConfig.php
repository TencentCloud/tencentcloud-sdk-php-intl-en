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
 * 
 *
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method array getRecipe() Obtain 
 * @method void setRecipe(array $Recipe) Set 
 * @method string getLanguage() Obtain 
 * @method void setLanguage(string $Language) Set 
 * @method string getPanelRatio() Obtain 
 * @method void setPanelRatio(string $PanelRatio) Set 
 * @method string getPanelResolution() Obtain 
 * @method void setPanelResolution(string $PanelResolution) Set 
 * @method array getCustomVariables() Obtain 
 * @method void setCustomVariables(array $CustomVariables) Set 
 * @method string getModel() Obtain 
 * @method void setModel(string $Model) Set 
 */
class AiPosterSuiteConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var array 
     */
    public $Recipe;

    /**
     * @var string 
     */
    public $Language;

    /**
     * @var string 
     */
    public $PanelRatio;

    /**
     * @var string 
     */
    public $PanelResolution;

    /**
     * @var array 
     */
    public $CustomVariables;

    /**
     * @var string 
     */
    public $Model;

    /**
     * @param string $Mode 
     * @param integer $Definition 
     * @param array $Recipe 
     * @param string $Language 
     * @param string $PanelRatio 
     * @param string $PanelResolution 
     * @param array $CustomVariables 
     * @param string $Model 
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
