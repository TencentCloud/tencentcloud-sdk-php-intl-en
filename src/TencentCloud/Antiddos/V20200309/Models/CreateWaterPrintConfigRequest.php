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
 * CreateWaterPrintConfig request structure.
 *
 * @method string getInstanceId() Obtain Anti-DDoS instance ID
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID
 * @method WaterPrintConfig getWaterPrintConfig() Obtain Watermark configuration
 * @method void setWaterPrintConfig(WaterPrintConfig $WaterPrintConfig) Set Watermark configuration
 */
class CreateWaterPrintConfigRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS instance ID
     */
    public $InstanceId;

    /**
     * @var WaterPrintConfig Watermark configuration
     */
    public $WaterPrintConfig;

    /**
     * @param string $InstanceId Anti-DDoS instance ID
     * @param WaterPrintConfig $WaterPrintConfig Watermark configuration
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

        if (array_key_exists("WaterPrintConfig",$param) and $param["WaterPrintConfig"] !== null) {
            $this->WaterPrintConfig = new WaterPrintConfig();
            $this->WaterPrintConfig->deserialize($param["WaterPrintConfig"]);
        }
    }
}
