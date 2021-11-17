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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP details
 *
 * @method string getIP() Obtain IP string
 * @method void setIP(string $IP) Set IP string
 * @method string getProvider() Obtain Network provider. `BGP`: Tencent Cloud BGP (default); `CMCC`: China Mobile; `CUCC`: China Unicom; `CTCC`: China Telecom.
 * @method void setProvider(string $Provider) Set Network provider. `BGP`: Tencent Cloud BGP (default); `CMCC`: China Mobile; `CUCC`: China Unicom; `CTCC`: China Telecom.
 * @method integer getBandwidth() Obtain Max bandwidth
 * @method void setBandwidth(integer $Bandwidth) Set Max bandwidth
 */
class IPDetail extends AbstractModel
{
    /**
     * @var string IP string
     */
    public $IP;

    /**
     * @var string Network provider. `BGP`: Tencent Cloud BGP (default); `CMCC`: China Mobile; `CUCC`: China Unicom; `CTCC`: China Telecom.
     */
    public $Provider;

    /**
     * @var integer Max bandwidth
     */
    public $Bandwidth;

    /**
     * @param string $IP IP string
     * @param string $Provider Network provider. `BGP`: Tencent Cloud BGP (default); `CMCC`: China Mobile; `CUCC`: China Unicom; `CTCC`: China Telecom.
     * @param integer $Bandwidth Max bandwidth
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
