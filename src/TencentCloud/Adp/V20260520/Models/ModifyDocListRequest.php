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
 * ModifyDocList request structure.
 *
 * @method array getDocIdList() Obtain <p>Document ID list to be modified (quantity: 1-20)</p>
 * @method void setDocIdList(array $DocIdList) Set <p>Document ID list to be modified (quantity: 1-20)</p>
 * @method string getKbId() Obtain <p>Knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Knowledge base ID</p>
 * @method string getCategoryId() Obtain <p>Ownership category ID</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Ownership category ID</p>
 * @method integer getEffectiveDomain() Obtain <p>Application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method void setEffectiveDomain(integer $EffectiveDomain) Set <p>Application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method ExpirationPolicy getExpirationPolicy() Obtain <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) Set <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method DocExternalLink getExternalLink() Obtain <p>External link</p>
 * @method void setExternalLink(DocExternalLink $ExternalLink) Set <p>External link</p>
 * @method LabelRefIdentityList getLabelRefList() Obtain <p>Tag list.</p>
 * @method void setLabelRefList(LabelRefIdentityList $LabelRefList) Set <p>Tag list.</p>
 * @method DocSwitch getSwitch() Obtain <p>Switch configuration</p>
 * @method void setSwitch(DocSwitch $Switch) Set <p>Switch configuration</p>
 */
class ModifyDocListRequest extends AbstractModel
{
    /**
     * @var array <p>Document ID list to be modified (quantity: 1-20)</p>
     */
    public $DocIdList;

    /**
     * @var string <p>Knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var string <p>Ownership category ID</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>Application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
     */
    public $EffectiveDomain;

    /**
     * @var ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     */
    public $ExpirationPolicy;

    /**
     * @var DocExternalLink <p>External link</p>
     */
    public $ExternalLink;

    /**
     * @var LabelRefIdentityList <p>Tag list.</p>
     */
    public $LabelRefList;

    /**
     * @var DocSwitch <p>Switch configuration</p>
     */
    public $Switch;

    /**
     * @param array $DocIdList <p>Document ID list to be modified (quantity: 1-20)</p>
     * @param string $KbId <p>Knowledge base ID</p>
     * @param string $CategoryId <p>Ownership category ID</p>
     * @param integer $EffectiveDomain <p>Application scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
     * @param ExpirationPolicy $ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     * @param DocExternalLink $ExternalLink <p>External link</p>
     * @param LabelRefIdentityList $LabelRefList <p>Tag list.</p>
     * @param DocSwitch $Switch <p>Switch configuration</p>
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
        if (array_key_exists("DocIdList",$param) and $param["DocIdList"] !== null) {
            $this->DocIdList = $param["DocIdList"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
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

        if (array_key_exists("ExternalLink",$param) and $param["ExternalLink"] !== null) {
            $this->ExternalLink = new DocExternalLink();
            $this->ExternalLink->deserialize($param["ExternalLink"]);
        }

        if (array_key_exists("LabelRefList",$param) and $param["LabelRefList"] !== null) {
            $this->LabelRefList = new LabelRefIdentityList();
            $this->LabelRefList->deserialize($param["LabelRefList"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = new DocSwitch();
            $this->Switch->deserialize($param["Switch"]);
        }
    }
}
