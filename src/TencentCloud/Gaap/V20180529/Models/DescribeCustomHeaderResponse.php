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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomHeader response structure.
 *
 * @method string getRuleId() Obtain Rule ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRuleId(string $RuleId) Set Rule ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getHeaders() Obtain List of custom headers
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setHeaders(array $Headers) Set List of custom headers
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCustomHeaderResponse extends AbstractModel
{
    /**
     * @var string Rule ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var array List of custom headers
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Headers;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $RuleId Rule ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Headers List of custom headers
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new HttpHeaderParam();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
