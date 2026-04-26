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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product filter list
 *
 * @method string getBusinessCode() Obtain Product code


 * @method void setBusinessCode(string $BusinessCode) Set Product code


 * @method string getBusinessCodeName() Obtain Product name: Various cloud products purchased by users
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: Various cloud products purchased by users
 */
class BillBusiness extends AbstractModel
{
    /**
     * @var string Product code


     */
    public $BusinessCode;

    /**
     * @var string Product name: Various cloud products purchased by users
     */
    public $BusinessCodeName;

    /**
     * @param string $BusinessCode Product code


     * @param string $BusinessCodeName Product name: Various cloud products purchased by users
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }
    }
}
