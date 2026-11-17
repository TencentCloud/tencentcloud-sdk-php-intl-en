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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * sdk access configuration
 *
 * @method string getDomain() Obtain <p>Service id.</p>
 * @method void setDomain(string $Domain) Set <p>Service id.</p>
 * @method string getName() Obtain <p>Service name.</p>
 * @method void setName(string $Name) Set <p>Service name.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getSdkSource() Obtain <p>SDK access source. This parameter is optional.</p>
 * @method void setSdkSource(string $SdkSource) Set <p>SDK access source. This parameter is optional.</p>
 * @method boolean getMainStatus() Obtain <p>Master switch.</p>
 * @method void setMainStatus(boolean $MainStatus) Set <p>Master switch.</p>
 * @method boolean getLimitRuleStatus() Obtain <p>Rate limiting switch.</p>
 * @method void setLimitRuleStatus(boolean $LimitRuleStatus) Set <p>Rate limiting switch.</p>
 * @method boolean getContentRuleStatus() Obtain <p>Content security switch.</p>
 * @method void setContentRuleStatus(boolean $ContentRuleStatus) Set <p>Content security switch.</p>
 * @method integer getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time.</p>
 * @method integer getUpdateTime() Obtain <p>Modification time.</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Modification time.</p>
 * @method integer getLimitRuleCount() Obtain <p>Number of rate limiting rules.</p>
 * @method void setLimitRuleCount(integer $LimitRuleCount) Set <p>Number of rate limiting rules.</p>
 * @method integer getContentRuleCount() Obtain <p>Number of content security rules.</p>
 * @method void setContentRuleCount(integer $ContentRuleCount) Set <p>Number of content security rules.</p>
 * @method boolean getToolCallStatus() Obtain <p>Tool call protection switch.</p>
 * @method void setToolCallStatus(boolean $ToolCallStatus) Set <p>Tool call protection switch.</p>
 * @method boolean getLLMProtectStatus() Obtain <p>llm inference protection switch.</p>
 * @method void setLLMProtectStatus(boolean $LLMProtectStatus) Set <p>llm inference protection switch.</p>
 * @method boolean getContentComplianceStatus() Obtain <p>Content compliance detection switch.</p>
 * @method void setContentComplianceStatus(boolean $ContentComplianceStatus) Set <p>Content compliance detection switch.</p>
 * @method boolean getDLPStatus() Obtain <p>dlp protection switch.</p>
 * @method void setDLPStatus(boolean $DLPStatus) Set <p>dlp protection switch.</p>
 * @method boolean getSkillsStatus() Obtain <p>skills protection switch.</p>
 * @method void setSkillsStatus(boolean $SkillsStatus) Set <p>skills protection switch.</p>
 * @method boolean getIntentStatus() Obtain <p>Intent recognition detection switch.</p>
 * @method void setIntentStatus(boolean $IntentStatus) Set <p>Intent recognition detection switch.</p>
 * @method boolean getUrlDetectStatus() Obtain <p>Malicious URL detection switch.</p>
 * @method void setUrlDetectStatus(boolean $UrlDetectStatus) Set <p>Malicious URL detection switch.</p>
 * @method integer getEffectiveRules() Obtain <p>Number of effective rules.</p>
 * @method void setEffectiveRules(integer $EffectiveRules) Set <p>Number of effective rules.</p>
 */
class LLMSdkAccessItem extends AbstractModel
{
    /**
     * @var string <p>Service id.</p>
     */
    public $Domain;

    /**
     * @var string <p>Service name.</p>
     */
    public $Name;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>SDK access source. This parameter is optional.</p>
     */
    public $SdkSource;

    /**
     * @var boolean <p>Master switch.</p>
     */
    public $MainStatus;

    /**
     * @var boolean <p>Rate limiting switch.</p>
     */
    public $LimitRuleStatus;

    /**
     * @var boolean <p>Content security switch.</p>
     */
    public $ContentRuleStatus;

    /**
     * @var integer <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Modification time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Number of rate limiting rules.</p>
     */
    public $LimitRuleCount;

    /**
     * @var integer <p>Number of content security rules.</p>
     */
    public $ContentRuleCount;

    /**
     * @var boolean <p>Tool call protection switch.</p>
     */
    public $ToolCallStatus;

    /**
     * @var boolean <p>llm inference protection switch.</p>
     */
    public $LLMProtectStatus;

