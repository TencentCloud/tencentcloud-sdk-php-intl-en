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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters for cross-account synchronization
 *
 * @method string getPeerRegistryUin() Obtain UIN of the destination instance
 * @method void setPeerRegistryUin(string $PeerRegistryUin) Set UIN of the destination instance
 * @method string getPeerRegistryToken() Obtain Permanent access Token for the destination instance
 * @method void setPeerRegistryToken(string $PeerRegistryToken) Set Permanent access Token for the destination instance
 * @method boolean getEnablePeerReplication() Obtain Whether to enable cross-account synchronization
 * @method void setEnablePeerReplication(boolean $EnablePeerReplication) Set Whether to enable cross-account synchronization
 */
class PeerReplicationOption extends AbstractModel
{
    /**
     * @var string UIN of the destination instance
     */
    public $PeerRegistryUin;

    /**
     * @var string Permanent access Token for the destination instance
     */
    public $PeerRegistryToken;

    /**
     * @var boolean Whether to enable cross-account synchronization
     */
    public $EnablePeerReplication;

    /**
     * @param string $PeerRegistryUin UIN of the destination instance
     * @param string $PeerRegistryToken Permanent access Token for the destination instance
     * @param boolean $EnablePeerReplication Whether to enable cross-account synchronization
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
        if (array_key_exists("PeerRegistryUin",$param) and $param["PeerRegistryUin"] !== null) {
            $this->PeerRegistryUin = $param["PeerRegistryUin"];
        }

        if (array_key_exists("PeerRegistryToken",$param) and $param["PeerRegistryToken"] !== null) {
            $this->PeerRegistryToken = $param["PeerRegistryToken"];
        }

        if (array_key_exists("EnablePeerReplication",$param) and $param["EnablePeerReplication"] !== null) {
            $this->EnablePeerReplication = $param["EnablePeerReplication"];
        }
    }
}
