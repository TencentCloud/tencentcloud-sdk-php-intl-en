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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchDBInstancePrimary request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method boolean getForce() Obtain Whether to perform forced switch. As long as the standby node can be accessed, the switch will be performed regardless of the primary-standby sync delay. You can switch immediately only when `SwitchTag` is `0.
<li>Default: `false`.
 * @method void setForce(boolean $Force) Set Whether to perform forced switch. As long as the standby node can be accessed, the switch will be performed regardless of the primary-standby sync delay. You can switch immediately only when `SwitchTag` is `0.
<li>Default: `false`.
 * @method integer getSwitchTag() Obtain Switch time for the specified instance after configuration modification.
<li>`0`: Switch now. 
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
<li>Default value: `0`. 
 * @method void setSwitchTag(integer $SwitchTag) Set Switch time for the specified instance after configuration modification.
<li>`0`: Switch now. 
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
<li>Default value: `0`. 
 * @method string getSwitchStartTime() Obtain The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00". This parameter is invalid when `SwitchTag` is `0` or `2`.
 * @method void setSwitchStartTime(string $SwitchStartTime) Set The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00". This parameter is invalid when `SwitchTag` is `0` or `2`.
 * @method string getSwitchEndTime() Obtain The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00". This parameter is invalid when `SwitchTag` is `0` or `2`. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
 * @method void setSwitchEndTime(string $SwitchEndTime) Set The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00". This parameter is invalid when `SwitchTag` is `0` or `2`. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
 */
class SwitchDBInstancePrimaryRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var boolean Whether to perform forced switch. As long as the standby node can be accessed, the switch will be performed regardless of the primary-standby sync delay. You can switch immediately only when `SwitchTag` is `0.
<li>Default: `false`.
     */
    public $Force;

    /**
     * @var integer Switch time for the specified instance after configuration modification.
<li>`0`: Switch now. 
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
<li>Default value: `0`. 
     */
    public $SwitchTag;

    /**
     * @var string The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00". This parameter is invalid when `SwitchTag` is `0` or `2`.
     */
    public $SwitchStartTime;

    /**
     * @var string The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00". This parameter is invalid when `SwitchTag` is `0` or `2`. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
     */
    public $SwitchEndTime;

    /**
     * @param string $DBInstanceId Instance ID
     * @param boolean $Force Whether to perform forced switch. As long as the standby node can be accessed, the switch will be performed regardless of the primary-standby sync delay. You can switch immediately only when `SwitchTag` is `0.
<li>Default: `false`.
     * @param integer $SwitchTag Switch time for the specified instance after configuration modification.
<li>`0`: Switch now. 
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
<li>Default value: `0`. 
     * @param string $SwitchStartTime The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00". This parameter is invalid when `SwitchTag` is `0` or `2`.
     * @param string $SwitchEndTime The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00". This parameter is invalid when `SwitchTag` is `0` or `2`. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
