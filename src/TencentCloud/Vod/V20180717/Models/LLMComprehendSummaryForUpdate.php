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
 * Large model parsing segment summary parse configuration
 *
 * @method string getSwitch() Obtain Segment summary task switch, available values:
-ON: Enable segment summary task.
-OFF: Disable segment summary.
 * @method void setSwitch(string $Switch) Set Segment summary task switch, available values:
-ON: Enable segment summary task.
-OFF: Disable segment summary.
 * @method string getExtendedParameter() Obtain Extended parameter, which is a serialized json string. See [Extended Parameter description](https://www.tencentcloud.com/document/product/862/104493?from_cn_redirect=1#note).
 * @method void setExtendedParameter(string $ExtendedParameter) Set Extended parameter, which is a serialized json string. See [Extended Parameter description](https://www.tencentcloud.com/document/product/862/104493?from_cn_redirect=1#note).
 */
class LLMComprehendSummaryForUpdate extends AbstractModel
{
    /**
     * @var string Segment summary task switch, available values:
-ON: Enable segment summary task.
-OFF: Disable segment summary.
     */
    public $Switch;

    /**
     * @var string Extended parameter, which is a serialized json string. See [Extended Parameter description](https://www.tencentcloud.com/document/product/862/104493?from_cn_redirect=1#note).
     */
    public $ExtendedParameter;

    /**
     * @param string $Switch Segment summary task switch, available values:
-ON: Enable segment summary task.
-OFF: Disable segment summary.
     * @param string $ExtendedParameter Extended parameter, which is a serialized json string. See [Extended Parameter description](https://www.tencentcloud.com/document/product/862/104493?from_cn_redirect=1#note).
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

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }
    }
}
