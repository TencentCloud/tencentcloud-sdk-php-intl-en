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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom rule of the network cluster policy
 *
 * @method string getDirection() Obtain Network policy direction. Valid values: `FROM`, `TO`.
 * @method void setDirection(string $Direction) Set Network policy direction. Valid values: `FROM`, `TO`.
 * @method array getPorts() Obtain Network policy port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPorts(array $Ports) Set Network policy port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPeer() Obtain Network policy object

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeer(array $Peer) Set Network policy object

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetworkCustomPolicy extends AbstractModel
{
    /**
     * @var string Network policy direction. Valid values: `FROM`, `TO`.
     */
    public $Direction;

    /**
     * @var array Network policy port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ports;

    /**
     * @var array Network policy object

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Peer;

    /**
     * @param string $Direction Network policy direction. Valid values: `FROM`, `TO`.
     * @param array $Ports Network policy port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Peer Network policy object

`PublishedNoConfirm`: Enabled and to be confirmed.

`PublishedConfirmed`: Enabled and confirmed.

`unPublishing`: Disabled.

`Publishing`: Enabled.

`unPublishEdit`: To be enabled.
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new NetworkPorts();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("Peer",$param) and $param["Peer"] !== null) {
            $this->Peer = [];
            foreach ($param["Peer"] as $key => $value){
                $obj = new NetworkPeer();
                $obj->deserialize($value);
                array_push($this->Peer, $obj);
            }
        }
    }
}
