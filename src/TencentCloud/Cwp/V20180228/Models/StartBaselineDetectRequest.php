<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartBaselineDetect request structure.
 *
 * @method BaselineDetectParam getParam() Obtain Baseline detection parameter
 * @method void setParam(BaselineDetectParam $Param) Set Baseline detection parameter
 */
class StartBaselineDetectRequest extends AbstractModel
{
    /**
     * @var BaselineDetectParam Baseline detection parameter
     */
    public $Param;

    /**
     * @param BaselineDetectParam $Param Baseline detection parameter
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
        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = new BaselineDetectParam();
            $this->Param->deserialize($param["Param"]);
        }
    }
}
