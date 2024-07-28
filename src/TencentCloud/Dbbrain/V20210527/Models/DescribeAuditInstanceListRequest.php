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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditInstanceList request structure.
 *
 * @method string getProduct() Obtain Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
 * @method void setProduct(string $Product) Set Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
 * @method string getNodeRequestType() Obtain Use the value of `Product` for this parameter, such as `dcdb` and `mariadb`.
 * @method void setNodeRequestType(string $NodeRequestType) Set Use the value of `Product` for this parameter, such as `dcdb` and `mariadb`.
 * @method integer getAuditSwitch() Obtain Audit status. Valid values: `0` (Not enabled), `1` (Enabled). Default value: `0`.
 * @method void setAuditSwitch(integer $AuditSwitch) Set Audit status. Valid values: `0` (Not enabled), `1` (Enabled). Default value: `0`.
 * @method integer getOffset() Obtain The offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set The offset. Default value: `0`.
 * @method integer getLimit() Obtain The number of queried items. Default value: `20`. Max value: `100`.
 * @method void setLimit(integer $Limit) Set The number of queried items. Default value: `20`. Max value: `100`.
 * @method array getFilters() Obtain Filters for querying instances
 * @method void setFilters(array $Filters) Set Filters for querying instances
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var string Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
     */
    public $Product;

    /**
     * @var string Use the value of `Product` for this parameter, such as `dcdb` and `mariadb`.
     */
    public $NodeRequestType;

    /**
     * @var integer Audit status. Valid values: `0` (Not enabled), `1` (Enabled). Default value: `0`.
     */
    public $AuditSwitch;

    /**
     * @var integer The offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer The number of queried items. Default value: `20`. Max value: `100`.
     */
    public $Limit;

    /**
     * @var array Filters for querying instances
     */
    public $Filters;

    /**
     * @param string $Product Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
     * @param string $NodeRequestType Use the value of `Product` for this parameter, such as `dcdb` and `mariadb`.
     * @param integer $AuditSwitch Audit status. Valid values: `0` (Not enabled), `1` (Enabled). Default value: `0`.
     * @param integer $Offset The offset. Default value: `0`.
     * @param integer $Limit The number of queried items. Default value: `20`. Max value: `100`.
     * @param array $Filters Filters for querying instances
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("NodeRequestType",$param) and $param["NodeRequestType"] !== null) {
            $this->NodeRequestType = $param["NodeRequestType"];
        }

        if (array_key_exists("AuditSwitch",$param) and $param["AuditSwitch"] !== null) {
            $this->AuditSwitch = $param["AuditSwitch"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AuditInstanceFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
