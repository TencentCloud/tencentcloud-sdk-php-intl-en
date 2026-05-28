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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the sales API. The return type is zone information.
 *
 * @method string getZone() Obtain <p>English string of Zone</p>
 * @method void setZone(string $Zone) Set <p>English string of Zone</p>
 * @method string getZoneName() Obtain <p>Zone Chinese character string</p>
 * @method void setZoneName(string $ZoneName) Set <p>Zone Chinese character string</p>
 * @method integer getEnable() Obtain <p>Whether to sell, 1: sell; 0: do not sell</p>
 * @method void setEnable(integer $Enable) Set <p>Whether to sell, 1: sell; 0: do not sell</p>
 * @method integer getIsDefaultMaster() Obtain <p>Whether the default primary AZ is used. 0 means no, 1 means yes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefaultMaster(integer $IsDefaultMaster) Set <p>Whether the default primary AZ is used. 0 means no, 1 means yes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAvailableDiskTypes() Obtain <p>Selectable disk types in availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableDiskTypes(array $AvailableDiskTypes) Set <p>Selectable disk types in availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSupportTypes() Obtain <p>Whether it is an exclusive availability zone</p>
 * @method void setSupportTypes(array $SupportTypes) Set <p>Whether it is an exclusive availability zone</p>
 * @method boolean getIsSupportServerless() Obtain <p>Whether serverless is supported</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) Set <p>Whether serverless is supported</p>
 */
class DescribeSaleZonesInfo extends AbstractModel
{
    /**
     * @var string <p>English string of Zone</p>
     */
    public $Zone;

    /**
     * @var string <p>Zone Chinese character string</p>
     */
    public $ZoneName;

    /**
     * @var integer <p>Whether to sell, 1: sell; 0: do not sell</p>
     */
    public $Enable;

    /**
     * @var integer <p>Whether the default primary AZ is used. 0 means no, 1 means yes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefaultMaster;

    /**
     * @var array <p>Selectable disk types in availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableDiskTypes;

    /**
     * @var array <p>Whether it is an exclusive availability zone</p>
     */
    public $SupportTypes;

    /**
     * @var boolean <p>Whether serverless is supported</p>
     */
    public $IsSupportServerless;

    /**
     * @param string $Zone <p>English string of Zone</p>
     * @param string $ZoneName <p>Zone Chinese character string</p>
     * @param integer $Enable <p>Whether to sell, 1: sell; 0: do not sell</p>
     * @param integer $IsDefaultMaster <p>Whether the default primary AZ is used. 0 means no, 1 means yes.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AvailableDiskTypes <p>Selectable disk types in availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SupportTypes <p>Whether it is an exclusive availability zone</p>
     * @param boolean $IsSupportServerless <p>Whether serverless is supported</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("IsDefaultMaster",$param) and $param["IsDefaultMaster"] !== null) {
            $this->IsDefaultMaster = $param["IsDefaultMaster"];
        }

        if (array_key_exists("AvailableDiskTypes",$param) and $param["AvailableDiskTypes"] !== null) {
            $this->AvailableDiskTypes = $param["AvailableDiskTypes"];
        }

        if (array_key_exists("SupportTypes",$param) and $param["SupportTypes"] !== null) {
            $this->SupportTypes = $param["SupportTypes"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
