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
 * Information of the machine at the access layer (tcaproxy) in a dedicated cluster
 *
 * @method string getProxyUid() Obtain The unique ID of the access layer (tcaproxy)
 * @method void setProxyUid(string $ProxyUid) Set The unique ID of the access layer (tcaproxy)
 * @method string getMachineType() Obtain Machine type
 * @method void setMachineType(string $MachineType) Set Machine type
 * @method integer getProcessSpeed() Obtain The speed of processing request packets
 * @method void setProcessSpeed(integer $ProcessSpeed) Set The speed of processing request packets
 * @method integer getAverageProcessDelay() Obtain Request packet delay
 * @method void setAverageProcessDelay(integer $AverageProcessDelay) Set Request packet delay
 * @method integer getSlowProcessSpeed() Obtain The speed of processing delayed request packets
 * @method void setSlowProcessSpeed(integer $SlowProcessSpeed) Set The speed of processing delayed request packets
 * @method string getVersion() Obtain Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProxyDetailInfo extends AbstractModel
{
    /**
     * @var string The unique ID of the access layer (tcaproxy)
     */
    public $ProxyUid;

    /**
     * @var string Machine type
     */
    public $MachineType;

    /**
     * @var integer The speed of processing request packets
     */
    public $ProcessSpeed;

    /**
     * @var integer Request packet delay
     */
    public $AverageProcessDelay;

    /**
     * @var integer The speed of processing delayed request packets
     */
    public $SlowProcessSpeed;

    /**
     * @var string Version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @param string $ProxyUid The unique ID of the access layer (tcaproxy)
     * @param string $MachineType Machine type
     * @param integer $ProcessSpeed The speed of processing request packets
     * @param integer $AverageProcessDelay Request packet delay
     * @param integer $SlowProcessSpeed The speed of processing delayed request packets
     * @param string $Version Version
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ProcessSpeed",$param) and $param["ProcessSpeed"] !== null) {
            $this->ProcessSpeed = $param["ProcessSpeed"];
        }

        if (array_key_exists("AverageProcessDelay",$param) and $param["AverageProcessDelay"] !== null) {
            $this->AverageProcessDelay = $param["AverageProcessDelay"];
        }

        if (array_key_exists("SlowProcessSpeed",$param) and $param["SlowProcessSpeed"] !== null) {
            $this->SlowProcessSpeed = $param["SlowProcessSpeed"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
