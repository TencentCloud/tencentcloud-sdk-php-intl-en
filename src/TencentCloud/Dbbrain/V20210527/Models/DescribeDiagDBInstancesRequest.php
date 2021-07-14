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
 * DescribeDiagDBInstances request structure.
 *
 * @method boolean getIsSupported() Obtain Whether it is an instance supported by DBbrain. It is fixed to `true`.
 * @method void setIsSupported(boolean $IsSupported) Set Whether it is an instance supported by DBbrain. It is fixed to `true`.
 * @method string getProduct() Obtain Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
 * @method void setProduct(string $Product) Set Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
 * @method integer getOffset() Obtain Pagination parameter indicating the offset.
 * @method void setOffset(integer $Offset) Set Pagination parameter indicating the offset.
 * @method integer getLimit() Obtain Pagination parameter. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Pagination parameter. Maximum value: 100.
 * @method array getInstanceNames() Obtain Query by instance name.
 * @method void setInstanceNames(array $InstanceNames) Set Query by instance name.
 * @method array getInstanceIds() Obtain Query by instance ID.
 * @method void setInstanceIds(array $InstanceIds) Set Query by instance ID.
 * @method array getRegions() Obtain Query by region.
 * @method void setRegions(array $Regions) Set Query by region.
 */
class DescribeDiagDBInstancesRequest extends AbstractModel
{
    /**
     * @var boolean Whether it is an instance supported by DBbrain. It is fixed to `true`.
     */
    public $IsSupported;

    /**
     * @var string Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
     */
    public $Product;

    /**
     * @var integer Pagination parameter indicating the offset.
     */
    public $Offset;

    /**
     * @var integer Pagination parameter. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Query by instance name.
     */
    public $InstanceNames;

    /**
     * @var array Query by instance ID.
     */
    public $InstanceIds;

    /**
     * @var array Query by region.
     */
    public $Regions;

    /**
     * @param boolean $IsSupported Whether it is an instance supported by DBbrain. It is fixed to `true`.
     * @param string $Product Service type. Valid values: mysql (TencentDB for MySQL), cynosdb (TDSQL-C for MySQL). Default value: mysql.
     * @param integer $Offset Pagination parameter indicating the offset.
     * @param integer $Limit Pagination parameter. Maximum value: 100.
     * @param array $InstanceNames Query by instance name.
     * @param array $InstanceIds Query by instance ID.
     * @param array $Regions Query by region.
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
        if (array_key_exists("IsSupported",$param) and $param["IsSupported"] !== null) {
            $this->IsSupported = $param["IsSupported"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
