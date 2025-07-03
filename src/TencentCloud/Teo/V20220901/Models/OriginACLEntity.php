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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instances that require configuration origin ACLs.
 *
 * @method string getType() Obtain Instance type. Valid values:
-l7: L7 acceleration domain;
-l4: L4 proxy instance.
 * @method void setType(string $Type) Set Instance type. Valid values:
-l7: L7 acceleration domain;
-l4: L4 proxy instance.
 * @method array getInstances() Obtain Instance detail. Valid values:
-When Type = l7, please enter the L7 acceleration domain.
-When Type = l4, please enter the L4 proxy instance ID.
 * @method void setInstances(array $Instances) Set Instance detail. Valid values:
-When Type = l7, please enter the L7 acceleration domain.
-When Type = l4, please enter the L4 proxy instance ID.
 * @method string getOperationMode() Obtain Operation mode. Valid values:.
- enable: enabled L7/L4 instances.
- disable: disable L7/L4 instances.
 * @method void setOperationMode(string $OperationMode) Set Operation mode. Valid values:.
- enable: enabled L7/L4 instances.
- disable: disable L7/L4 instances.
 */
class OriginACLEntity extends AbstractModel
{
    /**
     * @var string Instance type. Valid values:
-l7: L7 acceleration domain;
-l4: L4 proxy instance.
     */
    public $Type;

    /**
     * @var array Instance detail. Valid values:
-When Type = l7, please enter the L7 acceleration domain.
-When Type = l4, please enter the L4 proxy instance ID.
     */
    public $Instances;

    /**
     * @var string Operation mode. Valid values:.
- enable: enabled L7/L4 instances.
- disable: disable L7/L4 instances.
     */
    public $OperationMode;

    /**
     * @param string $Type Instance type. Valid values:
-l7: L7 acceleration domain;
-l4: L4 proxy instance.
     * @param array $Instances Instance detail. Valid values:
-When Type = l7, please enter the L7 acceleration domain.
-When Type = l4, please enter the L4 proxy instance ID.
     * @param string $OperationMode Operation mode. Valid values:.
- enable: enabled L7/L4 instances.
- disable: disable L7/L4 instances.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = $param["Instances"];
        }

        if (array_key_exists("OperationMode",$param) and $param["OperationMode"] !== null) {
            $this->OperationMode = $param["OperationMode"];
        }
    }
}
