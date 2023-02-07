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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Self-built AlertManager configuration used by the alert channel
 *
 * @method string getUrl() Obtain AlertManager URL
 * @method void setUrl(string $Url) Set AlertManager URL
 * @method string getClusterType() Obtain Type of the cluster where AlertManager is deployed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterType(string $ClusterType) Set Type of the cluster where AlertManager is deployed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain ID of the cluster where AlertManager is deployed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where AlertManager is deployed
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAlertManagerConfig extends AbstractModel
{
    /**
     * @var string AlertManager URL
     */
    public $Url;

    /**
     * @var string Type of the cluster where AlertManager is deployed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterType;

    /**
     * @var string ID of the cluster where AlertManager is deployed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @param string $Url AlertManager URL
     * @param string $ClusterType Type of the cluster where AlertManager is deployed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId ID of the cluster where AlertManager is deployed
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