    /**
     * @var boolean <p>Content compliance detection switch.</p>
     */
    public $ContentComplianceStatus;

    /**
     * @var boolean <p>dlp protection switch.</p>
     */
    public $DLPStatus;

    /**
     * @var boolean <p>skills protection switch.</p>
     */
    public $SkillsStatus;

    /**
     * @var boolean <p>Intent recognition detection switch.</p>
     */
    public $IntentStatus;

    /**
     * @var boolean <p>Malicious URL detection switch.</p>
     */
    public $UrlDetectStatus;

    /**
     * @var integer <p>Number of effective rules.</p>
     */
    public $EffectiveRules;

    /**
     * @param string $Domain <p>Service id.</p>
     * @param string $Name <p>Service name.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $SdkSource <p>SDK access source. This parameter is optional.</p>
     * @param boolean $MainStatus <p>Master switch.</p>
     * @param boolean $LimitRuleStatus <p>Rate limiting switch.</p>
     * @param boolean $ContentRuleStatus <p>Content security switch.</p>
     * @param integer $CreateTime <p>Creation time.</p>
     * @param integer $UpdateTime <p>Modification time.</p>
     * @param integer $LimitRuleCount <p>Number of rate limiting rules.</p>
     * @param integer $ContentRuleCount <p>Number of content security rules.</p>
     * @param boolean $ToolCallStatus <p>Tool call protection switch.</p>
     * @param boolean $LLMProtectStatus <p>llm inference protection switch.</p>
     * @param boolean $ContentComplianceStatus <p>Content compliance detection switch.</p>
     * @param boolean $DLPStatus <p>dlp protection switch.</p>
     * @param boolean $SkillsStatus <p>skills protection switch.</p>
     * @param boolean $IntentStatus <p>Intent recognition detection switch.</p>
     * @param boolean $UrlDetectStatus <p>Malicious URL detection switch.</p>
     * @param integer $EffectiveRules <p>Number of effective rules.</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SdkSource",$param) and $param["SdkSource"] !== null) {
            $this->SdkSource = $param["SdkSource"];
        }

        if (array_key_exists("MainStatus",$param) and $param["MainStatus"] !== null) {
            $this->MainStatus = $param["MainStatus"];
        }

        if (array_key_exists("LimitRuleStatus",$param) and $param["LimitRuleStatus"] !== null) {
            $this->LimitRuleStatus = $param["LimitRuleStatus"];
        }

        if (array_key_exists("ContentRuleStatus",$param) and $param["ContentRuleStatus"] !== null) {
            $this->ContentRuleStatus = $param["ContentRuleStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LimitRuleCount",$param) and $param["LimitRuleCount"] !== null) {
            $this->LimitRuleCount = $param["LimitRuleCount"];
        }

        if (array_key_exists("ContentRuleCount",$param) and $param["ContentRuleCount"] !== null) {
            $this->ContentRuleCount = $param["ContentRuleCount"];
        }

        if (array_key_exists("ToolCallStatus",$param) and $param["ToolCallStatus"] !== null) {
            $this->ToolCallStatus = $param["ToolCallStatus"];
        }

        if (array_key_exists("LLMProtectStatus",$param) and $param["LLMProtectStatus"] !== null) {
            $this->LLMProtectStatus = $param["LLMProtectStatus"];
        }

        if (array_key_exists("ContentComplianceStatus",$param) and $param["ContentComplianceStatus"] !== null) {
            $this->ContentComplianceStatus = $param["ContentComplianceStatus"];
        }

        if (array_key_exists("DLPStatus",$param) and $param["DLPStatus"] !== null) {
            $this->DLPStatus = $param["DLPStatus"];
        }

        if (array_key_exists("SkillsStatus",$param) and $param["SkillsStatus"] !== null) {
            $this->SkillsStatus = $param["SkillsStatus"];
        }

        if (array_key_exists("IntentStatus",$param) and $param["IntentStatus"] !== null) {
            $this->IntentStatus = $param["IntentStatus"];
        }

        if (array_key_exists("UrlDetectStatus",$param) and $param["UrlDetectStatus"] !== null) {
            $this->UrlDetectStatus = $param["UrlDetectStatus"];
        }

        if (array_key_exists("EffectiveRules",$param) and $param["EffectiveRules"] !== null) {
            $this->EffectiveRules = $param["EffectiveRules"];
        }
    }
}
