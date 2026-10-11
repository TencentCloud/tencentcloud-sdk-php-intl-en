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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag information
 *
 * @method string getLabelKey() Obtain Tag name.
 * @method void setLabelKey(string $LabelKey) Set Tag name.
 * @method string getLabelValue() Obtain Tag value.
 * @method void setLabelValue(string $LabelValue) Set Tag value.
 * @method string getLabelKeyId() Obtain Tag name ID, obtainable through tag-related APIs
 * @method void setLabelKeyId(string $LabelKeyId) Set Tag name ID, obtainable through tag-related APIs
 * @method string getLabelValueId() Obtain Tag value ID, which can be obtained through tag relevant APIs.
 * @method void setLabelValueId(string $LabelValueId) Set Tag value ID, which can be obtained through tag relevant APIs.
 */
class LabelBrief extends AbstractModel
{
    /**
     * @var string Tag name.
     */
    public $LabelKey;

    /**
     * @var string Tag value.
     */
    public $LabelValue;

    /**
     * @var string Tag name ID, obtainable through tag-related APIs
     */
    public $LabelKeyId;

    /**
     * @var string Tag value ID, which can be obtained through tag relevant APIs.
     */
    public $LabelValueId;

    /**
     * @param string $LabelKey Tag name.
     * @param string $LabelValue Tag value.
     * @param string $LabelKeyId Tag name ID, obtainable through tag-related APIs
     * @param string $LabelValueId Tag value ID, which can be obtained through tag relevant APIs.
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
        if (array_key_exists("LabelKey",$param) and $param["LabelKey"] !== null) {
            $this->LabelKey = $param["LabelKey"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }

        if (array_key_exists("LabelKeyId",$param) and $param["LabelKeyId"] !== null) {
            $this->LabelKeyId = $param["LabelKeyId"];
        }

        if (array_key_exists("LabelValueId",$param) and $param["LabelValueId"] !== null) {
            $this->LabelValueId = $param["LabelValueId"];
        }
    }
}
