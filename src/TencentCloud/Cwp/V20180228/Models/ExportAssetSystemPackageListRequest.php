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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportAssetSystemPackageList request structure.
 *
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method array getFilters() Obtain Filter criteria
<li>Name - String - required: no - package name</li>
<li>StartTime - String - required: no - start time of installation</li>
<li>EndTime - String - required: no - end time of installation</li>
<li>Type- int - required: no - installation package type:
1:rpm
2:dpkg
3:java
4:system</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Name - String - required: no - package name</li>
<li>StartTime - String - required: no - start time of installation</li>
<li>EndTime - String - required: no - end time of installation</li>
<li>Type- int - required: no - installation package type:
1:rpm
2:dpkg
3:java
4:system</li>
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Optional sorting method: [FistTime|InstallTime: installation time]
 * @method void setBy(string $By) Set Optional sorting method: [FistTime|InstallTime: installation time]
 */
class ExportAssetSystemPackageListRequest extends AbstractModel
{
    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>Name - String - required: no - package name</li>
<li>StartTime - String - required: no - start time of installation</li>
<li>EndTime - String - required: no - end time of installation</li>
<li>Type- int - required: no - installation package type:
1:rpm
2:dpkg
3:java
4:system</li>
     */
    public $Filters;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Optional sorting method: [FistTime|InstallTime: installation time]
     */
    public $By;

    /**
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param array $Filters Filter criteria
<li>Name - String - required: no - package name</li>
<li>StartTime - String - required: no - start time of installation</li>
<li>EndTime - String - required: no - end time of installation</li>
<li>Type- int - required: no - installation package type:
1:rpm
2:dpkg
3:java
4:system</li>
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Optional sorting method: [FistTime|InstallTime: installation time]
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
