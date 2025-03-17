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
 * Label name and value.
 *
 * @method string getLabelName() Obtain Label Name.
 * @method void setLabelName(string $LabelName) Set Label Name.
 * @method array getLabelValues() Obtain Label values.
 * @method void setLabelValues(array $LabelValues) Set Label values.
 */
class LabelWithValues extends AbstractModel
{
    /**
     * @var string Label Name.
     */
    public $LabelName;

    /**
     * @var array Label values.
     */
    public $LabelValues;

    /**
     * @param string $LabelName Label Name.
     * @param array $LabelValues Label values.
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

        if (array_key_exists("LabelValues",$param) and $param["LabelValues"] !== null) {
            $this->LabelValues = $param["LabelValues"];
        }
    }
}
