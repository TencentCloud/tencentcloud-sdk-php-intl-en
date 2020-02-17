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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getIp() Obtain IP of the node.
 * @method void setIp(string $Ip) Set IP of the node.
 * @method string getPlatform() Obtain Whether the IP is a Tencent Cloud CDN cache node. `yes`: it is a Tencent Cloud CDN cache node; `no`: it is not.
 * @method void setPlatform(string $Platform) Set Whether the IP is a Tencent Cloud CDN cache node. `yes`: it is a Tencent Cloud CDN cache node; `no`: it is not.
 * @method string getLocation() Obtain District/country where the node is located. `unknown`: the node location is unknown.
 * @method void setLocation(string $Location) Set District/country where the node is located. `unknown`: the node location is unknown.
 * @method array getHistory() Obtain Activation and deactivation history of the node.
 * @method void setHistory(array $History) Set Activation and deactivation history of the node.
 * @method string getArea() Obtain Service region of the node. `mainland`: Mainland China; `overseas`: outside Mainland China; `unknown`: unknown
 * @method void setArea(string $Area) Set Service region of the node. `mainland`: Mainland China; `overseas`: outside Mainland China; `unknown`: unknown
 */

/**
 *CdnIp attribute details
 */
class CdnIp extends AbstractModel
{
    /**
     * @var string IP of the node.
     */
    public $Ip;

    /**
     * @var string Whether the IP is a Tencent Cloud CDN cache node. `yes`: it is a Tencent Cloud CDN cache node; `no`: it is not.
     */
    public $Platform;

    /**
     * @var string District/country where the node is located. `unknown`: the node location is unknown.
     */
    public $Location;

    /**
     * @var array Activation and deactivation history of the node.
     */
    public $History;

    /**
     * @var string Service region of the node. `mainland`: Mainland China; `overseas`: outside Mainland China; `unknown`: unknown
     */
    public $Area;
    /**
     * @param string $Ip IP of the node.
     * @param string $Platform Whether the IP is a Tencent Cloud CDN cache node. `yes`: it is a Tencent Cloud CDN cache node; `no`: it is not.
     * @param string $Location District/country where the node is located. `unknown`: the node location is unknown.
     * @param array $History Activation and deactivation history of the node.
     * @param string $Area Service region of the node. `mainland`: Mainland China; `overseas`: outside Mainland China; `unknown`: unknown
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("History",$param) and $param["History"] !== null) {
            $this->History = [];
            foreach ($param["History"] as $key => $value){
                $obj = new CdnIpHistory();
                $obj->deserialize($value);
                array_push($this->History, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
