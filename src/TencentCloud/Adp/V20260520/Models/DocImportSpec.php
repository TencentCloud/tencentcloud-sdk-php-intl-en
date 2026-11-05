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
 * Document import specification (one-time input of non-persistent data)
 *
 * @method string getFileId() Obtain <p>File ID (file identifier obtained through the file management service, required)</p>
 * @method void setFileId(string $FileId) Set <p>File ID (file identifier obtained through the file management service, required)</p>
 * @method string getCategoryId() Obtain <p>Ownership category ID</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Ownership category ID</p>
 * @method array getDeDuplicateStrategyList() Obtain <p>List of rules regarding repeated files</p>
 * @method void setDeDuplicateStrategyList(array $DeDuplicateStrategyList) Set <p>List of rules regarding repeated files</p>
 * @method integer getEffectiveDomain() Obtain <p>Knowledge effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method void setEffectiveDomain(integer $EffectiveDomain) Set <p>Knowledge effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
 * @method ExpirationPolicy getExpirationPolicy() Obtain <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) Set <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method DocExternalLink getExternalLink() Obtain <p>External link</p>
 * @method void setExternalLink(DocExternalLink $ExternalLink) Set <p>External link</p>
 * @method array getLabelRefList() Obtain <p>Applicable scope (tag condition).</p>
 * @method void setLabelRefList(array $LabelRefList) Set <p>Applicable scope (tag condition).</p>
 * @method DocParseConfig getParseConfig() Obtain <p>Parsing configuration (split rules, content filtering, etc.)</p>
 * @method void setParseConfig(DocParseConfig $ParseConfig) Set <p>Parsing configuration (split rules, content filtering, etc.)</p>
 * @method DocSwitch getSwitch() Obtain <p>Switch configuration</p>
 * @method void setSwitch(DocSwitch $Switch) Set <p>Switch configuration</p>
 * @method DocUpdatePeriod getUpdatePeriod() Obtain <p>Update cycle</p>
 * @method void setUpdatePeriod(DocUpdatePeriod $UpdatePeriod) Set <p>Update cycle</p>
 * @method UserAccessConfig getUserAccessConfig() Obtain <p>User access configuration</p>
 * @method void setUserAccessConfig(UserAccessConfig $UserAccessConfig) Set <p>User access configuration</p>
 */
class DocImportSpec extends AbstractModel
{
    /**
     * @var string <p>File ID (file identifier obtained through the file management service, required)</p>
     */
    public $FileId;

    /**
     * @var string <p>Ownership category ID</p>
     */
    public $CategoryId;

    /**
     * @var array <p>List of rules regarding repeated files</p>
     */
    public $DeDuplicateStrategyList;

    /**
     * @var integer <p>Knowledge effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
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
     * @var array <p>Applicable scope (tag condition).</p>
     */
    public $LabelRefList;

    /**
     * @var DocParseConfig <p>Parsing configuration (split rules, content filtering, etc.)</p>
     */
    public $ParseConfig;

    /**
     * @var DocSwitch <p>Switch configuration</p>
     */
    public $Switch;

    /**
     * @var DocUpdatePeriod <p>Update cycle</p>
     */
    public $UpdatePeriod;

    /**
     * @var UserAccessConfig <p>User access configuration</p>
     */
    public $UserAccessConfig;

    /**
     * @param string $FileId <p>File ID (file identifier obtained through the file management service, required)</p>
     * @param string $CategoryId <p>Ownership category ID</p>
     * @param array $DeDuplicateStrategyList <p>List of rules regarding repeated files</p>
     * @param integer $EffectiveDomain <p>Knowledge effective scope<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>Disabled</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>Development domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>Release domain only</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>Global</td></tr></tbody></table></p>
     * @param ExpirationPolicy $ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     * @param DocExternalLink $ExternalLink <p>External link</p>
     * @param array $LabelRefList <p>Applicable scope (tag condition).</p>
     * @param DocParseConfig $ParseConfig <p>Parsing configuration (split rules, content filtering, etc.)</p>
     * @param DocSwitch $Switch <p>Switch configuration</p>
     * @param DocUpdatePeriod $UpdatePeriod <p>Update cycle</p>
     * @param UserAccessConfig $UserAccessConfig <p>User access configuration</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("DeDuplicateStrategyList",$param) and $param["DeDuplicateStrategyList"] !== null) {
            $this->DeDuplicateStrategyList = [];
            foreach ($param["DeDuplicateStrategyList"] as $key => $value){
                $obj = new DeDuplicateStrategy();
                $obj->deserialize($value);
                array_push($this->DeDuplicateStrategyList, $obj);
            }
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
            $this->LabelRefList = [];
            foreach ($param["LabelRefList"] as $key => $value){
                $obj = new LabelRefIdentity();
                $obj->deserialize($value);
                array_push($this->LabelRefList, $obj);
            }
        }

        if (array_key_exists("ParseConfig",$param) and $param["ParseConfig"] !== null) {
            $this->ParseConfig = new DocParseConfig();
            $this->ParseConfig->deserialize($param["ParseConfig"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = new DocSwitch();
            $this->Switch->deserialize($param["Switch"]);
        }

        if (array_key_exists("UpdatePeriod",$param) and $param["UpdatePeriod"] !== null) {
            $this->UpdatePeriod = new DocUpdatePeriod();
            $this->UpdatePeriod->deserialize($param["UpdatePeriod"]);
        }

        if (array_key_exists("UserAccessConfig",$param) and $param["UserAccessConfig"] !== null) {
            $this->UserAccessConfig = new UserAccessConfig();
            $this->UserAccessConfig->deserialize($param["UserAccessConfig"]);
        }
    }
}
