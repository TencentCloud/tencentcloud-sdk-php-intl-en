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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiagDBInstanceConf request structure.
 *
 * @method InstanceConfs getInstanceConfs() Obtain Inspection switch.
 * @method void setInstanceConfs(InstanceConfs $InstanceConfs) Set Inspection switch.
 * @method string getRegions() Obtain The effective instance region. If the value is "All", it means it is effective for the whole region.
 * @method void setRegions(string $Regions) Set The effective instance region. If the value is "All", it means it is effective for the whole region.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
 * @method array getInstanceIds() Obtain Specify the instance ID that needs to modify the inspection status.
 * @method void setInstanceIds(array $InstanceIds) Set Specify the instance ID that needs to modify the inspection status.
 */
class ModifyDiagDBInstanceConfRequest extends AbstractModel
{
    /**
     * @var InstanceConfs Inspection switch.
     */
    public $InstanceConfs;

    /**
     * @var string The effective instance region. If the value is "All", it means it is effective for the whole region.
     */
    public $Regions;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
     */
    public $Product;

    /**
     * @var array Specify the instance ID that needs to modify the inspection status.
     */
    public $InstanceIds;

    /**
     * @param InstanceConfs $InstanceConfs Inspection switch.
     * @param string $Regions The effective instance region. If the value is "All", it means it is effective for the whole region.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
     * @param array $InstanceIds Specify the instance ID that needs to modify the inspection status.
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
