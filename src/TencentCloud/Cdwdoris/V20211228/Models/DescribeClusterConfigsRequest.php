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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterConfigs request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method integer getConfigType() Obtain 0 indicates public cloud query, and 1 Qinge query. Qinge query shows all that needs to be displayed.
 * @method void setConfigType(integer $ConfigType) Set 0 indicates public cloud query, and 1 Qinge query. Qinge query shows all that needs to be displayed.
 * @method string getFileName() Obtain Search for files with fuzzy keywords
 * @method void setFileName(string $FileName) Set Search for files with fuzzy keywords
 * @method integer getClusterConfigType() Obtain 0 indicates cluster dimension and 1 node dimension
 * @method void setClusterConfigType(integer $ClusterConfigType) Set 0 indicates cluster dimension and 1 node dimension
 * @method string getIPAddress() Obtain eth0's IP address
 * @method void setIPAddress(string $IPAddress) Set eth0's IP address
 */
class DescribeClusterConfigsRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var integer 0 indicates public cloud query, and 1 Qinge query. Qinge query shows all that needs to be displayed.
     */
    public $ConfigType;

    /**
     * @var string Search for files with fuzzy keywords
     */
    public $FileName;

    /**
     * @var integer 0 indicates cluster dimension and 1 node dimension
     */
    public $ClusterConfigType;

    /**
     * @var string eth0's IP address
     */
    public $IPAddress;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param integer $ConfigType 0 indicates public cloud query, and 1 Qinge query. Qinge query shows all that needs to be displayed.
     * @param string $FileName Search for files with fuzzy keywords
     * @param integer $ClusterConfigType 0 indicates cluster dimension and 1 node dimension
     * @param string $IPAddress eth0's IP address
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ClusterConfigType",$param) and $param["ClusterConfigType"] !== null) {
            $this->ClusterConfigType = $param["ClusterConfigType"];
        }

        if (array_key_exists("IPAddress",$param) and $param["IPAddress"] !== null) {
            $this->IPAddress = $param["IPAddress"];
        }
    }
}
