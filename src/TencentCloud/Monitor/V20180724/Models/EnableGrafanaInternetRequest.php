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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableGrafanaInternet request structure.
 *
 * @method string getInstanceID() Obtain TCMG instance ID, such as “grafana-kleu3gt0”.
 * @method void setInstanceID(string $InstanceID) Set TCMG instance ID, such as “grafana-kleu3gt0”.
 * @method boolean getEnableInternet() Obtain Whether to enable public network access (`true`: Yes; `false`: No)
 * @method void setEnableInternet(boolean $EnableInternet) Set Whether to enable public network access (`true`: Yes; `false`: No)
 */
class EnableGrafanaInternetRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-kleu3gt0”.
     */
    public $InstanceID;

    /**
     * @var boolean Whether to enable public network access (`true`: Yes; `false`: No)
     */
    public $EnableInternet;

    /**
     * @param string $InstanceID TCMG instance ID, such as “grafana-kleu3gt0”.
     * @param boolean $EnableInternet Whether to enable public network access (`true`: Yes; `false`: No)
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            $this->EnableInternet = $param["EnableInternet"];
        }
    }
}
