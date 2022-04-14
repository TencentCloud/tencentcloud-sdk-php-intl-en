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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutProvisionedConcurrencyConfig request structure.
 *
 * @method string getFunctionName() Obtain Name of the function for which to set the provisioned concurrency
 * @method void setFunctionName(string $FunctionName) Set Name of the function for which to set the provisioned concurrency
 * @method string getQualifier() Obtain Function version number. Note: the `$LATEST` version does not support provisioned concurrency
 * @method void setQualifier(string $Qualifier) Set Function version number. Note: the `$LATEST` version does not support provisioned concurrency
 * @method integer getVersionProvisionedConcurrencyNum() Obtain Provisioned concurrency amount. Note: there is an upper limit for the sum of provisioned concurrency amounts of all versions, which currently is the function's maximum concurrency quota minus 100
 * @method void setVersionProvisionedConcurrencyNum(integer $VersionProvisionedConcurrencyNum) Set Provisioned concurrency amount. Note: there is an upper limit for the sum of provisioned concurrency amounts of all versions, which currently is the function's maximum concurrency quota minus 100
 * @method string getNamespace() Obtain Function namespace. Default value: `default`
 * @method void setNamespace(string $Namespace) Set Function namespace. Default value: `default`
 * @method array getTriggerActions() Obtain Scheduled provisioned concurrency scaling action
 * @method void setTriggerActions(array $TriggerActions) Set Scheduled provisioned concurrency scaling action
 * @method string getProvisionedType() Obtain Specifies the provisioned concurrency type.
`Default`: Static provisioned concurrency. 
`ConcurrencyUtilizationTracking`: Scales the concurrency automatically according to the concurrency utilization.
If `ConcurrencyUtilizationTracking` is passed in, 

`TrackingTarget`, `MinCapacity` and `MaxCapacity` are required, and `VersionProvisionedConcurrencyNum` must be `0`. 
 * @method void setProvisionedType(string $ProvisionedType) Set Specifies the provisioned concurrency type.
`Default`: Static provisioned concurrency. 
`ConcurrencyUtilizationTracking`: Scales the concurrency automatically according to the concurrency utilization.
If `ConcurrencyUtilizationTracking` is passed in, 

`TrackingTarget`, `MinCapacity` and `MaxCapacity` are required, and `VersionProvisionedConcurrencyNum` must be `0`. 
 * @method float getTrackingTarget() Obtain The target concurrency utilization. Range: (0,1) (two decimal places)
 * @method void setTrackingTarget(float $TrackingTarget) Set The target concurrency utilization. Range: (0,1) (two decimal places)
 * @method integer getMinCapacity() Obtain The minimum number of instances. It can not be smaller than `1`.
 * @method void setMinCapacity(integer $MinCapacity) Set The minimum number of instances. It can not be smaller than `1`.
 * @method integer getMaxCapacity() Obtain The maximum number of instances
 * @method void setMaxCapacity(integer $MaxCapacity) Set The maximum number of instances
 */
class PutProvisionedConcurrencyConfigRequest extends AbstractModel
{
    /**
     * @var string Name of the function for which to set the provisioned concurrency
     */
    public $FunctionName;

    /**
     * @var string Function version number. Note: the `$LATEST` version does not support provisioned concurrency
     */
    public $Qualifier;

    /**
     * @var integer Provisioned concurrency amount. Note: there is an upper limit for the sum of provisioned concurrency amounts of all versions, which currently is the function's maximum concurrency quota minus 100
     */
    public $VersionProvisionedConcurrencyNum;

    /**
     * @var string Function namespace. Default value: `default`
     */
    public $Namespace;

    /**
     * @var array Scheduled provisioned concurrency scaling action
     */
    public $TriggerActions;

    /**
     * @var string Specifies the provisioned concurrency type.
`Default`: Static provisioned concurrency. 
`ConcurrencyUtilizationTracking`: Scales the concurrency automatically according to the concurrency utilization.
If `ConcurrencyUtilizationTracking` is passed in, 

`TrackingTarget`, `MinCapacity` and `MaxCapacity` are required, and `VersionProvisionedConcurrencyNum` must be `0`. 
     */
    public $ProvisionedType;

    /**
     * @var float The target concurrency utilization. Range: (0,1) (two decimal places)
     */
    public $TrackingTarget;

    /**
     * @var integer The minimum number of instances. It can not be smaller than `1`.
     */
    public $MinCapacity;

    /**
     * @var integer The maximum number of instances
     */
    public $MaxCapacity;

    /**
     * @param string $FunctionName Name of the function for which to set the provisioned concurrency
     * @param string $Qualifier Function version number. Note: the `$LATEST` version does not support provisioned concurrency
     * @param integer $VersionProvisionedConcurrencyNum Provisioned concurrency amount. Note: there is an upper limit for the sum of provisioned concurrency amounts of all versions, which currently is the function's maximum concurrency quota minus 100
     * @param string $Namespace Function namespace. Default value: `default`
     * @param array $TriggerActions Scheduled provisioned concurrency scaling action
     * @param string $ProvisionedType Specifies the provisioned concurrency type.
`Default`: Static provisioned concurrency. 
`ConcurrencyUtilizationTracking`: Scales the concurrency automatically according to the concurrency utilization.
If `ConcurrencyUtilizationTracking` is passed in, 

`TrackingTarget`, `MinCapacity` and `MaxCapacity` are required, and `VersionProvisionedConcurrencyNum` must be `0`. 
     * @param float $TrackingTarget The target concurrency utilization. Range: (0,1) (two decimal places)
     * @param integer $MinCapacity The minimum number of instances. It can not be smaller than `1`.
     * @param integer $MaxCapacity The maximum number of instances
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("VersionProvisionedConcurrencyNum",$param) and $param["VersionProvisionedConcurrencyNum"] !== null) {
            $this->VersionProvisionedConcurrencyNum = $param["VersionProvisionedConcurrencyNum"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TriggerActions",$param) and $param["TriggerActions"] !== null) {
            $this->TriggerActions = [];
            foreach ($param["TriggerActions"] as $key => $value){
                $obj = new TriggerAction();
                $obj->deserialize($value);
                array_push($this->TriggerActions, $obj);
            }
        }

        if (array_key_exists("ProvisionedType",$param) and $param["ProvisionedType"] !== null) {
            $this->ProvisionedType = $param["ProvisionedType"];
        }

        if (array_key_exists("TrackingTarget",$param) and $param["TrackingTarget"] !== null) {
            $this->TrackingTarget = $param["TrackingTarget"];
        }

        if (array_key_exists("MinCapacity",$param) and $param["MinCapacity"] !== null) {
            $this->MinCapacity = $param["MinCapacity"];
        }

        if (array_key_exists("MaxCapacity",$param) and $param["MaxCapacity"] !== null) {
            $this->MaxCapacity = $param["MaxCapacity"];
        }
    }
}
