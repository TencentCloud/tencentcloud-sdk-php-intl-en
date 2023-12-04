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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The structure returned by the audit of the network cluster asset
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRegion() Obtain Cluster region
 * @method void setRegion(string $Region) Set Cluster region
 * @method string getAction() Obtain Action
 * @method void setAction(string $Action) Set Action
 * @method string getOperation() Obtain Operator
 * @method void setOperation(string $Operation) Set Operator
 * @method string getNetworkPolicyName() Obtain Policy name
 * @method void setNetworkPolicyName(string $NetworkPolicyName) Set Policy name
 * @method string getOperationTime() Obtain Operation time
 * @method void setOperationTime(string $OperationTime) Set Operation time
 * @method integer getAppId() Obtain Operator `appid`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set Operator `appid`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain Operator UIN
 * @method void setUin(string $Uin) Set Operator UIN
 * @method integer getPolicyId() Obtain The policy ID.
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setPolicyId(integer $PolicyId) Set The policy ID.
Note: This field may return·`null`, indicating that no valid values can be obtained.
 */
class NetworkAuditRecord extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster region
     */
    public $Region;

    /**
     * @var string Action
     */
    public $Action;

    /**
     * @var string Operator
     */
    public $Operation;

    /**
     * @var string Policy name
     */
    public $NetworkPolicyName;

    /**
     * @var string Operation time
     */
    public $OperationTime;

    /**
     * @var integer Operator `appid`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Operator UIN
     */
    public $Uin;

    /**
     * @var integer The policy ID.
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Region Cluster region
     * @param string $Action Action
     * @param string $Operation Operator
     * @param string $NetworkPolicyName Policy name
     * @param string $OperationTime Operation time
     * @param integer $AppId Operator `appid`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin Operator UIN
     * @param integer $PolicyId The policy ID.
Note: This field may return·`null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("NetworkPolicyName",$param) and $param["NetworkPolicyName"] !== null) {
            $this->NetworkPolicyName = $param["NetworkPolicyName"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
