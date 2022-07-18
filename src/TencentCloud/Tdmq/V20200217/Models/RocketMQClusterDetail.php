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
 * Details of the tenant’s RocketMQ cluster
 *
 * @method RocketMQClusterInfo getInfo() Obtain Basic cluster information.
 * @method void setInfo(RocketMQClusterInfo $Info) Set Basic cluster information.
 * @method RocketMQClusterConfig getConfig() Obtain Cluster configuration information.
 * @method void setConfig(RocketMQClusterConfig $Config) Set Cluster configuration information.
 * @method integer getStatus() Obtain Cluster status. 0: Creating; 1: Normal; 2: Terminating; 3: Deleted; 4. Isolated; 5. Creation failed; 6: Deletion failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Cluster status. 0: Creating; 1: Normal; 2: Terminating; 3: Deleted; 4. Isolated; 5. Creation failed; 6: Deletion failed.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RocketMQClusterDetail extends AbstractModel
{
    /**
     * @var RocketMQClusterInfo Basic cluster information.
     */
    public $Info;

    /**
     * @var RocketMQClusterConfig Cluster configuration information.
     */
    public $Config;

    /**
     * @var integer Cluster status. 0: Creating; 1: Normal; 2: Terminating; 3: Deleted; 4. Isolated; 5. Creation failed; 6: Deletion failed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param RocketMQClusterInfo $Info Basic cluster information.
     * @param RocketMQClusterConfig $Config Cluster configuration information.
     * @param integer $Status Cluster status. 0: Creating; 1: Normal; 2: Terminating; 3: Deleted; 4. Isolated; 5. Creation failed; 6: Deletion failed.
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new RocketMQClusterInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new RocketMQClusterConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
