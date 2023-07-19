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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PublishVersion response structure.
 *
 * @method string getFunctionVersion() Obtain Function version
 * @method void setFunctionVersion(string $FunctionVersion) Set Function version
 * @method integer getCodeSize() Obtain Code size
 * @method void setCodeSize(integer $CodeSize) Set Code size
 * @method integer getMemorySize() Obtain Maximum available memory
 * @method void setMemorySize(integer $MemorySize) Set Maximum available memory
 * @method string getDescription() Obtain Function description
 * @method void setDescription(string $Description) Set Function description
 * @method string getHandler() Obtain Function entry
 * @method void setHandler(string $Handler) Set Function entry
 * @method integer getTimeout() Obtain Function timeout
 * @method void setTimeout(integer $Timeout) Set Function timeout
 * @method string getRuntime() Obtain Function running environment 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setRuntime(string $Runtime) Set Function running environment 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class PublishVersionResponse extends AbstractModel
{
    /**
     * @var string Function version
     */
    public $FunctionVersion;

    /**
     * @var integer Code size
     */
    public $CodeSize;

    /**
     * @var integer Maximum available memory
     */
    public $MemorySize;

    /**
     * @var string Function description
     */
    public $Description;

    /**
     * @var string Function entry
     */
    public $Handler;

    /**
     * @var integer Function timeout
     */
    public $Timeout;

    /**
     * @var string Function running environment 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Runtime;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $FunctionVersion Function version
     * @param integer $CodeSize Code size
     * @param integer $MemorySize Maximum available memory
     * @param string $Description Function description
     * @param string $Handler Function entry
     * @param integer $Timeout Function timeout
     * @param string $Runtime Function running environment 
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Function namespace
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("CodeSize",$param) and $param["CodeSize"] !== null) {
            $this->CodeSize = $param["CodeSize"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
