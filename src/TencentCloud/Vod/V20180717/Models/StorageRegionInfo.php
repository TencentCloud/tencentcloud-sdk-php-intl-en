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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Storage region information
 *
 * @method string getRegion() Obtain Storage region.
 * @method void setRegion(string $Region) Set Storage region.
 * @method string getDescription() Obtain Store region description information.
 * @method void setDescription(string $Description) Set Store region description information.
 * @method string getStatus() Obtain Status. Whether it is enabled. Valid values:
<li>opened: enabled.</li>
<li>unopened: not activated.</li>
 * @method void setStatus(string $Status) Set Status. Whether it is enabled. Valid values:
<li>opened: enabled.</li>
<li>unopened: not activated.</li>
 * @method boolean getIsDefault() Obtain Whether it is the default storage region. true: yes; false: no.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default storage region. true: yes; false: no.
 * @method string getArea() Obtain Storage area. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
 * @method void setArea(string $Area) Set Storage area. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
 */
class StorageRegionInfo extends AbstractModel
{
    /**
     * @var string Storage region.
     */
    public $Region;

    /**
     * @var string Store region description information.
     */
    public $Description;

    /**
     * @var string Status. Whether it is enabled. Valid values:
<li>opened: enabled.</li>
<li>unopened: not activated.</li>
     */
    public $Status;

    /**
     * @var boolean Whether it is the default storage region. true: yes; false: no.
     */
    public $IsDefault;

    /**
     * @var string Storage area. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
     */
    public $Area;

    /**
     * @param string $Region Storage region.
     * @param string $Description Store region description information.
     * @param string $Status Status. Whether it is enabled. Valid values:
<li>opened: enabled.</li>
<li>unopened: not activated.</li>
     * @param boolean $IsDefault Whether it is the default storage region. true: yes; false: no.
     * @param string $Area Storage area. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
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
