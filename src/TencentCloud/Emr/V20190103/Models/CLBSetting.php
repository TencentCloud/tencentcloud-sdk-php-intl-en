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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB settings for container cluster Pod service.
 *
 * @method string getCLBType() Obtain CLB type. Valid values: PUBLIC_IP (supports public network CLB) and INTERNAL_IP (supports private network CLB).
 * @method void setCLBType(string $CLBType) Set CLB type. Valid values: PUBLIC_IP (supports public network CLB) and INTERNAL_IP (supports private network CLB).
 * @method VPCSettings getVPCSettings() Obtain Settings for VPC and subnet information.
 * @method void setVPCSettings(VPCSettings $VPCSettings) Set Settings for VPC and subnet information.
 */
class CLBSetting extends AbstractModel
{
    /**
     * @var string CLB type. Valid values: PUBLIC_IP (supports public network CLB) and INTERNAL_IP (supports private network CLB).
     */
    public $CLBType;

    /**
     * @var VPCSettings Settings for VPC and subnet information.
     */
    public $VPCSettings;

    /**
     * @param string $CLBType CLB type. Valid values: PUBLIC_IP (supports public network CLB) and INTERNAL_IP (supports private network CLB).
     * @param VPCSettings $VPCSettings Settings for VPC and subnet information.
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
        if (array_key_exists("CLBType",$param) and $param["CLBType"] !== null) {
            $this->CLBType = $param["CLBType"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }
    }
}
