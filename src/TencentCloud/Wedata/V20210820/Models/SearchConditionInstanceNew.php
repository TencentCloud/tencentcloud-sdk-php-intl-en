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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Search condition
 *
 * @method string getExecutionSpace() Obtain Execution space, optional 
 "DRY_RUN"
 * @method void setExecutionSpace(string $ExecutionSpace) Set Execution space, optional 
 "DRY_RUN"
 * @method string getProductName() Obtain Business Products, options: <DATA_DEV / DATA_QUALITY / DATA_INTEGRATION, default DATA_DEV. Non-empty. Default own project
 * @method void setProductName(string $ProductName) Set Business Products, options: <DATA_DEV / DATA_QUALITY / DATA_INTEGRATION, default DATA_DEV. Non-empty. Default own project
 * @method string getResourceGroup() Obtain Resource Group Information, optional
 * @method void setResourceGroup(string $ResourceGroup) Set Resource Group Information, optional
 */
class SearchConditionInstanceNew extends AbstractModel
{
    /**
     * @var string Execution space, optional 
 "DRY_RUN"
     */
    public $ExecutionSpace;

    /**
     * @var string Business Products, options: <DATA_DEV / DATA_QUALITY / DATA_INTEGRATION, default DATA_DEV. Non-empty. Default own project
     */
    public $ProductName;

    /**
     * @var string Resource Group Information, optional
     */
    public $ResourceGroup;

    /**
     * @param string $ExecutionSpace Execution space, optional 
 "DRY_RUN"
     * @param string $ProductName Business Products, options: <DATA_DEV / DATA_QUALITY / DATA_INTEGRATION, default DATA_DEV. Non-empty. Default own project
     * @param string $ResourceGroup Resource Group Information, optional
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
        if (array_key_exists("ExecutionSpace",$param) and $param["ExecutionSpace"] !== null) {
            $this->ExecutionSpace = $param["ExecutionSpace"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }
    }
}
