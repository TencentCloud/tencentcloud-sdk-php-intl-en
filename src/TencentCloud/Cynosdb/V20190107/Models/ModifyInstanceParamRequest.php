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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceParam request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain Instance ID.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID.
 * @method array getClusterParamList() Obtain Cluster parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
 * @method void setClusterParamList(array $ClusterParamList) Set Cluster parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
 * @method array getInstanceParamList() Obtain Instance parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
 * @method void setInstanceParamList(array $InstanceParamList) Set Instance parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
 * @method string getIsInMaintainPeriod() Obtain yes: modify within the Ops time window. no: immediately execute (default value).
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set yes: modify within the Ops time window. no: immediately execute (default value).
 */
class ModifyInstanceParamRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID.
     */
    public $InstanceIds;

    /**
     * @var array Cluster parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
     */
    public $ClusterParamList;

    /**
     * @var array Instance parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
     */
    public $InstanceParamList;

    /**
     * @var string yes: modify within the Ops time window. no: immediately execute (default value).
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds Instance ID.
     * @param array $ClusterParamList Cluster parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
     * @param array $InstanceParamList Instance parameter list, for example, [{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
     * @param string $IsInMaintainPeriod yes: modify within the Ops time window. no: immediately execute (default value).
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
