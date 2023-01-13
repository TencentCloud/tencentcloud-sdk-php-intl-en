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
 * ModifyDiagDBInstanceConf request structure.
 *
 * @method InstanceConfs getInstanceConfs() Obtain Instance configuration, including inspection and overview switch.
 * @method void setInstanceConfs(InstanceConfs $InstanceConfs) Set Instance configuration, including inspection and overview switch.
 * @method string getRegions() Obtain Target regions of the request. If the value is `All`, it is applied to all regions.
 * @method void setRegions(string $Regions) Set Target regions of the request. If the value is `All`, it is applied to all regions.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL).
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL).
 * @method array getInstanceIds() Obtain ID of the instance to modify.
 * @method void setInstanceIds(array $InstanceIds) Set ID of the instance to modify.
 */
class ModifyDiagDBInstanceConfRequest extends AbstractModel
{
    /**
     * @var InstanceConfs Instance configuration, including inspection and overview switch.
     */
    public $InstanceConfs;

    /**
     * @var string Target regions of the request. If the value is `All`, it is applied to all regions.
     */
    public $Regions;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL).
     */
    public $Product;

    /**
     * @var array ID of the instance to modify.
     */
    public $InstanceIds;

    /**
     * @param InstanceConfs $InstanceConfs Instance configuration, including inspection and overview switch.
     * @param string $Regions Target regions of the request. If the value is `All`, it is applied to all regions.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL).
     * @param array $InstanceIds ID of the instance to modify.
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
        if (array_key_exists("InstanceConfs",$param) and $param["InstanceConfs"] !== null) {
            $this->InstanceConfs = new InstanceConfs();
            $this->InstanceConfs->deserialize($param["InstanceConfs"]);
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
