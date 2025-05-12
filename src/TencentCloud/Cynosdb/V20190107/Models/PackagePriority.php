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
 * Resource package deduction priority.
 *
 * @method string getPackageId() Obtain The resource pack whose deduction priority needs to be customized.
 * @method void setPackageId(string $PackageId) Set The resource pack whose deduction priority needs to be customized.
 * @method integer getDeductionPriority() Obtain Custom deduction priority.
 * @method void setDeductionPriority(integer $DeductionPriority) Set Custom deduction priority.
 */
class PackagePriority extends AbstractModel
{
    /**
     * @var string The resource pack whose deduction priority needs to be customized.
     */
    public $PackageId;

    /**
     * @var integer Custom deduction priority.
     */
    public $DeductionPriority;

    /**
     * @param string $PackageId The resource pack whose deduction priority needs to be customized.
     * @param integer $DeductionPriority Custom deduction priority.
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("DeductionPriority",$param) and $param["DeductionPriority"] !== null) {
            $this->DeductionPriority = $param["DeductionPriority"];
        }
    }
}
