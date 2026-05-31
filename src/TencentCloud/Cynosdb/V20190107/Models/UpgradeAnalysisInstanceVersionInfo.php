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
 * Analyze instance version upgrade, connection information used for grayscale after the upgrade
 *
 * @method string getVip() Obtain <p>ip</p>
 * @method void setVip(string $Vip) Set <p>ip</p>
 * @method integer getVport() Obtain <p>Port</p>
 * @method void setVport(integer $Vport) Set <p>Port</p>
 * @method string getEngineVersion() Obtain <p>Version</p>
 * @method void setEngineVersion(string $EngineVersion) Set <p>Version</p>
 * @method integer getExpiredTime() Obtain <p>Expiry time</p>
 * @method void setExpiredTime(integer $ExpiredTime) Set <p>Expiry time</p>
 */
class UpgradeAnalysisInstanceVersionInfo extends AbstractModel
{
    /**
     * @var string <p>ip</p>
     */
    public $Vip;

    /**
     * @var integer <p>Port</p>
     */
    public $Vport;

    /**
     * @var string <p>Version</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>Expiry time</p>
     */
    public $ExpiredTime;

    /**
     * @param string $Vip <p>ip</p>
     * @param integer $Vport <p>Port</p>
     * @param string $EngineVersion <p>Version</p>
     * @param integer $ExpiredTime <p>Expiry time</p>
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
