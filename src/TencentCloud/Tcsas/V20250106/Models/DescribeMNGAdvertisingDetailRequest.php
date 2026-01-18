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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMNGAdvertisingDetail request structure.
 *
 * @method string getTimeBegin() Obtain Start time in YYYYMMDD format
 * @method void setTimeBegin(string $TimeBegin) Set Start time in YYYYMMDD format
 * @method string getMNPId() Obtain Mini program appid
 * @method void setMNPId(string $MNPId) Set Mini program appid
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method string getTimeEnd() Obtain End time in YYYYMMDD format
 * @method void setTimeEnd(string $TimeEnd) Set End time in YYYYMMDD format
 * @method string getAdUnitType() Obtain //1-BANNER  2-REWARDED
 * @method void setAdUnitType(string $AdUnitType) Set //1-BANNER  2-REWARDED
 * @method integer getPlatform() Obtain // 2 Android, 3 iOS
 * @method void setPlatform(integer $Platform) Set // 2 Android, 3 iOS
 */
class DescribeMNGAdvertisingDetailRequest extends AbstractModel
{
    /**
     * @var string Start time in YYYYMMDD format
     */
    public $TimeBegin;

    /**
     * @var string Mini program appid
     */
    public $MNPId;

    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var string End time in YYYYMMDD format
     */
    public $TimeEnd;

    /**
     * @var string //1-BANNER  2-REWARDED
     */
    public $AdUnitType;

    /**
     * @var integer // 2 Android, 3 iOS
     */
    public $Platform;

    /**
     * @param string $TimeBegin Start time in YYYYMMDD format
     * @param string $MNPId Mini program appid
     * @param string $PlatformId Tenant ID
     * @param string $TimeEnd End time in YYYYMMDD format
     * @param string $AdUnitType //1-BANNER  2-REWARDED
     * @param integer $Platform // 2 Android, 3 iOS
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
        if (array_key_exists("TimeBegin",$param) and $param["TimeBegin"] !== null) {
            $this->TimeBegin = $param["TimeBegin"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("TimeEnd",$param) and $param["TimeEnd"] !== null) {
            $this->TimeEnd = $param["TimeEnd"];
        }

        if (array_key_exists("AdUnitType",$param) and $param["AdUnitType"] !== null) {
            $this->AdUnitType = $param["AdUnitType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
