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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource information.
 *
 * @method string getSpecName() Obtain Resource name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecName(string $SpecName) Set Resource name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Resource count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Resource count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CBSSpecInfo getDiskSpec() Obtain Disk information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSpec(CBSSpecInfo $DiskSpec) Set Disk information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var string Resource name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecName;

    /**
     * @var integer Resource count.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var CBSSpecInfo Disk information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSpec;

    /**
     * @var string Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @param string $SpecName Resource name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Resource count.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CBSSpecInfo $DiskSpec Disk information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Node type. Valid values: cn and dn.
Note: This field may return null, indicating that no valid values can be obtained.
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
            $this->DiskSpec = new CBSSpecInfo();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
