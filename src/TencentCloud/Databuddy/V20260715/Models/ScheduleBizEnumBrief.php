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
 * Enumeration item statistics (such as quantity distribution of running states and error codes)
 *
 * @method string getLabelKey() Obtain Enumerate tag keys
 * @method void setLabelKey(string $LabelKey) Set Enumerate tag keys
 * @method string getLabelValue() Obtain Enumerate tag values.
 * @method void setLabelValue(string $LabelValue) Set Enumerate tag values.
 * @method integer getCount() Obtain Statistical quantity of enumeration items
 * @method void setCount(integer $Count) Set Statistical quantity of enumeration items
 */
class ScheduleBizEnumBrief extends AbstractModel
{
    /**
     * @var string Enumerate tag keys
     */
    public $LabelKey;

    /**
     * @var string Enumerate tag values.
     */
    public $LabelValue;

    /**
     * @var integer Statistical quantity of enumeration items
     */
    public $Count;

    /**
     * @param string $LabelKey Enumerate tag keys
     * @param string $LabelValue Enumerate tag values.
     * @param integer $Count Statistical quantity of enumeration items
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
