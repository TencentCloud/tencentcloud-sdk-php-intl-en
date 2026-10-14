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
 * Question of the questionnaire
 *
 * @method integer getIndex() Obtain <p>Serial number of the issue</p>
 * @method void setIndex(integer $Index) Set <p>Serial number of the issue</p>
 * @method string getQuestion() Obtain <p>Content of the issue</p>
 * @method void setQuestion(string $Question) Set <p>Content of the issue</p>
 * @method integer getType() Obtain <p>Problem type</p>
 * @method void setType(integer $Type) Set <p>Problem type</p>
 * @method boolean getRequired() Obtain <p>Required or optional</p>
 * @method void setRequired(boolean $Required) Set <p>Required or optional</p>
 * @method array getOptions() Obtain <p>Options for the question</p>
 * @method void setOptions(array $Options) Set <p>Options for the question</p>
 */
class QuestionnaireQuestion extends AbstractModel
{
    /**
     * @var integer <p>Serial number of the issue</p>
     */
    public $Index;

    /**
     * @var string <p>Content of the issue</p>
     */
    public $Question;

    /**
     * @var integer <p>Problem type</p>
     */
    public $Type;

    /**
     * @var boolean <p>Required or optional</p>
     */
    public $Required;

    /**
     * @var array <p>Options for the question</p>
     */
    public $Options;

    /**
     * @param integer $Index <p>Serial number of the issue</p>
     * @param string $Question <p>Content of the issue</p>
     * @param integer $Type <p>Problem type</p>
     * @param boolean $Required <p>Required or optional</p>
     * @param array $Options <p>Options for the question</p>
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
