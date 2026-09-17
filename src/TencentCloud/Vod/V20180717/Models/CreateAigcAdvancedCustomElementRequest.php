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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcAdvancedCustomElement request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getElementName() Obtain 
 * @method void setElementName(string $ElementName) Set 
 * @method string getElementDescription() Obtain 
 * @method void setElementDescription(string $ElementDescription) Set 
 * @method string getReferenceType() Obtain 
 * @method void setReferenceType(string $ReferenceType) Set 
 * @method string getElementVoiceId() Obtain 
 * @method void setElementVoiceId(string $ElementVoiceId) Set 
 * @method string getElementVideoList() Obtain 
 * @method void setElementVideoList(string $ElementVideoList) Set 
 * @method string getElementImageList() Obtain 
 * @method void setElementImageList(string $ElementImageList) Set 
 * @method string getTagList() Obtain 
 * @method void setTagList(string $TagList) Set 
 * @method string getDisableModeration() Obtain 
 * @method void setDisableModeration(string $DisableModeration) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 */
class CreateAigcAdvancedCustomElementRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $ElementName;

    /**
     * @var string 
     */
    public $ElementDescription;

    /**
     * @var string 
     */
    public $ReferenceType;

    /**
     * @var string 
     */
    public $ElementVoiceId;

    /**
     * @var string 
     */
    public $ElementVideoList;

    /**
     * @var string 
     */
    public $ElementImageList;

    /**
     * @var string 
     */
    public $TagList;

    /**
     * @var string 
     */
    public $DisableModeration;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId 
     * @param string $ElementName 
     * @param string $ElementDescription 
     * @param string $ReferenceType 
     * @param string $ElementVoiceId 
     * @param string $ElementVideoList 
     * @param string $ElementImageList 
     * @param string $TagList 
     * @param string $DisableModeration 
     * @param string $SessionId 
     * @param string $SessionContext 
     * @param integer $TasksPriority 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ElementDescription",$param) and $param["ElementDescription"] !== null) {
            $this->ElementDescription = $param["ElementDescription"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ElementVoiceId",$param) and $param["ElementVoiceId"] !== null) {
            $this->ElementVoiceId = $param["ElementVoiceId"];
        }

        if (array_key_exists("ElementVideoList",$param) and $param["ElementVideoList"] !== null) {
            $this->ElementVideoList = $param["ElementVideoList"];
        }

        if (array_key_exists("ElementImageList",$param) and $param["ElementImageList"] !== null) {
            $this->ElementImageList = $param["ElementImageList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }

        if (array_key_exists("DisableModeration",$param) and $param["DisableModeration"] !== null) {
            $this->DisableModeration = $param["DisableModeration"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
