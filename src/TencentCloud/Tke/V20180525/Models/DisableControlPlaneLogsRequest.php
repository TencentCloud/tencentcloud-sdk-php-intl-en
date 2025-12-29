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
 * DisableControlPlaneLogs request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterType() Obtain Cluster type. currently only support tke.
 * @method void setClusterType(string $ClusterType) Set Cluster type. currently only support tke.
 * @method array getComponentNames() Obtain Component name list. currently supports cluster-autoscaler, kapenter.
 * @method void setComponentNames(array $ComponentNames) Set Component name list. currently supports cluster-autoscaler, kapenter.
 * @method boolean getDeleteLogSetAndTopic() Obtain Specifies whether to delete the logset and topic. if the logset and topic are in use by other collection rules, they will not be deleted.
 * @method void setDeleteLogSetAndTopic(boolean $DeleteLogSetAndTopic) Set Specifies whether to delete the logset and topic. if the logset and topic are in use by other collection rules, they will not be deleted.
 */
class DisableControlPlaneLogsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster type. currently only support tke.
     */
    public $ClusterType;

    /**
     * @var array Component name list. currently supports cluster-autoscaler, kapenter.
     */
    public $ComponentNames;

    /**
     * @var boolean Specifies whether to delete the logset and topic. if the logset and topic are in use by other collection rules, they will not be deleted.
     */
    public $DeleteLogSetAndTopic;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterType Cluster type. currently only support tke.
     * @param array $ComponentNames Component name list. currently supports cluster-autoscaler, kapenter.
     * @param boolean $DeleteLogSetAndTopic Specifies whether to delete the logset and topic. if the logset and topic are in use by other collection rules, they will not be deleted.
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

        if (array_key_exists("ComponentNames",$param) and $param["ComponentNames"] !== null) {
            $this->ComponentNames = $param["ComponentNames"];
        }

        if (array_key_exists("DeleteLogSetAndTopic",$param) and $param["DeleteLogSetAndTopic"] !== null) {
            $this->DeleteLogSetAndTopic = $param["DeleteLogSetAndTopic"];
        }
    }
}
