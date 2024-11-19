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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTargetGroup request structure.
 *
 * @method string getTargetGroupName() Obtain Target group name, up to 50 characters
 * @method void setTargetGroupName(string $TargetGroupName) Set Target group name, up to 50 characters
 * @method string getVpcId() Obtain VPCID attribute of target group. If this parameter is left blank, the default VPC will be used.
 * @method void setVpcId(string $VpcId) Set VPCID attribute of target group. If this parameter is left blank, the default VPC will be used.
 * @method integer getPort() Obtain Default port of target group. This default port can be used when servers are added subsequently. Either Port or port in TargetGroupInstances.N is required.
 * @method void setPort(integer $Port) Set Default port of target group. This default port can be used when servers are added subsequently. Either Port or port in TargetGroupInstances.N is required.
 * @method array getTargetGroupInstances() Obtain Real server bound to a target group
 * @method void setTargetGroupInstances(array $TargetGroupInstances) Set Real server bound to a target group
 * @method string getProtocol() Obtain GWLB target group protocol.- AWS_GENEVE: GENEVE compatible protocol - TENCENT_GENEVE: GENEVE standard protocol
 * @method void setProtocol(string $Protocol) Set GWLB target group protocol.- AWS_GENEVE: GENEVE compatible protocol - TENCENT_GENEVE: GENEVE standard protocol
 * @method TargetGroupHealthCheck getHealthCheck() Obtain Health check.
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set Health check.
 * @method string getScheduleAlgorithm() Obtain RS scheduling algorithm.- IP_HASH_3_ELASTIC: elastic hashing
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) Set RS scheduling algorithm.- IP_HASH_3_ELASTIC: elastic hashing
 * @method boolean getAllDeadToAlive() Obtain Whether "All Dead, All Alive" is supported. It is supported by default.
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) Set Whether "All Dead, All Alive" is supported. It is supported by default.
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string Target group name, up to 50 characters
     */
    public $TargetGroupName;

    /**
     * @var string VPCID attribute of target group. If this parameter is left blank, the default VPC will be used.
     */
    public $VpcId;

    /**
     * @var integer Default port of target group. This default port can be used when servers are added subsequently. Either Port or port in TargetGroupInstances.N is required.
     */
    public $Port;

    /**
     * @var array Real server bound to a target group
     */
    public $TargetGroupInstances;

    /**
     * @var string GWLB target group protocol.- AWS_GENEVE: GENEVE compatible protocol - TENCENT_GENEVE: GENEVE standard protocol
     */
    public $Protocol;

    /**
     * @var TargetGroupHealthCheck Health check.
     */
    public $HealthCheck;

    /**
     * @var string RS scheduling algorithm.- IP_HASH_3_ELASTIC: elastic hashing
     */
    public $ScheduleAlgorithm;

    /**
     * @var boolean Whether "All Dead, All Alive" is supported. It is supported by default.
     */
    public $AllDeadToAlive;

    /**
     * @param string $TargetGroupName Target group name, up to 50 characters
     * @param string $VpcId VPCID attribute of target group. If this parameter is left blank, the default VPC will be used.
     * @param integer $Port Default port of target group. This default port can be used when servers are added subsequently. Either Port or port in TargetGroupInstances.N is required.
     * @param array $TargetGroupInstances Real server bound to a target group
     * @param string $Protocol GWLB target group protocol.- AWS_GENEVE: GENEVE compatible protocol - TENCENT_GENEVE: GENEVE standard protocol
     * @param TargetGroupHealthCheck $HealthCheck Health check.
     * @param string $ScheduleAlgorithm RS scheduling algorithm.- IP_HASH_3_ELASTIC: elastic hashing
     * @param boolean $AllDeadToAlive Whether "All Dead, All Alive" is supported. It is supported by default.
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
        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetGroupInstances",$param) and $param["TargetGroupInstances"] !== null) {
            $this->TargetGroupInstances = [];
            foreach ($param["TargetGroupInstances"] as $key => $value){
                $obj = new TargetGroupInstance();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstances, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
        }

        if (array_key_exists("AllDeadToAlive",$param) and $param["AllDeadToAlive"] !== null) {
            $this->AllDeadToAlive = $param["AllDeadToAlive"];
        }
    }
}
