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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCSRSet request structure.
 *
 * @method integer getLimit() Obtain The number of CSRs on each page. The default value is 10, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set The number of CSRs on each page. The default value is 10, and the maximum value is 100.
 * @method integer getOffset() Obtain The pagination offset, starting from 0.	
 * @method void setOffset(integer $Offset) Set The pagination offset, starting from 0.	
 * @method string getDomain() Obtain The domain for CSR filtering
 * @method void setDomain(string $Domain) Set The domain for CSR filtering
 * @method string getEncryptAlgo() Obtain The encryption algorithm for CSR filtering
 * @method void setEncryptAlgo(string $EncryptAlgo) Set The encryption algorithm for CSR filtering
 */
class DescribeCSRSetRequest extends AbstractModel
{
    /**
     * @var integer The number of CSRs on each page. The default value is 10, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer The pagination offset, starting from 0.	
     */
    public $Offset;

    /**
     * @var string The domain for CSR filtering
     */
    public $Domain;

    /**
     * @var string The encryption algorithm for CSR filtering
     */
    public $EncryptAlgo;

    /**
     * @param integer $Limit The number of CSRs on each page. The default value is 10, and the maximum value is 100.
     * @param integer $Offset The pagination offset, starting from 0.	
     * @param string $Domain The domain for CSR filtering
     * @param string $EncryptAlgo The encryption algorithm for CSR filtering
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("EncryptAlgo",$param) and $param["EncryptAlgo"] !== null) {
            $this->EncryptAlgo = $param["EncryptAlgo"];
        }
    }
}
