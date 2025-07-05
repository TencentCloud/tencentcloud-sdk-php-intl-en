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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryPolicy response structure.
 *
 * @method integer getId() Obtain The policy index.
 * @method void setId(integer $Id) Set The policy index.
 * @method integer getPolicyId() Obtain The policy ID.
 * @method void setPolicyId(integer $PolicyId) Set The policy ID.
 * @method integer getCptId() Obtain The claim protocol type (CPT) ID.
 * @method void setCptId(integer $CptId) Set The claim protocol type (CPT) ID.
 * @method string getPolicyData() Obtain The content of the policy.
 * @method void setPolicyData(string $PolicyData) Set The content of the policy.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class QueryPolicyResponse extends AbstractModel
{
    /**
     * @var integer The policy index.
     */
    public $Id;

    /**
     * @var integer The policy ID.
     */
    public $PolicyId;

    /**
     * @var integer The claim protocol type (CPT) ID.
     */
    public $CptId;

    /**
     * @var string The content of the policy.
     */
    public $PolicyData;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Id The policy index.
     * @param integer $PolicyId The policy ID.
     * @param integer $CptId The claim protocol type (CPT) ID.
     * @param string $PolicyData The content of the policy.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }

        if (array_key_exists("PolicyData",$param) and $param["PolicyData"] !== null) {
            $this->PolicyData = $param["PolicyData"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
