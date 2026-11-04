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
 * ModifyQAList request structure.
 *
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 * @method array getQaIdList() Obtain <p>List of QA IDs to be modified (quantity: 1-20)</p>
 * @method void setQaIdList(array $QaIdList) Set <p>List of QA IDs to be modified (quantity: 1-20)</p>
 * @method string getCategoryId() Obtain <p>Category ID</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Category ID</p>
 * @method integer getEffectiveDomain() Obtain <p>Effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method void setEffectiveDomain(integer $EffectiveDomain) Set <p>Effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method ExpirationPolicy getExpirationPolicy() Obtain <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) Set <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method boolean getIsAccepted() Obtain <p>Whether to adopt (verification passed)</p>
 * @method void setIsAccepted(boolean $IsAccepted) Set <p>Whether to adopt (verification passed)</p>
 * @method LabelRefIdentityList getLabelRefList() Obtain <p>Applicable scope (tag condition list).</p>
 * @method void setLabelRefList(LabelRefIdentityList $LabelRefList) Set <p>Applicable scope (tag condition list).</p>
 */
class ModifyQAListRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @var array <p>List of QA IDs to be modified (quantity: 1-20)</p>
     */
    public $QaIdList;

    /**
     * @var string <p>Category ID</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>Effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
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
     * @var LabelRefIdentityList <p>Applicable scope (tag condition list).</p>
     */
    public $LabelRefList;

    /**
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
     * @param array $QaIdList <p>List of QA IDs to be modified (quantity: 1-20)</p>
     * @param string $CategoryId <p>Category ID</p>
     * @param integer $EffectiveDomain <p>Effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
     * @param ExpirationPolicy $ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     * @param boolean $IsAccepted <p>Whether to adopt (verification passed)</p>
     * @param LabelRefIdentityList $LabelRefList <p>Applicable scope (tag condition list).</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("QaIdList",$param) and $param["QaIdList"] !== null) {
            $this->QaIdList = $param["QaIdList"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
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
            $this->LabelRefList = new LabelRefIdentityList();
            $this->LabelRefList->deserialize($param["LabelRefList"]);
        }
    }
}
