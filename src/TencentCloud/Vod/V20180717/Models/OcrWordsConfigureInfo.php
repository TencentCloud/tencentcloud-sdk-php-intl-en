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
 * Text keyword recognition control parameters.
 *
 * @method string getSwitch() Obtain Text keyword recognition task switch. Available values:
<li>ON: enable the text keyword recognition task;</li>
<li>OFF: Disable the text keyword recognition task.</li>
 * @method void setSwitch(string $Switch) Set Text keyword recognition task switch. Available values:
<li>ON: enable the text keyword recognition task;</li>
<li>OFF: Disable the text keyword recognition task.</li>
 * @method array getLabelSet() Obtain Keyword filtering tag. Specify the tag of the keyword to return. If this parameter is left empty, all results are returned.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
 * @method void setLabelSet(array $LabelSet) Set Keyword filtering tag. Specify the tag of the keyword to return. If this parameter is left empty, all results are returned.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
 */
class OcrWordsConfigureInfo extends AbstractModel
{
    /**
     * @var string Text keyword recognition task switch. Available values:
<li>ON: enable the text keyword recognition task;</li>
<li>OFF: Disable the text keyword recognition task.</li>
     */
    public $Switch;

    /**
     * @var array Keyword filtering tag. Specify the tag of the keyword to return. If this parameter is left empty, all results are returned.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
     */
    public $LabelSet;

    /**
     * @param string $Switch Text keyword recognition task switch. Available values:
<li>ON: enable the text keyword recognition task;</li>
<li>OFF: Disable the text keyword recognition task.</li>
     * @param array $LabelSet Keyword filtering tag. Specify the tag of the keyword to return. If this parameter is left empty, all results are returned.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("LabelSet",$param) and $param["LabelSet"] !== null) {
            $this->LabelSet = $param["LabelSet"];
        }
    }
}
