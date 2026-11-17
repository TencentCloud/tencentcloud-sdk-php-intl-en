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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skipped check items
 *
 * @method string getCheck() Obtain <p>Detection item name</p>
 * @method void setCheck(string $Check) Set <p>Detection item name</p>
 * @method string getReason() Obtain <p>Skip reason: NotSupported (this card type does not support this detection item) / NotApplicable (prerequisite not met, for example, consistency check requires a back image)</p>
 * @method void setReason(string $Reason) Set <p>Skip reason: NotSupported (this card type does not support this detection item) / NotApplicable (prerequisite not met, for example, consistency check requires a back image)</p>
 */
class SkippedCheck extends AbstractModel
{
    /**
     * @var string <p>Detection item name</p>
     */
    public $Check;

    /**
     * @var string <p>Skip reason: NotSupported (this card type does not support this detection item) / NotApplicable (prerequisite not met, for example, consistency check requires a back image)</p>
     */
    public $Reason;

    /**
     * @param string $Check <p>Detection item name</p>
     * @param string $Reason <p>Skip reason: NotSupported (this card type does not support this detection item) / NotApplicable (prerequisite not met, for example, consistency check requires a back image)</p>
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
        if (array_key_exists("Check",$param) and $param["Check"] !== null) {
            $this->Check = $param["Check"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
