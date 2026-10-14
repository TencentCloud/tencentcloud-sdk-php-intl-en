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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kibana node-related information of the instance
 *
 * @method string getKibanaNodeType() Obtain Kibana node specification
 * @method void setKibanaNodeType(string $KibanaNodeType) Set Kibana node specification
 * @method integer getKibanaNodeNum() Obtain Number of Kibana nodes
 * @method void setKibanaNodeNum(integer $KibanaNodeNum) Set Number of Kibana nodes
 * @method integer getKibanaNodeCpuNum() Obtain Number of CPUs of the Kibana node
 * @method void setKibanaNodeCpuNum(integer $KibanaNodeCpuNum) Set Number of CPUs of the Kibana node
 * @method integer getKibanaNodeMemSize() Obtain Kibana node memory in GB
 * @method void setKibanaNodeMemSize(integer $KibanaNodeMemSize) Set Kibana node memory in GB
 * @method string getKibanaNodeDiskType() Obtain Kibana node disk type
 * @method void setKibanaNodeDiskType(string $KibanaNodeDiskType) Set Kibana node disk type
 * @method integer getKibanaNodeDiskSize() Obtain Kibana node disk size
 * @method void setKibanaNodeDiskSize(integer $KibanaNodeDiskSize) Set Kibana node disk size
 */
class KibanaNodeInfo extends AbstractModel
{
    /**
     * @var string Kibana node specification
     */
    public $KibanaNodeType;

    /**
     * @var integer Number of Kibana nodes
     */
    public $KibanaNodeNum;

    /**
     * @var integer Number of CPUs of the Kibana node
     */
    public $KibanaNodeCpuNum;

    /**
     * @var integer Kibana node memory in GB
     */
    public $KibanaNodeMemSize;

    /**
     * @var string Kibana node disk type
     */
    public $KibanaNodeDiskType;

    /**
     * @var integer Kibana node disk size
     */
    public $KibanaNodeDiskSize;

    /**
     * @param string $KibanaNodeType Kibana node specification
     * @param integer $KibanaNodeNum Number of Kibana nodes
     * @param integer $KibanaNodeCpuNum Number of CPUs of the Kibana node
     * @param integer $KibanaNodeMemSize Kibana node memory in GB
     * @param string $KibanaNodeDiskType Kibana node disk type
     * @param integer $KibanaNodeDiskSize Kibana node disk size
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
        if (array_key_exists("KibanaNodeType",$param) and $param["KibanaNodeType"] !== null) {
            $this->KibanaNodeType = $param["KibanaNodeType"];
        }

        if (array_key_exists("KibanaNodeNum",$param) and $param["KibanaNodeNum"] !== null) {
            $this->KibanaNodeNum = $param["KibanaNodeNum"];
        }

        if (array_key_exists("KibanaNodeCpuNum",$param) and $param["KibanaNodeCpuNum"] !== null) {
            $this->KibanaNodeCpuNum = $param["KibanaNodeCpuNum"];
        }

        if (array_key_exists("KibanaNodeMemSize",$param) and $param["KibanaNodeMemSize"] !== null) {
            $this->KibanaNodeMemSize = $param["KibanaNodeMemSize"];
        }

        if (array_key_exists("KibanaNodeDiskType",$param) and $param["KibanaNodeDiskType"] !== null) {
            $this->KibanaNodeDiskType = $param["KibanaNodeDiskType"];
        }

        if (array_key_exists("KibanaNodeDiskSize",$param) and $param["KibanaNodeDiskSize"] !== null) {
            $this->KibanaNodeDiskSize = $param["KibanaNodeDiskSize"];
        }
    }
}
