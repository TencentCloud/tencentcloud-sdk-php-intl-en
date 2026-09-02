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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Products about to expire
 *
 * @method string getProductId() Obtain <p>Product ID</p>
 * @method void setProductId(string $ProductId) Set <p>Product ID</p>
 * @method string getProductName() Obtain <p>Product name.</p>
 * @method void setProductName(string $ProductName) Set <p>Product name.</p>
 * @method integer getDaysToExpire() Obtain <p>Days until expiration<br>Unit: day</p>
 * @method void setDaysToExpire(integer $DaysToExpire) Set <p>Days until expiration<br>Unit: day</p>
 * @method string getExpireTime() Obtain <p>Expiration time</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiration time</p>
 */
class ExpiringProduct extends AbstractModel
{
    /**
     * @var string <p>Product ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>Product name.</p>
     */
    public $ProductName;

    /**
     * @var integer <p>Days until expiration<br>Unit: day</p>
     */
    public $DaysToExpire;

    /**
     * @var string <p>Expiration time</p>
     */
    public $ExpireTime;

    /**
     * @param string $ProductId <p>Product ID</p>
     * @param string $ProductName <p>Product name.</p>
     * @param integer $DaysToExpire <p>Days until expiration<br>Unit: day</p>
     * @param string $ExpireTime <p>Expiration time</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("DaysToExpire",$param) and $param["DaysToExpire"] !== null) {
            $this->DaysToExpire = $param["DaysToExpire"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
