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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis transaction type complex type
 *
 * @method string getActionType() Obtain Transaction type codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionType(string $ActionType) Set Transaction type codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionTypeName() Obtain Transaction type nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type nameNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseActionTypeDetail extends AbstractModel
{
    /**
     * @var string Transaction type codeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionType;

    /**
     * @var string Transaction type nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionTypeName;

    /**
     * @param string $ActionType Transaction type codeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionTypeName Transaction type nameNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }
    }
}
