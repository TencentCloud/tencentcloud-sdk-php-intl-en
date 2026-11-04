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
 * Collection of modifiable QA fields (used in conjunction with update_mask)
 *
 * @method string getAnswer() Obtain <p>Answer</p>
 * @method void setAnswer(string $Answer) Set <p>Answer</p>
 * @method string getCategoryId() Obtain <p>Category ID</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Category ID</p>
 * @method string getDocId() Obtain <p>Associated document ID</p>
 * @method void setDocId(string $DocId) Set <p>Associated document ID</p>
 * @method integer getEffectiveDomain() Obtain <p>Knowledge application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method void setEffectiveDomain(integer $EffectiveDomain) Set <p>Knowledge application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method ExpirationPolicy getExpirationPolicy() Obtain <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) Set <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method boolean getIsAccepted() Obtain <p>Whether to adopt (verification passed)</p>
 * @method void setIsAccepted(boolean $IsAccepted) Set <p>Whether to adopt (verification passed)</p>
 * @method array getLabelRefList() Obtain <p>Applicable scope (tag condition).</p>
 * @method void setLabelRefList(array $LabelRefList) Set <p>Applicable scope (tag condition).</p>
 * @method string getQuestion() Obtain <p>Query</p>
 * @method void setQuestion(string $Question) Set <p>Query</p>
 * @method string getQuestionDescription() Obtain <p>Problem description</p>
 * @method void setQuestionDescription(string $QuestionDescription) Set <p>Problem description</p>
 * @method array getSimilarQuestionList() Obtain <p>Similar question modification list</p>
 * @method void setSimilarQuestionList(array $SimilarQuestionList) Set <p>Similar question modification list</p>
 */
class QAModifyFields extends AbstractModel
{
    /**
     * @var string <p>Answer</p>
     */
    public $Answer;

    /**
     * @var string <p>Category ID</p>
     */
    public $CategoryId;

    /**
     * @var string <p>Associated document ID</p>
     */
    public $DocId;

    /**
     * @var integer <p>Knowledge application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
     */
    public $EffectiveDomain;

    /**
     * @var ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     */
    public $ExpirationPolicy;

    /**
     * @var boolean <p>Whether to adopt (verification passed)</p>
     */
    public $IsAccepted;

    /**
     * @var array <p>Applicable scope (tag condition).</p>
     */
    public $LabelRefList;

    /**
     * @var string <p>Query</p>
     */
    public $Question;

    /**
     * @var string <p>Problem description</p>
     */
    public $QuestionDescription;

    /**
     * @var array <p>Similar question modification list</p>
     */
    public $SimilarQuestionList;

    /**
     * @param string $Answer <p>Answer</p>
     * @param string $CategoryId <p>Category ID</p>
     * @param string $DocId <p>Associated document ID</p>
     * @param integer $EffectiveDomain <p>Knowledge application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
     * @param ExpirationPolicy $ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     * @param boolean $IsAccepted <p>Whether to adopt (verification passed)</p>
     * @param array $LabelRefList <p>Applicable scope (tag condition).</p>
     * @param string $Question <p>Query</p>
     * @param string $QuestionDescription <p>Problem description</p>
     * @param array $SimilarQuestionList <p>Similar question modification list</p>
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
        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("EffectiveDomain",$param) and $param["EffectiveDomain"] !== null) {
            $this->EffectiveDomain = $param["EffectiveDomain"];
        }

        if (array_key_exists("ExpirationPolicy",$param) and $param["ExpirationPolicy"] !== null) {
            $this->ExpirationPolicy = new ExpirationPolicy();
            $this->ExpirationPolicy->deserialize($param["ExpirationPolicy"]);
        }

        if (array_key_exists("IsAccepted",$param) and $param["IsAccepted"] !== null) {
            $this->IsAccepted = $param["IsAccepted"];
        }

        if (array_key_exists("LabelRefList",$param) and $param["LabelRefList"] !== null) {
            $this->LabelRefList = [];
            foreach ($param["LabelRefList"] as $key => $value){
                $obj = new LabelRefIdentity();
                $obj->deserialize($value);
                array_push($this->LabelRefList, $obj);
            }
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("QuestionDescription",$param) and $param["QuestionDescription"] !== null) {
            $this->QuestionDescription = $param["QuestionDescription"];
        }

        if (array_key_exists("SimilarQuestionList",$param) and $param["SimilarQuestionList"] !== null) {
            $this->SimilarQuestionList = [];
            foreach ($param["SimilarQuestionList"] as $key => $value){
                $obj = new SimilarQuestionModifySpec();
                $obj->deserialize($value);
                array_push($this->SimilarQuestionList, $obj);
            }
        }
    }
}
