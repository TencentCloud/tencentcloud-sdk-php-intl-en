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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveDomainCertBindings response structure.
 *
 * @method array getMismatchedDomainNames() Obtain The domains skipped due to certificate mismatch.
 * @method void setMismatchedDomainNames(array $MismatchedDomainNames) Set The domains skipped due to certificate mismatch.
 * @method array getErrors() Obtain The domains that the API failed to bind, including those in `MismatchedDomainNames`, and the error information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set The domains that the API failed to bind, including those in `MismatchedDomainNames`, and the error information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyLiveDomainCertBindingsResponse extends AbstractModel
{
    /**
     * @var array The domains skipped due to certificate mismatch.
     */
    public $MismatchedDomainNames;

    /**
     * @var array The domains that the API failed to bind, including those in `MismatchedDomainNames`, and the error information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $MismatchedDomainNames The domains skipped due to certificate mismatch.
     * @param array $Errors The domains that the API failed to bind, including those in `MismatchedDomainNames`, and the error information.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MismatchedDomainNames",$param) and $param["MismatchedDomainNames"] !== null) {
            $this->MismatchedDomainNames = $param["MismatchedDomainNames"];
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new BatchDomainOperateErrors();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
