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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NIC traffic metric data
 *
 * @method string getNetInfoName() Obtain NIC Name
 * @method void setNetInfoName(string $NetInfoName) Set NIC Name
 * @method string getPublicIP() Obtain Public IP address
 * @method void setPublicIP(string $PublicIP) Set Public IP address
 * @method float getCurrent() Obtain Metric data (bps/ms/%)
 * @method void setCurrent(float $Current) Set Metric data (bps/ms/%)
 */
class SlotNetInfo extends AbstractModel
{
    /**
     * @var string NIC Name
     */
    public $NetInfoName;

    /**
     * @var string Public IP address
     */
    public $PublicIP;

    /**
     * @var float Metric data (bps/ms/%)
     */
    public $Current;

    /**
     * @param string $NetInfoName NIC Name
     * @param string $PublicIP Public IP address
     * @param float $Current Metric data (bps/ms/%)
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
        if (array_key_exists("NetInfoName",$param) and $param["NetInfoName"] !== null) {
            $this->NetInfoName = $param["NetInfoName"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }
    }
}
