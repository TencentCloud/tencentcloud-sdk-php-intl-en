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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a storage region.
 *
 * @method string getRegion() Obtain The storage region.
 * @method void setRegion(string $Region) Set The storage region.
 * @method string getDescription() Obtain The description of the storage region.
 * @method void setDescription(string $Description) Set The description of the storage region.
 * @method string getStatus() Obtain Whether storage is enabled in the region. Valid values:
<li>opened: Enabled</li>
<li>unopened: Not enabled</li>
 * @method void setStatus(string $Status) Set Whether storage is enabled in the region. Valid values:
<li>opened: Enabled</li>
<li>unopened: Not enabled</li>
 * @method boolean getIsDefault() Obtain Whether the region is the default storage region. Valid values: true, false.
 * @method void setIsDefault(boolean $IsDefault) Set Whether the region is the default storage region. Valid values: true, false.
 * @method string getArea() Obtain Whether the storage region is inside or outside the Chinese mainland. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
 * @method void setArea(string $Area) Set Whether the storage region is inside or outside the Chinese mainland. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
 */
class StorageRegionInfo extends AbstractModel
{
    /**
     * @var string The storage region.
     */
    public $Region;

    /**
     * @var string The description of the storage region.
     */
    public $Description;

    /**
     * @var string Whether storage is enabled in the region. Valid values:
<li>opened: Enabled</li>
<li>unopened: Not enabled</li>
     */
    public $Status;

    /**
     * @var boolean Whether the region is the default storage region. Valid values: true, false.
     */
    public $IsDefault;

    /**
     * @var string Whether the storage region is inside or outside the Chinese mainland. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
     */
    public $Area;

    /**
     * @param string $Region The storage region.
     * @param string $Description The description of the storage region.
     * @param string $Status Whether storage is enabled in the region. Valid values:
<li>opened: Enabled</li>
<li>unopened: Not enabled</li>
     * @param boolean $IsDefault Whether the region is the default storage region. Valid values: true, false.
     * @param string $Area Whether the storage region is inside or outside the Chinese mainland. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
