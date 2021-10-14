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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the machine at the access layer (tcaproxy)
 *
 * @method string getProxyUid() Obtain Unique ID
 * @method void setProxyUid(string $ProxyUid) Set Unique ID
 * @method string getMachineType() Obtain Machine type
 * @method void setMachineType(string $MachineType) Set Machine type
 * @method integer getAvailableCount() Obtain The number of proxy resources to be assigned
 * @method void setAvailableCount(integer $AvailableCount) Set The number of proxy resources to be assigned
 */
class ProxyMachineInfo extends AbstractModel
{
    /**
     * @var string Unique ID
     */
    public $ProxyUid;

    /**
     * @var string Machine type
     */
    public $MachineType;

    /**
     * @var integer The number of proxy resources to be assigned
     */
    public $AvailableCount;

    /**
     * @param string $ProxyUid Unique ID
     * @param string $MachineType Machine type
     * @param integer $AvailableCount The number of proxy resources to be assigned
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
        if (array_key_exists("ProxyUid",$param) and $param["ProxyUid"] !== null) {
            $this->ProxyUid = $param["ProxyUid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("AvailableCount",$param) and $param["AvailableCount"] !== null) {
            $this->AvailableCount = $param["AvailableCount"];
        }
    }
}
