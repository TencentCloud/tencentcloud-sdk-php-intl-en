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
 * Create custom input.
 *
 * @method string getElementName() Obtain <p>Subject name.</p>
 * @method void setElementName(string $ElementName) Set <p>Subject name.</p>
 * @method string getElementDescription() Obtain <p>Subject description.</p>
 * @method void setElementDescription(string $ElementDescription) Set <p>Subject description.</p>
 * @method string getReferenceType() Obtain <p>Subject reference method.</p>
 * @method void setReferenceType(string $ReferenceType) Set <p>Subject reference method.</p>
 * @method string getElementVoiceId() Obtain <p>Main voice type.</p>
 * @method void setElementVoiceId(string $ElementVoiceId) Set <p>Main voice type.</p>
 * @method string getElementVideoList() Obtain <p>Reference video.</p>
 * @method void setElementVideoList(string $ElementVideoList) Set <p>Reference video.</p>
 * @method string getElementImageList() Obtain <p>Subject reference diagram.</p>
 * @method void setElementImageList(string $ElementImageList) Set <p>Subject reference diagram.</p>
 * @method string getTagList() Obtain <p>Subject configuration tag.</p>
 * @method void setTagList(string $TagList) Set <p>Subject configuration tag.</p>
 */
class CreateAigcAdvancedCustomElementInput extends AbstractModel
{
    /**
     * @var string <p>Subject name.</p>
     */
    public $ElementName;

    /**
     * @var string <p>Subject description.</p>
     */
    public $ElementDescription;

    /**
     * @var string <p>Subject reference method.</p>
     */
    public $ReferenceType;

    /**
     * @var string <p>Main voice type.</p>
     */
    public $ElementVoiceId;

    /**
     * @var string <p>Reference video.</p>
     */
    public $ElementVideoList;

    /**
     * @var string <p>Subject reference diagram.</p>
     */
    public $ElementImageList;

    /**
     * @var string <p>Subject configuration tag.</p>
     */
    public $TagList;

    /**
     * @param string $ElementName <p>Subject name.</p>
     * @param string $ElementDescription <p>Subject description.</p>
     * @param string $ReferenceType <p>Subject reference method.</p>
     * @param string $ElementVoiceId <p>Main voice type.</p>
     * @param string $ElementVideoList <p>Reference video.</p>
     * @param string $ElementImageList <p>Subject reference diagram.</p>
     * @param string $TagList <p>Subject configuration tag.</p>
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
