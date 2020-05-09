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
 * ListVersionByFunction response structure.
 *
 * @method array getFunctionVersion() Obtain Function version
 * @method void setFunctionVersion(array $FunctionVersion) Set Function version
 * @method array getVersions() Obtain Function version list
Note: This field may return null, indicating that no valid values is found.
 * @method void setVersions(array $Versions) Set Function version list
Note: This field may return null, indicating that no valid values is found.
 * @method integer getTotalCount() Obtain Total number of function versions
Note: This field may return null, indicating that no valid value was found.
 * @method void setTotalCount(integer $TotalCount) Set Total number of function versions
Note: This field may return null, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListVersionByFunctionResponse extends AbstractModel
{
    /**
     * @var array Function version
     */
    public $FunctionVersion;

    /**
     * @var array Function version list
Note: This field may return null, indicating that no valid values is found.
     */
    public $Versions;

    /**
     * @var integer Total number of function versions
Note: This field may return null, indicating that no valid value was found.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $FunctionVersion Function version
     * @param array $Versions Function version list
Note: This field may return null, indicating that no valid values is found.
     * @param integer $TotalCount Total number of function versions
Note: This field may return null, indicating that no valid value was found.
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

        if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
            $this->Versions = [];
            foreach ($param["Versions"] as $key => $value){
                $obj = new FunctionVersion();
                $obj->deserialize($value);
                array_push($this->Versions, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
