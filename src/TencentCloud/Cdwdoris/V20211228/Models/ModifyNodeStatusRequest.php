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
 * ModifyNodeStatus request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID, such as cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) Set Cluster ID, such as cdwch-xxxx
 * @method array getNodeInfos() Obtain Node information
 * @method void setNodeInfos(array $NodeInfos) Set Node information
 * @method string getOperationCode() Obtain Node operation
 * @method void setOperationCode(string $OperationCode) Set Node operation
 * @method string getRestartTimeOut() Obtain Timeout period (s)
 * @method void setRestartTimeOut(string $RestartTimeOut) Set Timeout period (s)
 */
class ModifyNodeStatusRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, such as cdwch-xxxx
     */
    public $InstanceId;

    /**
     * @var array Node information
     */
    public $NodeInfos;

    /**
     * @var string Node operation
     */
    public $OperationCode;

    /**
     * @var string Timeout period (s)
     */
    public $RestartTimeOut;

    /**
     * @param string $InstanceId Cluster ID, such as cdwch-xxxx
     * @param array $NodeInfos Node information
     * @param string $OperationCode Node operation
     * @param string $RestartTimeOut Timeout period (s)
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

        if (array_key_exists("NodeInfos",$param) and $param["NodeInfos"] !== null) {
            $this->NodeInfos = [];
            foreach ($param["NodeInfos"] as $key => $value){
                $obj = new NodeInfos();
                $obj->deserialize($value);
                array_push($this->NodeInfos, $obj);
            }
        }

        if (array_key_exists("OperationCode",$param) and $param["OperationCode"] !== null) {
            $this->OperationCode = $param["OperationCode"];
        }

        if (array_key_exists("RestartTimeOut",$param) and $param["RestartTimeOut"] !== null) {
            $this->RestartTimeOut = $param["RestartTimeOut"];
        }
    }
}
