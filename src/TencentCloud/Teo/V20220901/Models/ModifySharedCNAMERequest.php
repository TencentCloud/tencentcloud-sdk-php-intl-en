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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySharedCNAME request structure.
 *
 * @method string getZoneId() Obtain Shared CNAME associated site ID.
 * @method void setZoneId(string $ZoneId) Set Shared CNAME associated site ID.
 * @method string getSharedCNAME() Obtain Shared CNAME.
 * @method void setSharedCNAME(string $SharedCNAME) Set Shared CNAME.
 * @method string getDescription() Obtain Enter the adjusted description.
 * @method void setDescription(string $Description) Set Enter the adjusted description.
 * @method IPSSLSetting getIPSSLSetting() Obtain Set the IP SSL message of the shared CNAME with IP SSL type.
 * @method void setIPSSLSetting(IPSSLSetting $IPSSLSetting) Set Set the IP SSL message of the shared CNAME with IP SSL type.
 */
class ModifySharedCNAMERequest extends AbstractModel
{
    /**
     * @var string Shared CNAME associated site ID.
     */
    public $ZoneId;

    /**
     * @var string Shared CNAME.
     */
    public $SharedCNAME;

    /**
     * @var string Enter the adjusted description.
     */
    public $Description;

    /**
     * @var IPSSLSetting Set the IP SSL message of the shared CNAME with IP SSL type.
     */
    public $IPSSLSetting;

    /**
     * @param string $ZoneId Shared CNAME associated site ID.
     * @param string $SharedCNAME Shared CNAME.
     * @param string $Description Enter the adjusted description.
     * @param IPSSLSetting $IPSSLSetting Set the IP SSL message of the shared CNAME with IP SSL type.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IPSSLSetting",$param) and $param["IPSSLSetting"] !== null) {
            $this->IPSSLSetting = new IPSSLSetting();
            $this->IPSSLSetting->deserialize($param["IPSSLSetting"]);
        }
    }
}
