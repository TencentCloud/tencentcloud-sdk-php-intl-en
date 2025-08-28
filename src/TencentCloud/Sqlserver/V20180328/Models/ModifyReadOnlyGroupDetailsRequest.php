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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReadOnlyGroupDetails request structure.
 *
 * @method string getInstanceId() Obtain Primary instance ID, in the format of mssql-3l3fgqn7.
 * @method void setInstanceId(string $InstanceId) Set Primary instance ID, in the format of mssql-3l3fgqn7.
 * @method string getReadOnlyGroupId() Obtain Read-only group ID.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set Read-only group ID.
 * @method string getReadOnlyGroupName() Obtain Read-only group name. The modification is not performed if this parameter is left unspecified.
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set Read-only group name. The modification is not performed if this parameter is left unspecified.
 * @method integer getIsOfflineDelay() Obtain Whether to enable the delayed read-only instance removal feature. 0 - disabled; 1 - enabled. The modification is not performed if this parameter is left unspecified.
 * @method void setIsOfflineDelay(integer $IsOfflineDelay) Set Whether to enable the delayed read-only instance removal feature. 0 - disabled; 1 - enabled. The modification is not performed if this parameter is left unspecified.
 * @method integer getReadOnlyMaxDelayTime() Obtain Timeout threshold used after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
 * @method void setReadOnlyMaxDelayTime(integer $ReadOnlyMaxDelayTime) Set Timeout threshold used after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
 * @method integer getMinReadOnlyInGroup() Obtain Minimum number of retained read-only replicas in the read-only group, after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
 * @method void setMinReadOnlyInGroup(integer $MinReadOnlyInGroup) Set Minimum number of retained read-only replicas in the read-only group, after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
 * @method array getWeightPairs() Obtain Collection of read-only group instance weight modification. The modification is not performed if this parameter is left unspecified.
 * @method void setWeightPairs(array $WeightPairs) Set Collection of read-only group instance weight modification. The modification is not performed if this parameter is left unspecified.
 * @method integer getAutoWeight() Obtain 0 - user-defined weight (adjust according to WeightPairs); 1 - automatically assigned weight by the system (invalid WeightPairs). The default value is 0.
 * @method void setAutoWeight(integer $AutoWeight) Set 0 - user-defined weight (adjust according to WeightPairs); 1 - automatically assigned weight by the system (invalid WeightPairs). The default value is 0.
 * @method integer getBalanceWeight() Obtain 0 - not rebalance the load; 1 - rebalance the load. The default value is 0.
 * @method void setBalanceWeight(integer $BalanceWeight) Set 0 - not rebalance the load; 1 - rebalance the load. The default value is 0.
 */
class ModifyReadOnlyGroupDetailsRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID, in the format of mssql-3l3fgqn7.
     */
    public $InstanceId;

    /**
     * @var string Read-only group ID.
     */
    public $ReadOnlyGroupId;

    /**
     * @var string Read-only group name. The modification is not performed if this parameter is left unspecified.
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer Whether to enable the delayed read-only instance removal feature. 0 - disabled; 1 - enabled. The modification is not performed if this parameter is left unspecified.
     */
    public $IsOfflineDelay;

    /**
     * @var integer Timeout threshold used after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
     */
    public $ReadOnlyMaxDelayTime;

    /**
     * @var integer Minimum number of retained read-only replicas in the read-only group, after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
     */
    public $MinReadOnlyInGroup;

    /**
     * @var array Collection of read-only group instance weight modification. The modification is not performed if this parameter is left unspecified.
     */
    public $WeightPairs;

    /**
     * @var integer 0 - user-defined weight (adjust according to WeightPairs); 1 - automatically assigned weight by the system (invalid WeightPairs). The default value is 0.
     */
    public $AutoWeight;

    /**
     * @var integer 0 - not rebalance the load; 1 - rebalance the load. The default value is 0.
     */
    public $BalanceWeight;

    /**
     * @param string $InstanceId Primary instance ID, in the format of mssql-3l3fgqn7.
     * @param string $ReadOnlyGroupId Read-only group ID.
     * @param string $ReadOnlyGroupName Read-only group name. The modification is not performed if this parameter is left unspecified.
     * @param integer $IsOfflineDelay Whether to enable the delayed read-only instance removal feature. 0 - disabled; 1 - enabled. The modification is not performed if this parameter is left unspecified.
     * @param integer $ReadOnlyMaxDelayTime Timeout threshold used after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
     * @param integer $MinReadOnlyInGroup Minimum number of retained read-only replicas in the read-only group, after the delayed read-only instance removal feature is enabled. The modification is not performed if this parameter is left unspecified.
     * @param array $WeightPairs Collection of read-only group instance weight modification. The modification is not performed if this parameter is left unspecified.
     * @param integer $AutoWeight 0 - user-defined weight (adjust according to WeightPairs); 1 - automatically assigned weight by the system (invalid WeightPairs). The default value is 0.
     * @param integer $BalanceWeight 0 - not rebalance the load; 1 - rebalance the load. The default value is 0.
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

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("IsOfflineDelay",$param) and $param["IsOfflineDelay"] !== null) {
            $this->IsOfflineDelay = $param["IsOfflineDelay"];
        }

        if (array_key_exists("ReadOnlyMaxDelayTime",$param) and $param["ReadOnlyMaxDelayTime"] !== null) {
            $this->ReadOnlyMaxDelayTime = $param["ReadOnlyMaxDelayTime"];
        }

        if (array_key_exists("MinReadOnlyInGroup",$param) and $param["MinReadOnlyInGroup"] !== null) {
            $this->MinReadOnlyInGroup = $param["MinReadOnlyInGroup"];
        }

        if (array_key_exists("WeightPairs",$param) and $param["WeightPairs"] !== null) {
            $this->WeightPairs = [];
            foreach ($param["WeightPairs"] as $key => $value){
                $obj = new ReadOnlyInstanceWeightPair();
                $obj->deserialize($value);
                array_push($this->WeightPairs, $obj);
            }
        }

        if (array_key_exists("AutoWeight",$param) and $param["AutoWeight"] !== null) {
            $this->AutoWeight = $param["AutoWeight"];
        }

        if (array_key_exists("BalanceWeight",$param) and $param["BalanceWeight"] !== null) {
            $this->BalanceWeight = $param["BalanceWeight"];
        }
    }
}
