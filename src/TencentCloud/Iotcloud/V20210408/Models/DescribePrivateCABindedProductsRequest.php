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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateCABindedProducts request structure.
 *
 * @method string getCertName() Obtain Certificate name
 * @method void setCertName(string $CertName) Set Certificate name
 * @method integer getOffset() Obtain Offset for query
 * @method void setOffset(integer $Offset) Set Offset for query
 * @method integer getLimit() Obtain Maximum number of records to return, which is 20 by default and cannot exceed 200
 * @method void setLimit(integer $Limit) Set Maximum number of records to return, which is 20 by default and cannot exceed 200
 */
class DescribePrivateCABindedProductsRequest extends AbstractModel
{
    /**
     * @var string Certificate name
     */
    public $CertName;

    /**
     * @var integer Offset for query
     */
    public $Offset;

    /**
     * @var integer Maximum number of records to return, which is 20 by default and cannot exceed 200
     */
    public $Limit;

    /**
     * @param string $CertName Certificate name
     * @param integer $Offset Offset for query
     * @param integer $Limit Maximum number of records to return, which is 20 by default and cannot exceed 200
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
