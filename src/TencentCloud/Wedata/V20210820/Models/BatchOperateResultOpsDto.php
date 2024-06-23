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
 * Instance Batch Operation Result Class
 *
 * @method boolean getResult() Obtain ResultNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setResult(boolean $Result) Set ResultNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getErrorId() Obtain Error ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorId(string $ErrorId) Set Error ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getErrorDesc() Obtain Error Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorDesc(string $ErrorDesc) Set Error Description
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BatchOperateResultOpsDto extends AbstractModel
{
    /**
     * @var boolean ResultNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Result;

    /**
     * @var string Error ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorId;

    /**
     * @var string Error Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorDesc;

    /**
     * @param boolean $Result ResultNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ErrorId Error ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ErrorDesc Error Description
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

        if (array_key_exists("ErrorId",$param) and $param["ErrorId"] !== null) {
            $this->ErrorId = $param["ErrorId"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }
    }
}
