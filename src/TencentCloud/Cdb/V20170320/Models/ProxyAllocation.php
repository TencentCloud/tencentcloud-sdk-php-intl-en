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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Weight allocation for a proxy node
 *
 * @method string getRegion() Obtain Proxy node region
 * @method void setRegion(string $Region) Set Proxy node region
 * @method string getZone() Obtain AZ of proxy node region
 * @method void setZone(string $Zone) Set AZ of proxy node region
 * @method array getProxyInstance() Obtain Proxy instance allocation
 * @method void setProxyInstance(array $ProxyInstance) Set Proxy instance allocation
 */
class ProxyAllocation extends AbstractModel
{
    /**
     * @var string Proxy node region
     */
    public $Region;

    /**
     * @var string AZ of proxy node region
     */
    public $Zone;

    /**
     * @var array Proxy instance allocation
     */
    public $ProxyInstance;

    /**
     * @param string $Region Proxy node region
     * @param string $Zone AZ of proxy node region
     * @param array $ProxyInstance Proxy instance allocation
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProxyInstance",$param) and $param["ProxyInstance"] !== null) {
            $this->ProxyInstance = [];
            foreach ($param["ProxyInstance"] as $key => $value){
                $obj = new ProxyInst();
                $obj->deserialize($value);
                array_push($this->ProxyInstance, $obj);
            }
        }
    }
}
