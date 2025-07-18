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
 * CreateCLSLogConfig request structure.
 *
 * @method string getLogConfig() Obtain Log collection configuration in json form
 * @method void setLogConfig(string $LogConfig) Set Log collection configuration in json form
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getLogsetId() Obtain CLS Logset ID
 * @method void setLogsetId(string $LogsetId) Set CLS Logset ID
 * @method string getClusterType() Obtain Current cluster types support tke, eks.
 * @method void setClusterType(string $ClusterType) Set Current cluster types support tke, eks.
 */
class CreateCLSLogConfigRequest extends AbstractModel
{
    /**
     * @var string Log collection configuration in json form
     */
    public $LogConfig;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string CLS Logset ID
     */
    public $LogsetId;

    /**
     * @var string Current cluster types support tke, eks.
     */
    public $ClusterType;

    /**
     * @param string $LogConfig Log collection configuration in json form
     * @param string $ClusterId Cluster ID
     * @param string $LogsetId CLS Logset ID
     * @param string $ClusterType Current cluster types support tke, eks.
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
        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = $param["LogConfig"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
