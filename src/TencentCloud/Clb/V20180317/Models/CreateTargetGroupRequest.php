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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTargetGroup request structure.
 *
 * @method string getTargetGroupName() Obtain Target group name (up to 50 characters)
 * @method void setTargetGroupName(string $TargetGroupName) Set Target group name (up to 50 characters)
 * @method string getVpcId() Obtain `vpcid` attribute of a target group. If this parameter is left empty, the default VPC will be used.
 * @method void setVpcId(string $VpcId) Set `vpcid` attribute of a target group. If this parameter is left empty, the default VPC will be used.
 * @method integer getPort() Obtain Default port of the target group, which can be used for adding servers subsequently. Either the Port or the port in TargetGroupInstances.N should be input.
 * @method void setPort(integer $Port) Set Default port of the target group, which can be used for adding servers subsequently. Either the Port or the port in TargetGroupInstances.N should be input.
 * @method array getTargetGroupInstances() Obtain Real server bound to a target group
 * @method void setTargetGroupInstances(array $TargetGroupInstances) Set Real server bound to a target group
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string Target group name (up to 50 characters)
     */
    public $TargetGroupName;

    /**
     * @var string `vpcid` attribute of a target group. If this parameter is left empty, the default VPC will be used.
     */
    public $VpcId;

    /**
     * @var integer Default port of the target group, which can be used for adding servers subsequently. Either the Port or the port in TargetGroupInstances.N should be input.
     */
    public $Port;

    /**
     * @var array Real server bound to a target group
     */
    public $TargetGroupInstances;

    /**
     * @param string $TargetGroupName Target group name (up to 50 characters)
     * @param string $VpcId `vpcid` attribute of a target group. If this parameter is left empty, the default VPC will be used.
     * @param integer $Port Default port of the target group, which can be used for adding servers subsequently. Either the Port or the port in TargetGroupInstances.N should be input.
     * @param array $TargetGroupInstances Real server bound to a target group
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
    }
}
