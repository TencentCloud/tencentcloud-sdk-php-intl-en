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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDDoSGeoIPBlockConfig request structure.
 *
 * @method string getInstanceId() Obtain Anti-DDoS instance ID
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID
 * @method DDoSGeoIPBlockConfig getDDoSGeoIPBlockConfig() Obtain Region blocking configuration. The configuration ID should be cleared when you set this parameter.
 * @method void setDDoSGeoIPBlockConfig(DDoSGeoIPBlockConfig $DDoSGeoIPBlockConfig) Set Region blocking configuration. The configuration ID should be cleared when you set this parameter.
 */
class CreateDDoSGeoIPBlockConfigRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS instance ID
     */
    public $InstanceId;

    /**
     * @var DDoSGeoIPBlockConfig Region blocking configuration. The configuration ID should be cleared when you set this parameter.
     */
    public $DDoSGeoIPBlockConfig;

    /**
     * @param string $InstanceId Anti-DDoS instance ID
     * @param DDoSGeoIPBlockConfig $DDoSGeoIPBlockConfig Region blocking configuration. The configuration ID should be cleared when you set this parameter.
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

        if (array_key_exists("DDoSGeoIPBlockConfig",$param) and $param["DDoSGeoIPBlockConfig"] !== null) {
            $this->DDoSGeoIPBlockConfig = new DDoSGeoIPBlockConfig();
            $this->DDoSGeoIPBlockConfig->deserialize($param["DDoSGeoIPBlockConfig"]);
        }
    }
}
