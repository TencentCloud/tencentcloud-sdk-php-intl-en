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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow execution business enumeration info.
 *
 * @method string getLabelKey() Obtain Tag key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabelKey(string $LabelKey) Set Tag key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabelValue() Obtain Tag value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabelValue(string $LabelValue) Set Tag value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Total number of tags.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Total number of tags.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BizStateEnumInfoBrief extends AbstractModel
{
    /**
     * @var string Tag key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LabelKey;

    /**
     * @var string Tag value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LabelValue;

    /**
     * @var integer Total number of tags.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @param string $LabelKey Tag key.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LabelValue Tag value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Total number of tags.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
