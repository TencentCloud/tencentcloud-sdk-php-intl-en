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
 * RestartClusterForNode request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID, such as cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) Set Cluster ID, such as cdwch-xxxx
 * @method string getConfigName() Obtain Configuration file's name
 * @method void setConfigName(string $ConfigName) Set Configuration file's name
 * @method integer getBatchSize() Obtain Each batch of restarts
 * @method void setBatchSize(integer $BatchSize) Set Each batch of restarts
 * @method array getNodeList() Obtain Restart node
 * @method void setNodeList(array $NodeList) Set Restart node
 * @method boolean getRollingRestart() Obtain False means non-rolling restart, and true means rolling restart.
 * @method void setRollingRestart(boolean $RollingRestart) Set False means non-rolling restart, and true means rolling restart.
 */
class RestartClusterForNodeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, such as cdwch-xxxx
     */
    public $InstanceId;

    /**
     * @var string Configuration file's name
     */
    public $ConfigName;

    /**
     * @var integer Each batch of restarts
     */
    public $BatchSize;

    /**
     * @var array Restart node
     */
    public $NodeList;

    /**
     * @var boolean False means non-rolling restart, and true means rolling restart.
     */
    public $RollingRestart;

    /**
     * @param string $InstanceId Cluster ID, such as cdwch-xxxx
     * @param string $ConfigName Configuration file's name
     * @param integer $BatchSize Each batch of restarts
     * @param array $NodeList Restart node
     * @param boolean $RollingRestart False means non-rolling restart, and true means rolling restart.
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

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("RollingRestart",$param) and $param["RollingRestart"] !== null) {
            $this->RollingRestart = $param["RollingRestart"];
        }
    }
}
