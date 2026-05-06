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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retrieve WAF protection resource status
 *
 * @method string getGlobalStatus() Obtain Global protection status
 * @method void setGlobalStatus(string $GlobalStatus) Set Global protection status
 * @method array getServicesStatus() Obtain Protection status
 * @method void setServicesStatus(array $ServicesStatus) Set Protection status
 * @method array getRouteStatus() Obtain Route protection status
 * @method void setRouteStatus(array $RouteStatus) Set Route protection status
 * @method string getObjectStatus() Obtain Object protection status
 * @method void setObjectStatus(string $ObjectStatus) Set Object protection status
 */
class DescribeWafProtectionResult extends AbstractModel
{
    /**
     * @var string Global protection status
     */
    public $GlobalStatus;

    /**
     * @var array Protection status
     */
    public $ServicesStatus;

    /**
     * @var array Route protection status
     */
    public $RouteStatus;

    /**
     * @var string Object protection status
     */
    public $ObjectStatus;

    /**
     * @param string $GlobalStatus Global protection status
     * @param array $ServicesStatus Protection status
     * @param array $RouteStatus Route protection status
     * @param string $ObjectStatus Object protection status
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
        if (array_key_exists("GlobalStatus",$param) and $param["GlobalStatus"] !== null) {
            $this->GlobalStatus = $param["GlobalStatus"];
        }

        if (array_key_exists("ServicesStatus",$param) and $param["ServicesStatus"] !== null) {
            $this->ServicesStatus = [];
            foreach ($param["ServicesStatus"] as $key => $value){
                $obj = new ServiceWafStatus();
                $obj->deserialize($value);
                array_push($this->ServicesStatus, $obj);
            }
        }

        if (array_key_exists("RouteStatus",$param) and $param["RouteStatus"] !== null) {
            $this->RouteStatus = [];
            foreach ($param["RouteStatus"] as $key => $value){
                $obj = new RouteWafStatus();
                $obj->deserialize($value);
                array_push($this->RouteStatus, $obj);
            }
        }

        if (array_key_exists("ObjectStatus",$param) and $param["ObjectStatus"] !== null) {
            $this->ObjectStatus = $param["ObjectStatus"];
        }
    }
}
