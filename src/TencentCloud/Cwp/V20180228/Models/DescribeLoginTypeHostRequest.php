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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoginTypeHost request structure.
 *
 * @method array getFilters() Obtain <li>Name - string - Required: No - Host name</li> <li>InstanceId - string - Required: No - Instance ID</li> <li>PublicIp - string - Required: No - Public IP address</li> <li>PrivateIp - string - Required: No - Private IP</li>
 * @method void setFilters(array $Filters) Set <li>Name - string - Required: No - Host name</li> <li>InstanceId - string - Required: No - Instance ID</li> <li>PublicIp - string - Required: No - Public IP address</li> <li>PrivateIp - string - Required: No - Private IP</li>
 * @method integer getLimit() Obtain <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method string getOrder() Obtain <p>Sort order: [ASC: ascending, DESC: descending]</p>
 * @method void setOrder(string $Order) Set <p>Sort order: [ASC: ascending, DESC: descending]</p>
 * @method string getBy() Obtain <p>Optional sorting column: [Id]</p>
 * @method void setBy(string $By) Set <p>Optional sorting column: [Id]</p>
 */
class DescribeLoginTypeHostRequest extends AbstractModel
{
    /**
     * @var array <li>Name - string - Required: No - Host name</li> <li>InstanceId - string - Required: No - Instance ID</li> <li>PublicIp - string - Required: No - Public IP address</li> <li>PrivateIp - string - Required: No - Private IP</li>
     */
    public $Filters;

    /**
     * @var integer <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sort order: [ASC: ascending, DESC: descending]</p>
     */
    public $Order;

    /**
     * @var string <p>Optional sorting column: [Id]</p>
     */
    public $By;

    /**
     * @param array $Filters <li>Name - string - Required: No - Host name</li> <li>InstanceId - string - Required: No - Instance ID</li> <li>PublicIp - string - Required: No - Public IP address</li> <li>PrivateIp - string - Required: No - Private IP</li>
     * @param integer $Limit <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param string $Order <p>Sort order: [ASC: ascending, DESC: descending]</p>
     * @param string $By <p>Optional sorting column: [Id]</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
