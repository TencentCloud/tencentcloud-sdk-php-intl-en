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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SuspendResumeDataEngine request structure.
 *
 * @method string getDataEngineName() Obtain The name of a virtual cluster.
 * @method void setDataEngineName(string $DataEngineName) Set The name of a virtual cluster.
 * @method string getOperate() Obtain The operation type: `suspend` or `resume`.
 * @method void setOperate(string $Operate) Set The operation type: `suspend` or `resume`.
 */
class SuspendResumeDataEngineRequest extends AbstractModel
{
    /**
     * @var string The name of a virtual cluster.
     */
    public $DataEngineName;

    /**
     * @var string The operation type: `suspend` or `resume`.
     */
    public $Operate;

    /**
     * @param string $DataEngineName The name of a virtual cluster.
     * @param string $Operate The operation type: `suspend` or `resume`.
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }
    }
}
