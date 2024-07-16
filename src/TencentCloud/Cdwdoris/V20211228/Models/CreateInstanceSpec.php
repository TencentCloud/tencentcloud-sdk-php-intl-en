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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster specifications
 *
 * @method string getSpecName() Obtain Specification name
 * @method void setSpecName(string $SpecName) Set Specification name
 * @method integer getCount() Obtain Quantities
 * @method void setCount(integer $Count) Set Quantities
 * @method integer getDiskSize() Obtain Cloud disk size
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size
 */
class CreateInstanceSpec extends AbstractModel
{
    /**
     * @var string Specification name
     */
    public $SpecName;

    /**
     * @var integer Quantities
     */
    public $Count;

    /**
     * @var integer Cloud disk size
     */
    public $DiskSize;

    /**
     * @param string $SpecName Specification name
     * @param integer $Count Quantities
     * @param integer $DiskSize Cloud disk size
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
