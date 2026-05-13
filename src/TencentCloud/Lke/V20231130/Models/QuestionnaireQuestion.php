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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getIndex() Obtain 
 * @method void setIndex(integer $Index) Set 
 * @method string getQuestion() Obtain 
 * @method void setQuestion(string $Question) Set 
 * @method integer getType() Obtain 
 * @method void setType(integer $Type) Set 
 * @method boolean getRequired() Obtain 
 * @method void setRequired(boolean $Required) Set 
 * @method array getOptions() Obtain 
 * @method void setOptions(array $Options) Set 
 */
class QuestionnaireQuestion extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Index;

    /**
     * @var string 
     */
    public $Question;

    /**
     * @var integer 
     */
    public $Type;

    /**
     * @var boolean 
     */
    public $Required;

    /**
     * @var array 
     */
    public $Options;

    /**
     * @param integer $Index 
     * @param string $Question 
     * @param integer $Type 
     * @param boolean $Required 
     * @param array $Options 
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new QuestionOption();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
