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
 * @method string getPeerType() Obtain Object type:

Namespace: `NamespaceSelector`, which indicates that `NamespaceSelector` has a value.

Pod type: `PodSelector`, which indicates that both `NamespaceSelector` and `PodSelector` have values.

IP type: `IPBlock`, which indicates that only `IPBlock` has a value.
 * @method void setPeerType(string $PeerType) Set Object type:

Namespace: `NamespaceSelector`, which indicates that `NamespaceSelector` has a value.

Pod type: `PodSelector`, which indicates that both `NamespaceSelector` and `PodSelector` have values.

IP type: `IPBlock`, which indicates that only `IPBlock` has a value.
 * @method string getNamespaceSelector() Obtain Namespace selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceSelector(string $NamespaceSelector) Set Namespace selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPodSelector() Obtain Pod selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodSelector(string $PodSelector) Set Pod selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIPBlock() Obtain IP selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIPBlock(string $IPBlock) Set IP selector
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetworkPeer extends AbstractModel
{
    /**
     * @var string Object type:

Namespace: `NamespaceSelector`, which indicates that `NamespaceSelector` has a value.

Pod type: `PodSelector`, which indicates that both `NamespaceSelector` and `PodSelector` have values.

IP type: `IPBlock`, which indicates that only `IPBlock` has a value.
     */
    public $PeerType;

    /**
     * @var string Namespace selector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceSelector;

    /**
     * @var string Pod selector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodSelector;

    /**
     * @var string IP selector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IPBlock;

    /**
     * @param string $PeerType Object type:

Namespace: `NamespaceSelector`, which indicates that `NamespaceSelector` has a value.

Pod type: `PodSelector`, which indicates that both `NamespaceSelector` and `PodSelector` have values.

IP type: `IPBlock`, which indicates that only `IPBlock` has a value.
     * @param string $NamespaceSelector Namespace selector
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodSelector Pod selector
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IPBlock IP selector
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
        if (array_key_exists("PeerType",$param) and $param["PeerType"] !== null) {
            $this->PeerType = $param["PeerType"];
        }

        if (array_key_exists("NamespaceSelector",$param) and $param["NamespaceSelector"] !== null) {
            $this->NamespaceSelector = $param["NamespaceSelector"];
        }

        if (array_key_exists("PodSelector",$param) and $param["PodSelector"] !== null) {
            $this->PodSelector = $param["PodSelector"];
        }

        if (array_key_exists("IPBlock",$param) and $param["IPBlock"] !== null) {
            $this->IPBlock = $param["IPBlock"];
        }
    }
}
