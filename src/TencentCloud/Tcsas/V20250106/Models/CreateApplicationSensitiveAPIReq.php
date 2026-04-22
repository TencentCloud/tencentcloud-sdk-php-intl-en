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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The request to add a sensitive API
 *
 * @method string getAPIName() Obtain <p>API name</p>
 * @method void setAPIName(string $APIName) Set <p>API name</p>
 * @method string getAPIDesc() Obtain <p>API description</p>
 * @method void setAPIDesc(string $APIDesc) Set <p>API description</p>
 * @method integer getAPIType() Obtain <p>API type. Valid values: 1: System; 2: Custom</p>
 * @method void setAPIType(integer $APIType) Set <p>API type. Valid values: 1: System; 2: Custom</p>
 * @method integer getUseScope() Obtain <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Universal</p>
 * @method void setUseScope(integer $UseScope) Set <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Universal</p>
 */
class CreateApplicationSensitiveAPIReq extends AbstractModel
{
    /**
     * @var string <p>API name</p>
     */
    public $APIName;

    /**
     * @var string <p>API description</p>
     */
    public $APIDesc;

    /**
     * @var integer <p>API type. Valid values: 1: System; 2: Custom</p>
     */
    public $APIType;

    /**
     * @var integer <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Universal</p>
     */
    public $UseScope;

    /**
     * @param string $APIName <p>API name</p>
     * @param string $APIDesc <p>API description</p>
     * @param integer $APIType <p>API type. Valid values: 1: System; 2: Custom</p>
     * @param integer $UseScope <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Universal</p>
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
        if (array_key_exists("APIName",$param) and $param["APIName"] !== null) {
            $this->APIName = $param["APIName"];
        }

        if (array_key_exists("APIDesc",$param) and $param["APIDesc"] !== null) {
            $this->APIDesc = $param["APIDesc"];
        }

        if (array_key_exists("APIType",$param) and $param["APIType"] !== null) {
            $this->APIType = $param["APIType"];
        }

        if (array_key_exists("UseScope",$param) and $param["UseScope"] !== null) {
            $this->UseScope = $param["UseScope"];
        }
    }
}
