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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics on the instances associated with the security group
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID.
 * @method integer getCVM() Obtain Number of CVM instances.
 * @method void setCVM(integer $CVM) Set Number of CVM instances.
 * @method integer getCDB() Obtain Number of TencentDB for MySQL instances
 * @method void setCDB(integer $CDB) Set Number of TencentDB for MySQL instances
 * @method integer getENI() Obtain Number of ENI instances.
 * @method void setENI(integer $ENI) Set Number of ENI instances.
 * @method integer getSG() Obtain Number of times a security group is referenced by other security groups
 * @method void setSG(integer $SG) Set Number of times a security group is referenced by other security groups
 * @method integer getCLB() Obtain Number of load balancer instances.
 * @method void setCLB(integer $CLB) Set Number of load balancer instances.
 * @method array getInstanceStatistics() Obtain The binding statistics for all instances.
 * @method void setInstanceStatistics(array $InstanceStatistics) Set The binding statistics for all instances.
 * @method integer getTotalCount() Obtain Total count of all resources (excluding resources referenced by security groups).
 * @method void setTotalCount(integer $TotalCount) Set Total count of all resources (excluding resources referenced by security groups).
 */
class SecurityGroupAssociationStatistics extends AbstractModel
{
    /**
     * @var string Security group instance ID.
     */
    public $SecurityGroupId;

    /**
     * @var integer Number of CVM instances.
     */
    public $CVM;

    /**
     * @var integer Number of TencentDB for MySQL instances
     */
    public $CDB;

    /**
     * @var integer Number of ENI instances.
     */
    public $ENI;

    /**
     * @var integer Number of times a security group is referenced by other security groups
     */
    public $SG;

    /**
     * @var integer Number of load balancer instances.
     */
    public $CLB;

    /**
     * @var array The binding statistics for all instances.
     */
    public $InstanceStatistics;

    /**
     * @var integer Total count of all resources (excluding resources referenced by security groups).
     */
    public $TotalCount;

    /**
     * @param string $SecurityGroupId Security group instance ID.
     * @param integer $CVM Number of CVM instances.
     * @param integer $CDB Number of TencentDB for MySQL instances
     * @param integer $ENI Number of ENI instances.
     * @param integer $SG Number of times a security group is referenced by other security groups
     * @param integer $CLB Number of load balancer instances.
     * @param array $InstanceStatistics The binding statistics for all instances.
     * @param integer $TotalCount Total count of all resources (excluding resources referenced by security groups).
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = $param["CVM"];
        }

        if (array_key_exists("CDB",$param) and $param["CDB"] !== null) {
            $this->CDB = $param["CDB"];
        }

        if (array_key_exists("ENI",$param) and $param["ENI"] !== null) {
            $this->ENI = $param["ENI"];
        }

        if (array_key_exists("SG",$param) and $param["SG"] !== null) {
            $this->SG = $param["SG"];
        }

        if (array_key_exists("CLB",$param) and $param["CLB"] !== null) {
            $this->CLB = $param["CLB"];
        }

        if (array_key_exists("InstanceStatistics",$param) and $param["InstanceStatistics"] !== null) {
            $this->InstanceStatistics = [];
            foreach ($param["InstanceStatistics"] as $key => $value){
                $obj = new InstanceStatistic();
                $obj->deserialize($value);
                array_push($this->InstanceStatistics, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
