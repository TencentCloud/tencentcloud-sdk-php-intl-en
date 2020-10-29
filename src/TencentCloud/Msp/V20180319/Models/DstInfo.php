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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Migration destination information
 *
 * @method string getRegion() Obtain Migration destination region
 * @method void setRegion(string $Region) Set Migration destination region
 * @method string getIp() Obtain 
 * @method void setIp(string $Ip) Set 
 * @method string getPort() Obtain Migration destination port
 * @method void setPort(string $Port) Set Migration destination port
 * @method string getInstanceId() Obtain Migration destination instance ID
 * @method void setInstanceId(string $InstanceId) Set Migration destination instance ID
 */
class DstInfo extends AbstractModel
{
    /**
     * @var string Migration destination region
     */
    public $Region;

    /**
     * @var string 
     */
    public $Ip;

    /**
     * @var string Migration destination port
     */
    public $Port;

    /**
     * @var string Migration destination instance ID
     */
    public $InstanceId;

    /**
     * @param string $Region Migration destination region
     * @param string $Ip 
     * @param string $Port Migration destination port
     * @param string $InstanceId Migration destination instance ID
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
