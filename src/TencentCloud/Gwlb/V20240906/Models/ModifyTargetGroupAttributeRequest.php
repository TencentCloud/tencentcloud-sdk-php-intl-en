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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupAttribute request structure.
 *
 * @method string getTargetGroupId() Obtain Target group ID.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID.
 * @method string getTargetGroupName() Obtain New name of target group.
 * @method void setTargetGroupName(string $TargetGroupName) Set New name of target group.
 * @method TargetGroupHealthCheck getHealthCheck() Obtain Health check details.
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set Health check details.
 * @method boolean getAllDeadToAlive() Obtain Whether "All Dead, All Alive" is supported.
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) Set Whether "All Dead, All Alive" is supported.
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string Target group ID.
     */
    public $TargetGroupId;

    /**
     * @var string New name of target group.
     */
    public $TargetGroupName;

    /**
     * @var TargetGroupHealthCheck Health check details.
     */
    public $HealthCheck;

    /**
     * @var boolean Whether "All Dead, All Alive" is supported.
     */
    public $AllDeadToAlive;

    /**
     * @param string $TargetGroupId Target group ID.
     * @param string $TargetGroupName New name of target group.
     * @param TargetGroupHealthCheck $HealthCheck Health check details.
     * @param boolean $AllDeadToAlive Whether "All Dead, All Alive" is supported.
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("AllDeadToAlive",$param) and $param["AllDeadToAlive"] !== null) {
            $this->AllDeadToAlive = $param["AllDeadToAlive"];
        }
    }
}
