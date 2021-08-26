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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a scheduled scaling policy
 *
 * @method string getStartAt() Obtain Triggering time, in the format of HH:MM
Example:
00:00 (Trigger at midnight)
 * @method void setStartAt(string $StartAt) Set Triggering time, in the format of HH:MM
Example:
00:00 (Trigger at midnight)
 * @method integer getTargetReplicas() Obtain Number of target pods (less than 50)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetReplicas(integer $TargetReplicas) Set Number of target pods (less than 50)
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class CronHorizontalAutoscalerSchedule extends AbstractModel
{
    /**
     * @var string Triggering time, in the format of HH:MM
Example:
00:00 (Trigger at midnight)
     */
    public $StartAt;

    /**
     * @var integer Number of target pods (less than 50)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetReplicas;

    /**
     * @param string $StartAt Triggering time, in the format of HH:MM
Example:
00:00 (Trigger at midnight)
     * @param integer $TargetReplicas Number of target pods (less than 50)
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }
    }
}
