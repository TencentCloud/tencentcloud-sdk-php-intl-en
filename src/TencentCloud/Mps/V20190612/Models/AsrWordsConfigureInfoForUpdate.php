<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speech keyword recognition control parameter.
 *
 * @method string getSwitch() Obtain Switch of a speech keyword recognition task. Valid values:
<li>ON: Enables a speech keyword recognition task;</li>
<li>OFF: Disables a speech keyword recognition task.</li>
 * @method void setSwitch(string $Switch) Set Switch of a speech keyword recognition task. Valid values:
<li>ON: Enables a speech keyword recognition task;</li>
<li>OFF: Disables a speech keyword recognition task.</li>
 * @method array getLabelSet() Obtain Keyword filter tag, which specifies the keyword tag that needs to be returned. If this parameter is left empty, all results will be returned.
There can be up to 10 tags, each with a length limit of 16 characters.
 * @method void setLabelSet(array $LabelSet) Set Keyword filter tag, which specifies the keyword tag that needs to be returned. If this parameter is left empty, all results will be returned.
There can be up to 10 tags, each with a length limit of 16 characters.
 */
class AsrWordsConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Switch of a speech keyword recognition task. Valid values:
<li>ON: Enables a speech keyword recognition task;</li>
<li>OFF: Disables a speech keyword recognition task.</li>
     */
    public $Switch;

    /**
     * @var array Keyword filter tag, which specifies the keyword tag that needs to be returned. If this parameter is left empty, all results will be returned.
There can be up to 10 tags, each with a length limit of 16 characters.
     */
    public $LabelSet;

    /**
     * @param string $Switch Switch of a speech keyword recognition task. Valid values:
<li>ON: Enables a speech keyword recognition task;</li>
<li>OFF: Disables a speech keyword recognition task.</li>
     * @param array $LabelSet Keyword filter tag, which specifies the keyword tag that needs to be returned. If this parameter is left empty, all results will be returned.
There can be up to 10 tags, each with a length limit of 16 characters.
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
