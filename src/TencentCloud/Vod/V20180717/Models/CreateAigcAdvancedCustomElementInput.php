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
 * 
 *
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
 */
class CreateAigcAdvancedCustomElementInput extends AbstractModel
{
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
     * @param string $ElementName 
     * @param string $ElementDescription 
     * @param string $ReferenceType 
     * @param string $ElementVoiceId 
     * @param string $ElementVideoList 
     * @param string $ElementImageList 
     * @param string $TagList 
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
    }
}
