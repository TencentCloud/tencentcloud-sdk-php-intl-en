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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Analysis engine instance version upgrade info
 *
 * @method string getVip() Obtain <p>Grayscale ip for version upgrade</p>
 * @method void setVip(string $Vip) Set <p>Grayscale ip for version upgrade</p>
 * @method integer getVport() Obtain <p>Grayscale port for version upgrade</p>
 * @method void setVport(integer $Vport) Set <p>Grayscale port for version upgrade</p>
 * @method string getEngineVersion() Obtain <p>Upgrade to a later version</p>
 * @method void setEngineVersion(string $EngineVersion) Set <p>Upgrade to a later version</p>
 * @method integer getExpireTime() Obtain <p>Grayscale event for instance upgrade</p><p>Unit: day</p>
 * @method void setExpireTime(integer $ExpireTime) Set <p>Grayscale event for instance upgrade</p><p>Unit: day</p>
 */
class UpgradeAnalysisInstanceVersionInfo extends AbstractModel
{
    /**
     * @var string <p>Grayscale ip for version upgrade</p>
     */
    public $Vip;

    /**
     * @var integer <p>Grayscale port for version upgrade</p>
     */
    public $Vport;

    /**
     * @var string <p>Upgrade to a later version</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>Grayscale event for instance upgrade</p><p>Unit: day</p>
     */
    public $ExpireTime;

    /**
     * @param string $Vip <p>Grayscale ip for version upgrade</p>
     * @param integer $Vport <p>Grayscale port for version upgrade</p>
     * @param string $EngineVersion <p>Upgrade to a later version</p>
     * @param integer $ExpireTime <p>Grayscale event for instance upgrade</p><p>Unit: day</p>
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
