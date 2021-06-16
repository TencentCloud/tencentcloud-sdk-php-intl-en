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
 * VOD storage usage by region.
 *
 * @method string getArea() Obtain VOD storage billing region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
 * @method void setArea(string $Area) Set VOD storage billing region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
 * @method integer getTotalStorage() Obtain Current total storage capacity in bytes.
 * @method void setTotalStorage(integer $TotalStorage) Set Current total storage capacity in bytes.
 * @method integer getInfrequentStorage() Obtain Current STANDARD_IA storage capacity in bytes.
 * @method void setInfrequentStorage(integer $InfrequentStorage) Set Current STANDARD_IA storage capacity in bytes.
 * @method integer getStandardStorage() Obtain Current STANDARD storage capacity in bytes.
 * @method void setStandardStorage(integer $StandardStorage) Set Current STANDARD storage capacity in bytes.
 * @method integer getArchiveStorage() Obtain Current ARCHIVE storage usage in bytes
 * @method void setArchiveStorage(integer $ArchiveStorage) Set Current ARCHIVE storage usage in bytes
 * @method integer getDeepArchiveStorage() Obtain Current DEEP ARCHIVE storage usage in bytes
 * @method void setDeepArchiveStorage(integer $DeepArchiveStorage) Set Current DEEP ARCHIVE storage usage in bytes
 */
class StorageStatData extends AbstractModel
{
    /**
     * @var string VOD storage billing region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
     */
    public $Area;

    /**
     * @var integer Current total storage capacity in bytes.
     */
    public $TotalStorage;

    /**
     * @var integer Current STANDARD_IA storage capacity in bytes.
     */
    public $InfrequentStorage;

    /**
     * @var integer Current STANDARD storage capacity in bytes.
     */
    public $StandardStorage;

    /**
     * @var integer Current ARCHIVE storage usage in bytes
     */
    public $ArchiveStorage;

    /**
     * @var integer Current DEEP ARCHIVE storage usage in bytes
     */
    public $DeepArchiveStorage;

    /**
     * @param string $Area VOD storage billing region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
     * @param integer $TotalStorage Current total storage capacity in bytes.
     * @param integer $InfrequentStorage Current STANDARD_IA storage capacity in bytes.
     * @param integer $StandardStorage Current STANDARD storage capacity in bytes.
     * @param integer $ArchiveStorage Current ARCHIVE storage usage in bytes
     * @param integer $DeepArchiveStorage Current DEEP ARCHIVE storage usage in bytes
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("TotalStorage",$param) and $param["TotalStorage"] !== null) {
            $this->TotalStorage = $param["TotalStorage"];
        }

        if (array_key_exists("InfrequentStorage",$param) and $param["InfrequentStorage"] !== null) {
            $this->InfrequentStorage = $param["InfrequentStorage"];
        }

        if (array_key_exists("StandardStorage",$param) and $param["StandardStorage"] !== null) {
            $this->StandardStorage = $param["StandardStorage"];
        }

        if (array_key_exists("ArchiveStorage",$param) and $param["ArchiveStorage"] !== null) {
            $this->ArchiveStorage = $param["ArchiveStorage"];
        }

        if (array_key_exists("DeepArchiveStorage",$param) and $param["DeepArchiveStorage"] !== null) {
            $this->DeepArchiveStorage = $param["DeepArchiveStorage"];
        }
    }
}
