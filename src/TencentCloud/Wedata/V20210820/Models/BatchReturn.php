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
 * Operation result
 *
 * @method boolean getResult() Obtain Execution Result
 * @method void setResult(boolean $Result) Set Execution Result
 * @method string getErrorDesc() Obtain Execution remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorDesc(string $ErrorDesc) Set Execution remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getErrorId() Obtain Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorId(string $ErrorId) Set Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BatchReturn extends AbstractModel
{
    /**
     * @var boolean Execution Result
     */
    public $Result;

    /**
     * @var string Execution remarks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorDesc;

    /**
     * @var string Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorId;

    /**
     * @param boolean $Result Execution Result
     * @param string $ErrorDesc Execution remarks
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ErrorId Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("ErrorId",$param) and $param["ErrorId"] !== null) {
            $this->ErrorId = $param["ErrorId"];
        }
    }
}
