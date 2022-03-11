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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics on the resources associated with the security group
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID.
 * @method integer getECM() Obtain Number of ECM instances.
 * @method void setECM(integer $ECM) Set Number of ECM instances.
 * @method integer getModule() Obtain Number of ECM modules.
 * @method void setModule(integer $Module) Set Number of ECM modules.
 * @method integer getENI() Obtain Number of ENI instances.
 * @method void setENI(integer $ENI) Set Number of ENI instances.
 * @method integer getSG() Obtain Number of times the security group is referenced by other security groups.
 * @method void setSG(integer $SG) Set Number of times the security group is referenced by other security groups.
 * @method integer getCLB() Obtain Number of CLB instances.
 * @method void setCLB(integer $CLB) Set Number of CLB instances.
 * @method array getInstanceStatistics() Obtain Binding statistics of all instances.
 * @method void setInstanceStatistics(array $InstanceStatistics) Set Binding statistics of all instances.
 * @method integer getTotalCount() Obtain Total number of all resources (excluding resources referenced by security groups).
 * @method void setTotalCount(integer $TotalCount) Set Total number of all resources (excluding resources referenced by security groups).
 */
class SecurityGroupAssociationStatistics extends AbstractModel
{
    /**
     * @var string Security group instance ID.
     */
    public $SecurityGroupId;

    /**
     * @var integer Number of ECM instances.
     */
    public $ECM;

    /**
     * @var integer Number of ECM modules.
     */
    public $Module;

    /**
     * @var integer Number of ENI instances.
     */
    public $ENI;

    /**
     * @var integer Number of times the security group is referenced by other security groups.
     */
    public $SG;

    /**
     * @var integer Number of CLB instances.
     */
    public $CLB;

    /**
     * @var array Binding statistics of all instances.
     */
    public $InstanceStatistics;

    /**
     * @var integer Total number of all resources (excluding resources referenced by security groups).
     */
    public $TotalCount;

    /**
     * @param string $SecurityGroupId Security group instance ID.
     * @param integer $ECM Number of ECM instances.
     * @param integer $Module Number of ECM modules.
     * @param integer $ENI Number of ENI instances.
     * @param integer $SG Number of times the security group is referenced by other security groups.
     * @param integer $CLB Number of CLB instances.
     * @param array $InstanceStatistics Binding statistics of all instances.
     * @param integer $TotalCount Total number of all resources (excluding resources referenced by security groups).
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

        if (array_key_exists("ECM",$param) and $param["ECM"] !== null) {
            $this->ECM = $param["ECM"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
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
