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
 * Resource specifications.
 *
 * @method string getSpecName() Obtain Resource name.
 * @method void setSpecName(string $SpecName) Set Resource name.
 * @method integer getCount() Obtain Resource count.
 * @method void setCount(integer $Count) Set Resource count.
 * @method CBSSpec getDiskSpec() Obtain Disk information.
 * @method void setDiskSpec(CBSSpec $DiskSpec) Set Disk information.
 * @method string getType() Obtain Resource type, DATA.
 * @method void setType(string $Type) Set Resource type, DATA.
 */
class ResourceSpecNew extends AbstractModel
{
    /**
     * @var string Resource name.
     */
    public $SpecName;

    /**
     * @var integer Resource count.
     */
    public $Count;

    /**
     * @var CBSSpec Disk information.
     */
    public $DiskSpec;

    /**
     * @var string Resource type, DATA.
     */
    public $Type;

    /**
     * @param string $SpecName Resource name.
     * @param integer $Count Resource count.
     * @param CBSSpec $DiskSpec Disk information.
     * @param string $Type Resource type, DATA.
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

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = new CBSSpec();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
