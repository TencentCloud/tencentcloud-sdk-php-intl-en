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
 * ModifyResourcePackagesDeductionPriority request structure.
 *
 * @method string getPackageType() Obtain Specifies the resource package type whose priority needs to be modified. CCU: compute resource package. DISK: storage resource package.
 * @method void setPackageType(string $PackageType) Set Specifies the resource package type whose priority needs to be modified. CCU: compute resource package. DISK: storage resource package.
 * @method string getClusterId() Obtain The modified deduction priority takes effect for which cynos resource.
 * @method void setClusterId(string $ClusterId) Set The modified deduction priority takes effect for which cynos resource.
 * @method array getDeductionPriorities() Obtain Resource package deduction priority.
 * @method void setDeductionPriorities(array $DeductionPriorities) Set Resource package deduction priority.
 */
class ModifyResourcePackagesDeductionPriorityRequest extends AbstractModel
{
    /**
     * @var string Specifies the resource package type whose priority needs to be modified. CCU: compute resource package. DISK: storage resource package.
     */
    public $PackageType;

    /**
     * @var string The modified deduction priority takes effect for which cynos resource.
     */
    public $ClusterId;

    /**
     * @var array Resource package deduction priority.
     */
    public $DeductionPriorities;

    /**
     * @param string $PackageType Specifies the resource package type whose priority needs to be modified. CCU: compute resource package. DISK: storage resource package.
     * @param string $ClusterId The modified deduction priority takes effect for which cynos resource.
     * @param array $DeductionPriorities Resource package deduction priority.
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DeductionPriorities",$param) and $param["DeductionPriorities"] !== null) {
            $this->DeductionPriorities = [];
            foreach ($param["DeductionPriorities"] as $key => $value){
                $obj = new PackagePriority();
                $obj->deserialize($value);
                array_push($this->DeductionPriorities, $obj);
            }
        }
    }
}
