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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of resource specifications
 *
 * @method string getType() Obtain Node type.
 * @method void setType(string $Type) Set Node type.
 * @method string getSpecName() Obtain Model.


 * @method void setSpecName(string $SpecName) Set Model.


 * @method integer getCount() Obtain Number of nodes.
 * @method void setCount(integer $Count) Set Number of nodes.
 * @method CBSSpec getDiskSpec() Obtain Disk information.
 * @method void setDiskSpec(CBSSpec $DiskSpec) Set Disk information.
 */
class CNResourceSpec extends AbstractModel
{
    /**
     * @var string Node type.
     */
    public $Type;

    /**
     * @var string Model.


     */
    public $SpecName;

    /**
     * @var integer Number of nodes.
     */
    public $Count;

    /**
     * @var CBSSpec Disk information.
     */
    public $DiskSpec;

    /**
     * @param string $Type Node type.
     * @param string $SpecName Model.


     * @param integer $Count Number of nodes.
     * @param CBSSpec $DiskSpec Disk information.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = new CBSSpec();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }
    }
}
