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
 * @method array getCertificateSet() 获取Server certificate list, which includes certificate ID and certificate name.
 * @method void setCertificateSet(array $CertificateSet) 设置Server certificate list, which includes certificate ID and certificate name.
 * @method integer getTotalCount() 获取Total quantity of server certificates that match the query conditions.
 * @method void setTotalCount(integer $TotalCount) 设置Total quantity of server certificates that match the query conditions.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeCertificates response structure.
 */
class DescribeCertificatesResponse extends AbstractModel
{
    /**
     * @var array Server certificate list, which includes certificate ID and certificate name.
     */
    public $CertificateSet;

    /**
     * @var integer Total quantity of server certificates that match the query conditions.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $CertificateSet Server certificate list, which includes certificate ID and certificate name.
     * @param integer $TotalCount Total quantity of server certificates that match the query conditions.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CertificateSet",$param) and $param["CertificateSet"] !== null) {
            $this->CertificateSet = [];
            foreach ($param["CertificateSet"] as $key => $value){
                $obj = new Certificate();
                $obj->deserialize($value);
                array_push($this->CertificateSet, $obj);
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
