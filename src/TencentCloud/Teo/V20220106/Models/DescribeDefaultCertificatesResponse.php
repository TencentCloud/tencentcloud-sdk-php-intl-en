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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefaultCertificates response structure.
 *
 * @method integer getTotalCount() Obtain Total number of certificates
 * @method void setTotalCount(integer $TotalCount) Set Total number of certificates
 * @method array getCertInfo() Obtain List of default certificates
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertInfo(array $CertInfo) Set List of default certificates
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDefaultCertificatesResponse extends AbstractModel
{
    /**
     * @var integer Total number of certificates
     */
    public $TotalCount;

    /**
     * @var array List of default certificates
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CertInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of certificates
     * @param array $CertInfo List of default certificates
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = [];
            foreach ($param["CertInfo"] as $key => $value){
                $obj = new DefaultServerCertInfo();
                $obj->deserialize($value);
                array_push($this->CertInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
