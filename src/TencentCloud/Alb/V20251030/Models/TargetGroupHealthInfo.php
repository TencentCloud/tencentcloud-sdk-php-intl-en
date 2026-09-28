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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target group health check status
 *
 * @method boolean getHealthCheckEnabled() Obtain Whether to enable the health check.
 * @method void setHealthCheckEnabled(boolean $HealthCheckEnabled) Set Whether to enable the health check.
 * @method string getTargetGroupId() Obtain Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method array getTargetHealthStatusInfos() Obtain List of service health check statuses.
 * @method void setTargetHealthStatusInfos(array $TargetHealthStatusInfos) Set List of service health check statuses.
 * @method string getType() Obtain Forward action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to an HTTP header.
RemoveHeader: Delete HTTP Header.
Forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order is placed last.
 * @method void setType(string $Type) Set Forward action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to an HTTP header.
RemoveHeader: Delete HTTP Header.
Forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order is placed last.
 */
class TargetGroupHealthInfo extends AbstractModel
{
    /**
     * @var boolean Whether to enable the health check.
     */
    public $HealthCheckEnabled;

    /**
     * @var string Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     */
    public $TargetGroupId;

    /**
     * @var array List of service health check statuses.
     */
    public $TargetHealthStatusInfos;

    /**
     * @var string Forward action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to an HTTP header.
RemoveHeader: Delete HTTP Header.
Forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order is placed last.
     */
    public $Type;

    /**
     * @param boolean $HealthCheckEnabled Whether to enable the health check.
     * @param string $TargetGroupId Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     * @param array $TargetHealthStatusInfos List of service health check statuses.
     * @param string $Type Forward action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to an HTTP header.
RemoveHeader: Delete HTTP Header.
Forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order is placed last.
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
        if (array_key_exists("HealthCheckEnabled",$param) and $param["HealthCheckEnabled"] !== null) {
            $this->HealthCheckEnabled = $param["HealthCheckEnabled"];
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetHealthStatusInfos",$param) and $param["TargetHealthStatusInfos"] !== null) {
            $this->TargetHealthStatusInfos = [];
            foreach ($param["TargetHealthStatusInfos"] as $key => $value){
                $obj = new TargetHealthStatusInfo();
                $obj->deserialize($value);
                array_push($this->TargetHealthStatusInfos, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
