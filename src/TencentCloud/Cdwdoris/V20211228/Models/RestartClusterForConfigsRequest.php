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
 * RestartClusterForConfigs request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID, such as cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) Set Cluster ID, such as cdwch-xxxx
 * @method string getConfigName() Obtain Configuration file's name
 * @method void setConfigName(string $ConfigName) Set Configuration file's name
 * @method string getOperationType() Obtain grace_restart is an elegant scrolling restart. If this parameter is not filled in, restart now by default.
 * @method void setOperationType(string $OperationType) Set grace_restart is an elegant scrolling restart. If this parameter is not filled in, restart now by default.
 */
class RestartClusterForConfigsRequest extends AbstractModel
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
     * @var string grace_restart is an elegant scrolling restart. If this parameter is not filled in, restart now by default.
     */
    public $OperationType;

    /**
     * @param string $InstanceId Cluster ID, such as cdwch-xxxx
     * @param string $ConfigName Configuration file's name
     * @param string $OperationType grace_restart is an elegant scrolling restart. If this parameter is not filled in, restart now by default.
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

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
