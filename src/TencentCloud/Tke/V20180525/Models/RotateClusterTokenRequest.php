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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RotateClusterToken request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterType() Obtain <p>Cluster type. Valid values: TKEServerless and TKE. Default value: TKE.</p>
 * @method void setClusterType(string $ClusterType) Set <p>Cluster type. Valid values: TKEServerless and TKE. Default value: TKE.</p>
 * @method string getOperation() Obtain <p>Operation to perform. Valid values: CreateNewToken, RevokeOldToken, and RecoverOldToken.<br>CreateNewToken: Creates a new token and makes it take effect. By default, a maximum of two tokens can take effect at the same time. If you want more tokens to take effect, Force must be set to true.<br>RevokeOldToken: Deletes the old token and makes it invalid. In this case, ClusterToken is required.<br>RecoverOldToken: Recovers the old token and makes it take effect. In this case, ClusterToken is required, and this operation can be called only when there is a corresponding RevokeOldToken task that has succeeded.</p>
 * @method void setOperation(string $Operation) Set <p>Operation to perform. Valid values: CreateNewToken, RevokeOldToken, and RecoverOldToken.<br>CreateNewToken: Creates a new token and makes it take effect. By default, a maximum of two tokens can take effect at the same time. If you want more tokens to take effect, Force must be set to true.<br>RevokeOldToken: Deletes the old token and makes it invalid. In this case, ClusterToken is required.<br>RecoverOldToken: Recovers the old token and makes it take effect. In this case, ClusterToken is required, and this operation can be called only when there is a corresponding RevokeOldToken task that has succeeded.</p>
 * @method string getClusterToken() Obtain <p>Cluster token. It is required only when Operation is set to RevokeOldToken or RecoverOldToken.</p>
 * @method void setClusterToken(string $ClusterToken) Set <p>Cluster token. It is required only when Operation is set to RevokeOldToken or RecoverOldToken.</p>
 * @method boolean getForce() Obtain <p>Default value: false. It is required only when Operation is set to CreateNewToken. Only when it is set to true can more than two tokens take effect.</p>
 * @method void setForce(boolean $Force) Set <p>Default value: false. It is required only when Operation is set to CreateNewToken. Only when it is set to true can more than two tokens take effect.</p>
 */
class RotateClusterTokenRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster type. Valid values: TKEServerless and TKE. Default value: TKE.</p>
     */
    public $ClusterType;

    /**
     * @var string <p>Operation to perform. Valid values: CreateNewToken, RevokeOldToken, and RecoverOldToken.<br>CreateNewToken: Creates a new token and makes it take effect. By default, a maximum of two tokens can take effect at the same time. If you want more tokens to take effect, Force must be set to true.<br>RevokeOldToken: Deletes the old token and makes it invalid. In this case, ClusterToken is required.<br>RecoverOldToken: Recovers the old token and makes it take effect. In this case, ClusterToken is required, and this operation can be called only when there is a corresponding RevokeOldToken task that has succeeded.</p>
     */
    public $Operation;

    /**
     * @var string <p>Cluster token. It is required only when Operation is set to RevokeOldToken or RecoverOldToken.</p>
     */
    public $ClusterToken;

    /**
     * @var boolean <p>Default value: false. It is required only when Operation is set to CreateNewToken. Only when it is set to true can more than two tokens take effect.</p>
     */
    public $Force;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterType <p>Cluster type. Valid values: TKEServerless and TKE. Default value: TKE.</p>
     * @param string $Operation <p>Operation to perform. Valid values: CreateNewToken, RevokeOldToken, and RecoverOldToken.<br>CreateNewToken: Creates a new token and makes it take effect. By default, a maximum of two tokens can take effect at the same time. If you want more tokens to take effect, Force must be set to true.<br>RevokeOldToken: Deletes the old token and makes it invalid. In this case, ClusterToken is required.<br>RecoverOldToken: Recovers the old token and makes it take effect. In this case, ClusterToken is required, and this operation can be called only when there is a corresponding RevokeOldToken task that has succeeded.</p>
     * @param string $ClusterToken <p>Cluster token. It is required only when Operation is set to RevokeOldToken or RecoverOldToken.</p>
     * @param boolean $Force <p>Default value: false. It is required only when Operation is set to CreateNewToken. Only when it is set to true can more than two tokens take effect.</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ClusterToken",$param) and $param["ClusterToken"] !== null) {
            $this->ClusterToken = $param["ClusterToken"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
