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
 * Whether to use SCF (Serverless Cloud Function) as the backend service
 *
 * @method FunctionInfo getFunction() Obtain SCF related information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFunction(FunctionInfo $Function) Set SCF related information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Weight
 * @method void setWeight(integer $Weight) Set Weight
 */
class FunctionTarget extends AbstractModel
{
    /**
     * @var FunctionInfo SCF related information
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Function;

    /**
     * @var integer Weight
     */
    public $Weight;

    /**
     * @param FunctionInfo $Function SCF related information
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Weight Weight
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
        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = new FunctionInfo();
            $this->Function->deserialize($param["Function"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
