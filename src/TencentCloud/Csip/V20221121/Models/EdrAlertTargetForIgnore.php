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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Location information of EDR alerts for permanent ignore or unignore
 *
 * @method integer getId() Obtain Alarm primary key ID
 * @method void setId(integer $Id) Set Alarm primary key ID
 * @method integer getAppId() Obtain Alarm Account ID (across different accounts, required for frontend)
 * @method void setAppId(integer $AppId) Set Alarm Account ID (across different accounts, required for frontend)
 * @method string getAlertId() Obtain Alarm unique ID
 * @method void setAlertId(string $AlertId) Set Alarm unique ID
 * @method string getQuuid() Obtain Host UUID (optional)
 * @method void setQuuid(string $Quuid) Set Host UUID (optional)
 * @method string getInstanceId() Obtain Instance ID (selectable, used for allowlist deletion)
 * @method void setInstanceId(string $InstanceId) Set Instance ID (selectable, used for allowlist deletion)
 */
class EdrAlertTargetForIgnore extends AbstractModel
{
    /**
     * @var integer Alarm primary key ID
     */
    public $Id;

    /**
     * @var integer Alarm Account ID (across different accounts, required for frontend)
     */
    public $AppId;

    /**
     * @var string Alarm unique ID
     */
    public $AlertId;

    /**
     * @var string Host UUID (optional)
     */
    public $Quuid;

    /**
     * @var string Instance ID (selectable, used for allowlist deletion)
     */
    public $InstanceId;

    /**
     * @param integer $Id Alarm primary key ID
     * @param integer $AppId Alarm Account ID (across different accounts, required for frontend)
     * @param string $AlertId Alarm unique ID
     * @param string $Quuid Host UUID (optional)
     * @param string $InstanceId Instance ID (selectable, used for allowlist deletion)
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
