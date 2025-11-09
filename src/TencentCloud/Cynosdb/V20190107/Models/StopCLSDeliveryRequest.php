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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopCLSDelivery request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getCLSTopicIds() Obtain Log topic ID.
 * @method void setCLSTopicIds(array $CLSTopicIds) Set Log topic ID.
 * @method string getLogType() Obtain Log type.
 * @method void setLogType(string $LogType) Set Log type.
 * @method string getIsInMaintainPeriod() Obtain Whether the maintenance time is in operation.
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Whether the maintenance time is in operation.
 */
class StopCLSDeliveryRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array Log topic ID.
     */
    public $CLSTopicIds;

    /**
     * @var string Log type.
     */
    public $LogType;

    /**
     * @var string Whether the maintenance time is in operation.
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $CLSTopicIds Log topic ID.
     * @param string $LogType Log type.
     * @param string $IsInMaintainPeriod Whether the maintenance time is in operation.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CLSTopicIds",$param) and $param["CLSTopicIds"] !== null) {
            $this->CLSTopicIds = $param["CLSTopicIds"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
