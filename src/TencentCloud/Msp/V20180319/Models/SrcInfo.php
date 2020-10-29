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
 * Migration source information
 *
 * @method string getRegion() Obtain Migration source region
 * @method void setRegion(string $Region) Set Migration source region
 * @method string getIp() Obtain 
 * @method void setIp(string $Ip) Set 
 * @method string getPort() Obtain Migration source port
 * @method void setPort(string $Port) Set Migration source port
 * @method string getInstanceId() Obtain Migration source instance ID
 * @method void setInstanceId(string $InstanceId) Set Migration source instance ID
 */
class SrcInfo extends AbstractModel
{
    /**
     * @var string Migration source region
     */
    public $Region;

    /**
     * @var string 
     */
    public $Ip;

    /**
     * @var string Migration source port
     */
    public $Port;

    /**
     * @var string Migration source instance ID
     */
    public $InstanceId;

    /**
     * @param string $Region Migration source region
     * @param string $Ip 
     * @param string $Port Migration source port
     * @param string $InstanceId Migration source instance ID
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
