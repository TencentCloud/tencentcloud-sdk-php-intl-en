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
 * Cost analysis product return complex type
 *
 * @method string getBusinessCode() Obtain Product codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessCode(string $BusinessCode) Set Product codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessCodeName() Obtain Product nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product nameNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseBusinessDetail extends AbstractModel
{
    /**
     * @var string Product codeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessCode;

    /**
     * @var string Product nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessCodeName;

    /**
     * @param string $BusinessCode Product codeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessCodeName Product nameNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }
    }
}
