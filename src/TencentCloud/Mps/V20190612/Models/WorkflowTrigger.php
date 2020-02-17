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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() Obtain Trigger type. Only `CosFileUpload` is supported currently.
 * @method void setType(string $Type) Set Trigger type. Only `CosFileUpload` is supported currently.
 * @method CosFileUploadTrigger getCosFileUploadTrigger() Obtain This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosFileUploadTrigger(CosFileUploadTrigger $CosFileUploadTrigger) Set This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Input rule. If an uploaded video hits the rule, the workflow will be triggered.
 */
class WorkflowTrigger extends AbstractModel
{
    /**
     * @var string Trigger type. Only `CosFileUpload` is supported currently.
     */
    public $Type;

    /**
     * @var CosFileUploadTrigger This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosFileUploadTrigger;
    /**
     * @param string $Type Trigger type. Only `CosFileUpload` is supported currently.
     * @param CosFileUploadTrigger $CosFileUploadTrigger This parameter is required and valid when `Type` is `CosFileUpload`, indicating the COS trigger rule.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CosFileUploadTrigger",$param) and $param["CosFileUploadTrigger"] !== null) {
            $this->CosFileUploadTrigger = new CosFileUploadTrigger();
            $this->CosFileUploadTrigger->deserialize($param["CosFileUploadTrigger"]);
        }
    }
}
