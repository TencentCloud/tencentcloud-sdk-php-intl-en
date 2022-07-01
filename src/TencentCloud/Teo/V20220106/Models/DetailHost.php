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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name configuration information
 *
 * @method integer getAppId() Obtain Tencent Cloud account ID
 * @method void setAppId(integer $AppId) Set Tencent Cloud account ID
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getStatus() Obtain Acceleration service status
`process`: Deploying
`online`: Enabled
`offline`: Disabled
 * @method void setStatus(string $Status) Set Acceleration service status
`process`: Deploying
`online`: Enabled
`offline`: Disabled
 * @method string getHost() Obtain Domain name
 * @method void setHost(string $Host) Set Domain name
 */
class DetailHost extends AbstractModel
{
    /**
     * @var integer Tencent Cloud account ID
     */
    public $AppId;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Acceleration service status
`process`: Deploying
`online`: Enabled
`offline`: Disabled
     */
    public $Status;

    /**
     * @var string Domain name
     */
    public $Host;

    /**
     * @param integer $AppId Tencent Cloud account ID
     * @param string $ZoneId Site ID
     * @param string $Status Acceleration service status
`process`: Deploying
`online`: Enabled
`offline`: Disabled
     * @param string $Host Domain name
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
