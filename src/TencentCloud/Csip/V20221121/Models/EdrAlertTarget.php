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
 * EDR alert location information (ID + AlertID + AppID triplet)
 *
 * @method integer getId() Obtain <p>Alarm primary key ID</p>
 * @method void setId(integer $Id) Set <p>Alarm primary key ID</p>
 * @method integer getAppId() Obtain <p>Alarm account ID (across different accounts, required by frontend)</p>
 * @method void setAppId(integer $AppId) Set <p>Alarm account ID (across different accounts, required by frontend)</p>
 * @method string getAlertId() Obtain <p>Alarm unique ID</p>
 * @method void setAlertId(string $AlertId) Set <p>Alarm unique ID</p>
 * @method string getQuuid() Obtain <p>Host UUID (Optional, returned from the list and passed through)</p>
 * @method void setQuuid(string $Quuid) Set <p>Host UUID (Optional, returned from the list and passed through)</p>
 * @method string getInstanceId() Obtain <p>Instance ID (optional, passed through from the list, used for tag enrichment in security center)</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID (optional, passed through from the list, used for tag enrichment in security center)</p>
 * @method string getAlertSubType() Obtain <p>Alarm sub-type</p>
 * @method void setAlertSubType(string $AlertSubType) Set <p>Alarm sub-type</p>
 */
class EdrAlertTarget extends AbstractModel
{
    /**
     * @var integer <p>Alarm primary key ID</p>
     */
    public $Id;

    /**
     * @var integer <p>Alarm account ID (across different accounts, required by frontend)</p>
     */
    public $AppId;

    /**
     * @var string <p>Alarm unique ID</p>
     */
    public $AlertId;

    /**
     * @var string <p>Host UUID (Optional, returned from the list and passed through)</p>
     */
    public $Quuid;

    /**
     * @var string <p>Instance ID (optional, passed through from the list, used for tag enrichment in security center)</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Alarm sub-type</p>
     */
    public $AlertSubType;

    /**
     * @param integer $Id <p>Alarm primary key ID</p>
     * @param integer $AppId <p>Alarm account ID (across different accounts, required by frontend)</p>
     * @param string $AlertId <p>Alarm unique ID</p>
     * @param string $Quuid <p>Host UUID (Optional, returned from the list and passed through)</p>
     * @param string $InstanceId <p>Instance ID (optional, passed through from the list, used for tag enrichment in security center)</p>
     * @param string $AlertSubType <p>Alarm sub-type</p>
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

        if (array_key_exists("AlertSubType",$param) and $param["AlertSubType"] !== null) {
            $this->AlertSubType = $param["AlertSubType"];
        }
    }
}
