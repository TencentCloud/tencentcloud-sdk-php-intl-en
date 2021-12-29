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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCluster request structure.
 *
 * @method string getClusterId() Obtain ID of the Pulsar cluster to be updated.
 * @method void setClusterId(string $ClusterId) Set ID of the Pulsar cluster to be updated.
 * @method string getClusterName() Obtain Updated cluster name.
 * @method void setClusterName(string $ClusterName) Set Updated cluster name.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method boolean getPublicAccessEnabled() Obtain Enables public network access, which can only be `true`.
 * @method void setPublicAccessEnabled(boolean $PublicAccessEnabled) Set Enables public network access, which can only be `true`.
 */
class ModifyClusterRequest extends AbstractModel
{
    /**
     * @var string ID of the Pulsar cluster to be updated.
     */
    public $ClusterId;

    /**
     * @var string Updated cluster name.
     */
    public $ClusterName;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var boolean Enables public network access, which can only be `true`.
     */
    public $PublicAccessEnabled;

    /**
     * @param string $ClusterId ID of the Pulsar cluster to be updated.
     * @param string $ClusterName Updated cluster name.
     * @param string $Remark Remarks.
     * @param boolean $PublicAccessEnabled Enables public network access, which can only be `true`.
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
