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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceParam request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain Instance ID
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID
 * @method array getClusterParamList() Obtain List of cluster parameters
 * @method void setClusterParamList(array $ClusterParamList) Set List of cluster parameters
 * @method array getInstanceParamList() Obtain List of the instance parameters
 * @method void setInstanceParamList(array $InstanceParamList) Set List of the instance parameters
 * @method string getIsInMaintainPeriod() Obtain Valid values: `yes` (modify in maintenance window),  `no`  (execute now by default).
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Valid values: `yes` (modify in maintenance window),  `no`  (execute now by default).
 */
class ModifyInstanceParamRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID
     */
    public $InstanceIds;

    /**
     * @var array List of cluster parameters
     */
    public $ClusterParamList;

    /**
     * @var array List of the instance parameters
     */
    public $InstanceParamList;

    /**
     * @var string Valid values: `yes` (modify in maintenance window),  `no`  (execute now by default).
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds Instance ID
     * @param array $ClusterParamList List of cluster parameters
     * @param array $InstanceParamList List of the instance parameters
     * @param string $IsInMaintainPeriod Valid values: `yes` (modify in maintenance window),  `no`  (execute now by default).
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClusterParamList",$param) and $param["ClusterParamList"] !== null) {
            $this->ClusterParamList = [];
            foreach ($param["ClusterParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParamList, $obj);
            }
        }

        if (array_key_exists("InstanceParamList",$param) and $param["InstanceParamList"] !== null) {
            $this->InstanceParamList = [];
            foreach ($param["InstanceParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->InstanceParamList, $obj);
            }
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
