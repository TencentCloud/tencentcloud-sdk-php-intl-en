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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableSSOCamCheck request structure.
 *
 * @method string getInstanceId() Obtain TCMG instance ID, such as “grafana-abcdefgh”.
 * @method void setInstanceId(string $InstanceId) Set TCMG instance ID, such as “grafana-abcdefgh”.
 * @method boolean getEnableSSOCamCheck() Obtain Whether to enable CAM authentication (`true`: Yes; `false`: No)
 * @method void setEnableSSOCamCheck(boolean $EnableSSOCamCheck) Set Whether to enable CAM authentication (`true`: Yes; `false`: No)
 */
class EnableSSOCamCheckRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-abcdefgh”.
     */
    public $InstanceId;

    /**
     * @var boolean Whether to enable CAM authentication (`true`: Yes; `false`: No)
     */
    public $EnableSSOCamCheck;

    /**
     * @param string $InstanceId TCMG instance ID, such as “grafana-abcdefgh”.
     * @param boolean $EnableSSOCamCheck Whether to enable CAM authentication (`true`: Yes; `false`: No)
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

        if (array_key_exists("EnableSSOCamCheck",$param) and $param["EnableSSOCamCheck"] !== null) {
            $this->EnableSSOCamCheck = $param["EnableSSOCamCheck"];
        }
    }
}
