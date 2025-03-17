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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SLA label.
 *
 * @method string getLabelName() Obtain Label name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLabelName(string $LabelName) Set Label name.

Note: This field may return null, indicating that no valid value is found.
 * @method string getLabelValue() Obtain Label value.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLabelValue(string $LabelValue) Set Label value.

Note: This field may return null, indicating that no valid value is found.
 */
class SLALabel extends AbstractModel
{
    /**
     * @var string Label name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LabelName;

    /**
     * @var string Label value.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LabelValue;

    /**
     * @param string $LabelName Label name.

Note: This field may return null, indicating that no valid value is found.
     * @param string $LabelValue Label value.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }
    }
}
