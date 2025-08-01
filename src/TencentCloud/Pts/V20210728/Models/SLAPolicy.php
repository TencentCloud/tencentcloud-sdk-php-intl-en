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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SLA policy.
 *
 * @method array getSLARules() Obtain SLA rules.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSLARules(array $SLARules) Set SLA rules.

Note: This field may return null, indicating that no valid value is found.
 * @method AlertChannel getAlertChannel() Obtain Alert notification channel.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAlertChannel(AlertChannel $AlertChannel) Set Alert notification channel.

Note: This field may return null, indicating that no valid value is found.
 */
class SLAPolicy extends AbstractModel
{
    /**
     * @var array SLA rules.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SLARules;

    /**
     * @var AlertChannel Alert notification channel.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AlertChannel;

    /**
     * @param array $SLARules SLA rules.

Note: This field may return null, indicating that no valid value is found.
     * @param AlertChannel $AlertChannel Alert notification channel.

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
        if (array_key_exists("SLARules",$param) and $param["SLARules"] !== null) {
            $this->SLARules = [];
            foreach ($param["SLARules"] as $key => $value){
                $obj = new SLARule();
                $obj->deserialize($value);
                array_push($this->SLARules, $obj);
            }
        }

        if (array_key_exists("AlertChannel",$param) and $param["AlertChannel"] !== null) {
            $this->AlertChannel = new AlertChannel();
            $this->AlertChannel->deserialize($param["AlertChannel"]);
        }
    }
}
