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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQCluster request structure.
 *
 * @method string getClusterId() Obtain RocketMQ cluster ID
 * @method void setClusterId(string $ClusterId) Set RocketMQ cluster ID
 * @method string getClusterName() Obtain 3–64 letters, digits, hyphens, and underscores
 * @method void setClusterName(string $ClusterName) Set 3–64 letters, digits, hyphens, and underscores
 * @method string getRemark() Obtain Remarks (up to 128 characters)
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters)
 * @method boolean getPublicAccessEnabled() Obtain Whether to enable the HTTP access over the public network
 * @method void setPublicAccessEnabled(boolean $PublicAccessEnabled) Set Whether to enable the HTTP access over the public network
 */
class ModifyRocketMQClusterRequest extends AbstractModel
{
    /**
     * @var string RocketMQ cluster ID
     */
    public $ClusterId;

    /**
     * @var string 3–64 letters, digits, hyphens, and underscores
     */
    public $ClusterName;

    /**
     * @var string Remarks (up to 128 characters)
     */
    public $Remark;

    /**
     * @var boolean Whether to enable the HTTP access over the public network
     */
    public $PublicAccessEnabled;

    /**
     * @param string $ClusterId RocketMQ cluster ID
     * @param string $ClusterName 3–64 letters, digits, hyphens, and underscores
     * @param string $Remark Remarks (up to 128 characters)
     * @param boolean $PublicAccessEnabled Whether to enable the HTTP access over the public network
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicAccessEnabled",$param) and $param["PublicAccessEnabled"] !== null) {
            $this->PublicAccessEnabled = $param["PublicAccessEnabled"];
        }
    }
}
