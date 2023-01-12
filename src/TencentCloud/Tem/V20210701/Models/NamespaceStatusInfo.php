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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment status
 *
 * @method string getEnvironmentId() Obtain ID of the environment
 * @method void setEnvironmentId(string $EnvironmentId) Set ID of the environment
 * @method string getEnvironmentName() Obtain Environment name
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
 * @method string getClusterId() Obtain TCB envId | EKS clusterId
 * @method void setClusterId(string $ClusterId) Set TCB envId | EKS clusterId
 * @method string getClusterStatus() Obtain Environment status
 * @method void setClusterStatus(string $ClusterStatus) Set Environment status
 * @method TemEnvironmentStartingStatus getEnvironmentStartingStatus() Obtain Whether the environment is being started. `null` is returned if it’s not being started.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnvironmentStartingStatus(TemEnvironmentStartingStatus $EnvironmentStartingStatus) Set Whether the environment is being started. `null` is returned if it’s not being started.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method TemEnvironmentStoppingStatus getEnvironmentStoppingStatus() Obtain Whether the environment is being stopped. `null` is returned if it’s not being stopped.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnvironmentStoppingStatus(TemEnvironmentStoppingStatus $EnvironmentStoppingStatus) Set Whether the environment is being stopped. `null` is returned if it’s not being stopped.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class NamespaceStatusInfo extends AbstractModel
{
    /**
     * @var string ID of the environment
     */
    public $EnvironmentId;

    /**
     * @var string Environment name
     */
    public $EnvironmentName;

    /**
     * @var string TCB envId | EKS clusterId
     */
    public $ClusterId;

    /**
     * @var string Environment status
     */
    public $ClusterStatus;

    /**
     * @var TemEnvironmentStartingStatus Whether the environment is being started. `null` is returned if it’s not being started.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnvironmentStartingStatus;

    /**
     * @var TemEnvironmentStoppingStatus Whether the environment is being stopped. `null` is returned if it’s not being stopped.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnvironmentStoppingStatus;

    /**
     * @param string $EnvironmentId ID of the environment
     * @param string $EnvironmentName Environment name
     * @param string $ClusterId TCB envId | EKS clusterId
     * @param string $ClusterStatus Environment status
     * @param TemEnvironmentStartingStatus $EnvironmentStartingStatus Whether the environment is being started. `null` is returned if it’s not being started.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param TemEnvironmentStoppingStatus $EnvironmentStoppingStatus Whether the environment is being stopped. `null` is returned if it’s not being stopped.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("EnvironmentStartingStatus",$param) and $param["EnvironmentStartingStatus"] !== null) {
            $this->EnvironmentStartingStatus = new TemEnvironmentStartingStatus();
            $this->EnvironmentStartingStatus->deserialize($param["EnvironmentStartingStatus"]);
        }

        if (array_key_exists("EnvironmentStoppingStatus",$param) and $param["EnvironmentStoppingStatus"] !== null) {
            $this->EnvironmentStoppingStatus = new TemEnvironmentStoppingStatus();
            $this->EnvironmentStoppingStatus->deserialize($param["EnvironmentStoppingStatus"]);
        }
    }
}
